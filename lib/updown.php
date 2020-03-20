<?php

function lg_updown_data($state) {
	extract($state, EXTR_SKIP);
	$kals = explode("\n", trim(file_get_contents('d/lg1/updown/updown.txt')));

	$gloss = file_get_contents('d/lg1/updown/'.$lang.'.txt');
	$gloss = preg_replace('~#[^\n]*\n+~', "\n", $gloss);
	$gloss = preg_replace('~\n\n+~', "\n", $gloss);
	$gloss = explode("\n", trim($gloss));
	foreach ($gloss as $i => $g) {
		$g = explode("\t", $g);
		unset($gloss[$i]);
		$gloss[$g[0]] = $g[1];
	}
	shuffle($kals);

	return [$kals, $gloss];
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
<div class="row alternate">
<?php
	$data = lg_updown_data($state);
	foreach ($data[0] as $e) {
		$e = explode("\t", $e);
		$t = ''; // WIP
		echo '<div class="col-lg-6 my-2 entry"><div class="row"><div class="col-8 py-1">'.$e[0].'</div><div class="col-4"><button type="button" class="btn btn-info my-1">☉</button> <button type="button" class="btn btn-secondary my-1">☼</button></div></div><div class="row"><code class="col-12 ua" data-a="'.$e[1].'" data-t="'.$t.'"></code></div></div>';
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
