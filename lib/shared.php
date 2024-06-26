<?php
namespace LGO;
require_once __DIR__.'/../vendor/autoload.php';

function b64_url($rv) {
	$rv = base64_encode($rv);
	$rv = trim($rv, '=');
	$rv = str_replace('+', 'z', $rv);
	$rv = str_replace('/', 'Z', $rv);
	return $rv;
}

function json_encode_vb($v, $o=0) {
	$rv = json_encode($v, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | $o);
	if ($o & JSON_PRETTY_PRINT) {
		$rv = str_replace('    ', '  ', $rv);
	}
	return $rv;
}

function json_encode_num($v, $o=0) {
	$rv = json_encode($v, JSON_NUMERIC_CHECK | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | $o);
	if ($o & JSON_PRETTY_PRINT) {
		$rv = str_replace('    ', '  ', $rv);
	}
	return $rv;
}

function make_session_token() {
	$id = random_bytes(30);
	$id = b64_url($id);
	return $id;
}

function txt_store_array($txts) {
	foreach ($txts as $k => $v) {
		$txts[$k] = txt_store($v);
	}
	return $txts;
}

function txt_store($txt) {
	if (is_array($txt)) {
		return txt_store_array($txt);
	}

	// Don't trim, as that would corrupt request data

	$size = strlen($txt);
	$hash = trim(base64_encode(sha1($txt, true)), '=');

	$db = \lg_mysql();
	//$db->begin_transaction();
	$query = "SELECT txt_id FROM lgo_texts WHERE txt_size = {$size} AND txt_hash = ".\lg_qn($hash);
	$id = $db->query($query);

	if ($id && $id->num_rows) {
		$id = $id->fetch_assoc()['txt_id'];
	}
	else {
		$query = "INSERT INTO lgo_texts (txt_size, txt_hash, txt_text) VALUES ({$size}, ".\lg_qn($hash).", ".\lg_qn($txt).")";
		$db->query($query);
		$id = $db->insert_id;
	}

	//$db->commit();
	return intval($id);
}

function ip2binary($ip) {
	$rv = inet_pton($ip);
	if (strlen($rv) == 4) {
		$rv = inet_pton('::ffff:'.$ip);
	}
	return $rv;
}

function log_hit($sid, $uid, $url) {
	$db = \lg_mysql();
	$db->begin_transaction();

	$ip = ip2binary($_SERVER['REMOTE_ADDR']);
	$ua = txt_store($_SERVER['HTTP_USER_AGENT'] ?? '');
	$url = txt_store($url);
	$query = "INSERT INTO lgo_hits (sess_id, user_id, rq_ip, rq_ua, rq_url, rq_stamp) VALUES ({$sid}, {$uid}, ".\lg_qn($ip).", {$ua}, {$url}, now())";
	$db->query($query);
	$db->commit();
}

function mp3_or_martha($local, $t) {
	$lf = str_replace('{t:prefix}', __DIR__.'/..', $local);
	if (file_exists($lf)) {
		return $local;
	}
	return 'https://learngreenlandic.com/martha/?t='.urlencode($t);
}

