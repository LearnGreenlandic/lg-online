<?php
namespace LGO;

\header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');

require_once __DIR__.'/lib/shared.php';

$state = \LGO\init();
$sid = limit_session($state);
//log_hit($sid, $state['uid'], $_SERVER['REQUEST_URI']);

\header('HTTP/1.1 400 Bad Request');
$a = !empty($_REQUEST['a']) ? $_REQUEST['a'] : '';

$origin = '*';
if (!empty($_SERVER['HTTP_ORIGIN'])) {
	$origin = trim($_SERVER['HTTP_ORIGIN']);
}
\header('Access-Control-Allow-Origin: '.$origin);
\header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	\header('HTTP/1.1 200 Options');
	\header('Access-Control-Allow-Headers: *');
	die();
}

$rv = [
	'e' => [],
	'a' => $a,
	];

while ($a === 'tips') {
	$_REQUEST['ts'] = preg_replace('~[^-\pL\pN\pM@<>_/,]+~us', ' ', $_REQUEST['ts']);
	$_REQUEST['ts'] = preg_replace('~,,+~u', ',', $_REQUEST['ts']);
	$_REQUEST['ts'] = preg_replace('~^,~u', '', $_REQUEST['ts']);
	$_REQUEST['ts'] = preg_replace('~,$~u', '', $_REQUEST['ts']);
	$_REQUEST['ts'] = trim($_REQUEST['ts']);
	$_REQUEST['ts'] = explode(',', $_REQUEST['ts']);
	if (empty($_REQUEST['ts'])) {
		$rv['e'][] = 'Malformed tips request - no tip IDs passed';
		break;
	}
	if (!preg_match('~^(dan|eng|kal)$~u', $_REQUEST['l'] ?? '')) {
		$rv['e'][] = 'Malformed tips request - invalid language';
		break;
	}

	$rv['ts'] = load_tips($_REQUEST['ts'], $_REQUEST['l']);

	break;
}

if (empty($rv['e'])) {
	\header('HTTP/1.1 200 Ok');
	unset($rv['e']);
}

if (!empty($_GET['callback'])) {
	\header('Content-Type: application/javascript; charset=UTF-8');
	echo $_GET['callback'].'('.json_encode_num($rv).');';
}
else {
	\header('Content-Type: application/json; charset=UTF-8');
	echo json_encode_num($rv);
}

flush();
if (function_exists('fastcgi_finish_request')) {
	fastcgi_finish_request();
}

if (!empty($rv['e'])) {
	exit(0);
}
