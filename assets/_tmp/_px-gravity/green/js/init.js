/*
	Gravity by Pixelarity
	pixelarity.com @pixelarity
	License: pixelarity.com/license
*/

(function($) {

	skel.init({
		reset: 'full',
		breakpoints: {
			global: { href: 'css/style.css', containers: 1400, grid: { gutters: ['2em', 0] } },
			xlarge: { media: '(max-width: 1680px)', href: 'css/style-xlarge.css', containers: 1200 },
			large: { media: '(max-width: 1280px)', href: 'css/style-large.css', containers: 960, grid: { gutters: ['1.5em', 0] }, viewport: { scalable: false } },
			medium: { media: '(max-width: 980px)', href: 'css/style-medium.css', containers: '90%!' },
			small: { media: '(max-width: 736px)', href: 'css/style-small.css', containers: '90%', grid: { gutters: ['1.25em', 0] } },
			xsmall: { media: '(max-width: 480px)', href: 'css/style-xsmall.css' }
		},
		plugins: {
			layers: {
				titleBar: {
					breakpoints: 'small',
					height: 44,
					html: '<span class="toggle" data-action="toggleLayer" data-args="navPanel"></span><span class="title" data-action="copyText" data-args="logo"></span>',
					position: 'top-left',
					side: 'top',
					width: '100%'
				},
				navPanel: {
					animation: 'overlayX',
					breakpoints: 'small',
					clickToHide: true,
					height: '100%',
					hidden: true,
					html: '<div data-action="navList" data-args="nav"></div>',
					orientation: 'vertical',
					position: 'top-left',
					side: 'left',
					width: 250
				}
			}
		}
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Touch mode.
			if (skel.vars.isMobile)
				$body.addClass('is-touch');

		// Forms (IE<10).
			var $form = $('form');
			if ($form.length > 0) {

				$form.find('.form-button-submit')
					.on('click', function() {
						$(this).parents('form').submit();
						return false;
					});

				if (skel.vars.IEVersion < 10) {
					$.fn.n33_formerize=function(){var _fakes=new Array(),_form = $(this);_form.find('input[type=text],textarea').each(function() { var e = $(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = $(this); var x = $($('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = $(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = $(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { $(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = $(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); $(this).find('select').val($('option:first').val()); $(this).find('input,textarea').each(function() { var e = $(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
					$form.n33_formerize();
				}

			}

		// Dropdowns.
			$('#nav > ul').dropotron({
				alignment: ($body.hasClass('landing') ? 'center' : 'right'),
				hideDelay: 400
			});

		//  Carousel.
			$('.carousel').each(function() {

				var	$this = $(this);

				if (!skel.vars.isTouch) {

					$this.css('overflow-x', 'hidden');

					// Wrapper.
						$this.wrap('<div class="carousel-wrapper" />');
						var $wrapper = $this.parent();

					// Nav.
						var	$navRight = $('<div class="nav right"></div>').insertAfter($this),
							$navLeft = $('<div class="nav left"></div>').insertAfter($this),
							intervalId;

						$navLeft
							.on('mouseenter', function() {
								intervalId = window.setInterval(function() {
									$this.scrollLeft( $this.scrollLeft() - 5 );
								}, 10);
							})
							.on('mouseleave', function() {
								window.clearInterval(intervalId);
							});

						$navRight
							.on('mouseenter', function() {
								intervalId = window.setInterval(function() {
									$this.scrollLeft( $this.scrollLeft() + 5 );
								}, 10);
							})
							.on('mouseleave', function() {
								window.clearInterval(intervalId);
							});

					// Events.
						$window
							.on('resize load', function() {

								if ($this.width() < $this.prop('scrollWidth'))
									$wrapper.removeClass('no-scroll');
								else
									$wrapper.addClass('no-scroll');

							});

				}

				// Poptrox.
					var p = {
						baseZIndex: 100001,
						useBodyOverflow: false,
						usePopupEasyClose: false,
						overlayColor: '#000000',
						overlayOpacity: 0.75,
						usePopupDefaultStyling: false,
						popupLoaderText: '',
						usePopupNav: true
					};

					if (skel.isActive('small')) {

						p.usePopupCaption = false;
						p.usePopupCloser = false;
						p.windowMargin = 10;

					}
					else {

						p.usePopupCaption = true;
						p.usePopupCloser = true;
						p.windowMargin = 50;

					}

					$this.poptrox(p);

			});

	});

})(jQuery);