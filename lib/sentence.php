<?php
namespace LGO;

require_once __DIR__.'/cartesian.php';

$GLOBALS['-ds'] = [
	'2x' => ['abl', 'trm'],
	'3x' => ['abl', 'trm', 'lok'],
	];

$GLOBALS['-db-map'] = [
	'affirm1' => '1-1x',
	'affirm2' => '1-2x',
	'deny1' => '1-3x',
	'deny2' => '1-4x',
	'part1' => '1-5x',
	'part2' => '1-6x',
	'obj1' => '1-7x',
	'obj2' => '1-8x',

	'deny3' => '2-1x',
	'deny4' => '2-2x',
	'that1' => '2-3x',
	'indirect1' => '2-4x',
	'lu1' => '2-5x',
	'laar1' => '2-6x',
	'laar2' => '2-7x',
	//'una1' => '2-8x',
	'niq1' => '2-8x',

	'review3' => '3-0x',
	'fam1' => '3-1-1x',
	'fam2' => '3-1-2x',
	'fam3' => '3-2x',
	'deny5' => '3-3x',
	'that2' => '3-4x',
	'affirm3' => '3-5-1x',
	'cntp1' => '3-5-2x',
	'affirm4' => '3-6x',
	'summer3' => '3-7-1x',
	'summer4' => '3-7-2x',

	'review4' => '4-0x',
	'so1' => '4-1x',
	'so2' => '4-2x',
	'so3' => '4-3x',
	'so4' => '4-4x',
	'so5' => '4-5x',

	'review50' => '5-0x',
	'review51' => '5-1x',
	'review52' => '5-2x',
	'galuar1' => '5-3x',
	'cau1' => '5-4x',

	'review60' => '6-0x',
	'review61' => '6-1x',
	'cau2' => '6-2x',
	'schwa1' => '6-3x',
];

function pfx_fname(string $str): array {
	return ['fname', $str];
}
function pfx_subj(string $str): array {
	return ['subject', $str];
}
function pfx_obj(string $str): array {
	return ['object', $str];
}
function pfx_advlr(string $str): array {
	return ['advlr', $str];
}
function pfx_pred(string $str): array {
	return ['pred', $str];
}
function pfx_verb(string $str): array {
	return ['verb', $str];
}
function pfx_adled(string $str): array {
	return ['adled', $str];
}
function pfx_dummy(string $str): array {
	return ['dummy', $str];
}

function load_corpus($root='lg1', $chap='2x', $task='random') {
	$which = 'all';
	if ($task != 'random' && file_exists('d/'.$root.'/sentence/'.$chap.'/'.$task.'.txt')) {
		$which = $task;
	}
	$all = explode("\n", trim(file_get_contents('d/'.$root.'/sentence/'.$chap.'/'.$which.'.txt')));
	$all = preg_grep('/#/', $all, PREG_GREP_INVERT);
	$all = preg_grep('/^[ \t]*$/', $all, PREG_GREP_INVERT);
	$all = array_unique($all);
	sort($all);
	return array_values($all);
}

function sentence_listen($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/listen/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$tsv = "#Text\tMP3\n";
	$data = '';
	foreach ($GLOBALS['-ds'][$chap] as $f) {
		$data = trim($data."\n".trim(file_get_contents('d/lg1/sentence/'.$chap.'/'.$f.'.txt')));
	}
	$words = explode("\n", $data);
	$words = shuffle_values($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		$tsv .= "{$word}\t{$mp3}\n";
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}
	maybe_export($state, $tsv);
?>
</div>
</div>
<?php
}

function sentence_listen_v($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/listenv/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$tsv = "#Text\tMP3\n";
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+GUSUP\+@', preg_grep('@\+(QAR|TUR)\+@', $all), PREG_GREP_INVERT);

	$words = shuffle_values($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		$tsv .= "{$word}\t{$mp3}\n";
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}
	maybe_export($state, $tsv);
?>
</div>
</div>
<?php
}

function sentence_listen_g($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/listeng/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$tsv = "#Text\tMP3\n";
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+(QAR|TUR)\+@', preg_grep('@\+GUSUP\+@', $all));

	$words = shuffle_values($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		$tsv .= "{$word}\t{$mp3}\n";
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}
	maybe_export($state, $tsv);
?>
</div>
</div>
<?php
}

function sentence_listen_c($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/listenc/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$tsv = "#Text\tMP3\n";
	$data = '';
	foreach ($GLOBALS['-ds'] as $c => $fs) {
		foreach ($GLOBALS['-ds'][$chap] as $f) {
			$data = trim($data."\n".trim(file_get_contents('d/lg1/sentence/'.$c.'/'.$f.'.txt')));
		}
		if ($c === $chap) {
			break;
		}
	}
	$words = explode("\n", $data);
	$words = shuffle_values($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		$tsv .= "{$word}\t{$mp3}\n";
		echo '<div class="text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}
	maybe_export($state, $tsv);
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_case($state, $chap='2x', $case='trm') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/<?=$case;?>/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$tsv = "#Question\tAnswer\tQ MP3\tA MP3\n";
	$trgs = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$chap.'/'.$case.'.txt')));
	foreach ($trgs as $k => $trg) {
		$ws = explode("\t", $trg);
		$trgs[$k] = $ws[1];
	}

	$outs = [];
	$words = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$chap.'/base.txt')));
	foreach ($words as $k => $word) {
		$ws = explode("\t", $word);
		$p = '';
		if (!empty($ws[1])) {
			$p = ' ('.$ws[1].')';
		}
		$word = $ws[0].$p;
		$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[0].'.mp3', $ws[0]);
		$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$trgs[$k].'.mp3', $trgs[$k]);
		$tsv .= "{$word}\t{$trgs[$k]}\t{$mp3_1}\t{$mp3_2}\n";
		$outs[] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$word.'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$trgs[$k].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
	maybe_export($state, $tsv);
