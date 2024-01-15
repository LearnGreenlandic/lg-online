<?php
namespace LGO;

function intro3($state) {
	\LGO\header($state, 'lg3', 'introhead');
?>
<div class="container">
<div class="row">
<div class="col">
<?php
	require_once __DIR__."/../d/lg3/intro/{$state['lang']}.html";
?>
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}

function paradigms($state) {
	\LGO\header($state, 'lg3', 'paradigms');
?>
<div class="container">
<div class="row">
<div class="col">
<?php
	require_once __DIR__."/../d/lg3/paradigms/{$state['lang']}.html";
?>
</div>
</div>
</div>
<?php
	\LGO\footer($state);
}
