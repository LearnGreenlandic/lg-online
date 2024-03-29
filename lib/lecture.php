<?php
namespace LGO;

function lecture($state, $lg, $lecture) {
	extract($state, EXTR_SKIP);
	\LGO\header($state, $lg, $lecture);
?>
<div class="lecture container-fluid">
<div class="row">
<div class="video col-md p-1">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary" poster="{t:prefix}/d/<?=$lg;?>/<?=$lecture;?>/{t:lang}/0.png">
<?php
	$videos = glob("d/{$lg}/{$lecture}/{$lang}/*.mp4");
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
<div class="slides col-md p-1">
</div>
</div>
</div>

<div class="drawer d-flex justify-content-center flex-wrap">
<?php
	$slides = glob("d/{$lg}/{$lecture}/{$lang}/*.png");
	sort($slides, SORT_NATURAL);
	foreach ($slides as $s) {
		$n = basename($s, '.png');
		echo '<span class="border border-secondary m-1"><img src="{t:prefix}/'.$s.'" id="s'.$n.'" data-s="'.$n.'" class="slide"></span>';
	}
?>
</div>

<h5 class="my-2 text-center"><a href="../#l<?=$lecture;?>">{t:lecture-back}</a></h5>

<div class="options container-fluid">
<!-- div class="row m-1"><div class="col-2"><b>{LBL_SLIDES_PDF}</b></div><div class="col"><a href="{t:prefix}/download.php?pdf=lg1-1-dan" class="btn btn-primary">lg1-dan-1.pdf</a></div></div -->
<?php
	if (count($videos) > 1) {
		echo '<div class="row m-1"><div class="col"><b>{t:LBL_VIDEO_QUALITY}</b>:';
		foreach ($videos as $v) {
			preg_match('~/v(\d+)p\.mp4$~', $v, $m);
			echo ' <a href="./?q='.$m[1].'" class="btn btn-sm btn-secondary ml-2">'.$m[1].'p</a>';
		}
		echo '</div></div>';
	}
?>
</div>
<?php
	\LGO\footer($state);
}