?>
</div>
</div>
<?php
}

function sentence_prod_v($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/prod/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+GUSUP\+@', preg_grep('@\+(QAR|TUR)\+@', $all), PREG_GREP_INVERT);

	$outs = [];
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		if (!preg_match('~^([^+]+).*\+(QAR|TUR).*\+(1Sg|3Sg)$~', $ws[0], $m)) {
			continue;
		}
		$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$m[1].'.mp3', $m[1]);
		$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[1].'.mp3', $ws[1]);
		$outs[] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$m[1].'+'.$m[2].'+'.$m[3].'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
</div>
<?php
}

function sentence_prod_g($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/prodg/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+(QAR|TUR)\+@', preg_grep('@\+GUSUP\+@', $all));

	$outs = [];
	foreach ($words as $word) {
		$ws = explode("\t", $word);
		if (!preg_match('~^([^+]+).*\+(QAR|TUR).*\+(1Sg|3Sg)$~', $ws[0], $m)) {
			continue;
		}
		$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$m[1].'.mp3', $m[1]);
		$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[1].'.mp3', $ws[1]);
		$outs[] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$m[1].'+'.$m[2].'+GUSUP+'.$m[3].'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$ws[1].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
</div>
<?php
}

function sentence_case_c($state, $chap='2x', $case='trm') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/<?=$case;?>c/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$outs = [];

	foreach ($GLOBALS['-ds'] as $c => $f) {
		$trgs = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$c.'/'.$case.'.txt')));
		foreach ($trgs as $k => $trg) {
			$ws = explode("\t", $trg);
			$trgs[$k] = $ws[1];
		}

		$words = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$c.'/base.txt')));
		foreach ($words as $k => $word) {
			$ws = explode("\t", $word);
			$p = '';
			if (!empty($ws[1])) {
				$p = ' ('.$ws[1].')';
			}
			$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[0].'.mp3', $ws[0]);
			$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$trgs[$k].'.mp3', $trgs[$k]);
			$outs[] = '<div class="text-center"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$trgs[$k].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div>';
		}

		if ($c === $chap) {
			break;
		}
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_verbs($state, $chap='3x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/verbs/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$data = '';
	foreach (['vi-1sg', 'vi-3sg', 'vt-3sgo', 'vt-2plo'] as $f) {
		$data = trim($data."\n".trim(file_get_contents('d/lg1/sentence/'.$chap.'/'.$f.'.txt')));
	}
	$words = explode("\n", $data);
	$words = shuffle_values($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		echo '<div class="col-lg-6 my-2 text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}
?>
</div>
</div>
<?php
}

function _sent_rand_helper($root='lg1', $chap, $task='random') {
	if ($task == 'qa-naamik') {
		$task = 'qa-aap';
	}
	if ($task == 'qa-aqa') {
		$task = 'qa-ssa';
	}

	$all = load_corpus($root, $chap, $task);
	$ps = [];

	if ($chap == '5x' && $task == 'nu') {
		$all = array_merge($all, load_corpus($root, $chap, 'nouns'));
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/Fem@', preg_grep('@\+(Abs)@', $all))),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/H[^+]*\+@', preg_grep('@Sem/be_copula\+@', preg_grep('@\+3Sg(\+|\s)@', $all)))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/H[^+]*\+@', preg_grep('@Sem/be_copula\+@', preg_grep('@\+1Sg(\+|\s)@', $all)))),
			];
		return $ps;
	}

	if ($chap == '5x' && $task == 'nqar') {
		$all = array_merge($all, load_corpus($root, $chap, 'nouns'));
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/inst@', preg_grep('@Sem/Hum\+.*Ins@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@ateq\+@', preg_grep('@\+QAR\+@', preg_grep('@\+V(\+|\s)@', $all)))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/Geo@', preg_grep('@\+Lok@', $all))),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(lodge|work)@', preg_grep('@\+1Sg(\+|\s)@', $all))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/Geo\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(lodge|work)@', preg_grep('@\+3Sg(\+|\s)@', $all))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/inst\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@suli\+@', preg_grep('@\+3Sg(\+|\s)@', $all))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/inst\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@suli\+@', preg_grep('@\+1Sg(\+|\s)@', $all))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/Mask\+.*Abs@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@nuliaq\+@', preg_grep('@\+QAR\+@', preg_grep('@\+V(\+|\s)@', preg_grep('@\+3Sg(\+|\s)@', $all))))),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@nuliaq\+@', preg_grep('@\+QAR\+@', preg_grep('@\+V(\+|\s)@', preg_grep('@\+1Sg(\+|\s)@', $all))))),
			];
		return $ps;
	}

	if ($chap == '5x' && $task == 'qa-aap') {
		$all = array_merge($all, load_corpus($root, $chap, 'nouns'));
		$ps[] = [
			preg_grep('@Sem/inst@', preg_grep('@Sem/Hum\+.*Ins@', $all), PREG_GREP_INVERT),
			preg_grep('@ateq\+@', preg_grep('@\+QAR\+@', preg_grep('@\+Int\+2Sg\s@', $all))),
			];
		$ps[] = [
			preg_grep('@Sem/Geo@', preg_grep('@\+Lok@', $all)),
			preg_grep('@Sem/lodge@', preg_grep('@\+Int\+2Sg\s@', $all)),
			];
		$ps[] = [
			preg_grep('@Sem/inst\+.*Lok@', $all),
			preg_grep('@suli\+@', preg_grep('@\+Int\+2Sg\s@', $all)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@nuliaq\+@', preg_grep('@\+QAR\+@', preg_grep('@\+Int\+2Sg\s@', $all))),
			];
		$ps[] = [
			preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all),
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@\+Int\+2Sg\+3SgO(\+|\s)@', $all),
			];
		return $ps;
	}

	if ($chap == '5x' && $task == 'qa-ssa') {
		$ps[] = [
			preg_grep('@Sem/inst@', preg_grep('@Sem/(Mask|Fem|Hum).*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(GUSUP|SSA|NNGIT)\+@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*(Trm|Abl)@', $all),
			preg_grep('@Sem/(run|reach)@', preg_grep('@\+(GUSUP|SSA|NNGIT)\+@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(eat|fn:drink)@', preg_grep('@\+(GUSUP|SSA|NNGIT)\+@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'deny1') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Mask|Fem|Hnat|Hfam)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'invert1') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Mask|Fem|Hnat|Hfam)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(encounter|teach|see).*\+NNGIT@', preg_grep('@\+(SSA|TAR)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'deny2') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+[1234](Sg|Pl)O@', preg_grep('@\+(SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'invert2') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+[1234](Sg|Pl)O@', preg_grep('@\+(SSA|TAR)@', preg_grep('@\+NNGIT.*?\+Int\+2Sg@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'deny3') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(reach|run)@', preg_grep('@\+[1234](Sg|Pl)O@', preg_grep('@\+(SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'invert3') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(reach|run)@', preg_grep('@\+[1234](Sg|Pl)O@', preg_grep('@\+(SSA|TAR)@', preg_grep('@\+NNGIT.*?\+Int\+2Sg@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'summer1') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'summer2') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(reach|run)@', preg_grep('@\+(TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'tomorrow') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'today') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(reach|run).*\+SSA@', preg_grep('@\+(TAR)@', preg_grep('@\+Ind\+1Pl\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'name') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+Sem/create-semantic@', preg_grep('@\+TAQ\b.*?\+Abs\+Sg\+1SgPoss@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', ["taanna\ttaanna"]),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)\b@', preg_grep('@\+Sem/(Fem|Mask)\b.*?\+Ins@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+Sem/be_name\b.*?\+Ind\+3Sg@', $all)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'onewho') {
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+TUQ\+U\+.+?\+Ind\+1(Sg|Pl)\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		$ps[] = [
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@Sem/(be_name|reach|run|drink)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+TUQ\+U\+.+?\+Ind\+3Sg\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	/*
	if ($chap == '0x' && $task == 'i') {
		$ps[] = [
			preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all),
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+Ind\+3Sg\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+Ind\+1Sg\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		$ps[] = [
			preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all),
			preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all),
			preg_grep('@Sem/(reach|run)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+Ind\+3Sg\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all),
			preg_grep('@Sem/(reach|run)@', preg_grep('@\+(SSA|NNGIT)@', preg_grep('@\+Ind\+1Sg\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'food') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(MIU|LI|LU)[+\s]@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@\+TUR\+.*3Sg@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@\+(MIU|LI|LU)[+\s]@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@\+TUR\+.*1Sg@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'food2') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/Fem\+.*Abs@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(MIU|LI|LU)[+\s]@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(NNGIT|LI|LU)[+\s]@', preg_grep('@\+TUR\+.*V\+Ind\+3Sg@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LU)[+\s]@', preg_grep('@Sem/Mask\+.*Abs.*\+LI@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'qa') {
		$ps[] = [
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@\+Int\+2Sg@', $all), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'qa2') {
		$ps[] = [
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/Fem\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/Geo\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@^nuliaq\+Sem/Hfam\+U\+Sem/be_copula\+Gram/IV.*\+3Sg@', $all), PREG_GREP_INVERT),
			];
		$ps[] = [
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/(Fem|Mask)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)[+\s]@', preg_grep('@Sem/Hnat.*\+U\+.*\+3Sg@', $all), PREG_GREP_INVERT),
			];
		echo "\n<!-- ".var_export($ps, true)." -->\n";
		return $ps;
	}
	//*/

	/*
	if ($chap == '2x' && $task == 'affirm1') {
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(be_attribute|learn|lodge|refuse|work|speak_emot)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(be_attribute|learn|lodge|refuse|work|speak_emot)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(run|reach)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(run|reach)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Int\+2Sg\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'affirm2') {
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Fem|Mask)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(socialize|teach|encounter|see)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Fem|Mask)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+Sem/(socialize|teach|encounter|see)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'deny1') {
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(be_attribute|learn|lodge|refuse|work|speak_emot)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT))),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(be_attribute|learn|lodge|refuse|work|speak_emot)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Ind\+1Sg\s@', $all), PREG_GREP_INVERT))),
			];
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(run|reach)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT))),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*(Abl|Trm)@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(run|reach)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Ind\+1Sg\s@', $all), PREG_GREP_INVERT))),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'deny2') {
		$ps[] = [
			["ippassaq\tippassaq"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Fem|Mask)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(socialize|teach|encounter|see)\+@', preg_grep('@\+(SSA|LI|LU|TAR)\b@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT))),
			];
		$ps[] = [
			["aqaguagu\taqaguagu"],
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT),
			preg_grep('@\+(LI|LU)\b@', preg_grep('@Sem/(Fem|Mask)\+.*Abs@', $all), PREG_GREP_INVERT),
			preg_grep('@\+NNGIT@', preg_grep('@\+Sem/(socialize|teach|encounter|see)\+@', preg_grep('@\+(LI|LU|TAR)\b@', preg_grep('@\+SSA\b.*\+Ind\+1Sg\+3SgO\s@', $all), PREG_GREP_INVERT))),
			];
		return $ps;
	}
	//*/

	if ($chap == '2x' && $task == 'u1') {
		$ps[] = [
			preg_grep('@\+TAR\+@', preg_grep('@Sem/(build|dur|drink-h|drink|Lh|ac)\+@', preg_grep('@\+U\+@', preg_grep('@\+Int\+2Sg@', $all)), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'u2') {
		$ps[] = [
			preg_grep('@\+NNGIT@', preg_grep('@\+TAR\+@', preg_grep('@Sem/(build|dur|drink-h|drink|Lh|ac)\+@', preg_grep('@\+U\+@', preg_grep('@\+Int\+2Sg@', $all)), PREG_GREP_INVERT), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'u3') {
		$ps[] = [
			preg_grep('@\+NNGIT@', preg_grep('@\+TAR\+@', preg_grep('@Sem/(build|dur|drink-h|drink|Lh|ac)\+@', preg_grep('@\+U\+@', preg_grep('@\+Int\+2Sg@', $all)), PREG_GREP_INVERT), PREG_GREP_INVERT)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'tp') {
		$ps[] = [
			preg_grep('@Sem/(Hum|Hfam|Hprof).*\+N\+Abs\+Sg\+1SgPoss@', $all),
			preg_grep('@Sem/inst\+.*Lok@', $all),
			preg_grep('@Sem/name@', preg_grep('@\+Int\+2Sg\+3SgO@', $all), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'dk') {
		$ps[] = [
			preg_grep('@(Sem/Fem|anaana|nuliaq|ilinniartitsisoq).*\+N\+Abs\+Sg\+1SgPoss\s@', $all),
			["dronning+N+Ins+Sg\tdronningimik"],
			preg_grep('@Sem/name@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all)),
			];
		$ps[] = [
			preg_grep('@(Sem/Mask|ataata|ilinniartitsisoq).*\+N\+Abs\+Sg\+1SgPoss\s@', $all),
			["kunngi+N+Ins+Sg\tkunngimik"],
			preg_grep('@Sem/name@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'cr') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Pron\+Abs\+2Pl\s@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+(LU|LI)\b@', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_dummy', preg_grep('@\+NNGIT\+@', preg_grep('@Sem/(socialize|remember|teach|encounter|see)\+.*1Sg\+3SgO\s@', $all))),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Hum|Hfam|Hprof)\b.*\+Abs\+Sg\+1SgPoss\+LI\s@', $all)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'pr') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/remember\+.*2Sg\+3SgO@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@uanga\+Pron\+Abs\+1Sg\s@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@(Sem/(Geo|inst|lodge)\+.*Lok)|(Pron\+Lok\+2Pl\s)@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(work|learn)\+.*Par\+1Sg@', $all)),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/remember\+.*2Sg\+3SgO@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@uanga\+Pron\+Abs\+1Sg\s@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Geo|inst)\+.*(Trm|Abl)@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(work|learn)\+.*Par\+1Sg@', $all)),
			];
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/remember\+.*2Sg\+3SgO@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@uanga\+Pron\+Abs\+1Sg\s@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Pron\+(Lok|Trm|Abl)\+2Pl@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(work|learn)\+.*Par\+1Sg@', $all)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'dr') {
		$ps[] = [
			array_map('\LGO\pfx_dummy', preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all)),
			array_map('\LGO\pfx_dummy', preg_grep('@TAQ\+QAR\+Sem/have\+V\+Ind\+(1Sg|3Sg|1Pl)@', $all)),
			];
		return $ps;
	}

	if ($chap == '2x' && $task == 'da') {
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@TAQ\+QAR\+Sem/have\+V\+Int\+2Sg@', $all),
			];
		return $ps;
	}

	if ($chap == '4x' || $chap == '5x') {
		$ps[] = [
			array_map('\LGO\pfx_fname', preg_grep('@Sem/inst@', preg_grep('@Sem/(Mask|Fem).*Abs@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_subj', preg_grep('@Sem/(Mask|Fem|inst)@', preg_grep('@Sem/Hum.*Abs@', $all), PREG_GREP_INVERT)),
			array_map('\LGO\pfx_advlr', preg_grep('@Sem/(Geo|inst)@', preg_grep('@\+Lok@', $all))),
			array_map('\LGO\pfx_verb', preg_grep('@Sem/(food-h|drink)\+@', preg_grep('@Sem/(fn:drink|eat)\+@', preg_grep('@\+3Sg(\+|\s)@', $all)))),
			];
		$ps[] = [
			array_map('\LGO\pfx_advlr', preg_grep('@Sem/(Geo|inst)@', preg_grep('@\+Lok@', $all))),
			array_map('\LGO\pfx_verb', preg_grep('@Sem/(food-h|drink)\+@', preg_grep('@Sem/(fn:drink|eat)\+@', preg_grep('@\+1Sg(\+|\s)@', $all)))),
			];
	}

	$ps[] = [
		array_map('\LGO\pfx_subj', preg_grep('@Sem/inst@', preg_grep('@Sem/(Mask|Fem|Hum).*Abs@', $all), PREG_GREP_INVERT)),
		array_map('\LGO\pfx_advlr', preg_grep('@Sem/Geo@', preg_grep('@\+(Trm|Abl)@', $all))),
		array_map('\LGO\pfx_pred', preg_grep('@Sem/(run|reach)\+@', preg_grep('@\+3Sg(\+|\s)@', $all))),
		];
	$ps[] = [
		array_map('\LGO\pfx_advlr', preg_grep('@Sem/Geo@', preg_grep('@\+(Trm|Abl)@', $all))),
		array_map('\LGO\pfx_pred', preg_grep('@Sem/(run|reach)\+@', preg_grep('@\+1Sg(\+|\s)@', $all))),
		];
	$ps[] = [
		array_map('\LGO\pfx_obj', preg_grep('@Sem/inst@', preg_grep('@Sem/(Mask|Fem|Hum).*Abs@', $all), PREG_GREP_INVERT)),
		array_map('\LGO\pfx_advlr', preg_grep('@Sem/(Geo|inst)@', preg_grep('@\+Lok@', $all))),
		array_map('\LGO\pfx_pred', preg_grep('@Sem/(encounter|teach)\+@', preg_grep('@\+1Sg\+3SgO@', $all))),
		];
	$ps[] = [
		array_map('\LGO\pfx_obj', preg_grep('@\+Pron\+.*Abs@', $all)),
		array_map('\LGO\pfx_advlr', preg_grep('@Sem/(Geo|inst)@', preg_grep('@\+Lok@', $all))),
		array_map('\LGO\pfx_pred', preg_grep('@Sem/(encounter|teach)\+@', preg_grep('@\+1Sg\+2PlO@', $all))),
		];

	return $ps;
}

function sentence_random_qa($root='lg1', $state, $chap='5x', $task='random') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:<?=$root;?>/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ps = _sent_rand_helper($root, $chap, $task);
	$all = load_corpus($root, $chap);

	foreach ($all as $k => $v) {
		unset($all[$k]);
		$v = explode("\t", $v);
		$all[$v[0]] = $v[1];
	}

	$sents = [];
	foreach ($ps as $p) {
		$outs = [];
		foreach ($p as $k => $vs) {
			$p[$k] = shuffle_values($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = $c;
			if (count($outs) >= 25000) {
				break;
			}
		}
		$outs = shuffle_values($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $sent) {
		$qst = [];
		$ans = [];

		if ($task == 'qa-aap' || $task == 'qa' || $task == 'affirm1' || $task == 'affirm2' || $task == 'u1' || $task == 'tp' || $task == 'dk' || $task == 'da') {
			$ans[] = 'Aap,';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				if (strpos($w[0], '+') !== false && empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]] ?? $w[0];
			}
		}
		else if ($chap == '2x' && $task == 'u2') {
			$ans[] = 'Naamik,';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				if (strpos($w[0], '+GALUAR+V+') !== false) {
					$w[0] = str_replace('+GALUAR+V+', '+NNGIT+GALUAR+V+', $w[0]);
				}
				else {
					$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if (($chap == '1x' || $chap == '2x') && ($task == 'deny1' || $task == 'deny2' || $task == 'u3')) {
			$ans[] = 'Naamik,';
			$inv = false;
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				if ($w[0] === 'aqaguagu') {
					$inv = true;
				}
				if (strpos($w[0], '+NNGIT+') !== false && $inv) {
					$q0 = str_replace('+NNGIT+', '+', $w[0]);
					$q0 = str_replace('+Ind+1Sg', '+Int+2Sg', $q0);
					if (!array_key_exists($q0, $all)) {
						continue 2;
					}
					$qst[] = $all[$q0];
				}
				else {
					$qst[] = $w[1];
					$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
					$w[0] = str_replace('+NNGIT+', '+', $w[0]);
				}
				if (strpos($w[0], '+') !== false && empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]] ?? $w[0];
			}
		}
		else if ($task == 'qa2') {
			$ans[] = 'Naamik,';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];

				if (strpos($w[0], '+NNGIT+') !== false) {
					$w[0] = str_replace('+NNGIT+V+', '+V+', $w[0]);
					if (!array_key_exists($w[0], $all)) {
						$w[0] = str_replace('+Gram/IV+V+', '+V+', $w[0]);
					}
				}
				else {
					$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
					if (!array_key_exists($w[0], $all)) {
						$w[0] = str_replace('+NNGIT+V+', '+Gram/IV+NNGIT+V+', $w[0]);
					}
				}

				if (!array_key_exists($w[0], $all)) {
					$ans[] = "(Not found: {$w[0]})";
				}
				else {
					$ans[] = $all[$w[0]];
				}
			}
		}
		else if ($task == 'qa-naamik') {
			$ans[] = 'Naamik,';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'qa-ssa') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, aqaguagu';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+SSA+V+', $w[0]);
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'qa-aqa') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, ippassaq';
			foreach ($sent as $k => $w) {
				$w = explode("\t", $w);
				$sent[$k] = $w[0];
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
			$ans[] = 'aqaguaguli';
			foreach ($sent as $k => $w) {
				$w = str_replace('+Int+2Sg', '+Ind+1Sg', $w);
				$w = str_replace('+V+', '+SSA+V+', $w);
				if (empty($all[$w])) {
					continue 2;
				}
				$ans[] = $all[$w];
			}
		}
		else if ($chap == '0x' && ($task == 'deny1' || $task == 'deny2' || $task == 'deny3')) {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, ippassaq';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if ($chap == '0x' && ($task == 'invert1' || $task == 'invert2' || $task == 'invert3')) {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, ippassaq';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+NNGIT+', '+', $w[0]);
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'summer1' || $task == 'summer2') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, aasakkuinnaq';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+TAR+V+', $w[0]);
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'tomorrow') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, aqaguli';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+SSA+V+', $w[0]);
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'today') {
			$qst[] = 'Ullumi';
			$ans[] = 'Aap, ullumi';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				if (empty($all[$w[0]])) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'onewho') {
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$q0 = $w[0];
				if (strpos($q0, '+TUQ+U+') !== false) {
					$q0 = str_replace('+TUQ+U+Sem/copula+', '+', $q0);
					$q0 = str_replace('+TUQ+U+', '+', $q0);
					if (empty($all[$q0])) {
						continue 2;
					}
				}
				$qst[] = $all[$q0];
				$ans[] = $w[1];
			}
		}

		$qst = mb_ucfirst(implode(' ', $qst).'?');
		$ans = mb_ucfirst(implode(' ', $ans));

		if ($task == 'onewho') {
			$qst = substr($qst, 0, -1);
			$qst .= '.';
		}

		$outs[] = '<div><div class="text-center entry"><audio src="/martha/?t='.urlencode($qst).'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <button type="button" class="btn btn-secondary">☼</button> <div class="my-2 hint">'.$qst.'</div></div><div class="my-2 text-center entry"> <input type="text" spellcheck="false" class="form-control" data-check="'.$ans.'"> <button type="button" class="btn btn-warning">✓</button> <audio src="/martha/?t='.$ans.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_random_qa_sqlite($root='lg1', $state, $chap='5x', $task='random') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:<?=$root;?>/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php

	$db = new \TDC\PDO\SQLite('d/'.$root.'/sentence/'.$chap.'/'.$GLOBALS['-db-map'][$task].'.sqlite', [\PDO::SQLITE_ATTR_OPEN_FLAGS => \PDO::SQLITE_OPEN_READONLY]);
	$sents = $db->prepexec("SELECT * FROM qas ORDER BY RANDOM() LIMIT 100")->fetchAll();

	$outs = [];
	foreach ($sents as $sent) {
		$qst = $ans = '';
		if (!empty($sent['qa_q_txt'])) {
			$qst = $sent['qa_q_txt'];
			$ans = $sent['qa_a_txt'];
		}
		else {
			$qst = array_column(json_decode($sent['qa_q'], true), 1);
			$ans = array_column(json_decode($sent['qa_a'], true), 1);

			if ($task == 'lu1') {
				$qst = trim_ucfirst(implode(' ', $qst).'.');
			}
			else {
				$qst = mb_ucfirst(implode(' ', $qst).'?');
			}
			$ans = mb_ucfirst(implode(' ', $ans));
		}

		$outs[] = '<div><div class="text-center entry"><audio src="/martha/?t='.urlencode($qst).'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <button type="button" class="btn btn-secondary">☼</button> <div class="my-2 hint">'.$qst.'</div></div><div class="my-2 text-center entry"> <input type="text" spellcheck="false" class="form-control" data-check="'.$ans.'"> <button type="button" class="btn btn-warning">✓</button> <audio src="/martha/?t='.$ans.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_random_read($root='lg2', $state, $chap='0x', $task='random') {
?>
<div class="task task-audio task-read container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:<?=$root;?>/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ps = _sent_rand_helper($root, $chap, $task);

	$all = [];
	if ($task == 'food2' || $task == 'cr') {
		$all = load_corpus($root, $chap);
	}

	$sents = [];
	foreach ($ps as $p) {
		$outs = [];
		foreach ($p as $k => $vs) {
			foreach ($vs as $ka => $va) {
				$p[$k][$ka] = explode("\t", $va[1]);
			}
			$p[$k] = shuffle_values($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = $c;
			if (count($outs) >= 25000) {
				break;
			}
		}
		$outs = shuffle_values($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $ws) {
		if ($task == 'food2') {
			$ws[] = $ws[1];
			$nngit = preg_grep('@^\Q'.str_replace('+V+', '+NNGIT+V+', $ws[2][0]).'\E\t@', $all);
			$ws[] = explode("\t", reset($nngit));
		}
		else if ($task == 'cr') {
			$ws[] = $ws[1];
			$ws[] = $ws[2];

			$ws[2][0] = str_replace('+NNGIT+', '+', $ws[2][0]);
			$ws[2][0] = str_replace('+3SgO', '+2PlO', $ws[2][0]);
			$nngit = preg_grep('@^\Q'.$ws[2][0].'\E\t@', $all);
			$ws[2] = explode("\t", reset($nngit));
		}

		$ana = implode('<br>', array_column($ws, 0));
		$sent = implode(' ', array_column($ws, 1));
		$outs[] = '<div class="text-center entry"><div class="mb-3">'.$sent.'<br><code class="text-left text-wrap hint my-1">'.$ana.'</code></div><div><audio src="/martha/?t='.$sent.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <button type="button" class="btn btn-secondary">☼</button></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_random_read_sqlite($root='lg2', $state, $chap='0x', $task='random') {
?>
<div class="task task-audio task-read container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:<?=$root;?>/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php

	$db = new \TDC\PDO\SQLite('d/'.$root.'/sentence/'.$chap.'/'.$GLOBALS['-db-map'][$task].'.sqlite', [\PDO::SQLITE_ATTR_OPEN_FLAGS => \PDO::SQLITE_OPEN_READONLY]);
	if ($task == 'obj1') {
		$sents = $db->prepexec("SELECT * FROM qas ORDER BY RANDOM() LIMIT 100")->fetchAll();
	}
	else {
		$sents = $db->prepexec("SELECT * FROM qs ORDER BY RANDOM() LIMIT 100")->fetchAll();
	}

	$outs = [];
	foreach ($sents as $ws) {
		if ($task == 'obj1') {
			$q = json_decode($ws['qa_q'], true);
			$a = json_decode($ws['qa_a'], true);
			$ana = implode('<br>', array_column($q, 0));
			$ana .= '<br>'.implode('<br>', array_column($a, 0));
			$sent = mb_ucfirst(implode(' ', array_column($q, 1)));
			$sent .= mb_ucfirst(implode(' ', array_column($a, 1)));
		}
		else {
			$q = json_decode($ws['q'], true);
			$ana = implode('<br>', array_column($q, 0));
			$sent = mb_ucfirst(implode(' ', array_column($q, 1)));
		}
		$sent = preg_replace_callback('~( ⇒ )(.)~u', '\LGO\cb_ucfirst', $sent);

		if (!empty($ws['q_txt'])) {
			$sent = $ws['q_txt'];
		}

		$audio = $sent;
		$audio = preg_replace('~<br>~', '. ', $audio);
		$audio = preg_replace('~\{t:[^}\s]*\}:?\s*~', '', $audio);
		$audio = trim($audio);
		$outs[] = '<div class="text-center entry"><div class="mb-3">'.$sent.'<br><code class="text-left text-wrap hint my-1">'.$ana.'</code></div><div><audio src="/martha/?t='.$audio.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <button type="button" class="btn btn-secondary">☼</button></div></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_random_listen($root='lg1', $state, $chap='3x', $task='random') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:<?=$root;?>/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ps = _sent_rand_helper($root, $chap, $task);

	$sents = [];
	foreach ($ps as $p) {
		$outs = [];
		foreach ($p as $k => $vs) {
			foreach ($vs as $ka => $va) {
				$p[$k][$ka] = explode("\t", $va[1])[1];
			}
			$p[$k] = shuffle_values($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = implode(' ', $c);
			if (count($outs) >= 500) {
				break;
			}
		}
		$outs = shuffle_values($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $sent) {
		$outs[] = '<div class="text-center entry"><audio src="/martha/?t='.$sent.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$sent.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary playAfter" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<?php
}

function sentence_random_write($state, $chap='3x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/randp/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ps = _sent_rand_helper('lg1', $chap);

	$sents = [];
	foreach ($ps as $p) {
		$outs = [];
		foreach ($p as $k => $vs) {
			foreach ($vs as $ka => $vat) {
				$va = explode("\t", $vat[1]);
				$bf = explode('+', $va[0], 2);
				$p[$k][$ka] = [$vat[0], [$bf[0], $bf[1], $va[1]]];
			}
			$p[$k] = shuffle_values($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = $c;
			if (count($outs) >= 500) {
				break;
			}
		}
		$outs = shuffle_values($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$db = new \TDC\PDO\SQLite(__DIR__.'/../docs/docs.sqlite', [\PDO::SQLITE_ATTR_OPEN_FLAGS => \PDO::SQLITE_OPEN_READONLY]);

	$tags = [];
	$outs = [];
	foreach ($sents as $ks => $sent) {
		foreach ($sent as $k => $ts) {
			$ts[1][1] = preg_replace('~[^/+]+/[^/+]+\+~', '', $ts[1][1]);
			$ts[1][1] = str_replace('+', ' + ', $ts[1][1]);
			$ts[1][1] = explode(' + ', $ts[1][1]);
			$sent[$k] = $ts;
			$tags = array_merge($tags, $ts[1][1]);
		}
		$sents[$ks] = $sent;
	}

	$tags = array_values(array_unique($tags));
	$stm = $db->prepexec("SELECT l_id, a_title, a_ref, a_ref_url, a_short, a_long FROM lookups INNER JOIN articles ON (l_{$state['lang']} = a_id) WHERE l_id IN (?".str_repeat(', ?', count($tags)-1).")", $tags);
	$tags = [];
	$js = '';
	while ($row = $stm->fetch()) {
		$tags[$row['l_id']] = $row;
		$js .= 'g_tips['.json_encode_vb($row['l_id']).'] = '.json_encode_num($row).";\n";
	}

	foreach ($sents as $sent) {
		$words = [];
		$lis = [];
		foreach ($sent as $ts) {
			$s = $ts[1];
			foreach ($s[1] as $k => $t) {
				if (array_key_exists($t, $tags)) {
					$s[1][$k] = '<a class="tip">'.$t.'</a>';
				}
			}
			$s[1] = implode(' + ', $s[1]);
			$li = "{t:tmpl/{$ts[0]}}: {$s[0]} + {$s[1]}";
			$lis[] = $li;
			$words[] = $s[2];
		}

		$lis = implode('</li><li>', $lis);
		$words = implode(' ', $words);
		$outs[] = '<div class="text-center entry"><div class="text-left"><b>{t:senttmpl}</b>:<ul><li>'.$lis.'</li></ul></div><input type="text" spellcheck="false" class="form-control" data-check="'.$words.'"> <button type="button" class="btn btn-warning">✓</button> <audio src="/martha/?t='.$words.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
<div class="col-3 text-left">
<button type="button" class="btn btn-outline-primary" id="btnNext">{t:next}</button>
</div>
</div>
</div>
<script>
<?=$js;?>
</script>
<?php
}

function sentence_all($state, $chap='2x') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/all/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$cases = [];
	$prep = [];
	$div = 100.0/count($GLOBALS['-ds'][$chap]);

	foreach ($GLOBALS['-ds'][$chap] as $case) {
		$cs = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$chap.'/'.$case.'.txt')));
		foreach ($cs as $k => $c) {
			$ws = explode("\t", $c);
			$cs[$k] = $ws[1];
		}
		$cases[$case] = $cs;
		$prep[$case] = [];
	}

	$words = explode("\n", trim(file_get_contents('d/lg1/sentence/'.$chap.'/base.txt')));
	foreach ($words as $k => $word) {
		$ws = explode("\t", $word);
		$p = '';
		if (!empty($ws[1])) {
			$p = ' ('.$ws[1].')';
		}

		foreach ($GLOBALS['-ds'][$chap] as $case) {
			$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[0].'.mp3', $ws[0]);
			$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$cases[$case][$k].'.mp3', $cases[$case][$k]);
			$prep[$case][] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$ws[0].$p.' + '.mb_ucfirst($case).'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$cases[$case][$k].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
		}
	}

	$outs = [];
	foreach ($GLOBALS['-ds'][$chap] as $case) {
		$prep[$case] = shuffle_values($prep[$case]);
		if (count($prep[$case]) >= $div) {
			$prep[$case] = array_slice($prep[$case], 0, intval($div));
		}
		$outs = array_merge($outs, $prep[$case]);
	}

	$outs = shuffle_values($outs);
	foreach ($outs as $out) {
		echo $out;
	}
?>
</div>
</div>
<?php
}

function sentence($state, $chap, $task) {
	\LGO\header($state, 'lg1', $chap.'/'.$task);
	if ($chap == '5x') {
		if ($task === 'nu' || $task === 'nqar') {
			\LGO\sentence_random_listen('lg1', $state, $chap, $task);
		}
		else if ($task === 'qa-aap' || $task === 'qa-naamik' || $task === 'qa-ssa' || $task === 'qa-aqa') {
			\LGO\sentence_random_qa('lg1', $state, $chap, $task);
		}
		else if ($task === 'randp') {
			\LGO\sentence_random_write($state, $chap);
		}
	}
	else if ($task === 'listen') {
		\LGO\sentence_listen($state, $chap);
	}
	else if ($task === 'listenv') {
		\LGO\sentence_listen_v($state, $chap);
	}
	else if ($task === 'listeng') {
		\LGO\sentence_listen_g($state, $chap);
	}
	else if ($task === 'listenc') {
		\LGO\sentence_listen_c($state, $chap);
	}

	else if ($task === 'trm') {
		\LGO\sentence_case($state, $chap, 'trm');
	}
	else if ($task === 'abl') {
		\LGO\sentence_case($state, $chap, 'abl');
	}
	else if ($task === 'lok') {
		\LGO\sentence_case($state, $chap, 'lok');
	}

	else if ($task === 'prod') {
		\LGO\sentence_prod_v($state, $chap);
	}
	else if ($task === 'prodg') {
		\LGO\sentence_prod_g($state, $chap);
	}

	else if ($task === 'trmc') {
		\LGO\sentence_case_c($state, $chap, 'trm');
	}
	else if ($task === 'ablc') {
		\LGO\sentence_case_c($state, $chap, 'abl');
	}
	else if ($task === 'lokc') {
		\LGO\sentence_case_c($state, $chap, 'lok');
	}

	else if ($task === 'verbs') {
		\LGO\sentence_verbs($state, $chap);
	}

	else if ($task === 'random') {
		\LGO\sentence_random_listen('lg1', $state, $chap);
	}
	else if ($task === 'randp') {
		\LGO\sentence_random_write($state, $chap);
	}
	else {
		\LGO\sentence_all($state, $chap);
	}
	\LGO\footer($state);
}

function sentence_lg2($state, $chap, $task) {
	\LGO\header($state, 'lg2', $chap.'/'.$task);

	if ($task === 'food' || $task === 'food2' || $task === 'cr' || $task === 'pr' || $task === 'dr' || $task === 'name') {
		\LGO\sentence_random_read('lg2', $state, $chap, $task);
	}
	else if (preg_match('~^(part1|obj\d|that1|indirect1|una1|niq1|review\d+|cntp1|cau2)$~', $task)) {
		\LGO\sentence_random_read_sqlite('lg2', $state, $chap, $task);
	}
	else if (($chap == '1x' || $chap == '2x' || $chap == '3x' || $chap == '4x' || $chap == '5x' || $chap == '6x') && preg_match('~^(affirm\d|deny\d|part2|lu1|laar\d|fam\d|that\d|cntp\d|summer\d|so\d|galuar\d|cau\d|schwa\d)$~', $task)) {
		\LGO\sentence_random_qa_sqlite('lg2', $state, $chap, $task);
	}
	else if ($task == 'lik1') {
		require_once __DIR__.'/html.php';
		\LGO\just_html('lg2', $state, $chap, $task);
	}
	else {
		\LGO\sentence_random_qa('lg2', $state, $chap, $task);
	}

	\LGO\footer($state);
}