function limit_session($state) {
	if (empty($state['uid'])) {
		return 0;
	}

	$token = $_COOKIE['lgo-session'] ?? '';

	$db = \lg_mysql();
	$db->begin_transaction();
	$query = "SELECT sess_id, sess_stop FROM lgo_sessions WHERE user_id = {$state['uid']} AND sess_token = ".\lg_qn($token);
	$sid = $db->query($query);

	if ($sid && $sid->num_rows) {
		$row = $sid->fetch_assoc();
		if (!empty($row['sess_stop'])) {
			setcookie('lgo-session', '', 1, '/', $_SERVER['HTTP_HOST'], true);
			$db->commit();
			return 0;
		}

		$sid = intval($row['sess_id']);
		$query = "UPDATE lgo_sessions SET sess_seen = now() WHERE sess_id = {$sid}";
		$db->query($query);
	}
	else {
		$ip = ip2binary($_SERVER['REMOTE_ADDR']);
		$ua = txt_store($_SERVER['HTTP_USER_AGENT'] ?? '');
		$token = make_session_token();
		$query = "INSERT INTO lgo_sessions (user_id, sess_token, sess_ip, sess_ua, sess_start) VALUES ({$state['uid']}, ".\lg_qn($token).", ".\lg_qn($ip).", {$ua}, now())";
		$db->query($query);
		$sid = $db->insert_id;
	}

	/*
	if (empty($state['admin'])) {
		$query = "SELECT count(*) as cnt FROM lgo_sessions WHERE user_id = {$state['uid']} AND sess_stop IS NULL";
		$cnt = $db->query($query);
		if ($cnt && $cnt->num_rows) {
			$cnt = intval($cnt->fetch_assoc()['cnt']);
			if ($cnt > 2) {
				$query = "UPDATE lgo_sessions SET sess_stop = now() WHERE user_id = {$state['uid']} AND sess_stop IS NULL ORDER BY sess_id ASC LIMIT ".($cnt - 2);
				$db->query($query);
			}
		}
	}
	//*/

	setcookie('lgo-session', $token, 2147483647, '/', $_SERVER['HTTP_HOST'], true);

	$db->commit();
	return $sid;
}

function init() {
	define('SHORTINIT', true);
	require __DIR__.'/../../wp-load.php';
	require_once ABSPATH.WPINC.'/class-wp-user.php';
	require_once ABSPATH.WPINC.'/class-wp-roles.php';
	require_once ABSPATH.WPINC.'/class-wp-role.php';
	require_once ABSPATH.WPINC.'/class-wp-session-tokens.php';
	require_once ABSPATH.WPINC.'/class-wp-user-meta-session-tokens.php';
	require_once ABSPATH.WPINC.'/formatting.php';
	require_once ABSPATH.WPINC.'/capabilities.php';
	require_once ABSPATH.WPINC.'/blocks.php';
	require_once ABSPATH.WPINC.'/user.php';
	require_once ABSPATH.WPINC.'/meta.php';
	require_once ABSPATH.WPINC.'/l10n.php';

	wp_plugin_directory_constants();
	wp_cookie_constants();

	require_once ABSPATH.WPINC.'/vars.php';
	require_once ABSPATH.WPINC.'/kses.php';
	require_once ABSPATH.WPINC.'/rest-api.php';
	require_once ABSPATH.WPINC.'/pluggable.php';

	require_once ABSPATH.'/wp-content/plugins/learngreenlandic/learngreenlandic.php';

	$lg1 = 0;
	$lg2 = 0;
	$uid = 0;
	$admin = false;
	login_anonymous();
	if (is_user_logged_in()) {
		$user = wp_get_current_user();
		$uid = $user->ID;
		++$lg1;
		++$lg2;
		if ($user->has_cap('administrator')) {
			++$lg1;
			++$lg2;
			$admin = true;
		}
		/*
		else {
			$keys = lg_get_keys($user->ID);
			foreach ($keys as $key => $row) {
				if ($key[0] == 'D' || $key[0] == 'E' || $key[0] == 'R' || $key[0] == 'T' || $key[0] == 'X') { // || $key[0] == 'F'
					++$lg1;
				}
				else if ($key[0] == 'A' || $key[0] == 'B' || $key[0] == 'Y' || $key[0] == 'Z') { // || $key[0] == 'C'
					++$lg2;
				}
			}
		}
		//*/
	}

	$_REQUEST = stripslashes_deep($_REQUEST);

	chdir(__DIR__.'/../');

	$path = $_GET['path'] ?? '';
	if (preg_match('~[^a-zA-Z0-9/. -]~', $path) || substr($path, 0, 1) === '/') {
		\header('HTTP/1.0 404 No such file');
		exit(0);
	}

	$prefix = substr($_SERVER['SCRIPT_NAME'], 0, -10);

	if (!empty($path) && substr($path, -1) !== '/' && substr($path, -4) !== '.pdf' && substr($path, -4) !== '.mp4' && substr($path, -4) !== '.mp3') {
		\header('HTTP/1.0 301 Need that final /');
		\header("Location: {$prefix}/{$path}/");
		exit(0);
	}

	$q = intval($_REQUEST['q'] ?? $_COOKIE['q'] ?? 480);
	if ($q !== 480) {
		if (!isset($_COOKIE['q']) || $q !== intval($_COOKIE['q'])) {
			setcookie('q', $q, 2147483647, '/');
		}
	}
	else if (isset($_COOKIE['q'])) {
		setcookie('q', '', 1, '/');
	}

	$lang = $_REQUEST['lang'] ?? $_COOKIE['lang'] ?? 'dan';
	if ($lang !== 'dan' && $lang !== 'eng') {
		$lang = 'dan';
	}
	if ($lang !== 'dan') {
		if (!isset($_COOKIE['lang']) || $lang !== $_COOKIE['lang']) {
			setcookie('lang', $lang, 2147483647, '/');
		}
	}
	else if (isset($_COOKIE['lang'])) {
		setcookie('lang', '', 1, '/');
	}

	$theme = $_REQUEST['theme'] ?? $_COOKIE['theme'] ?? 'flatly';
	if ($theme !== 'darkly' && $theme !== 'flatly') {
		$theme = 'flatly';
	}
	if ($theme !== 'flatly') {
		if (!isset($_COOKIE['theme']) || $theme !== $_COOKIE['theme']) {
			setcookie('theme', $theme, 2147483647, '/');
		}
	}
	else if (isset($_COOKIE['theme'])) {
		setcookie('theme', '', 1, '/');
	}

	require_once __DIR__.'/l10n.php';
	ob_start('\LGO\l10n_'.$lang);
	$GLOBALS['-l10n'][$lang]['prefix'] = $prefix;
	$GLOBALS['-l10n'][$lang]['lang'] = $lang;

	$state = [
		'path' => $path,
		'prefix' => $prefix,
		'q' => $q,
		'lang' => $lang,
		'l10n' => $l10n[$lang],
		'theme' => $theme,
		'lg1' => $lg1,
		'lg2' => $lg2,
		'uid' => $uid,
		'admin' => $admin,
		'seed' => intval($_REQUEST['seed'] ?? mt_rand()),
		'export' => trim($_REQUEST['export'] ?? ''),
		];

	mt_srand($state['seed']);

	return $state;
}

