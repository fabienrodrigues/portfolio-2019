if (!Array.isArray(window.pageScroll)) {
    window.pageScroll = [];
}

if (!Array.isArray(window.domReadyFunctions)) {
    window.domReadyFunctions = [];
}

var dragging = false;

//=require ./components/_utils.js
//=require ./components/_header.js
//=require ./components/_popup.js


// ----------------------------------- DOCUMENT READY -----------------------------------
// --------------------------------------------------------------------------------------
$(document).ready(function () {
    // --- INIT FUNCTIONS ---
    FastClick.attach(document.body);

	// CHECK DEVICE
    checkDevice();


    if(domReadyFunctions.length > 0) {
        for (var i in window.domReadyFunctions) {
            window.domReadyFunctions[i]();
        }
    }


    // --- ACTIONS ---

    // ON RESIZE
    window.onresize = windowResize;
    window.addEventListener('orientationchange', windowResize);


    // ON SCROLL
    windowScrollFn();
    
    $(window).on('scroll', function() {
        windowScrollFn();
    });


    // SWITCH MENU MOBILE
    $("body").on("touchmove", function() {
        dragging = true;
    });


    $("body").on("touchstart", function() {
        dragging = false;
    });


    $('#header .navbar-toggle, #header .filter').on('touchend, click', function(e) {
        if(dragging) return;

        switchMenu();

        e.preventDefault();
    });


    // CLICK TO OPEN POPUP
    $('#container').on('click', '.open-popup', function(e) {
        var popupName = $(this).data('popup');
        var popup = new popupClass(popupName);

        popup.openPopup();

        e.preventDefault();
    });
});


$(window).load(function() {
    document.body.classList.add('loaded');
});



// ----------------------------------- FUNCTIONS ----------------------------------------
// --------------------------------------------------------------------------------------


// --- WINDOW RESIZE ---
var rtime;
var timeout = false;
var delta = 50;
var sizeChanged = false;

function windowResize() {
    rtime = new Date();

    if (timeout === false) {
        timeout = true;
        setTimeout(resizeend, delta);
    }

	if(getDeviceKind() !== 'isMobile') {
		closeMenu(true);
	}
};


function resizeend() {
    if (new Date() - rtime < delta) {

        setTimeout(resizeend, delta);

    } else {

        timeout = false;

        checkDevice();

        sizeChanged = true;
        
        try {
			for (var i in window.pageResize) {
				window.pageResize[i]();
			}
		}
		catch(e) {
            console.log('error', e);
        }

    }               
};


function windowScrollFn() {
    var windowScroll = $(window).scrollTop();

    try {
        for (var i in window.pageScroll) {
            window.pageScroll[i](windowScroll);
        }
    }
    catch(e) {}
};