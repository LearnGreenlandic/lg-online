<?php
namespace LGO;

function welcome_video($state) {
?>
<div class="container-fluid welcome">
<div class="row">
<div class="video col">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary" poster="{t:prefix}/d/lg1/welcome-video/welcome.png">
<?php
	$videos = glob("d/lg1/welcome-video/*.mp4");
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

<div class="modal" id="welcome-question" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{t:lg1/welcome/video/qhead}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{t:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>{t:lg1/welcome/video/qbody}</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" id="welcome-yes">{t:lg1/welcome/video/yes}</button>
        <a href="../1/" role="button" class="btn btn-primary">{t:lg1/welcome/video/no}</a>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="welcome-sure" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{t:lg1/welcome/video}</h5>
      </div>
      <div class="modal-body">
        <p>{t:lg1/welcome/video/sure}</p>
      </div>
      <div class="modal-footer justify-content-center">
        <span class="text-nowrap"><input type="text" spellcheck="false" class="form-control" data-check="ingerlaqqillanga"> <button type="button" class="btn btn-warning">✓</button></span>
        <a href="../1/" role="button" class="btn btn-success">{t:lg1/welcome/video/help}</a>
      </div>
    </div>
  </div>
</div>
<?php
}

function welcome_intro($state) {
?>
<div class="container">
<div class="row">
<div class="col">
<?php
	readfile("d/lg1/welcome-video/intro.{$state['lang']}.html");
?>
</div>
</div>
</div>
<?php
}

function welcome_1($state) {
	$text = file_get_contents('d/lg1/welcome/input.txt');
	$hyphen = file_get_contents('d/lg1/welcome/hyphenated.txt');
?>
<div class="task task-text-area container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/welcome/1/text}</p>
</div>
</div>
<div class="row alternate">
<div class="col text-center entry"><textarea class="form-control" spellcheck="false" lang="kl-GL" data-check="<?=$hyphen;?>" data-orig="<?=$text;?>"><?=$text;?></textarea> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>
</div>
</div>

<div class="modal" id="check" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{t:check}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{t:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="check-body"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{t:close}</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="solution" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{t:solution}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{t:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?=$hyphen;?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{t:close}</button>
      </div>
    </div>
  </div>
</div>
<?php
}

function welcome_2($state) {
?>
<div class="task container-fluid hyphenate welcome-read">
<div class="row">
<div class="col">
<p>{t:lg1/welcome/2/text}</p>
</div>
</div>
<div class="row alternate">
<div class="col my-2">
<p class="py-2" lang="kl-GL">
<?php
	$pngs = glob('d/lg1/welcome/*.png');
	$words = explode(' ', file_get_contents('d/lg1/welcome/input.txt'));
	for ($i=0, $e=count($words) ; $i<$e ; ++$i) {
		$a = preg_replace('~[^a-z]+~', '', strtolower($words[$i]));
		$words[$i] = '<span class="w" data-png="{t:prefix}/'.$pngs[$i].'" data-mp3="{t:prefix}/d/lg1/welcome/'.$a.'.mp3">'.$words[$i].'</span>';
	}
	echo implode(' ', $words);
?>
</p>
</div>
</div>
<div class="row">
<div class="col-12 text-center task-audio entry">
<img id="wimg" class="border border-secondary mw-100" src="{t:prefix}/<?=$pngs[0];?>"><br>
<audio id="wmp3" src="" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary btn-lg my-1">▶</button>
</div>
<div class="col-12 my-2 text-center">
<button type="button" class="btn btn-primary" id="wprev">{t:prevword}</button> <button type="button" class="btn btn-primary" id="wnext">{t:nextword}</button>
</div>
</div>
</div>
<?php
}

function welcome_3($state) {
?>
<div class="container-fluid">
<div class="row">
<div class="col">
<p>{t:lg1/welcome/3/text}</p>
</div>
</div>
<div class="row">
<div class="video col-md">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary" poster="{t:prefix}/d/lg1/welcome-video/welcome.png">
<?php
	$videos = glob("d/lg1/welcome-video/*.mp4");
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
<div class="col-auto p-2"><label for="welcome-input">{t:lg1/welcome/3/prompt}</label></div>
<div class="col-auto py-2"><input type="text" spellcheck="false" class="form-control" id="welcome-input"></div>
<div class="col-auto p-2"><button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>
</div>
</div>
<div class="col-12" lang="kl-GL">
<?php
	$txt = trim(file_get_contents('d/lg1/welcome-video/welcome.txt'));
	$txt = preg_replace('~(\S+)~u', '<span class="w">$1</span>', $txt);
	echo $txt;
?>
</div>

</div>
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

function welcome($state, $which) {
	\LGO\header($state, 'lg1', 'welcome/'.$which);
	if ($which === 'video') {
		\LGO\welcome_video($state);
	}
	else if ($which === 'intro') {
		\LGO\welcome_intro($state);
	}
	else if ($which === '1') {
		\LGO\welcome_1($state);
	}
	else if ($which === '2') {
		\LGO\welcome_2($state);
	}
	else {
		\LGO\welcome_3($state);
	}
	\LGO\footer($state);
}
