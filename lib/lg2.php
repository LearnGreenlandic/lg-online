<?php
namespace LGO;

function lg2($state) {
	\LGO\header($state, 'lg2');
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
	<a href="{t:prefix}/lg2/intro/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/static/lg2.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/intro/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/intro}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/pdf/pamphlet.pdf"><i class="link-info bi bi-file-pdf"></i> {t:pamphlet}</a></li>
	</ul>
</div>
<!-- Chapter 1 -->
<div class="choice my-2 col-lg-6" id="l1.1">
	<a href="{t:prefix}/lg2/1.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/1.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/1.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/1.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/1.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/1/text}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/1/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/1.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/1.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l1.1x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/prep/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/prep}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/0.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/0.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/0.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.3/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.3/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/0.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.4/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.4/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/0.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/0.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.6/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.6}</a></li>
		<li><a href="{t:prefix}/lg2/structure/0.7/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/0.7}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/0x/deny1/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/deny1}</a></li>
		<li><a href="{t:prefix}/lg2/0x/invert1/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/invert1}</a></li>
		<li><a href="{t:prefix}/lg2/0x/deny2/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/deny2}</a></li>
		<li><a href="{t:prefix}/lg2/0x/invert2/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/invert2}</a></li>
		<li><a href="{t:prefix}/lg2/0x/deny3/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/deny3}</a></li>
		<li><a href="{t:prefix}/lg2/0x/invert3/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/invert3}</a></li>
		<li><a href="{t:prefix}/lg2/0x/summer1/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/summer1}</a></li>
		<li><a href="{t:prefix}/lg2/0x/summer2/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/summer2}</a></li>
		<li><a href="{t:prefix}/lg2/0x/tomorrow/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/tomorrow}</a></li>
		<li><a href="{t:prefix}/lg2/0x/today/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/today}</a></li>
		<li><a href="{t:prefix}/lg2/0x/name/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/name}</a></li>
		<li><a href="{t:prefix}/lg2/0x/onewho/"><i class="link-info bi bi-file-text"></i> {t:lg2/0x/onewho}</a></li>
		<li><a href="{t:prefix}/lg2/pdf/alt.pdf"><i class="link-info bi bi-file-text"></i> {t:lg2/pdf/alt}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fstx/0.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fstx/0.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fstx/0.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fstx/0.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fstx/0.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fstx/0.1.3}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l1.2">
	<a href="{t:prefix}/lg2/1.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/1.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/1.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/1.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/table/1.1/"><i class="link-info bi bi-table"></i> {t:lg2/table/1.1}</a></li>
		<li><a href="{t:prefix}/lg2/table/1.2/"><i class="link-info bi bi-table"></i> {t:lg2/table/1.2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/1.3/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.3/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.4/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.4/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.6/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.6/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.6/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.6/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.7/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.7/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.7/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.7/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.8/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/1.8/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/1.8/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/1.8/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/1.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/1.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/1.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/1.2}</a></li>
		<li><a href="{t:prefix}/lg2/1.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/1/text}</a></li>
	</ul>
</div>
<!-- Chapter 2 -->
<div class="choice my-2 col-lg-6" id="l2.1">
	<a href="{t:prefix}/lg2/2.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/2.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/2.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/2.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/2.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/2/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/2.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/2.1}</a></li>

		<div class="wip">
		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/affirm1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/affirm1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/deny1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/deny1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/deny2/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/deny2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/u1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/u1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/u2/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/u2}</a></li>
		<li><a href="{t:prefix}/lg2/2x/u3/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/u3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/tp/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/tp}</a></li>
		<li><a href="{t:prefix}/lg2/2x/dk/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/dk}</a></li>

		<li><br></li>
		<li><s><a href="{t:prefix}/lg2/2x/cr/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/cr}</a></s></li>
		<li><a href="{t:prefix}/lg2/2x/pr/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/pr}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/dr/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/dr}</a></li>
		<li><a href="{t:prefix}/lg2/2x/da/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/da}</a></li>
		</div>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l2.2">
	<a href="{t:prefix}/lg2/2.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/2.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/2.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/2.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/listen/2.1/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/listen/2.1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/2.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/2.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/2.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/2.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/2.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/2.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.3.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/2.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.4/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/2.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.4/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/2.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/2.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/2.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/2.5/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/2.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/2.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/2.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/2.2}</a></li>
		<li><a href="{t:prefix}/lg2/2.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/2/text}</a></li>
	</ul>
</div>
<!-- Chapter 3 -->
<div class="choice my-2 col-lg-6" id="l3.1">
	<a href="{t:prefix}/lg2/3.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/3.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/3.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/3.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/3.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/3/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/3.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/3.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l3.2">
	<a href="{t:prefix}/lg2/3.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/3.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/3.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/3.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/3.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.3/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/3.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.3/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/3.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.4/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/3.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/3.4/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/3.4/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/3.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/3.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/3.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/3.2}</a></li>
		<li><a href="{t:prefix}/lg2/3.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/3/text}</a></li>
	</ul>