function header($state, $lg='', $path='') {
	extract($state, EXTR_SKIP);

	$title = 'Learn Greenlandic';
	$h1 = '';
	if (!empty($lg) && !empty($l10n[$lg])) {
		$title = $l10n[$lg].' &laquo; '.$title;
		$h1 = '<h1 class="m-3">'.$l10n[$lg].'</h1>';
	}
	if (!empty($l10n["$lg/$path"])) {
		$title = $l10n["$lg/$path"].' &laquo; '.$title;
		$h1 = '<h1 class="m-3">'.$l10n["$lg/$path"].'</h1>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?=$title;?></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11/font/bootstrap-icons.css">
	<!-- Bootstrap theme by https://bootswatch.com/ -->
	<link rel="stylesheet" href="{t:prefix}/static/bootswatch.<?=$theme;?>.css">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.bundle.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
	<link href="{t:prefix}/static/lg.css?t=<?=filemtime('static/lg.css');?>" rel="stylesheet">
	<script src="{t:prefix}/static/lg.js?t=<?=filemtime('static/lg.js');?>"></script>
	<!-- <script src="{t:prefix}/static/tips.js?t=<?=filemtime('static/tips.js');?>"></script> -->

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87771-12"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-87771-12');
		gtag('set', {'user_id': '<?=$uid;?>'});
	</script>

	<script>
		var _paq = window._paq = window._paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
		var u="//tinodidriksen.com/matomo/";
		_paq.push(['setTrackerUrl', u+'matomo.php']);
		_paq.push(['setSiteId', '3']);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//tinodidriksen.com/matomo/matomo.php?idsite=3&amp;rec=1" style="border:0;" alt="" /></p></noscript>

	<script>
		let g_lang = '<?=$state['lang'];?>';
		let g_theme = '<?=$theme;?>';
		let g_admin = <?=intval($state['admin']);?>;
		let g_tips = {};
	</script>
</head>
<body data-theme="<?=$theme;?>">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
	<a class="navbar-brand" href="{t:prefix}/">LG Online</a>
	<ul class="navbar-nav me-auto">
		<li class="nav-item"><a href="{t:prefix}/<?=$lg;?>/" class="nav-link"><?=$l10n[$lg];?></a></li>
	</ul>
	<ul class="navbar-nav flex-wrap">
		<li class="nav-item align-top"><a href="./?lang=dan" class="nav-link flag align-top"><img src="{t:prefix}/static/dan.png" height="16" class="d-inline-block align-top flag-dan" alt=""> <span class="align-top">Dansk</span></a></li>
		<li class="nav-item align-top"><a href="./?lang=eng" class="nav-link flag align-top"><img src="{t:prefix}/static/eng.png" height="16" class="d-inline-block align-top flag-eng" alt=""> <span class="align-top">English</span></a></li>
	</ul>
</nav>
<?=$h1;?>
<!-- NOTA BENE -->
<!-- Please do not scrape or pirate these videos, lectures, or other material. We are a very small company with a limited market. -->
<!-- NOTA BENE -->
<?php
}

function footer($state=null) {
?>
<nav class="navbar navbar-expand navbar-dark bg-primary mt-3 p-3 footer">
	<a class="navbar-brand" href="/">Learn Greenlandic</a>
	<ul class="navbar-nav d-sm-none">
		<li class="nav-item"><a class="nav-link">|</a></li>
	</ul>
	<ul class="navbar-nav flex-wrap me-auto">
		<li class="nav-item"><a href="https://www.linkedin.com/company/learngreenlandic/" class="nav-link">LinkedIn</a></li>
		<li class="nav-item"><a href="mailto:mail@learngreenlandic.com" class="nav-link">Email</a></li>
	</ul>
	<ul class="navbar-nav d-sm-none">
		<li class="nav-item"><a class="nav-link">|</a></li>
	</ul>
	<ul class="navbar-nav flex-wrap">
		<li class="nav-item"><a href="./?theme=flatly" class="nav-link">{t:light}</a></li>
		<li class="nav-item"><a href="./?theme=darkly" class="nav-link">{t:dark}</a></li>
	</ul>
</nav>

</body>
</html>
<?php
}

function login_anonymous() {
	if (!is_user_logged_in()) {
		$user_login = 'Anonymous';
		$user = get_user_by('login', $user_login);
		$user_id = $user->ID;
		wp_set_current_user($user_id, $user_login);
		wp_set_auth_cookie($user_id);
		do_action('wp_login', $user_login);
	}
}

function shuffle_values($arr) {
	$rv = [];
	$n = count($arr);
	while ($n > 0) {
		--$n;
		$k = mt_rand(0, $n);
		$rv[] = $arr[$k];
		array_splice($arr, $k, 1);
	}
	return $rv;
}

function shuffle_assoc($arr) {
	$keys = array_keys($arr);
	$keys = shuffle_values($keys);
	$na = [];
	foreach ($keys as $key) {
		$na[$key] = $arr[$key];
	}

	return $na;
}

function ob_stop() {
	while (ob_get_level()) {
		ob_end_clean();
	}
}

function maybe_export($state, $tsv) {
	if (empty($state['export'])) {
		return false;
	}

	$tsv = str_replace('{t:prefix}', 'https://learngreenlandic.com/online', $tsv);

	ob_stop();
	\header('Content-Type: text/tab-separated-values; charset=UTF-8');
	\header('Content-Disposition: inline; filename="exported.tsv"');
	\header('Content-Length: '.strlen($tsv));
	echo $tsv;
	exit(0);
}
