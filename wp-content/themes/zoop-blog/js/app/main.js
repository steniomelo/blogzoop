// Clear forms
(function ($) {
	'use strict';

	$.fn.clearDefault = function () {
		return this.each(function () {
			var defaultValue = $(this).val();
			$(this).focus(function () {
				if ($(this).val() === defaultValue) {
					$(this).val('');
				}
			});
			$(this).blur(function () {
				if ($(this).val() === '') {
					$(this).val(defaultValue);
				}
			});
		});
	};
})(jQuery);


(function () {
	'use strict';

	$('.clear-text').clearDefault();

	$('.menu-search .screen-reader-text').click(function () {
		$('.search-field').toggleClass('expanded');
		$('.search-submit').toggleClass('expanded');
	});

})();


class TxtType {
	constructor(el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 2000;
		this.txt = '';
		this.tick();
		this.isDeleting = false;
	}
	tick() {
		var i = this.loopNum % this.toRotate.length;
		var fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		}
		else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

		var that = this;
		var delta = 200 - Math.random() * 100;

		if (this.isDeleting) {
			delta /= 2;
		}

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		}
		else if (this.isDeleting && this.txt === '') {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout(function () {
			that.tick();
		}, delta);
	}
}


window.onload = function () {
	var elements = document.getElementsByClassName('typewrite');
	for (var i = 0; i < elements.length; i++) {
		var toRotate = elements[i].getAttribute('data-type');
		var period = elements[i].getAttribute('data-period');
		if (toRotate) {
			new TxtType(elements[i], JSON.parse(toRotate), period);
		}
	}
	// INJECT CSS
	var css = document.createElement("style");
	css.type = "text/css";
	css.innerHTML = ".typewrite > .wrap ";
	document.body.appendChild(css);
};