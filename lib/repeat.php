<?php

function lg_repeat_per($state) {
	extract($state, EXTR_SKIP);
?>
<div class="container-fluid welcome">
<div class="row">
<div class="video col">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary">
<?php
	$videos = glob("d/lg1/repeat/per/*.mp4");
	sort($videos, SORT_NATURAL);
	$video = $videos[0];
	foreach ($videos as $v) {
		if (strpos($v, "/v{$q}p.mp4") !== false) {
			$video = $v;
		}
	}
	echo '<source src="'.$prefix.'/'.$video.'" type="video/mp4">';
?>
</video>
</div>
</div>
</div>

<div class="options container-fluid">
<div class="row m-1"><div class="col"><b>{l10n:LBL_VIDEO_QUALITY}</b>:
<?php
	foreach ($videos as $v) {
		preg_match('~/v(\d+)p\.mp4$~', $v, $m);
		echo ' <a href="./?q='.$m[1].'" class="btn btn-sm btn-secondary ml-2">'.$m[1].'p</a>';
	}
?>
</div>
</div>
</div>
<?php
}

function lg_repeat_tika($state) {
	extract($state, EXTR_SKIP);
?>
<div class="container-fluid welcome">
<div class="row">
<div class="col">
<p>{l10n:lg1/repeat/tika/text}</p>
</div>
</div>
<div class="row">
<div class="video col">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary">
<?php
	$videos = glob("d/lg1/repeat/tika/*.mp4");
	sort($videos, SORT_NATURAL);
	$video = $videos[0];
	foreach ($videos as $v) {
		if (strpos($v, "/v{$q}p.mp4") !== false) {
			$video = $v;
		}
	}
	echo '<source src="'.$prefix.'/'.$video.'" type="video/mp4">';
?>
</video>
</div>
</div>
</div>

<div class="options container-fluid">
<div class="row m-1"><div class="col"><b>{l10n:LBL_VIDEO_QUALITY}</b>:
<?php
	foreach ($videos as $v) {
		preg_match('~/v(\d+)p\.mp4$~', $v, $m);
		echo ' <a href="./?q='.$m[1].'" class="btn btn-sm btn-secondary ml-2">'.$m[1].'p</a>';
	}
?>
</div>
</div>
</div>
<?php
}

function lg_repeat($state, $which) {
	lg_header($state, 'lg1', 'repeat/'.$which);
	if ($which === 'per') {
		lg_repeat_per($state);
	}
	else {
		lg_repeat_tika($state);
	}
	lg_footer($state);
}
