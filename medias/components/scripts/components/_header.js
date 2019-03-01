
function initHeader() {
	headerScroll($(window).scrollTop());
};

domReadyFunctions.push(initHeader);
pageScroll.push(headerScroll);


// --- MENU ---
var isMenuOpen = false;
// SWITCH MENU MOBILE
var switchMenu = function () {
	if(isMenuOpen) {
		
		closeMenu();
		

	} else {

		openMenu();

	}
};


var openMenu = function () {
	document.getElementById('header').classList.add('open');
	isMenuOpen = true;
};


var closeMenu = function () {
	document.getElementById('header').classList.remove('open');
	isMenuOpen = false;
};


// BACKGROUND HEADER ON SCROLL
var headerHeight, introHeight;
var header = document.getElementById('header');
function headerScroll(windowScroll) {
	headerHeight = header.offsetHeight;
	
	if(Math.abs(windowScroll) >= headerHeight) {

		if(!headerState.isScrolled) {
			headerState.scrolled();
		}
		
	} else {
		
		if(headerState.isScrolled) {
			headerState.notScrolled();
		}
		
	}
};

var headerState = {
	isScrolled: false,
	scrolled : function() {
		header.classList.add('scrolled');
		this.isScrolled = true;
	},
	notScrolled : function() {
		header.classList.remove('scrolled');
		this.isScrolled = false;
	}
};