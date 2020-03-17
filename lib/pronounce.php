<?php

$GLOBALS['-words'] = [
	'agga' => '¹ax xa',
	'aggi' => '¹ax xi',
	'aggu' => '¹ax xu',
	'alla' => '¹aɬ ɬa',
	'alli' => '¹aɬ ɬi',
	'allu' => '¹aɬ ɬu',
	'aqa' => 'ɑ qa',
	'aqi' => 'ɑ qi',
	'aqqa' => '¹ɑq qa',
	'aqqi' => '¹ɑq qi',
	'aqqu' => '¹ɑq qu',
	'aqu' => 'ɑ qu',
	'arra' => '¹ɑχ χa',
	'arri' => '¹ɑχ χi',
	'arru' => '¹ɑχ χu',
	'eqa' => 'ɜ qa',
	'eqi' => 'ɜ qi',
	'eqqa' => '¹ɜq qa',
	'eqqi' => '¹ɜq qi',
	'eqqu' => '¹ɜq qu',
	'equ' => 'ɜ qu',
	'erra' => '¹ɜχ χa',
	'erri' => '¹ɜχ χi',
	'erru' => '¹ɜχ χu',
	'igga' => '¹ix xa',
	'iggi' => '¹ix xi',
	'iggu' => '¹ix xu',
	'illa' => '¹iɬ ɬa',
	'illi' => '¹iɬ ɬi',
	'illu' => '¹iɬ ɬu',
	'oqa' => 'ɔ qa',
	'oqi' => 'ɔ qi',
	'oqqa' => '¹ɔq qa',
	'oqqi' => '¹ɔq qi',
	'oqqu' => '¹ɔq qu',
	'oqu' => 'ɔ qu',
	'orra' => '¹ɔχ χa',
	'orri' => '¹ɔχ χi',
	'orru' => '¹ɔχ χu',
	'ugga' => '¹ux xa',
	'uggi' => '¹ux xi',
	'uggu' => '¹ux xu',
	'ulla' => '¹uɬ ɬa',
	'ulli' => '¹uɬ ɬi',
	'ullu' => '¹uɬ ɬu',
	];

function lg_pronounce_1($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task container-fluid pronounce">
<div class="row">
<div class="col">
<h2><?=$l10n['lg1/pronounce/1/text'];?></h2>
</div>
</div>
<div class="row">
<?php
	foreach ($GLOBALS['-words'] as $word => $ipa) {
		echo '<div class="col-lg-6 my-1 entry"><div class="row"><div class="col-sm-2">'.$word.'</div><div class="col-sm-2 ipa">'.$ipa.'</div><div class="col-sm-4"><audio src="'.$prefix.'/d/lg1/pronounce/'.$word.'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none" class="border border-secondary">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button></div></div></div>';
	}
?>
</div>
</div>
<?php
}

function lg_pronounce_2($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task container-fluid pronounce">
<div class="row">
<div class="col">
<h2><?=$l10n['lg1/pronounce/2/text'];?></h2>
</div>
</div>
<div class="row">
<!-- Yes, you can cheat by looking at the source. You're only hurting yourself. -->
<?php
	$words = lg_shuffle_assoc($GLOBALS['-words']);
	foreach ($words as $word => $ipa) {
		echo '<div class="col-lg-6 my-1 entry"><audio src="'.$prefix.'/d/lg1/pronounce/'.$word.'.mp3" controlslist="nodownload" crossorigin="use-credentials" preload="none" class="border border-secondary">HTML5 MP3</audio><button type="button" class="btn btn-primary">▶</button> <input type="text" class="form-control"> <button type="button" class="btn btn-warning">?</button> <button type="button" class="btn btn-secondary">☼</button></div>';
	}
?>
</div>
</div>
<?php
}

function lg_pronounce($state, $which) {
	lg_header($state, 'lg1', 'pronounce/'.$which);
	if ($which === '1') {
		lg_pronounce_1($state);
	}
	else {
		lg_pronounce_2($state);
	}
	lg_footer($state);
}
