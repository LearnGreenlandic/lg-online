<?php
namespace LGO;

function lg1($state) {
	\LGO\header($state, 'lg1');
?>
<div class="container d-flex flex-wrap chooser">
<!-- Global Notice -->
<!--
<div class="alert alert-info col-6 mx-auto" role="alert">
{t:alert}
</div>
-->

<!-- Intro -->
<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg1/welcome/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/welcome-video/welcome.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/welcome/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/welcome/video/link}</a></h5>
</div>
<!-- Chapter 1 -->
<div class="choice my-2 col-lg-6" id="l1">
	<a href="{t:prefix}/lg1/1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/pronounce/1/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg1/pronounce/1}</a></li>
		<li><a href="{t:prefix}/lg1/pronounce/2/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/pronounce/2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/1}</a></li>
	</ul>
</div>
<!-- Chapter 2 -->
<div class="choice my-2 col-lg-6" id="l2">
	<a href="{t:prefix}/lg1/2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/listening/1/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/listening/1}</a></li>
		<li><a href="{t:prefix}/lg1/listening/2/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/listening/2}</a></li>
		<li><a href="{t:prefix}/lg1/listening/3/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/listening/3}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg1/2x/"><i class="link-info bi bi-file-pdf"></i> {t:lg1/2x}</a></li>
		<li><a href="{t:prefix}/lg1/2x/listen/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/2x/listen}</a></li>
		<li><a href="{t:prefix}/lg1/2x/trm/"><i class="link-info bi bi-file-text"></i> {t:lg1/2x/trm}</a></li>
		<li><a href="{t:prefix}/lg1/2x/abl/"><i class="link-info bi bi-file-text"></i> {t:lg1/2x/abl}</a></li>
		<li><a href="{t:prefix}/lg1/2x/all/"><i class="link-info bi bi-file-text"></i> {t:lg1/2x/all}</a></li>
	</ul>
</div>
<!-- Chapter 3 -->
<div class="choice my-2 col-lg-6" id="l3">
	<a href="{t:prefix}/lg1/3/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/3/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/3/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/3}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/hyphenate/"><i class="link-info bi bi-file-text"></i> {t:lg1/hyphenate}</a></li>
		<li><a href="{t:prefix}/lg1/listening/4/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/listening/4}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/1/"><i class="link-info bi bi-file-text"></i> {t:lg1/welcome/1}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/2/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg1/welcome/2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/3.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg1/pdf/3x.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/3x}</a></li>
		<li><a href="{t:prefix}/lg1/3x/listen/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/3x/listen}</a></li>
		<li><a href="{t:prefix}/lg1/3x/listenc/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/3x/listenc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/trm/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/trm}</a></li>
		<li><a href="{t:prefix}/lg1/3x/trmc/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/trmc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/abl/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/abl}</a></li>
		<li><a href="{t:prefix}/lg1/3x/ablc/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/ablc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/lok/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/lok}</a></li>
		<li><a href="{t:prefix}/lg1/3x/lokc/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/lokc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/verbs/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/3x/verbs}</a></li>
		<li><a href="{t:prefix}/lg1/3x/random/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/3x/random}</a></li>
		<li><a href="{t:prefix}/lg1/3x/randp/"><i class="link-info bi bi-file-text"></i> {t:lg1/3x/randp}</a></li>
	</ul>
</div>
<!-- Chapter 4 -->
<div class="choice my-2 col-lg-6" id="l4">
	<a href="{t:prefix}/lg1/4/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/4/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/4/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/4}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/dialogue/1/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg1/dialogue/1}</a></li>
		<li><a href="{t:prefix}/lg1/dialogue/2/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg1/dialogue/2}</a></li>
		<li><a href="{t:prefix}/lg1/dialogue/3/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg1/dialogue/3}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/4.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/4}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg1/pdf/4x.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/4x}</a></li>
		<li><a href="{t:prefix}/lg1/4x/listenv/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/4x/listenv}</a></li>
		<li><a href="{t:prefix}/lg1/4x/prod/"><i class="link-info bi bi-file-text"></i> {t:lg1/4x/prod}</a></li>
		<li><a href="{t:prefix}/lg1/4x/listeng/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/4x/listeng}</a></li>
		<li><a href="{t:prefix}/lg1/4x/prodg/"><i class="link-info bi bi-file-text"></i> {t:lg1/4x/prodg}</a></li>
		<li><a href="{t:prefix}/lg1/4x/random/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/4x/random}</a></li>
		<li><a href="{t:prefix}/lg1/4x/randp/"><i class="link-info bi bi-file-text"></i> {t:lg1/4x/randp}</a></li>
	</ul>
