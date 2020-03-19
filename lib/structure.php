<?php

function lg_structure_1($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{l10n:lg1/structure/1.1/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg1/structure/1/pairs.txt')));
	shuffle($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[0];
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$prefix.'/d/lg1/structure/1/'.$word.'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>';
	}
?>
</div>
</div>
<?php
}

function lg_structure_2($state, $which) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{l10n:lg1/structure/<?=$which;?>/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg1/structure/'.$which[0].'/pairs.txt')));
	shuffle($words);
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		$p = '';
		if (!empty($ws[2])) {
			$p = ' ('.$ws[2].')';
		}
		echo '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$ws[0].$p.'</div><div class="col-12"><span class="entry"><audio src="'.$prefix.'/d/lg1/structure/'.$which[0].'/'.$ws[0].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$prefix.'/d/lg1/structure/'.$which[0].'/'.$ws[1].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span></span></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function lg_structure_3($state, $which) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{l10n:lg1/structure/<?=$which;?>/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg1/structure/'.$which[0].'/pairs.txt')));
	shuffle($words);
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		echo '<div class="col-lg-6 my-2 text-center"><span class="entry"><audio src="'.$prefix.'/d/lg1/structure/'.$which[0].'/'.$ws[0].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$prefix.'/d/lg1/structure/'.$which[0].'/'.$ws[1].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span></span></div>';
	}
?>
</div>
</div>
<?php
}

function lg_structure($state, $which) {
	lg_header($state, 'lg1', 'structure/'.$which);
	if ($which === '1.1') {
		lg_structure_1($state);
	}
	else if ($which === '1.2' || $which === '2.1' || $which === '3.1') {
		lg_structure_2($state, $which);
	}
	else {
		lg_structure_3($state, $which);
	}
	lg_footer($state);
}
