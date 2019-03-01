//=require ../../vendor/imgLiquid/js/imgLiquid-min.js

$(document).ready(function() {
    $('.imgLiquid').imgLiquid();

    overlayIntro();
});


// SET ROUND WIDTH TO INTRO RED OVERLAY
function overlayIntro() {
    var overlay = document.getElementById('intro').querySelectorAll('.overlay')[0];
    var overlayWidth;
    
    overlay.removeAttribute('style');
    overlayWidth = Math.round(overlay.offsetWidth);

    if(overlayWidth % 2 != 0) {
        overlayWidth = overlayWidth + 1;
    }

    overlay.style.width = overlayWidth + 'px';
};

pageResize.push(overlayIntro);