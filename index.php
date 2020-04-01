<?php
namespace LGO;

if (strpos($_SERVER['REQUEST_URI'], '/o/') === 0) {
	$_SERVER['REQUEST_URI'] = str_replace('/o/', '/online/', $_SERVER['REQUEST_URI']);
	\header('Location: https://learngreenlandic.com'.$_SERVER['REQUEST_URI'], true, 301);
	die();
}
if ((!empty($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== 'learngreenlandic.com' && $_SERVER['HTTP_HOST'] !== 'learn.gl') || empty($_SERVER['HTTPS'])) {
	\header('Location: https://learngreenlandic.com'.$_SERVER['REQUEST_URI'], true, 301);
	die();
}
\header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');

require_once __DIR__.'/lib/shared.php';

$state = \LGO\init();
$sid = limit_session($state);
log_hit($sid, $state['uid'], $_SERVER['REQUEST_URI']);

if (substr($state['path'], 0, 3) === 'lg1' && $state['lg1'] === 0) {
	\LGO\header($state);
	echo '<div class="container"><div class="row"><div class="col my-3 text-center">';
	echo '<p>{t:ERR_NO_ACCESS_LG1}</p>';
	echo '</div></div></div>';
	\LGO\footer($state);
	exit(0);
}
if (substr($state['path'], 0, 3) === 'lg2' && $state['lg2'] === 0) {
	\LGO\header($state);
	echo '<div class="container"><div class="row"><div class="col my-3 text-center">';
	echo '<p>{t:ERR_NO_ACCESS_LG2}</p>';
	echo '</div></div></div>';
	\LGO\footer($state);
	exit(0);
}
if ($state['lg1'] === 0 && $state['lg2'] === 0) {
	\LGO\header($state);
	echo '<div class="container"><div class="row"><div class="col my-3 text-center">';
	echo '<p>{t:ERR_NO_ACCESS}</p>';
	echo '</div></div></div>';
	\LGO\footer($state);
	exit(0);
}
if (empty($sid)) {
	\wp_logout();
	\LGO\header($state);
	echo '<div class="container"><div class="row"><div class="col my-3 text-center">';
	echo '<p>{t:ERR_TOO_MANY_SESSIONS}</p>';
	echo '</div></div></div>';
	\LGO\footer($state);
	exit(0);
}

// Shared
if (preg_match('~^(lg[12])/([\d.]+)/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/lecture.php';
	\LGO\lecture($state, $m[1], $m[2]);
}
else if ($state['path'] === 'lg1/') {
	require_once __DIR__.'/lib/lg1.php';
	\LGO\lg1($state);
}
else if ($state['path'] === 'lg2/') {
	require_once __DIR__.'/lib/lg2.php';
	\LGO\lg2($state);
}
else if (preg_match('~^(lg[12])/pdf/([\w\d.]+?)\.pdf$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/files.php';
	\LGO\pdf($state, $m[1], $m[2]);
	exit(0);
}
else if (preg_match('~^(lg[12])/pdf/slides/([\d.]+?)\.pdf$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/files.php';
	\LGO\pdf($state, $m[1], $m[2]);
	exit(0);
}
else if (preg_match('~\.(mp3|mp4)$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/files.php';
	\LGO\send_file($state, $m[1]);
	exit(0);
}

// LG1
else if (preg_match('~^lg1/pronounce/([12])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/pronounce.php';
	\LGO\pronounce($state, $m[1]);
}
else if (preg_match('~^lg1/listening/([1234])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/listening.php';
	\LGO\listening($state, $m[1]);
}
else if (preg_match('~^lg1/hyphenate/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/hyphenate.php';
	\LGO\hyphenate($state);
}
else if (preg_match('~^lg1/welcome/([123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/welcome.php';
	\LGO\welcome($state, $m[1]);
}
else if (preg_match('~^lg1/welcome/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/welcome.php';
	\LGO\welcome($state, 'video');
}
else if (preg_match('~^lg1/dialogue/([123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/dialogue.php';
	\LGO\dialogue($state, $m[1]);
}
else if (preg_match('~^lg1/repeat/(per|tika)/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/repeat.php';
	\LGO\repeat($state, $m[1]);
}
else if (preg_match('~^lg1/structure/([123]\.[123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/structure.php';
	\LGO\structure($state, $m[1]);
}
else if (preg_match('~^lg1/updown/([123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/updown.php';
	\LGO\updown_lg1($state, $m[1]);
}

// LG2
else if (preg_match('~^lg2/intro/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/intro.php';
	\LGO\intro($state);
}
else if (preg_match('~^lg2/fsts/([1-8][.][12][.][123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/updown.php';
	\LGO\updown_lg2($state, $m[1]);
}
else if (preg_match('~^lg2/table/([18]\.[12])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/table.php';
	\LGO\table($state, $m[1]);
}
else if (preg_match('~^lg2/repeat/([1-8])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/repeat.php';
	\LGO\repeat_lg2($state, $m[1]);
}
else if (preg_match('~^lg2/listen/(2\.1)/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/repeat.php';
	\LGO\repeat_audio($state, $m[1]);
}
else if (preg_match('~^lg2/structure/([\d.]+)/t/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/structure.php';
	\LGO\structure_text($state, $m[1]);
}
else if (preg_match('~^lg2/structure/([\d.]+)/a/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/structure.php';
	\LGO\structure_audio($state, $m[1]);
}
else if (preg_match('~^lg2/outtro/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/intro.php';
	\LGO\outtro($state);
}

// Fallbacks
else if (!empty($state['path'])) {
	\header('HTTP/1.0 302 Back to the root with you');
	\header("Location: {$state['prefix']}/");
	exit(0);
}
else {
	\LGO\header($state);
?>
<div class="container my-4">
	<div class="row">
		<div class="col text-center">
			<div class="flink text-center m-4">
				<a href="./lg1/"><img src="{t:prefix}/static/lg1.png" class="border border-secondary"><br><h4 class="text-warning">{t:lg1}</h5></a>
			</div>
			<div class="flink text-center m-4">
				<a href="./lg2/"><img src="{t:prefix}/static/lg2.png" class="border border-secondary"><br><h4 class="text-warning">{t:lg2}</h5></a>
			</div>
		</div>
	</div>
</div>
<?php
	\LGO\footer($state);
}
