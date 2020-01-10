export class HeaderClass {
	// constructor
	constructor(isForceScrolled = false) {
		this.windowScroll = 0;
		this.header = document.getElementById('header');
		this.isScrolled = false;
		this.isForceScrolled = isForceScrolled;
	}

	switchMenu() {
		if (this.header.classList.contains('open')) {

			this.closeMenu(false);

		} else {

			this.openMenu();

		}

		return false;
	}

	openMenu() {
		this.header.classList.add('open');

		setTimeout(function () {
			$('#header .filter').on('touchmove', function (e) {
				e.preventDefault();
			});
		}, 250);
	}

	closeMenu() {
		this.header.classList.remove('open');
	}

	addScrolled() {
		this.header.classList.add('scrolled');
		this.isScrolled = true;
	}

	removeScrolled() {
		this.header.classList.remove('scrolled');
		this.isScrolled = false;
	}

	headerScroll(windowScroll) {
		var self = this;
		let headerHeight = self.header.offsetHeight;

		if (Math.abs(windowScroll) >= headerHeight) {

			if (!self.isScrolled) {
				self.addScrolled();
			}

		} else {

			if (self.isScrolled) {
				self.removeScrolled();
			}

			if (self.isScrolled && !self.isForceScrolled) {
				self.removeScrolled();
			}

			if (self.isForceScrolled) {
				self.addScrolled();
			}

		}
	}


	initHeader() {
		let self = this;
		self.headerScroll($(window).scrollTop());

		if (self.isForceScrolled) {
			self.header.classList.add('forced');
		}

		$(window).on('scroll', function () {
			self.headerScroll($(window).scrollTop());
		});

		$('#header .links-list a').on('click', function (e) {
			if ($(this).attr('href') == '#contacts') {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $('#footer').offset().top
				}, 400);
			}
		})
	}
}