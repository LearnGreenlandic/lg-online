<?php
namespace LGO;

function pdf($state, $lg, $path) {
	extract($state, EXTR_SKIP);

	$pdf = null;
	$name = null;
	if (strpos($state['path'], '/slides/') !== false && file_exists("d/{$lg}/{$path}/{$lang}/slides.pdf")) {
		$pdf = "d/{$lg}/{$path}/{$lang}/slides.pdf";
		$name = "{$lg}-{$path}-{$lang}-slides.pdf";
	}
	else if (file_exists("d/{$lg}/{$path}/{$lang}/lecture.pdf")) {
		$pdf = "d/{$lg}/{$path}/{$lang}/lecture.pdf";
		$name = "{$lg}-{$path}-{$lang}.pdf";
	}
	else if (file_exists("d/{$lg}/{$path}/{$lang}.pdf")) {
		$pdf = "d/{$lg}/{$path}/{$lang}.pdf";
		$name = "{$lg}-{$path}-{$lang}.pdf";
	}
	else if (file_exists("d/{$lg}/{$path}.pdf")) {
		$pdf = "d/{$lg}/{$path}.pdf";
		$name = "{$lg}-{$path}.pdf";
	}

	if (isset($pdf)) {
		\header('Content-Type: application/pdf');
		\header("Content-Disposition: inline; filename=\"{$name}\"");
		\header('Content-Length: '.filesize($pdf));
		readfile($pdf);
		exit(0);
	}

	\header('HTTP/1.0 404 No such file');
	exit(0);
}
