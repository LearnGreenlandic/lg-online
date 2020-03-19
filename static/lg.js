'use strict';

// U+274C ❌
// U+2713 ✓
// U+2714 ✔

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

function textCheck() {
	let e = $(this).closest('.entry');
	let i = e.find('input,textarea').first();
	i.removeClass('is-valid').removeClass('is-invalid');
	if ($.trim(i.val().toLowerCase()) === $.trim(i.attr('data-check').toLowerCase())) {
		e.find('.btn-warning,.btn-secondary').attr('disabled', true);
		e.find('.btn-warning').removeClass('btn-warning').addClass('btn-success');
		i.addClass('is-valid');
	}
	else {
		i.addClass('is-invalid');
	}
}

function adjustTextarea() {
	let ta = $(this);
	if (ta.height() < this.scrollHeight) {
		ta.height(this.scrollHeight + 20);
	}
}

$(function() {
	$('textarea').each(adjustTextarea);

	if ($('.lecture').length) {
		g_video = $('#video');
		g_video.on('seeked', updateSlide);
		g_video = g_video.get(0);

		let slides = $('.slide');
		for (let i=0 ; i<slides.length ; ++i) {
			$(slides[i]).click(goToSlide);
			g_slides.push([parseInt(slides[i].getAttribute('data-s')), slides[i]]);
		}

		updateSlide();
		setInterval(updateSlide, 1000);
	}

	if ($('.task-audio').length) {
		$('audio').each(function() {
			let p = $(this).closest('.entry');
			p.find('button.btn-primary').click(function() {
				let p = $(this).closest('.entry');
				p.find('audio').get(0).play();
			});
		});
	}

	if ($('.task-text').length) {
		$('.task-text').find('input').change(textCheck);
		$('.task-text').find('.btn-warning').click(textCheck);
		$('.task-text').find('.btn-secondary').click(function() {
			let i = $(this).closest('.entry').find('input').first();
			i.val('');
			i.removeClass('is-valid').removeClass('is-invalid');
			i.attr('placeholder', i.attr('data-check'));
			i.focus();
		});
	}

	if ($('.task-text-area').length) {
		$('.task-text-area').find('textarea').change(textCheck);
		$('.task-text-area').find('.btn-warning').click(textCheck);
		$('.task-text-area').find('.btn-secondary').click(function() {
			$('#solution').modal('show');
		});
	}

	if ($('.task-yes-no').length) {
		$('.task-yes-no').find('.btn-warning').click(function() {
			let w = $(this).attr('data-which');
			let e = $(this).closest('.entry');
			if (w === e.attr('data-which')) {
				e.find('.btn-warning').attr('disabled', true);
				$(this).removeClass('btn-warning').addClass('btn-success');
				e.find('.text-success').text(e.attr('data-check'));
			}
		});
	}

	$('.inert').off();
});
