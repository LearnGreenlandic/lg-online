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
	else if (file_exists("d/{$lg}/pdfs/{$path}-{$lang}.pdf")) {
		$pdf = "d/{$lg}/pdfs/{$path}-{$lang}.pdf";
		$name = "{$lg}-{$path}-{$lang}.pdf";
	}
	else if (file_exists("d/{$lg}/{$path}.pdf")) {
		$pdf = "d/{$lg}/{$path}.pdf";
		$name = "{$lg}-{$path}.pdf";
	}

	if (isset($pdf)) {
		ob_stop();
		\header('Content-Type: application/pdf');
		\header("Content-Disposition: inline; filename=\"{$name}\"");
		\header('Content-Length: '.filesize($pdf));
		readfile($pdf);
		return;
	}

	\header('HTTP/1.0 404 No such file');
}

// Adapted from https://github.com/shemgp/http-send-file
function send_file($state, $suffix) {
	$file = $state['path'];

	if (!is_readable($file)) {
		throw new \Exception('File not found or inaccessible!');
	}

	$size = filesize($file);
	$name = preg_replace('~[^a-zA-Z0-9.-]+~', '-', $file);

	$type = 'audio/mpeg';
	if ($suffix === 'mp4') {
		$type = 'video/mp4';
	}

	\header('Content-Type: '.$type);
	\header('Content-Disposition: inline; filename="'.$name.'"');
	\header('Accept-Ranges: bytes');

	\header('Cache-control: private');
	\header('Pragma: private');
	\header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

	// multipart-download and download resuming support
	if (isset($_SERVER['HTTP_RANGE'])) {
		list($a, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);
		list($range) = explode(',', $range, 2);
		list($range, $range_end) = explode('-', $range);
		$range = intval($range);
		if (!$range_end) {
			$range_end = $size - 1;
		}
		else {
			$range_end = intval($range_end);
		}

		$new_length = $range_end - $range + 1;
		\header('HTTP/1.1 206 Partial Content');
		\header('Content-Length: '.$new_length);
		\header("Content-Range: bytes {$range}-{$range_end}/{$size}");
	} else {
		$new_length = $size;
		\header('Content-Length: '.$size);
	}

	/* output the file itself */
	$chunksize = 1024*1024;
	$bytes_sent = 0;

	\header('X-No-Pirate: Please do not steal our content.');

	ob_stop();
	$fz = fopen($file, 'rb');
	if ($fz) {
		if (isset($_SERVER['HTTP_RANGE'])) {
			fseek($fz, $range);
		}

		while (!feof($fz) && (!connection_aborted()) && ($bytes_sent < $new_length) ) {
			$buffer = fread($fz, $chunksize);
			echo $buffer;
			flush();
			$bytes_sent += strlen($buffer);
		}
		fclose($fz);
	}
	else {
		throw new \Exception('Error - can not open file.');
	}
}
