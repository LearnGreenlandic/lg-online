<?php
namespace LGO;

function lg3($state) {
	\LGO\header($state, 'lg3');
?>
<div class="container d-flex flex-wrap chooser">
<!-- Global Notice -->
<!--
<div class="alert alert-info col-6 mx-auto" role="alert">
{t:alert}
</div>
-->

<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg3/intro/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/static/lg3.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg3/intro/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg3/intro}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><br></li>
		<li><a href="{t:prefix}/lg3/gloss/"><i class="link-info bi bi-x-diamond"></i> {t:lg3/gloss}</a></li>
		<li><br></li>
		<li><a href="{t:prefix}/lg3/par/"><i class="link-info bi bi-file-text"></i> {t:lg3/paradigms}</a></li>
		<li><br></li>
		<li><a href="{t:prefix}/lg3/gen/"><i class="link-info bi bi-x-diamond"></i> {t:lg3/generator}</a></li>
	</ul>
</div>
</div>
<?php
	\LGO\footer($state);
}
