<?php
namespace LGO;

function repeat_per($state) {
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
	echo '<source src="{t:prefix}/'.$video.'" type="video/mp4">';
?>
</video>
</div>
</div>
</div>

<div class="options container-fluid">
<div class="row m-1"><div class="col"><b>{t:LBL_VIDEO_QUALITY}</b>:
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

function repeat_tika($state) {
?>
<div class="container-fluid welcome">
<div class="row">
<div class="col">
<p>{t:lg1/repeat/tika/text}</p>
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
	echo '<source src="{t:prefix}/'.$video.'" type="video/mp4">';
?>
</video>
</div>
</div>
</div>

<div class="options container-fluid">
<div class="row m-1"><div class="col"><b>{t:LBL_VIDEO_QUALITY}</b>:
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

function repeat_lg2($state, $which) {
	\LGO\header($state, 'lg2', 'repeat/'.$which);
?>
<div class="container-fluid">
<div class="row">
<div class="col">
<p>{t:lg2/repeat/text}</p>
</div>
</div>
<div class="row">
<div class="video col-md">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary">
<?php
	$videos = glob("d/lg2/repeat/{$which}/*.mp4");
	sort($videos, SORT_NATURAL);
	$video = $videos[0];
	foreach ($videos as $v) {
		if (strpos($v, "/v{$q}p.mp4") !== false) {
			$video = $v;
		}
	}
	echo '<source src="{t:prefix}/'.$video.'" type="video/mp4">';
?>
</video>
</div>
<div class="col-md">
<div class="row" id="welcome-words">

<div class="col-12 py-1">
<div class="row no-gutters justify-content-center">
<div class="col-auto p-2"><label for="welcome-input">{t:lg2/repeat/prompt}</label></div>
<div class="col-auto py-2"><input type="text" spellcheck="false" class="form-control" id="welcome-input"></div>
<div class="col-auto p-2"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>
</div>
</div>
<div class="col-12" lang="kl-GL">
<?php
	$txt = trim(file_get_contents("d/lg2/repeat/{$which}/text.txt"));
	$txt = preg_replace('~(\S+)~u', '<span class="w">$1</span>', $txt);
	echo $txt;
?>
</div>

</div>
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}

function repeat_audio($state, $which) {
	\LGO\header($state, 'lg2', 'listen/'.$which);
?>
<div class="container-fluid">
<div class="row">
<div class="col">
{t:lg2/listen/<?=$which;?>/text}
</div>
</div>
<div class="row">
<div class="video col-md">
<audio id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary">
<source src="{t:prefix}/d/lg2/exercises/<?=$which;?>/audio.mp3" type="audio/mpeg">
</audio>
</div>
<div class="col-md">
<div class="row" id="welcome-words">

<div class="col-12 py-1">
<div class="row no-gutters justify-content-center">
<div class="col-auto p-2"><label for="welcome-input">{t:lg2/repeat/prompt}</label></div>
<div class="col-auto py-2"><input type="text" spellcheck="false" class="form-control" id="welcome-input"></div>
<div class="col-auto p-2"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>
</div>
</div>
<div class="col-12" lang="kl-GL">
<?php
	$txt = trim(file_get_contents("d/lg2/exercises/{$which}/text.txt"));
	$txt = preg_replace('~(\S+)~u', '<span class="w">$1</span>', $txt);
	echo $txt;
?>
</div>

</div>
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}

function repeat($state, $which) {
	\LGO\header($state, 'lg1', 'repeat/'.$which);
	if ($which === 'per') {
		\LGO\repeat_per($state);
	}
	else {
		\LGO\repeat_tika($state);
	}
	\LGO\footer($state);
}
