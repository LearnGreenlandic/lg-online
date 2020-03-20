<?php

function lg_pdf($state, $lg, $path) {
	extract($state, EXTR_SKIP);

	$pdf = null;
	$name = null;
	if (file_exists("d/{$lg}/{$path}/{$lang}/lecture.pdf")) {
		$pdf = "d/{$lg}/{$path}/{$lang}/lecture.pdf";
		$name = "{$lg}-{$path}-{$lang}.pdf";
	}
	else if (file_exists("d/{$lg}/{$path}/{$lang}.pdf")) {
		$pdf = "d/{$lg}/{$path}/{$lang}.pdf";
		$name = "{$lg}-{$path}-{$lang}.pdf";
	}

	if (isset($pdf)) {
		header('Content-Type: application/pdf');
		header("Content-Disposition: inline; filename=\"{$name}\"");
		header('Content-Length: '.filesize($pdf));
		readfile($pdf);
		exit(0);
	}

	header('HTTP/1.0 404 No such file');
	exit(0);
}
