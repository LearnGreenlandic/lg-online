<?php
namespace LGO;

function listening_1($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-yes-no task-audio container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/listening/1/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$mp3s = glob('d/lg1/listening/1/*.mp3');
	shuffle($mp3s);
	foreach ($mp3s as $mp3) {
		$word = basename($mp3, '.mp3');
		$double = 0;
		if (preg_match('~([mpqslkn])\1~', $word)) {
			$double = 1;
		}
		echo '<div class="col-lg-6 my-2 text-center entry" data-which="'.$double.'" data-check="'.$word.'"><div class="row"><div class="col-8"><audio src="'.$prefix.'/'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button> <span class="text-nowrap"><button type="button" class="btn btn-warning" data-which="0">{l10n:lg1/listening/1/no}</button> <button type="button" class="btn btn-warning" data-which="1">{l10n:lg1/listening/1/yes}</button></span></div><div class="col-4"><div class="text-success my-2">&nbsp;</div></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function listening_2($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-yes-no task-audio container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/listening/2/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$mp3s = glob('d/lg1/listening/2/*.mp3');
	shuffle($mp3s);
	foreach ($mp3s as $mp3) {
		$word = basename($mp3, '.mp3');
		$r = intval(strpos($word, 'r') !== false);
		echo '<div class="col-lg-6 my-2 text-center entry" data-which="'.$r.'" data-check="'.$word.'"><div class="row"><div class="col-8"><audio src="'.$prefix.'/'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button> <span class="text-nowrap"><button type="button" class="btn btn-warning" data-which="0">{l10n:lg1/listening/2/no}</button> <button type="button" class="btn btn-warning" data-which="1">{l10n:lg1/listening/2/yes}</button></span></div><div class="col-4"><div class="text-success my-2">&nbsp;</div></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function listening_3($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-yes-no task-audio container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/listening/3/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$mp3s = glob('d/lg1/listening/3/*.mp3');
	shuffle($mp3s);
	foreach ($mp3s as $mp3) {
		$word = basename($mp3, '.mp3');
		$w = 0;
		if (strpos($word, 'tt') !== false) {
			$w = 1;
		}
		if (strpos($word, 'ts') !== false) {
			$w = 2;
		}
		echo '<div class="col-lg-6 my-2 text-center entry" data-which="'.$w.'" data-check="'.$word.'"><div class="row"><div class="col-8"><audio src="'.$prefix.'/'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary my-1">▶</button> <span class="text-nowrap"><button type="button" class="btn btn-warning" data-which="1">{l10n:lg1/listening/3/tt}</button> <button type="button" class="btn btn-warning" data-which="2">{l10n:lg1/listening/3/ts}</button> <button type="button" class="btn btn-warning" data-which="0">{l10n:lg1/listening/3/t}</button></span></div><div class="col-4"><div class="text-success my-2">&nbsp;</div></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function listening_4($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-audio container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/listening/4/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$mp3s = glob('d/lg1/listening/4/*.mp3');
	shuffle($mp3s);
	foreach ($mp3s as $mp3) {
		$word = basename($mp3, '.mp3');
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$prefix.'/'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>';
	}
?>
</div>
</div>
<?php
}

function listening($state, $which) {
	\LGO\header($state, 'lg1', 'listening/'.$which);
	if ($which === '1') {
		\LGO\listening_1($state);
	}
	else if ($which === '2') {
		\LGO\listening_2($state);
	}
	else if ($which === '3') {
		\LGO\listening_3($state);
	}
	else {
		\LGO\listening_4($state);
	}
	\LGO\footer($state);
}
