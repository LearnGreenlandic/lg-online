<?php
namespace LGO;

function lg1($state) {
	\LGO\header($state, 'lg1');
?>
<div class="container d-flex flex-wrap chooser">
<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg1/welcome/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/welcome-video/welcome.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/welcome/" class="text-warning">{t:lg1/welcome/video/link}</a></h5>
</div>
<div class="choice my-2 col-lg-6" id="l1">
	<a href="{t:prefix}/lg1/1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/1/" class="text-warning">{t:lg1/1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/pronounce/1/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg1/pronounce/1}</a></li>
		<li><a href="{t:prefix}/lg1/pronounce/2/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/pronounce/2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l2">
	<a href="{t:prefix}/lg1/2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/2/" class="text-warning">{t:lg1/2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/listening/1/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/listening/1}</a></li>
		<li><a href="{t:prefix}/lg1/listening/2/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/listening/2}</a></li>
		<li><a href="{t:prefix}/lg1/listening/3/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/listening/3}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/2}</a></li>

		<li class="mt-4"><a href="{t:prefix}/lg1/pdf/2x.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/2x}</a></li>
		<li><a href="{t:prefix}/lg1/2x/listen/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/2x/listen}</a></li>
		<li><a href="{t:prefix}/lg1/2x/trm/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/2x/trm}</a></li>
		<li><a href="{t:prefix}/lg1/2x/abl/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/2x/abl}</a></li>
		<li><a href="{t:prefix}/lg1/2x/all/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/2x/all}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l3">
	<a href="{t:prefix}/lg1/3/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/3/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/3/" class="text-warning">{t:lg1/3}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/hyphenate/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/hyphenate}</a></li>
		<li><a href="{t:prefix}/lg1/listening/4/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/listening/4}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/1/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/welcome/1}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/2/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg1/welcome/2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/3.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/3}</a></li>

		<li class="mt-4"><a href="{t:prefix}/lg1/pdf/3x.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/3x}</a></li>
		<li><a href="{t:prefix}/lg1/3x/listen/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/3x/listen}</a></li>
		<li><a href="{t:prefix}/lg1/3x/listenc/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/3x/listenc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/trm/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/trm}</a></li>
		<li><a href="{t:prefix}/lg1/3x/trmc/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/trmc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/abl/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/abl}</a></li>
		<li><a href="{t:prefix}/lg1/3x/ablc/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/ablc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/lok/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/lok}</a></li>
		<li><a href="{t:prefix}/lg1/3x/lokc/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/lokc}</a></li>
		<li><a href="{t:prefix}/lg1/3x/verbs/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/3x/verbs}</a></li>
		<li><a href="{t:prefix}/lg1/3x/random/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/3x/random}</a></li>
		<li><a href="{t:prefix}/lg1/3x/randp/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/3x/randp}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l4">
	<a href="{t:prefix}/lg1/4/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/4/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/4/" class="text-warning">{t:lg1/4}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/dialogue/1/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg1/dialogue/1}</a></li>
		<li><a href="{t:prefix}/lg1/dialogue/2/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg1/dialogue/2}</a></li>
		<li><a href="{t:prefix}/lg1/dialogue/3/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg1/dialogue/3}</a></li>
		<li><a href="{t:prefix}/lg1/welcome/3/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/welcome/3}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/4.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/4}</a></li>

		<li class="mt-4"><a href="{t:prefix}/lg1/pdf/4x.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/4x}</a></li>
		<li><a href="{t:prefix}/lg1/4x/listenv/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/4x/listenv}</a></li>
		<li><a href="{t:prefix}/lg1/4x/prod/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/4x/prod}</a></li>
		<li><a href="{t:prefix}/lg1/4x/listeng/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/4x/listeng}</a></li>
		<li><a href="{t:prefix}/lg1/4x/prodg/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/4x/prodg}</a></li>
		<li><a href="{t:prefix}/lg1/4x/random/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/4x/random}</a></li>
		<li><a href="{t:prefix}/lg1/4x/randp/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/4x/randp}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l5.1">
	<a href="{t:prefix}/lg1/5.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/5.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/5.1/" class="text-warning">{t:lg1/5.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/repeat/per/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/repeat/per}</a></li>
		<li><a href="{t:prefix}/lg1/repeat/tika/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/repeat/tika}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/5.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l5.2">
	<a href="{t:prefix}/lg1/5.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg1/5.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg1/5.2/" class="text-warning">{t:lg1/5.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/structure/1.1/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/structure/1.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/1.2/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/structure/1.2}</a></li>
		<li><a href="{t:prefix}/lg1/structure/1.3/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/structure/1.3}</a></li>
		<li><a href="{t:prefix}/lg1/structure/2.1/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/structure/2.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/2.2/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/structure/2.2}</a></li>
		<li><a href="{t:prefix}/lg1/structure/3.1/"><img src="{t:prefix}/static/text_icon.png"> {t:lg1/structure/3.1}</a></li>
		<li><a href="{t:prefix}/lg1/structure/3.2/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg1/structure/3.2}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/5.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/pdf/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<img src="{t:prefix}/d/lg1/updown/updown.png" class="mr-3 ch-item ch-img img-small">
	<h5 class="ch-item text-info">{t:lg1/updown}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/updown/1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg1/updown/1}</a></li>
		<li><a href="{t:prefix}/lg1/updown/2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg1/updown/2}</a></li>
		<li><a href="{t:prefix}/lg1/updown/3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg1/updown/3}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6">
	<img src="{t:prefix}/static/pdf.png" class="mr-3 ch-item ch-img img-small">
	<h5 class="ch-item text-info">{t:lg1/appendix}</h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg1/pdf/grammatica.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg1/appendix/grammatica}</a></li>
		<li><a href="{t:prefix}/lg1/pdf/pamphlet.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:pamphlet}</a></li>
	</ul>
</div>
</div>
<?php
	\LGO\footer($state);
}
