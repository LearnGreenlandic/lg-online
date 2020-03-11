#!/usr/bin/env php
<?php

// find . -type f -name '*.wav' -print0 | xargs -0rn1 '-I{}' sh -c 'D=$(dirname "{}"); B=$(basename "{}" .wav); mkdir -pv ~/public_html/online/d/lg1/$D; lame -V1 "{}" "/home/kal/public_html/online/d/lg1/$D/$B.mp3"'

$root = '/home/kal/public_html/online/d/lg1';
$langs = ['dan' => 'danish', 'eng' => 'english'];
$lects = ['1', '2', '3', '4', '5.1', '5.2'];

foreach ($lects as $lect) {
	$slect = str_replace('.', '*', $lect);
	foreach ($langs as $sl => $ll) {
		chdir($root);
		shell_exec("mkdir -pv $lect/$sl/");
		chdir("$lect/$sl");
		echo getcwd()."\n";
		$fs = explode("\n", trim(shell_exec("find ~/files/demo/lessons/$slect/$ll/ -type f | grep -v '.dat$'")));
		foreach ($fs as $f) {
			echo basename($f)." $f\n";
			symlink($f, basename($f));
		}

		$ll = ucfirst($ll);
		foreach ([480, 720, 1080] as $r) {
			$v = glob("/home/kal/files/videos/LG1 Lesson $slect $ll {$r}p.m4v");
			if (!empty($v)) {
				echo "{$v[0]} => v{$r}p.mp4\n";
				symlink($v[0], "v{$r}p.mp4");
			}
		}
	}
}
