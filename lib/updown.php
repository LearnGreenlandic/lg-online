<?php
namespace LGO;

function updown_data($state, $where='lg1/updown', $which='updown') {
	extract($state, EXTR_SKIP);

	$gloss = file_get_contents('d/'.$where.'/'.$lang.'.txt');
	$gloss = preg_replace('~#[^\n]*\n+~', "\n", $gloss);
	$gloss = preg_replace('~\n\n+~', "\n", $gloss);
	$gloss = explode("\n", trim($gloss));
	foreach ($gloss as $i => $g) {
		$g = explode("\t", $g);
		unset($gloss[$i]);
		$gloss[$g[0]] = $g[1] ?? $g[0];
	}

	$kals = explode("\n", trim(file_get_contents('d/'.$where.'/'.$which.'.txt')));
	foreach ($kals as $i => $k) {
		$k = explode("\t", $k);
		$k[2] = '';
		$k[3] = '';
		$ts = preg_split('~(?=[-+<])~', $k[1]);
		$m = 0;
		foreach ($ts as $t) {
			$m = max($m, mb_strlen($t));
		}
		foreach ($ts as $t) {
			$pad = str_repeat(' ', $m - mb_strlen($t) + 5);
			$k[2] .= "{$t}{$pad}{$gloss[$t]}\n";
			$k[3] .= ($gloss[$t] ?? $t).' + ';
		}
		$k[3] = trim($k[3], '+ ');
		$kals[$i] = $k;
	}
	shuffle($kals);
	$kals = array_slice($kals, 0, 100);

	return $kals;
}

function updown_1($state, $where='lg1/updown', $which='updown') {
?>
<div class="task task-updown container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/updown/1/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (\LGO\updown_data($state, $where, $which) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-8 py-1">'.htmlspecialchars($e[0]).'</div><div class="col-4"><button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row"><code class="col-12 ua" data-a="'.$e[1].'" data-t="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function updown_2($state, $where='lg1/updown', $which='updown') {
?>
<div class="task task-text task-updown container-fluid">
<div class="row">
<div class="col">
<p>{t:<?=$where;?>/2/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (\LGO\updown_data($state, $where, $which) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-12 py-1"><code>'.htmlspecialchars($e[1]).'</code></div></div><div class="row"><div class="col-12 py-1"><input type="text" spellcheck="false" class="form-control" data-check="'.$e[0].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></span></div></div><div class="row"><code class="col-12 ua" data-a="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function updown_3($state, $where='lg1/updown', $which='updown') {
?>
<div class="task task-text task-updown container-fluid">
<div class="row">
<div class="col">
<p>{t:<?=$where;?>/3/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (\LGO\updown_data($state, $where, $which) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-12 py-1"><code>'.htmlspecialchars($e[3]).'</code></div></div><div class="row"><div class="col-12 py-1"><input type="text" spellcheck="false" class="form-control" data-check="'.$e[0].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></span></div></div><div class="row"><code class="col-12 ua" data-a="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function updown_lg1($state, $which) {
	\LGO\header($state, 'lg1', 'updown/'.$which);
	if ($which === '1') {
		\LGO\updown_1($state);
	}
	else if ($which === '2') {
		\LGO\updown_2($state);
	}
	else {
		\LGO\updown_3($state);
	}
	\LGO\footer($state);
}

function updown_lg2($state, $which) {
	\LGO\header($state, 'lg2', 'fsts/'.$which);
	$s = substr($which, -1);
	if ($s === '1') {
		\LGO\updown_1($state, 'lg2/fsts', substr($which, 0, 3));
	}
	else if ($s === '2') {
		\LGO\updown_2($state, 'lg2/fsts', substr($which, 0, 3));
	}
	else {
		\LGO\updown_3($state, 'lg2/fsts', substr($which, 0, 3));
	}
	\LGO\footer($state);
}
