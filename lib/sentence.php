<?php
namespace LGO;

require_once __DIR__.'/cartesian.php';

$GLOBALS['-ds'] = [
	'2x' => ['abl', 'trm'],
	'3x' => ['abl', 'trm', 'lok'],
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
	$data = '';
	foreach ($GLOBALS['-ds'][$chap] as $f) {
		$data = trim($data."\n".trim(file_get_contents('d/lg1/sentence/'.$chap.'/'.$f.'.txt')));
	}
	$words = explode("\n", $data);
	shuffle($words);
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
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+GUSUP\+@', preg_grep('@\+(QAR|TUR)\+@', $all), PREG_GREP_INVERT);

	shuffle($words);
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
	$all = load_corpus('lg1', $chap);
	$words = preg_grep('@\+(QAR|TUR)\+@', preg_grep('@\+GUSUP\+@', $all));

	shuffle($words);
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
	shuffle($words);
	foreach ($words as $word) {
		$word = explode("\t", $word)[1];
		$mp3 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$word.'.mp3', $word);
		echo '<div class="text-center entry"><audio src="'.$mp3.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
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
		$mp3_1 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$ws[0].'.mp3', $ws[0]);
		$mp3_2 = mp3_or_martha('{t:prefix}/d/lg1/sentence/mp3/'.$trgs[$k].'.mp3', $trgs[$k]);
		$outs[] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$ws[0].$p.'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$trgs[$k].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
	}

	shuffle($outs);
	foreach ($outs as $out) {
		echo $out;
	}
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

	shuffle($outs);
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

	shuffle($outs);
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

	shuffle($outs);
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
	shuffle($words);
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

	if ($chap == '0x' && $task == 'deny') {
		$ps[] = [
			preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all),
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(GALUAR|SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+(GALUAR|SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

	if ($chap == '0x' && $task == 'summer') {
		$ps[] = [
			preg_grep('@Sem/(Mask|Fem)\+.*Abs@', $all),
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(encounter|teach|see)@', preg_grep('@\+(GALUAR|SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\+3SgO\s@', $all), PREG_GREP_INVERT)),
			];
		$ps[] = [
			preg_grep('@Sem/(Geo|inst)\+.*Lok@', $all),
			preg_grep('@Sem/(be_name|reach|run)@', preg_grep('@\+(GALUAR|SSA|TAR|NNGIT)@', preg_grep('@\+Int\+2Sg\s@', $all), PREG_GREP_INVERT), PREG_GREP_INVERT),
			];
		return $ps;
	}

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
			shuffle($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = $c;
			if (count($outs) >= 500) {
				break;
			}
		}
		shuffle($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $sent) {
		$qst = [];
		$ans = [];

		if ($task == 'qa-aap') {
			$ans[] = 'Aap,';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$ans[] = $all[$w[0]];
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
		else if ($task == 'deny') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, ippassaq';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+NNGIT+V+', $w[0]);
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'summer') {
			$qst[] = 'Ippassaq';
			$ans[] = 'Naamik, aasakkuinnaq';
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				$w[0] = str_replace('+Int+2Sg', '+Ind+1Sg', $w[0]);
				$w[0] = str_replace('+V+', '+TAR+V+', $w[0]);
				$ans[] = $all[$w[0]];
			}
		}
		else if ($task == 'i') {
			foreach ($sent as $w) {
				$w = explode("\t", $w);
				$qst[] = $w[1];
				if (strpos($w[0], '+V+') !== false) {
					$w[0] = str_replace('+Sem/', '+iSem/', $w[0]);
					$w[0] = str_replace('+V+', '+TUQ+U+V+', $w[0]);
				}
				if (!array_key_exists($w[0], $all)) {
					continue 2;
				}
				$ans[] = $all[$w[0]];
			}
		}

		$qst = implode(' ', $qst).'?';
		$ans = implode(' ', $ans);

		if ($task == 'i') {
			$qst = substr($qst, 0, -1);
			$qst .= '.';
		}

		$outs[] = '<div><div class="text-center entry"><audio src="/martha/?t='.urlencode($qst).'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <button type="button" class="btn btn-secondary">☼</button> <div class="my-2 hint">'.$qst.'</div></div><div class="my-2 text-center entry"> <input type="text" spellcheck="false" class="form-control" data-check="'.$ans.'"> <button type="button" class="btn btn-warning">✓</button> <audio src="/martha/?t='.$ans.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div></div>';
	}

	shuffle($outs);
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

function sentence_random_listen($state, $chap='3x', $task='random') {
?>
<div class="task task-text task-audio container-fluid sentence">
<div class="row mb-3">
<div class="col">
<p>{t:lg1/<?=$chap;?>/<?=$task;?>/text}</p>
</div>
</div>
<div class="row">
<div class="col-3 text-right">
<button type="button" class="btn btn-outline-primary" id="btnPrev">{t:prev}</button>
</div>
<div class="col-6 my-2 text-center" id="shuffled">
<?php
	$ps = _sent_rand_helper('lg1', $chap, $task);

	$sents = [];
	foreach ($ps as $p) {
		$outs = [];
		foreach ($p as $k => $vs) {
			foreach ($vs as $ka => $va) {
				$p[$k][$ka] = explode("\t", $va[1])[1];
			}
			shuffle($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = implode(' ', $c);
			if (count($outs) >= 500) {
				break;
			}
		}
		shuffle($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $sent) {
		$outs[] = '<div class="text-center entry"><audio src="/martha/?t='.$sent.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" spellcheck="false" class="form-control" data-check="'.$sent.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}

	shuffle($outs);
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
			shuffle($p[$k]);
		}
		foreach (cartesian_product($p) as $c) {
			$outs[] = $c;
			if (count($outs) >= 500) {
				break;
			}
		}
		shuffle($outs);
		$outs = array_slice($outs, 0, 25);
		$sents = array_merge($sents, $outs);
	}

	$outs = [];
	foreach ($sents as $sent) {
		$words = [];
		$lis = [];
		foreach ($sent as $ts) {
			$s = $ts[1];
			$s[1] = preg_replace('~[^/+]+/[^/+]+\+~', '', $s[1]);
			$s[1] = str_replace('+', ' + ', $s[1]);
			$li = "{t:tmpl/{$ts[0]}}: {$s[0]} + {$s[1]}";
			$lis[] = $li;
			$words[] = $s[2];
		}

		$lis = implode('</li><li>', $lis);
		$words = implode(' ', $words);
		$outs[] = '<div class="text-center entry"><div class="text-left"><b>{t:senttmpl}</b>:<ul><li>'.$lis.'</li></ul></div><input type="text" spellcheck="false" class="form-control" data-check="'.$words.'"> <button type="button" class="btn btn-warning">✓</button> <audio src="/martha/?t='.$words.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button><br><code class="hint my-1"></code></div>';
	}

	shuffle($outs);
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
			$prep[$case][] = '<div class="col-lg-6 my-2 text-center"><div class="row"><div class="col-12">'.$ws[0].$p.' + '.ucfirst($case).'</div><div class="col-12"><span class="entry"><audio src="'.$mp3_1.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></span> <span class="entry"><input type="text" spellcheck="false" class="form-control" data-check="'.$cases[$case][$k].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <audio src="'.$mp3_2.'" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-info">▶</button> <button type="button" class="btn btn-secondary">☼</button></span><br><code class="hint my-1"></code></span></div></div></div>';
		}
	}

	$outs = [];
	foreach ($GLOBALS['-ds'][$chap] as $case) {
		shuffle($prep[$case]);
		if (count($prep[$case]) >= $div) {
			$prep[$case] = array_slice($prep[$case], 0, intval($div));
		}
		$outs = array_merge($outs, $prep[$case]);
	}

	shuffle($outs);
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
			\LGO\sentence_random_listen($state, $chap, $task);
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
		\LGO\sentence_random_listen($state, $chap);
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
	if ($chap == '0x') {
		\LGO\sentence_random_qa('lg2', $state, $chap, $task);
	}
	\LGO\footer($state);
}
