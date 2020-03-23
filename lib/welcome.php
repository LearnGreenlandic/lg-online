<?php
namespace LGO;

function welcome_video($state) {
	extract($state, EXTR_SKIP);
?>
<div class="container-fluid welcome">
<div class="row">
<div class="video col">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary" poster="<?=$prefix;?>/d/lg1/welcome-video/welcome.png">
<?php
	$videos = glob("d/lg1/welcome-video/*.mp4");
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

<div class="modal" id="welcome-question" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{l10n:lg1/welcome/video/qhead}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{l10n:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>{l10n:lg1/welcome/video/qbody}</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" id="welcome-yes">{l10n:lg1/welcome/video/yes}</button>
        <a href="../1/" role="button" class="btn btn-primary">{l10n:lg1/welcome/video/no}</a>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="welcome-sure" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{l10n:lg1/welcome/video}</h5>
      </div>
      <div class="modal-body">
        <p>{l10n:lg1/welcome/video/sure}</p>
      </div>
      <div class="modal-footer justify-content-center">
        <span class="text-nowrap"><input type="text" spellcheck="false" class="form-control" data-check="ingerlaqqillanga"> <button type="button" class="btn btn-warning">✓</button></span>
        <a href="../1/" role="button" class="btn btn-success">{l10n:lg1/welcome/video/help}</a>
      </div>
    </div>
  </div>
</div>
<?php
}

function welcome_1($state) {
	extract($state, EXTR_SKIP);
	$text = file_get_contents('d/lg1/welcome/input.txt');
	$hyphen = file_get_contents('d/lg1/welcome/hyphenated.txt');
?>
<div class="task task-text-area container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/welcome/1/text}</p>
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
        <h5 class="modal-title">{l10n:check}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{l10n:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="check-body"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{l10n:close}</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="solution" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{l10n:solution}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{l10n:close}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?=$hyphen;?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{l10n:close}</button>
      </div>
    </div>
  </div>
</div>
<?php
}

function welcome_2($state) {
	extract($state, EXTR_SKIP);
?>
<div class="task container-fluid hyphenate welcome-read">
<div class="row">
<div class="col">
<p>{l10n:lg1/welcome/2/text}</p>
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
		$words[$i] = '<span class="w" data-png="'.$prefix.'/'.$pngs[$i].'" data-mp3="'.$prefix.'/d/lg1/welcome/'.$a.'.mp3">'.$words[$i].'</span>';
	}
	echo implode(' ', $words);
?>
</p>
</div>
</div>
<div class="row">
<div class="col-12 text-center task-audio entry">
<img id="wimg" class="border border-secondary mw-100" src="<?=$prefix.'/'.$pngs[0];?>"><br>
<audio id="wmp3" src="" controlslist="nodownload" crossorigin="use-credentials" preload="none">HTML5 MP3</audio><button type="button" class="btn btn-primary btn-lg my-1">▶</button>
</div>
<div class="col-12 my-2 text-center">
<button type="button" class="btn btn-primary" id="wprev">{l10n:prevword}</button> <button type="button" class="btn btn-primary" id="wnext">{l10n:nextword}</button>
</div>
</div>
</div>
<?php
}

function welcome_3($state) {
	extract($state, EXTR_SKIP);
?>
<div class="container-fluid">
<div class="row">
<div class="col">
<p>{l10n:lg1/welcome/3/text}</p>
</div>
</div>
<div class="row">
<div class="video col-md">
<video id="video" controls controlslist="nodownload" crossorigin="use-credentials" preload="none" autoPictureInPicture class="border border-secondary" poster="<?=$prefix;?>/d/lg1/welcome-video/welcome.png">
<?php
	$videos = glob("d/lg1/welcome-video/*.mp4");
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
<div class="col-md">
<div class="row" id="welcome-words">

<div class="col-12" lang="kl-GL">
<?php
	$txt = trim(file_get_contents('d/lg1/welcome-video/welcome.txt'));
	$txt = preg_replace('~(\S+)~u', '<span class="w">$1</span>', $txt);
	echo $txt;
?>
</div>
<div class="col-12 py-1 text-center">
<label for="welcome-input">{l10n:lg1/welcome/3/prompt}</label> <input type="text" spellcheck="false" class="form-control" id="welcome-input"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button>
</div>

</div>
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

function welcome($state, $which) {
	\LGO\header($state, 'lg1', 'welcome/'.$which);
	if ($which === 'video') {
		\LGO\welcome_video($state);
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
