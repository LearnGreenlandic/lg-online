<?php
namespace LGO;

function structure_1($state) {
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{t:lg1/structure/1.1/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg1/structure/1/pairs.txt')));
	shuffle($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[0];
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="{t:prefix}/d/lg1/structure/1/'.$word.'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>';
	}
?>
</div>
</div>
<?php
}

function structure_2($state, $which) {
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{t:lg1/structure/<?=$which;?>/text}</p>
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
		echo '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$ws[0].$p.'</div><div class="col-12"><span class="entry"><audio src="{t:prefix}/d/lg1/structure/'.$which[0].'/'.$ws[0].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="{t:prefix}/d/lg1/structure/'.$which[0].'/'.$ws[1].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span></span></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function structure_3($state, $which) {
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row">
<div class="col">
<p>{t:lg1/structure/<?=$which;?>/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$words = explode("\n", trim(file_get_contents('d/lg1/structure/'.$which[0].'/pairs.txt')));
	shuffle($words);
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		echo '<div class="col-lg-6 my-2 text-center"><span class="entry"><audio src="{t:prefix}/d/lg1/structure/'.$which[0].'/'.$ws[0].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="{t:prefix}/d/lg1/structure/'.$which[0].'/'.$ws[1].'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span></span></div>';
	}
?>
</div>
</div>
<?php
}

function structure_data($state, $which) {
	$nw = [];
	$words = explode("\n", trim(file_get_contents('d/lg2/exercises/'.$which.'/pairs.txt')));
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		$nw[intval($ws[0])] = $ws;
	}
	if (file_exists('d/lg2/exercises/'.$which.'/pairs-'.$state['lang'].'.txt')) {
		$words = explode("\n", trim(file_get_contents('d/lg2/exercises/'.$which.'/pairs-'.$state['lang'].'.txt')));
		foreach ($words as $word) {
			$ws = explode("\t", $word);
			$nw[intval($ws[0])] = $ws;
		}
	}
	shuffle($nw);
	return $nw;
}

function structure_text($state, $which) {
	\LGO\header($state, 'lg2', 'structure/'.$which.'/t');
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row mb-3">
<div class="col">
<p>{t:lg2/structure/<?=$which;?>/text} {t:TXT_AUDIO_CHECK_REVEAL2}.</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (structure_data($state, $which) as $ws) {
		$p = '';
		if (!empty($ws[3])) {
			$p = ' ('.$ws[3].')';
		}
		$q = '';
		if (file_exists('d/lg2/exercises/'.$which.'/'.$ws[0].' Q.mp3')) {
			$q = '<span class="entry"><audio src="{t:prefix}/d/lg2/exercises/'.$which.'/'.$ws[0].' Q.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> ';
		}
		$a = '';
		if (file_exists('d/lg2/exercises/'.$which.'/'.$ws[0].' A.mp3')) {
			$a = '<audio src="{t:prefix}/d/lg2/exercises/'.$which.'/'.$ws[0].' A.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> ';
		}
		echo '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.htmlspecialchars($ws[1].$p).'</div><div class="col-12">'.$q.'<span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.htmlspecialchars($ws[2]).'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> '.$a.'<button type="button" class="btn btn-secondary">☼</button></span><code class="hint my-1"></code></span></div></div></div>';
	}
?>
</div>
</div>
<?php
	\LGO\footer($state);
}

function structure_audio($state, $which) {
	\LGO\header($state, 'lg2', 'structure/'.$which.'/a');
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row mb-3">
<div class="col">
<p>{t:lg2/structure/<?=$which;?>/text} {t:TXT_AUDIO_CHECK_REVEAL2}.</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (structure_data($state, $which) as $ws) {
		echo '<div class="col-lg-6 my-2 text-center"><span class="entry"><audio src="{t:prefix}/d/lg2/exercises/'.$which.'/'.$ws[0].' Q.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.htmlspecialchars($ws[2]).'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="{t:prefix}/d/lg2/exercises/'.$which.'/'.$ws[0].' A.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><code class="hint my-1"></code></span></div>';
	}
?>
</div>
</div>
<?php
	\LGO\footer($state);
}

function structure_06($state) {
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row mb-3">
<div class="col">
<p>{t:lg2/structure/0.6/text} {t:TXT_CHECK_REVEAL}.</p>
</div>
</div>
<div class="row alternate">
<?php
	foreach (structure_data($state, '0.6') as $ws) {
		$p = '';
		if (!empty($ws[3])) {
			$p = ' ('.$ws[3].')';
		}
		echo '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.htmlspecialchars($ws[1].$p).'</div><div class="col-12"><span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.htmlspecialchars($ws[2]).'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span><code class="hint my-1"></code></span></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function structure_07($state) {
?>
<div class="task task-text task-audio container-fluid structure">
<div class="row mb-3">
<div class="col">
<p>{t:lg2/structure/0.7/text} {t:TXT_CHECK_REVEAL}.</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ls = ['I-am-Vbed', 'He-is-Vbed', 'We-are-Vbed', 'Are-you-Vbed'];

	foreach (structure_data($state, '0.7') as $ws) {
		$as = explode(', ', $ws[2]);
		echo '<div><div class="row"><div class="col-12">'.htmlspecialchars($ws[1]).'</div></div>';
		for ($i=0 ; $i<4 ; ++$i) {
			echo '<div class="row text-nowrap"><div class="col-3">{t:'.$ls[$i].'}</div><div class="col-9"><span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.htmlspecialchars($as[$i]).'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></span><code class="hint my-1"></code></span></div></div>';
		}
		echo '</div>';
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-primary" id="btnNext">{t:next}</button>
</div>
</div>
<?php
}

function structure($state, $which) {
	\LGO\header($state, 'lg1', 'structure/'.$which);
	if ($which === '1.1') {
		\LGO\structure_1($state);
	}
	else if ($which === '1.2' || $which === '2.1' || $which === '3.1') {
		\LGO\structure_2($state, $which);
	}
	else {
		\LGO\structure_3($state, $which);
	}
	\LGO\footer($state);
}

function structure_lg2($state, $which) {
	\LGO\header($state, 'lg2', 'structure/'.$which);
	if ($which === '0.6') {
		\LGO\structure_06($state);
	}
	else if ($which === '0.7') {
		\LGO\structure_07($state);
	}
	\LGO\footer($state);
}
