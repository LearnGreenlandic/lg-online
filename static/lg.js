(function (root, factory) {
	if (typeof define === 'function' && define.amd) {
		define([], factory);
	}
	else if (typeof module === 'object' && module.exports) {
		module.exports = factory();
	}
	else {
		root.learngl = factory();
	}
}(typeof self !== 'undefined' ? self : this, function () {
	'use strict';

	/* BEGIN NUTSERUT IMPORTED CODE */
	let g_pair = 'kal2dan';
	let g_rv = {};

	function escHTML(t) {
		return t.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&apos;');
	}

	function sort_readings(a, b) {
		if (/¤MERGED/.test(a)) {
			return -1;
		}
		return 1;
	}

	function apply_secondary() {
		if ($('#optSecondary').prop('checked')) {
			$('.s-tag').show();
		}
		else {
			$('.s-tag').hide();
		}
	}

	function format_reading(txt) {
		txt = txt.replace(/ ¤\S+/g, '');
		txt = escHTML(txt);
		txt = txt.replace(/&quot;(.+?)&quot; /g, '<span class="text-success fw-bold">"$1"</span> ');
		txt = txt.replace(/ (i?(?:N|V|Pali|Conj|Adv|Interj|Pron|Prop|Num|Symbol|Adj|Part|Prep)) (i?(?:N|V|Pali|Conj|Adv|Interj|Pron|Prop|Num|Symbol|Adj|Part|Prep))\b/g, ' <span class="text-info">$1</span><span class="text-info s-tag">\xa0$2</span>');
		txt = txt.replace(/ (i?(?:N|V|Pali|Conj|Adv|Interj|Pron|Prop|Num|Symbol|Adj|Part|Prep))\b/g, ' <span class="text-info">$1</span>');
		txt = txt.replace(/ ([-A-Z]+)\b/g, ' <span class="text-danger">$1</span>');
		txt = txt.replace(/ (i?[A-Z]\S*\/\S+)\b/g, '<span class="text-primary s-tag">\xa0$1</span>');
		return txt;
	}

	function glossify(txt) {
		let html = '';
		let cs = txt.split(/\n(?="<)/);
		for (let i=0 ; i<cs.length ; ++i) {
			let rs = cs[i].split(/\n\t/);
			let wf = rs.shift();
			html += '<b>'+escHTML(wf.substring(2, wf.length-2))+"</b>\n";
			rs.sort(sort_readings);
			html += '<i class="bi bi-hash"></i><span class="ms-2 gloss-src">'+format_reading(rs[0])+"</span>\n";
			html += '<i class="bi bi-highlighter"></i><span class="ms-2 gloss-trg">'+format_reading(rs[1])+"</span>\n";
		}
		return html;
	}

	function translateResult(rv) {
		g_rv = rv;

		if (rv.hasOwnProperty('input')) {
			$('#input').val(rv.input).change();
		}

		if (rv.hasOwnProperty('garbage') && rv.garbage.length) {
			let gb = '<ul>';
			for (let i=0 ; i<rv.garbage.length ; ++i) {
				let err = '';
				if (rv.garbage[i][0] === 'spell') {
					err = l10n_translate('TXT_GARBAGE_SPELL', {INPUT: '<i class="data-word" data-which="'+i+'">'+escHTML(rv.garbage[i][1])+'</i>', OUTPUT: '<i class="data-ana">'+escHTML(rv.garbage[i][2])+'</i>'});
				}
				else if (rv.garbage[i][0] === 'heur') {
					err = l10n_translate('TXT_GARBAGE_HEUR', {INPUT: '<i class="data-word" data-which="'+i+'">'+escHTML(rv.garbage[i][1])+'</i>', OUTPUT: '<i class="data-ana">'+escHTML(rv.garbage[i][2])+'</i>'});
				}
				else if (rv.garbage[i][0] === 'null') {
					err = l10n_translate('TXT_GARBAGE_NULL', {INPUT: '<i class="data-word" data-which="'+i+'">'+escHTML(rv.garbage[i][1])+'</i>'});
				}
				if (err) {
					gb += '<li><div class="d-flex"><div class="me-auto">'+err+'</div><div><a href="#" class="link-light ms-3 text-nowrap btnFeedback"><i class="bi bi-send"></i> '+l10n_translate('LBL_FEEDBACK')+'</a></div></div></li>';
				}
			}
			gb += '</ul>';
			$('#garbage-body').html(gb);
			$('#garbage-body').find('.link-light').off().click(function() { alert('NOT YET IMPLEMENTED'); return false; });
			$('#garbage').show();

			$('.btnFeedback').off().click(feedbackShow);
		}

		if (rv.hasOwnProperty('gloss')) {
			$('#output-gloss').show().find('.card-text').text(rv.gloss);
		}
		if (rv.hasOwnProperty('moved')) {
			$('#output-moved').show().find('.card-text').text(rv.moved);
		}
		if (rv.hasOwnProperty('output')) {
			if (/^g-/.test(g_pair)) {
				$('#output').show().find('.card-text').html(glossify(rv.output));
				apply_secondary();
			}
			else {
				$('#output').show().find('.card-text').text(rv.output);
			}
		}
	}

	function ajax_fail(jqXHR) {
		if (jqXHR.responseJSON.errors.length == 1) {
			alert(jqXHR.responseJSON.errors[0]);
			return false;
		}

		$('#garbage,#output,#output-gloss,#output-moved').hide();
		let html = '<span class="text-danger fw-bold">';
		for (let i=0 ; i<jqXHR.responseJSON.errors.length ; ++i) {
			html += escHTML(jqXHR.responseJSON.errors[i])+'<br>';
		}
		html += '</span>';
		$('#output').show().find('.card-text').html(html);
	}

	function btnTranslate() {
		$('#garbage,#output,#output-gloss,#output-moved').hide();
		let txt = $.trim($('#input').val());
		if (!txt) {
			return;
		}

		if (g_pair === 'kal2dan') {
			$('#output-gloss,#output-moved').show().find('.card-text').text('...working...');
			$.post('https://nutserut.gl/dev/callback.php', {a: 'kal2qdx', t: txt}).done(translateResult).fail(ajax_fail);
		}
		else {
			$('#output').show().find('.card-text').text('...working...');
			$.post('https://nutserut.gl/dev/callback.php', {a: g_pair, t: txt}).done(translateResult).fail(ajax_fail);
		}
	}

	function inputChange() {
		let cnt = '('+$('#input').val().length+'/500)';
		$('#inputCount').text(cnt);
	}

	function initNutserut() {
		$('#garbage,#output,#output-gloss,#output-moved').hide();
		$('.btnTranslate').click(btnTranslate);

		$('#input').change(inputChange).keyup(inputChange).change();

		$('input[name=optPair]').change(function() {
			g_pair = $('input[name=optPair]:checked').val();
			$('.dan2kal,.kal2dan,.m-dan2kal,.m-kal2dan,.h-kal2dan,.g-kal2eng,.g-kal2dan').hide();
			$('.'+g_pair).show();
		}).first().click();

		$('input[name=optPair]').first().change();

		$('#optSecondary').change(apply_secondary);
	}
	/* END NUTSERUT IMPORTED CODE */

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
		let chks = $.trim(i.attr('data-check').toLowerCase()).split('|');
		console.log(chks, i.val());
		i.addClass('is-invalid');
		for (let ci=0 ; ci<chks.length ; ++ci) {
			if ($.trim(i.val().replace(/[ \t][ \t]+/g, ' ').toLowerCase()) === chks[ci]) {
				e.find('.btn-warning,.btn-secondary').attr('disabled', true);
				e.find('.btn-warning').removeClass('btn-warning').addClass('btn-success');
				i.removeClass('is-invalid');
				i.addClass('is-valid');
			}
		}
	}

	function adjustTextarea() {
		let ta = $(this);
		if (ta.height() < this.scrollHeight) {
			ta.height(this.scrollHeight + 20);
		}
	}

	function init() {
		$('textarea').each(adjustTextarea);
		$('.hint').hide();

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
				p.find('button.btn-primary,button.btn-info').click(function() {
					let p = $(this).closest('.entry');
					p.find('audio').get(0).play();
				});
			});
		}

		if ($('.task-text').length) {
			$('.task-text').find('input').change(textCheck);
			$('.task-text').find('.btn-warning').click(textCheck);
			$('.task-text').find('.btn-secondary').click(function() {
				let e = $(this).closest('.entry');
				let i = e.find('input').first();
				e.find('.hint').text(i.attr('data-check')).show();
				i.removeClass('is-valid').removeClass('is-invalid');
				i.attr('placeholder', i.attr('data-check'));
				i.focus();
			});
		}

		if ($('.task-read').length) {
			$('.task-read').find('.btn-secondary').click(function() {
				$(this).closest('.entry').find('.hint').show();
			});
		}

		if ($('.task-text-area').length) {
			$('.task-text-area').find('textarea').change(textCheck);
			$('.task-text-area').find('.btn-warning').click(function() {
				let e = $('.task-text-area').find('textarea');
				e.change();
				if (e.hasClass('is-invalid')) {
					let vs = e.val().split(/\s+/);
					let cs = e.attr('data-check').split(/\s+/);
					let os = e.attr('data-orig').split(/\s+/);
					let html = '';
					for (let i=0 ; i<cs.length ; ++i) {
						if (cs[i].toLowerCase().replace(/[^a-z0-9-]+/g, '') === os[i].toLowerCase().replace(/[^a-z0-9-]+/g, '') || vs[i].toLowerCase().replace(/[^a-z0-9-]+/g, '') === os[i].toLowerCase().replace(/[^a-z0-9-]+/g, '')) {
							html += os[i]+' ';
						}
						else if (cs[i].toLowerCase().replace(/[^a-z0-9-]+/g, '') === vs[i].toLowerCase().replace(/[^a-z0-9-]+/g, '')) {
							html += '<span class="text-success">'+cs[i]+'</span> ';
						}
						else {
							html += '<span class="text-danger">'+vs[i]+'</span> ';
						}
					}
					$('#check-body').html(html);
					$('#check').modal('show');
				}
			});
			$('.task-text-area').find('.btn-secondary').click(function() {
				$('#solution').modal('show');
			});
		}

		if ($('.task-yes-no').length) {
			$('.task-yes-no').find('.btn-warning').click(function() {
				let w = $(this).attr('data-which');
				let e = $(this).closest('.entry');
				if (w === e.attr('data-which')) {
					e.find('.btn-warning,.btn-danger').attr('disabled', true);
					$(this).removeClass('btn-warning').addClass('btn-success');
					e.find('.text-success').text(e.attr('data-check'));
				}
				else {
					$(this).removeClass('btn-warning').addClass('btn-danger');
				}
			});
		}

		if ($('.welcome-read').length) {
			let words = $('.welcome-read').find('span.w');
			words.click(function() {
				words.removeClass('text-info').removeClass('font-weight-bold');
				let w = $(this);
				w.addClass('text-info').addClass('font-weight-bold');
				$('#wimg').attr('src', w.attr('data-png'));
				$('#wmp3').attr('src', w.attr('data-mp3'));
			});

			$('#wprev').click(function() {
				let n = $('.welcome-read').find('.text-info').prev();
				if (!n.length) {
					n = words.last();
				}
				n.click();
			});

			$('#wnext').click(function() {
				let n = $('.welcome-read').find('.text-info').next();
				if (!n.length) {
					n = words.first();
				}
				n.click();
			});

			words.eq(0).click();
		}

		if ($('.task-dialogue').length) {
			$('.task-dialogue').find('.btn-secondary').click(function() {
				let t = $(this).closest('.entry').find('.t').first();
				let txt = t.text();
				t.text(t.attr('data-text'));
				t.attr('data-text', txt);
			});
		}

		if ($('.welcome').length) {
			$('#video').on('ended', function() {
				$('#welcome-question').modal('show');
			});
			$('#welcome-yes').click(function() {
				$('#welcome-sure').modal('show');
			});

			$('#welcome-sure').find('input').change(function() {
				if ($(this).val() == $(this).attr('data-check')) {
					window.location.href = '../../lg2/';
				}
				else {
					$(this).addClass('is-invalid');
				}
			});
			$('#welcome-sure').find('.btn-warning').click(function() {
				$('#welcome-sure').find('input').change();
			});
		}

		if ($('#welcome-words').length) {
			let words = $('#welcome-words').find('span.w');
			words.hide();
			words.each(function() {
				let w = $(this);
				let t = w.text();
				w.attr('data-word', t.toLowerCase().replace(/[^a-zæøå|]/g, ''));
				w.text(t.replace(/\|.*$/g, ''));
			});
			$('#welcome-input').change(function() {
				let i = $(this);
				let txt = i.val().toLowerCase().replace(/[^a-zæøå]/g, '');
				let w = $('#welcome-words').find('span.w:hidden').first();
				if ((new RegExp('^('+w.attr('data-word')+')$')).test(txt)) {
					w.show();
					i.val('');
					i.attr('placeholder', '');
					i.removeClass('is-invalid');
					i.focus();

					if (!$('#welcome-words').find('span.w:hidden').length) {
						$('#welcome-words').find('input,button').attr('disabled', true);
						$('#welcome-words').find('.btn-warning').removeClass('btn-warning').addClass('btn-success');
					}
				}
				else {
					i.addClass('is-invalid');
				}
			});
			$('#welcome-words').find('.btn-warning').click(function() {
				$('#welcome-input').change();
			});
			$('#welcome-words').find('.btn-secondary').click(function() {
				let i = $('#welcome-input');
				i.val('');
				i.removeClass('is-invalid');
				i.attr('placeholder', $('#welcome-words').find('span.w:hidden').first().text());
				i.focus();
			});
		}

		if ($('.task-updown').length) {
			$('.task-updown').find('.btn-info').click(function() {
				let e = $(this).closest('.entry').find('.ua');
				e.text(e.attr('data-a'));
			});
			$('.task-updown').find('.btn-secondary').click(function() {
				let e = $(this).closest('.entry').find('.ua');
				e.text(e.attr('data-t'));
			});
		}

		if ($('#shuffled').length) {
			$('#shuffled').children().hide();
			$('#shuffled').children().first().show();

			$('#btnPrev').click(function() {
				$('.hint').hide();
				let c = $('#shuffled').children(':visible');
				c.hide();
				let nc = null;
				if (c.prev().length) {
					nc = c.prev().show();
				}
				else {
					nc = $('#shuffled').children().last().show();
				}
				nc.find('input').val('').attr('placeholder', '').removeClass('is-invalid');
			});

			$('#btnNext').click(function() {
				$('.hint').hide();
				let c = $('#shuffled').children(':visible');
				c.hide();
				let nc = null;
				if (c.next().length) {
					nc = c.next().show();
				}
				else {
					nc = $('#shuffled').children().first().show();
				}
				if ($(this).hasClass('playAfter')) {
					nc.find('.btn-primary').click();
				}
				nc.find('input').val('').attr('placeholder', '').removeClass('is-invalid').first().focus();
			});
		}

		$('.inert').off();

		const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
		const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

		initNutserut();

		if (g_lang === 'dan') {
			$('#g-kal2dan').click();
		}
	}

	window.addEventListener('load', init);

	// Export useful functions
	return {
		init: init,
		};
}));
