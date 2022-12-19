<?php
namespace LGO;

function lg2($state) {
	\LGO\header($state, 'lg2');
?>
<div class="container d-flex flex-wrap chooser">
<!-- Intro -->
<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg2/intro/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/static/lg2.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/intro/" class="text-warning">{t:lg2/intro}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/pdf/pamphlet.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:pamphlet}</a></li>
	</ul>
</div>
<!-- Chapter 1 -->
<div class="choice my-2 col-lg-6" id="l1.1">
	<a href="{t:prefix}/lg2/1.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/1.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/1.1/" class="text-warning">{t:lg2/1.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/pdf/1.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/prep/"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/prep}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/0.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/0.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.3/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.3/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/0.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.4/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.4/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/0.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/0.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.6/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.6}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.7/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/0.7}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/0x/deny/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/0x/deny}</a></li>
		<li><a href="{t:prefix}/lg2/0x/summer/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/0x/summer}</a></li>
		<!-- <li><a href="{t:prefix}/lg2/0x/i/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/0x/i}</a></li> -->

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/1/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/1.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/1.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l1.2">
	<a href="{t:prefix}/lg2/1.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/1.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/1.2/" class="text-warning">{t:lg2/1.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/table/1.1/"><img src="{t:prefix}/static/table_icon.png"> {t:lg2/table/1.1}</a></li>
		<li><a href="{t:prefix}/lg2/table/1.2/"><img src="{t:prefix}/static/table_icon.png"> {t:lg2/table/1.2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/1.3/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.3/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.4/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.4/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.6/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.6/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.6/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.6/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.7/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.7/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.7/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.7/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.8/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/1.8/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.8/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/1.8/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/1.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/1.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/1.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/1.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/1}</a></li>
	</ul>
</div>
<!-- Chapter 2 -->
<div class="choice my-2 col-lg-6" id="l2.1">
	<a href="{t:prefix}/lg2/2.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/2.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/2.1/" class="text-warning">{t:lg2/2.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/2.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/2/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/2.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/2.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l2.2">
	<a href="{t:prefix}/lg2/2.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/2.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/2.2/" class="text-warning">{t:lg2/2.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/listen/2.1/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/listen/2.1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/2.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/2.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/2.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/2.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/2.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/2.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/2.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.4/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/2.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.4/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/2.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/2.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/2.5/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/2.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/2.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/2.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/2.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/2}</a></li>
	</ul>
</div>
<!-- Chapter 3 -->
<div class="choice my-2 col-lg-6" id="l3.1">
	<a href="{t:prefix}/lg2/3.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/3.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/3.1/" class="text-warning">{t:lg2/3.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/3.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/3/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/3.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/3.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l3.2">
	<a href="{t:prefix}/lg2/3.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/3.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/3.2/" class="text-warning">{t:lg2/3.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/3.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.3/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/3.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.3/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/3.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.4/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/3.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.4/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/3.4/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/3.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/3.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/3.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/3.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/3}</a></li>
	</ul>
</div>
<!-- Chapter 4 -->
<div class="choice my-2 col-lg-6" id="l4.1">
	<a href="{t:prefix}/lg2/4.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/4.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/4.1/" class="text-warning">{t:lg2/4.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/4.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/4/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/4}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/4.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/4.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l4.2">
	<a href="{t:prefix}/lg2/4.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/4.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/4.2/" class="text-warning">{t:lg2/4.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/4.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.3/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.3/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/4.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/4.5/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/4.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/4.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/4.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/4.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/4}</a></li>
	</ul>
</div>
<!-- Chapter 5 -->
<div class="choice my-2 col-lg-6" id="l5.1">
	<a href="{t:prefix}/lg2/5.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/5.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/5.1/" class="text-warning">{t:lg2/5.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/5.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/5/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/5}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/5.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l5.2">
	<a href="{t:prefix}/lg2/5.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/5.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/5.2/" class="text-warning">{t:lg2/5.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/5.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.3/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.3/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.6/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/5.6/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.6/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/5.6/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/5.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/5.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/5.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/5.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/5}</a></li>
	</ul>
</div>
<!-- Chapter 6 -->
<div class="choice my-2 col-lg-6" id="l6.1">
	<a href="{t:prefix}/lg2/6.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/6.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/6.1/" class="text-warning">{t:lg2/6.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/6.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/6/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/6}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/6.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/6.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l6.2">
	<a href="{t:prefix}/lg2/6.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/6.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/6.2/" class="text-warning">{t:lg2/6.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/6.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/6.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.5/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.6/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/6.6/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/6.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/6.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/6.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/6.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/6}</a></li>
	</ul>
</div>
<!-- Chapter 7 -->
<div class="choice my-2 col-lg-6" id="l7.1">
	<a href="{t:prefix}/lg2/7.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/7.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/7.1/" class="text-warning">{t:lg2/7.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/7.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/7/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/7}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/7.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/7.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l7.2">
	<a href="{t:prefix}/lg2/7.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/7.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/7.2/" class="text-warning">{t:lg2/7.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/7.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/7.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/7.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.4/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.4/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/7.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.5/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/7.5/t}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/7.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/7.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/7.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/7.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/7}</a></li>
	</ul>
</div>
<!-- Chapter 8 -->
<div class="choice my-2 col-lg-6" id="l8.1">
	<a href="{t:prefix}/lg2/8.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/8.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/8.1/" class="text-warning">{t:lg2/8.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/8.1.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.1.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.1.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/8/"><img src="{t:prefix}/static/listen_icon.png"> {t:lg2/repeat/8}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/8.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/8.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l8.2">
	<a href="{t:prefix}/lg2/8.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/8.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/8.2/" class="text-warning">{t:lg2/8.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/table/8.1/"><img src="{t:prefix}/static/table_icon.png"> {t:lg2/table/8.1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/8.2.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/8.2.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/8.2.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/8.2.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.1/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/8.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.1/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/8.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.2/t/"><img src="{t:prefix}/static/text_icon.png"> {t:lg2/structure/8.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.2/a/"><img src="{t:prefix}/static/audio_icon.png"> {t:lg2/structure/8.3.2/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.1/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.2/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.3/"><img src="{t:prefix}/static/fst_icon.png"> {t:lg2/fsts/8.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/8.2.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/8.2}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/8.1.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/8}</a></li>
	</ul>
</div>
<!-- Chapter 9 -->
<div class="choice my-2 col-lg-6" id="l9">
	<a href="{t:prefix}/lg2/9/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/9/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/9/" class="text-warning">{t:lg2/9}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="https://oqaasileriffik.gl/corp/query.php" target="_blank"><img src="{t:prefix}/static/corpus_icon.png"> {t:lg2/corpus}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/9.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/slides/9}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/9.pdf"><img src="{t:prefix}/static/pdf_icon.png"> {t:lg2/pdf/9}</a></li>
	</ul>
</div>
<!-- Outtro -->
<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg2/outtro/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/static/lg2.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/outtro/" class="text-warning">{t:lg2/outtro}</a></h5>
</div>
</div>
<?php
	\LGO\footer($state);
}
