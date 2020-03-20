<?php

function lg_updown_data($state) {
	extract($state, EXTR_SKIP);

	$gloss = file_get_contents('d/lg1/updown/'.$lang.'.txt');
	$gloss = preg_replace('~#[^\n]*\n+~', "\n", $gloss);
	$gloss = preg_replace('~\n\n+~', "\n", $gloss);
	$gloss = explode("\n", trim($gloss));
	foreach ($gloss as $i => $g) {
		$g = explode("\t", $g);
		unset($gloss[$i]);
		$gloss[$g[0]] = $g[1] ?? $g[0];
	}

	$kals = explode("\n", trim(file_get_contents('d/lg1/updown/updown.txt')));
	foreach ($kals as $i => $k) {
		$k = explode("\t", $k);
		$k[2] = '';
		$k[3] = '';
		$ts = preg_split('~(?=[-+])~', $k[1]);
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

	return $kals;
}

function lg_updown_1($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-updown container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/updown/1/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (lg_updown_data($state) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-8 py-1">'.$e[0].'</div><div class="col-4"><button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row"><code class="col-12 ua" data-a="'.$e[1].'" data-t="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function lg_updown_2($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-updown container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/updown/2/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (lg_updown_data($state) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-12 py-1"><code>'.$e[1].'</code></div></div><div class="row"><div class="col-12 py-1"><input type="text" spellcheck="false" class="form-control" data-check="'.$e[0].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></span></div></div><div class="row"><code class="col-12 ua" data-a="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function lg_updown_3($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task task-text task-updown container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/updown/3/text}</p>
</div>
</div>
<div class="row alternate" lang="kl-GL">
<?php
	foreach (lg_updown_data($state) as $e) {
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-12 py-1"><code>'.htmlspecialchars($e[3]).'</code></div></div><div class="row"><div class="col-12 py-1"><input type="text" spellcheck="false" class="form-control" data-check="'.$e[0].'"> <span class="text-nowrap"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></span></div></div><div class="row"><code class="col-12 ua" data-a="'.htmlspecialchars($e[2]).'"></code></div></div>';
	}
?>
</div>
</div>
<?php
}

function lg_updown($state, $which) {
	lg_header($state, 'lg1', 'updown/'.$which);
	if ($which === '1') {
		lg_updown_1($state);
	}
	else if ($which === '2') {
		lg_updown_2($state);
	}
	else {
		lg_updown_3($state);
	}
	lg_footer($state);
}
