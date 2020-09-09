var utils = require('../components/_utils');


// --- WINDOW RESIZE ---
var rtime;
var timeout = false;
var delta = 100;

if (!Array.isArray(window.pageResize)) {
	window.pageResize = [];
}

module.exports.windowResize = function() {
    rtime = new Date();

    if (timeout === false) {
        timeout = true;
        setTimeout(resizeend, delta);
    }
};


resizeend = () => {
    if (new Date() - rtime < delta) {

        setTimeout(resizeend, delta);

    } else {

        timeout = false;

        utils.checkDevice();
        
        try {
			for (var i in window.pageResize) {
				window.pageResize[i]();
			}
		}
		catch(e) {}

    }               
}