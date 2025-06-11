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
<!-- Chapter 1.1 -->
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
<!-- Chapter 1.1x -->
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
<!-- Chapter 1.2 -->
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
<!-- Chapter 1x -->
<div class="choice my-2 col-lg-6" id="l1x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/1x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/1x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/1x/affirm1/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/affirm1}</a></li>
		<li><a href="{t:prefix}/lg2/1x/affirm2/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/affirm2}</a></li>
		<li><a href="{t:prefix}/lg2/1x/deny1/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/deny1}</a></li>
		<li><a href="{t:prefix}/lg2/1x/deny2/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/deny2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/1x/part1/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/part1}</a></li>
		<li><a href="{t:prefix}/lg2/1x/part2/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/part2}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/1x/obj1/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/obj1}</a></li>
		<li><a href="{t:prefix}/lg2/1x/obj2/"><i class="link-info bi bi-file-text"></i> {t:lg2/1x/obj2}</a></li>
	</ul>
</div>
<!-- Chapter 2.1 -->
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
		</ul>
</div>
<!-- Chapter 2.2 -->
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
<!-- Chapter 2x -->
<div class="choice my-2 col-lg-6" id="l2x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/2x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/2x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/2x/deny3/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/deny3}</a></li>
		<li><a href="{t:prefix}/lg2/2x/deny4/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/deny4}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/that1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/that1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/indirect1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/indirect1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/lu1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/lu1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/laar1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/laar1}</a></li>
		<li><a href="{t:prefix}/lg2/2x/laar2/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/laar2}</a></li>
		<!-- <li><a href="{t:prefix}/lg2/2x/una1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/una1}</a></li> -->
		<li><a href="{t:prefix}/lg2/2x/niq1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/niq1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/2x/lik1/"><i class="link-info bi bi-file-text"></i> {t:lg2/2x/lik1}</a></li>
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
<!-- Chapter 3x -->
<div class="choice my-2 col-lg-6" id="l3x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/3x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/3x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/3x/review3/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/review3}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/3x/fam1/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/fam1}</a></li>
		<li><a href="{t:prefix}/lg2/3x/fam2/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/fam2}</a></li>
		<li><a href="{t:prefix}/lg2/3x/fam3/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/fam3}</a></li>
		<li><a href="{t:prefix}/lg2/3x/deny5/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/deny5}</a></li>
		<li><a href="{t:prefix}/lg2/3x/that2/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/that2}</a></li>
		<li><a href="{t:prefix}/lg2/3x/affirm3/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/affirm3}</a></li>
		<li><a href="{t:prefix}/lg2/3x/cntp1/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/cntp1}</a></li>
		<li><a href="{t:prefix}/lg2/3x/affirm4/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/affirm4}</a></li>
		<li><a href="{t:prefix}/lg2/3x/summer3/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/summer3}</a></li>
		<li><a href="{t:prefix}/lg2/3x/summer4/"><i class="link-info bi bi-file-text"></i> {t:lg2/3x/summer4}</a></li>
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
<!-- Chapter 4x -->
<div class="choice my-2 col-lg-6" id="l4x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/4x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/4x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/4x/review4/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/review4}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/4x/so1/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/so1}</a></li>
		<li><a href="{t:prefix}/lg2/4x/so2/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/so2}</a></li>
		<li><a href="{t:prefix}/lg2/4x/so3/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/so3}</a></li>
		<li><a href="{t:prefix}/lg2/4x/so4/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/so4}</a></li>
		<li><a href="{t:prefix}/lg2/4x/so5/"><i class="link-info bi bi-file-text"></i> {t:lg2/4x/so5}</a></li>
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
<!-- Chapter 5x -->
<div class="choice my-2 col-lg-6" id="l5x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/5x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/5x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/5x/review50/"><i class="link-info bi bi-file-text"></i> {t:lg2/5x/review50}</a></li>
		<li><a href="{t:prefix}/lg2/5x/review51/"><i class="link-info bi bi-file-text"></i> {t:lg2/5x/review51}</a></li>
		<li><a href="{t:prefix}/lg2/5x/review52/"><i class="link-info bi bi-file-text"></i> {t:lg2/5x/review52}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/5x/galuar1/"><i class="link-info bi bi-file-text"></i> {t:lg2/5x/galuar1}</a></li>
		<li><a href="{t:prefix}/lg2/5x/cau1/"><i class="link-info bi bi-file-text"></i> {t:lg2/5x/cau1}</a></li>
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
<!-- Chapter 6x -->
<div class="choice my-2 col-lg-6" id="l6x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/6x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/6x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/6x/review60/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/review60}</a></li>
		<li><a href="{t:prefix}/lg2/6x/review61/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/review61}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/6x/cau2/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/cau2}</a></li>
		<li><a href="{t:prefix}/lg2/6x/schwa1/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/schwa1}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/6x/review62/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/review62}</a></li>
		<li><a href="{t:prefix}/lg2/6x/review63/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/review63}</a></li>
		<li><a href="{t:prefix}/lg2/6x/review64/"><i class="link-info bi bi-file-text"></i> {t:lg2/6x/review64}</a></li>
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
<!-- Chapter 7x -->
<div class="choice my-2 col-lg-6" id="l7x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/7x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/7x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/7x/review711/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review711}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review712/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review712}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review713/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review713}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review714/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review714}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review715/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review715}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review716/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review716}</a></li>
		<li><a href="{t:prefix}/lg2/7x/review72/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/review72}</a></li>

		<li><br></li>
		<li><a href="{t:prefix}/lg2/7x/trpar1/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/trpar1}</a></li>
		<li><a href="{t:prefix}/lg2/7x/trpar2/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/trpar2}</a></li>
		<li><a href="{t:prefix}/lg2/7x/oqarfige/"><i class="link-info bi bi-file-text"></i> {t:lg2/7x/oqarfige}</a></li>
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
<!-- Chapter 8x -->
<div class="choice my-2 col-lg-6" id="l8x">
	<h5 class="ch-item"><a href="{t:prefix}/lg2/8x/" class="link-warning"><i class="link-danger bi bi-file-pdf"></i> {t:lg2/8x}</a></h5>
	<ul class="list-unstyled ch-item">
		<li><a href="{t:prefix}/lg2/8x/cau1s3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau1s3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau2s3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau2s3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau3s3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau3s3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau4s3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau4s3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau1p3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau1p3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau2p3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau2p3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau3p3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau3p3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau4p3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau4p3}</a></li>
		<li><a href="{t:prefix}/lg2/8x/cau3/"><i class="link-info bi bi-file-text"></i> {t:lg2/8x/cau3}</a></li>
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
