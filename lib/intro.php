<?php
namespace LGO;

function intro($state) {
	\LGO\header($state, 'lg2', 'intro');
?>
<div class="container-fluid">
<div class="row">
<div class="col">
{t:lg2/intro/text}
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}

function prep($state) {
	\LGO\header($state, 'lg2', 'prep');
?>
<div class="container-fluid">
<div class="row">
<div class="col">
{t:lg2/prep/text}
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}

function outtro($state) {
	\LGO\header($state, 'lg2', 'outtro');
?>
<div class="container-fluid">
<div class="row">
<div class="col">
{t:lg2/outtro/text}
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}
