<?php

function lg_welcome_1($state) {
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
<div class="col text-center entry"><textarea class="form-control" spellcheck="false" data-check="<?=$hyphen;?>"><?=$text;?></textarea> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div>
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

function lg_welcome_2($state) {
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
<p class="py-2">
<?php
	$pngs = glob('d/lg1/welcome/*.png');
	$words = explode(' ', file_get_contents('d/lg1/welcome/input.txt'));
	for ($i=0, $e=count($words) ; $i<$e ; ++$i) {
		$words[$i] = '<span class="w" data-png="'.$prefix.'/'.$pngs[$i].'">'.$words[$i].'</span>';
	}
	echo implode(' ', $words);
?>
</p>
</div>
</div>
<div class="row">
<div class="col-12 text-center">
<img id="wimg" class="mw-100" src="<?=$prefix.'/'.$pngs[0];?>">
</div>
<div class="col-12 my-2 text-center">
<button type="button" class="btn btn-primary" id="wprev">{l10n:prevword}</button> <button type="button" class="btn btn-primary" id="wnext">{l10n:nextword}</button>
</div>
</div>
</div>
<?php
}

function lg_welcome($state, $which) {
	lg_header($state, 'lg1', 'welcome/'.$which);
	if ($which === '1') {
		lg_welcome_1($state);
	}
	else {
		lg_welcome_2($state);
	}
	lg_footer($state);
}