</div>
<!-- Chapter 4 -->
<div class="choice my-2 col-lg-6" id="l4.1">
	<a href="{t:prefix}/lg2/4.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/4.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/4.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/4.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/4.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/4/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/4}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/4.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/4.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l4.2">
	<a href="{t:prefix}/lg2/4.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/4.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/4.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/4.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/4.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.3/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.3/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.4.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/4.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/4.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/4.5/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/4.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/4.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/4.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/4.2}</a></li>
		<li><a href="{t:prefix}/lg2/4.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/4/text}</a></li>
	</ul>
</div>
<!-- Chapter 5 -->
<div class="choice my-2 col-lg-6" id="l5.1">
	<a href="{t:prefix}/lg2/5.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/5.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/5.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/5.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/5.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/5/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/5}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/5.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/5.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l5.2">
	<a href="{t:prefix}/lg2/5.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/5.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/5.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/5.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/5.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.3/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.3/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.3/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.3/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.4.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.6/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/5.6/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/5.6/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/5.6/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/5.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/5.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/5.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/5.2}</a></li>
		<li><a href="{t:prefix}/lg2/5.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/5/text}</a></li>
	</ul>
</div>
<!-- Chapter 6 -->
<div class="choice my-2 col-lg-6" id="l6.1">
	<a href="{t:prefix}/lg2/6.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/6.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/6.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/6.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/6.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/6/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/6}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/6.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/6.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l6.2">
	<a href="{t:prefix}/lg2/6.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/6.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/6.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/6.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/6.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.3.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.4.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.4.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.4.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.4.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.4.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/6.5/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.5/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.5/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/6.6/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/6.6/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/6.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/6.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/6.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/6.2}</a></li>
		<li><a href="{t:prefix}/lg2/6.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/6/text}</a></li>
	</ul>
</div>
<!-- Chapter 7 -->
<div class="choice my-2 col-lg-6" id="l7.1">
	<a href="{t:prefix}/lg2/7.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/7.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/7.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/7.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/7.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/7/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/7}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/7.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/7.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l7.2">
	<a href="{t:prefix}/lg2/7.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/7.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/7.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/7.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/structure/7.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/7.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.3.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/7.3.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.4/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.4/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.4/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/7.4/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/7.5/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/7.5/t}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/7.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/7.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/7.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/7.2}</a></li>
		<li><a href="{t:prefix}/lg2/7.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/7/text}</a></li>
	</ul>
</div>
<!-- Chapter 8 -->
<div class="choice my-2 col-lg-6" id="l8.1">
	<a href="{t:prefix}/lg2/8.1/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/8.1/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/8.1/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/8.1}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/fsts/8.1.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.1.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.1.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.1.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.1.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.1.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/repeat/8/"><i class="link-info bi bi-chat-right-fill"></i> {t:lg2/repeat/8}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/8.1.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/8.1}</a></li>
	</ul>
</div>
<div class="choice my-2 col-lg-6" id="l8.2">
	<a href="{t:prefix}/lg2/8.2/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/8.2/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/8.2/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/8.2}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/table/8.1/"><i class="link-info bi bi-table"></i> {t:lg2/table/8.1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/8.2.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/8.2.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/8.2.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.2.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/8.2.2/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.1/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/8.3.1/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.1/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/8.3.1/a}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.2/t/"><i class="link-info bi bi-file-text"></i> {t:lg2/structure/8.3.2/t}</a></li>
		<li><a href="{t:prefix}/lg2/structure/8.3.2/a/"><i class="link-info bi bi-music-note-beamed"></i> {t:lg2/structure/8.3.2/a}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.1/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.2.1}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.2/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.2.2}</a></li>
		<li><a href="{t:prefix}/lg2/fsts/8.2.3/"><i class="link-info bi bi-x-diamond"></i> {t:lg2/fsts/8.2.3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/8.2.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/8.2}</a></li>
		<li><a href="{t:prefix}/lg2/8.1/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/8/text}</a></li>
	</ul>
</div>
<!-- Chapter 9 -->
<div class="choice my-2 col-lg-6" id="l9">
	<a href="{t:prefix}/lg2/9/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/d/lg2/9/{t:lang}/0.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/9/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/9}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="https://oqaasileriffik.gl/corp/query.php" target="_blank"><i class="link-info bi bi-body-text"></i> {t:lg2/corpus}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/pdf/slides/9.pdf"><i class="link-info bi bi-file-pdf"></i> {t:lg2/pdf/slides/9}</a></li>
		<li><a href="{t:prefix}/lg2/9/text/"><i class="link-info bi bi-file-pdf"></i> {t:lg2/9/text}</a></li>
	</ul>
</div>
<!-- Outtro -->
<div class="choice my-2 col-lg-12">
	<a href="{t:prefix}/lg2/outtro/" class="mr-3 ch-item ch-img"><img src="{t:prefix}/static/lg2.png"></a>
	<h5 class="ch-item"><a href="{t:prefix}/lg2/outtro/" class="link-warning"><i class="link-danger bi bi-play-btn"></i> {t:lg2/outtro}</a></h5>
</div>
</div>
<?php
	\LGO\footer($state);
}