</div>
<!-- Chapter 5 -->
<div class="choice my-2 col-lg-6" id="l5.1">
	<a href="{t:prefix}/lg1/5.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/5.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/5.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/5.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/repeat/per/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/repeat/per}</a></li>
		<li><a href="{t:prefix}/lg1/repeat/tika/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/repeat/tika}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/5.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l5.2">
	<a href="{t:prefix}/lg1/5.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/5.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/5.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg1/5.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/structure/1.1/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/structure/1.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/1.2/"><i class="link-info bi bi-file-text"></i> {t:lg1/structure/1.2}</a></li>
		<li><a href="{t:prefix}/lg1/structure/1.3/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/structure/1.3}</a></li>
		<li><a href="{t:prefix}/lg1/structure/2.1/"><i class="link-info bi bi-file-text"></i> {t:lg1/structure/2.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/2.2/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/structure/2.2}</a></li>
		<li><a href="{t:prefix}/lg1/structure/3.1/"><i class="link-info bi bi-file-text"></i> {t:lg1/structure/3.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/3.2/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/structure/3.2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/5.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/5.1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg1/pdf/5x.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/pdf/5x}</a></li>
		<li><a href="{t:prefix}/lg1/5x/nu/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/5x/nu}</a></li>
		<li><a href="{t:prefix}/lg1/5x/nqar/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/5x/nqar}</a></li>
		<li><a href="{t:prefix}/lg1/5x/qa-aap/"><i class="link-info bi bi-file-text"></i> {t:lg1/5x/qa-aap}</a></li>
		<li><a href="{t:prefix}/lg1/5x/qa-naamik/"><i class="link-info bi bi-file-text"></i> {t:lg1/5x/qa-naamik}</a></li>
		<li><a href="{t:prefix}/lg1/5x/qa-ssa/"><i class="link-info bi bi-file-text"></i> {t:lg1/5x/qa-ssa}</a></li>
		<li><a href="{t:prefix}/lg1/5x/qa-aqa/"><i class="link-info bi bi-file-text"></i> {t:lg1/5x/qa-aqa}</a></li>
		<li><a href="{t:prefix}/lg1/5x/randp/"><i class="link-info bi bi-file-text"></i> {t:lg1/5x/randp}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg1/welcome/intro/"><i class="link-info bi bi-file-pdf"></i> {t:lg1/welcome/intro}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/3/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg1/welcome/3}</a></li>
	</ul>
</div>
<!-- Appendices -->
<div class="choice my-2 col-lg-6">
	<span class="mr-3 ch-item ch-img img-small text-warning fs-1"><i class="bi bi-puzzle-fill"></i></span>
	<h5 class="ch-item text-info">{t:lg1/updown}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/updown/1/"><i class="link-info bi bi-x-diamond"></i> {t:lg1/updown/1}</a></li>
		<li><a href="{t:prefix}/lg1/updown/2/"><i class="link-info bi bi-x-diamond"></i> {t:lg1/updown/2}</a></li>
		<li><a href="{t:prefix}/lg1/updown/3/"><i class="link-info bi bi-x-diamond"></i> {t:lg1/updown/3}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<span class="mr-3 ch-item ch-img img-small text-warning fs-1"><i class="bi bi-body-text"></i></span>
	<h5 class="ch-item text-info">{t:lg1/appendix}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/pdf/grammatica.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg1/appendix/grammatica}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/pamphlet.pdf"><i class="link-info bi bi-file-pdf"></i> {t:pamphlet}</a></li>
	</ul>
</div>
</div>
<?php
	\LGO\footer($state);
}
