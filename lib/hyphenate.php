<?php
namespace LGO;

function hyphenate($state) {
	extract($state, EXTR_SKIP);
	\LGO\header($state, 'lg1');
?>
<div class="task task-text container-fluid hyphenate">
<div class="row">
<div class="col">
<p>{l10n:lg1/hyphenate/text}</p>
</div>
</div>
<div class="row alternate">
<?php
	$pngs = glob('d/lg1/hyphenate/*.png');
	shuffle($pngs);
	foreach ($pngs as $png) {
		$hyphen = basename($png, '.png');
		$word = str_replace('-', '', $hyphen);
		echo '<div class="col-lg-6 my-2 text-center entry"><div class="row"><div class="col-12"><img src="'.$prefix.'/'.$png.'" class="border border-secondary"/></div><div class="col-12"><input type="text" spellcheck="false" class="form-control" data-check="'.$hyphen.'" value="'.$word.'"> <button type="button" class="btn btn-warning">✓</button> <button type="button" class="btn btn-secondary">☼</button></div></div></div>';
	}
?>
</div>
</div>
<?php
	\LGO\footer($state);
}
