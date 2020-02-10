'use strict';

let g_video = null;
let g_slides = [];
let g_slide = -1;

function goToSlide() {
	let s = parseInt($(this).attr('data-s'));
	g_video.currentTime = s;
	updateSlide();
	g_video.scrollIntoView({behavior: 'smooth', block: 'start', inline: 'center'});
}

function updateSlide() {
	let t = g_video.currentTime;
	let i = 0;
	for ( ; i<g_slides.length-1 ; ++i) {
		if (t < g_slides[i+1][0]) {
			break;
		}
	}

	if (g_slide !== i) {
		g_slide = i;
		console.log([t, i, g_slides[i][0]]);
		$('.slide').removeClass('current');
		$(g_slides[i][1]).addClass('current');
		let img = g_slides[i][1].cloneNode(true);
		$('.slides').empty().get(0).appendChild(img);
	}
}

$(function() {
	g_video = $('#video');
	g_video.on('seeked', updateSlide);
	g_video = g_video.get(0);

	let slides = $('.slide');
	for (let i=0 ; i<slides.length ; ++i) {
		$(slides[i]).click(goToSlide);
		g_slides.push([parseInt(slides[i].getAttribute('data-s')), slides[i]]);
	}

	updateSlide();
	//setInterval(updateSlide, 1000);
});
