<?php
namespace LGO;

function gloss($state) {
	\LGO\header($state, 'lg3', 'gloss');
?>
<div class="container">
<div class="row">
<div class="col">
{t:lg3/gloss/text}

<div class="row my-5">
<div class="col">
	<div class="text-center">
		<div class="btn-group" role="group" aria-label="Toggle translation direction">
		<input type="radio" class="btn-check" name="optPair" id="g-kal2eng" value="g-kal2eng" autocomplete="off" checked>
		<label class="btn btn-outline-primary" for="g-kal2eng" data-l10n="BTN_KAL2ENG">Kalaallisut<i class="bi bi-arrow-right-short"></i>English</label>
		<input type="radio" class="btn-check" name="optPair" id="g-kal2dan" value="g-kal2dan" autocomplete="off">
		<label class="btn btn-outline-primary" for="g-kal2dan" data-l10n="BTN_KAL2DAN">Kalaallisut<i class="bi bi-arrow-right-short"></i>Danish</label>
		</div>
	</div>
</div>
</div>

<div class="row my-5">
<div class="col">
	<div class="mb-3">
	<label for="input" class="form-label d-flex"><h5 class="text-blue me-auto" data-l10n="HDR_INPUT_KAL_GLOSS">Greenlandic sentence to be annotated</h5><div class="small ms-3" id="inputCount"></div></label>
	<textarea class="form-control" id="input" rows="3" spellcheck="false"></textarea>
	</div>
	<div class="text-center d-flex justify-content-center">
	<div><button class="btn btn-primary btnTranslate"><span class="g-kal2eng" style="display: none;"><i class="bi bi-translate"></i> <span data-l10n="BTN_GLOSS_ENG">Annotate with English</span></span><span class="g-kal2dan" style="display: none;"><i class="bi bi-translate"></i> <span data-l10n="BTN_GLOSS_DAN">Annotate with Danish</span></span></button></div>
	<div class="form-check form-switch ms-3"><label class="form-check-label"><input type="checkbox" role="switch" class="form-check-input" id="optSecondary"> <span data-l10n="LBL_SHOW_SECONDARY">Show secondary tags</span></label></div>
	</div>
</div>
</div>

<div class="row my-3" id="output" style="display: none;">
<div class="col">
	<div class="card mb-3">
	<div class="card-header"><h5 data-l10n="HDR_ANNOTATION">Annotation</h5></div>
	<div class="card-body">
	<pre><code class="card-text"></code></pre>
	</div>
	</div>
</div>
</div>

</div>
</div>
</div>
<?php
	\LGO\footer($state);
}
