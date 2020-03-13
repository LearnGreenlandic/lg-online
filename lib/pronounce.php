<?php

function _prn_mp3s() {
	$mp3s = glob('d/lg1/pronounce/*.mp3');
	shuffle($mp3s);
	return $mp3s;
}

function lg_pronounce_1($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task container-fluid">
<div class="row">
<div class="col">
<h2><?=$l10n['lg1/pronounce/1/text'];?></h2>
</div>
<div class="row">
<?php
	foreach (_prn_mp3s() as $mp3) {
		echo '<div class="col-lg-4"><audio src="'.$prefix.'/'.$mp3.'" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" class="border border-secondary">HTML5 MP3</audio> <span></span></div>';
	}
?>
</div>
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
