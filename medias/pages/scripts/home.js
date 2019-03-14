//=require ../../vendor/imgLiquid/js/imgLiquid-min.js

var heightIntro = 0;

$(document).ready(function() {
    $('.imgLiquid').imgLiquid();

    overlayIntro();
});


$(window).load(function() {
    var intro = document.getElementById('intro');
    heightIntro = intro.offsetHeight;

    intro.querySelectorAll('.scroll-arrow')[0].onclick = function() {
        document.documentElement.scrollTop = heightIntro;
    };
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