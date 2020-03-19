<?php
if ((!empty($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== 'learngreenlandic.com' && $_SERVER['HTTP_HOST'] !== 'learn.gl') || empty($_SERVER['HTTPS'])) {
	header('Location: https://learngreenlandic.com'.$_SERVER['REQUEST_URI'], true, 301);
	die();
}
header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');

require_once __DIR__.'/lib/shared.php';

$state = lg_init();

if (substr($state['path'], 0, 3) === 'lg1' && $state['lg1'] === 0) {
	lg_header($state);
	echo '<p>'.$state['l10n']['ERR_NO_ACCESS_LG1'].'</p>';
	lg_footer($state);
	exit(0);
}
if (substr($state['path'], 0, 3) === 'lg2' && $state['lg2'] === 0) {
	lg_header($state);
	echo '<p>'.$state['l10n']['ERR_NO_ACCESS_LG2'].'</p>';
	lg_footer($state);
	exit(0);
}
if ($state['lg1'] === 0 && $state['lg2'] === 0) {
	lg_header($state);
	echo '<p>'.$state['l10n']['ERR_NO_ACCESS'].'</p>';
	lg_footer($state);
	exit(0);
}

if (preg_match('~^(lg[12])/([\d.]+)/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/lecture.php';
	lg_lecture($state, $m[1], $m[2]);
}
else if ($state['path'] === 'lg1/') {
	require_once __DIR__.'/lib/lg1.php';
	lg_lg1($state);
}
else if (preg_match('~^(lg[12])/pdf/([\w\d.]+)/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/pdf.php';
	lg_pdf($state, $m[1], $m[2]);
}
else if (preg_match('~^lg1/pronounce/([12])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/pronounce.php';
	lg_pronounce($state, $m[1]);
}
else if (preg_match('~^lg1/listening/([1234])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/listening.php';
	lg_listening($state, $m[1]);
}
else if (preg_match('~^lg1/hyphenate/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/hyphenate.php';
	lg_hyphenate($state);
}
else if (preg_match('~^lg1/welcome/([12])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/welcome.php';
	lg_welcome($state, $m[1]);
}
else if (preg_match('~^lg1/welcome/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/welcome.php';
	lg_welcome($state, 'video');
}
else if (preg_match('~^lg1/dialogue/([123])/$~', $state['path'], $m)) {
	require_once __DIR__.'/lib/dialogue.php';
	lg_dialogue($state, $m[1]);
}
else if (!empty($state['path'])) {
	header('HTTP/1.0 302 Back to the root with you');
	header("Location: {$state['prefix']}/");
	exit(0);
}
else {
}
