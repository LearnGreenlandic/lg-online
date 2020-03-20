<?php

function lg_lg1($state) {
	extract($state, EXTR_SKIP);
	lg_header($state, 'lg1');
?>
<div class="container d-flex flex-wrap chooser">
<div class="choice my-2 col-lg-12">
	<a href="<?=$prefix;?>/lg1/welcome/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/welcome-video/welcome.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/welcome/" class="text-warning">{l10n:lg1/welcome/video/link}</a></h5>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/1/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/1/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/1/" class="text-warning">{l10n:lg1/1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/pronounce/1/">{l10n:lg1/pronounce/1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pronounce/2/">{l10n:lg1/pronounce/2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/1.pdf">{l10n:lg1/pdf/1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/2/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/2/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/2/" class="text-warning">{l10n:lg1/2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/listening/1/">{l10n:lg1/listening/1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/listening/2/">{l10n:lg1/listening/2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/listening/3/">{l10n:lg1/listening/3}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/2.pdf">{l10n:lg1/pdf/2}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/3/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/3/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/3/" class="text-warning">{l10n:lg1/3}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/hyphenate/">{l10n:lg1/hyphenate}</a></li>
		<li><a href="<?=$prefix;?>/lg1/listening/4/">{l10n:lg1/listening/4}</a></li>
		<li><a href="<?=$prefix;?>/lg1/welcome/1/">{l10n:lg1/welcome/1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/welcome/2/">{l10n:lg1/welcome/2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/3.pdf">{l10n:lg1/pdf/3}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/4/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/4/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/4/" class="text-warning">{l10n:lg1/4}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/dialogue/1/">{l10n:lg1/dialogue/1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/dialogue/2/">{l10n:lg1/dialogue/2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/dialogue/3/">{l10n:lg1/dialogue/3}</a></li>
		<li><a href="<?=$prefix;?>/lg1/welcome/3/">{l10n:lg1/welcome/3}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/4.pdf">{l10n:lg1/pdf/4}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/5.1/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/5.1/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/5.1/" class="text-warning">{l10n:lg1/5.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/repeat/per/">{l10n:lg1/repeat/per}</a></li>
		<li><a href="<?=$prefix;?>/lg1/repeat/tika/">{l10n:lg1/repeat/tika}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/5.1.pdf">{l10n:lg1/pdf/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<a href="<?=$prefix;?>/lg1/5.2/" class="mr-3 ch-item ch-img"><img src="<?=$prefix;?>/d/lg1/5.2/<?=$lang;?>/0.png"></a>
	<h5 class="ch-item"><a href="<?=$prefix;?>/lg1/5.2/" class="text-warning">{l10n:lg1/5.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/structure/1.1/">{l10n:lg1/structure/1.1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/1.2/">{l10n:lg1/structure/1.2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/1.3/">{l10n:lg1/structure/1.3}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/2.1/">{l10n:lg1/structure/2.1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/2.2/">{l10n:lg1/structure/2.2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/3.1/">{l10n:lg1/structure/3.1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/structure/3.2/">{l10n:lg1/structure/3.2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/5.1.pdf">{l10n:lg1/pdf/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<img src="<?=$prefix;?>/d/lg1/updown/updown.png" class="mr-3 ch-item ch-img img-small">
	<h5 class="ch-item text-info">{l10n:lg1/updown}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/updown/1/">{l10n:lg1/updown/1}</a></li>
		<li><a href="<?=$prefix;?>/lg1/updown/2/">{l10n:lg1/updown/2}</a></li>
		<li><a href="<?=$prefix;?>/lg1/updown/3/">{l10n:lg1/updown/3}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<img src="<?=$prefix;?>/static/pdf.png" class="mr-3 ch-item ch-img img-small">
	<h5 class="ch-item text-info">{l10n:lg1/appendix}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="<?=$prefix;?>/lg1/pdf/grammatica.pdf">{l10n:lg1/appendix/grammatica}</a></li>
		<li><a href="<?=$prefix;?>/lg1/pdf/pamphlet.pdf">{l10n:lg1/appendix/pamphlet}</a></li>
	</ul>
</div>
</div>
<?php
	lg_footer($state);
}
