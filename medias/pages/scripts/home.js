//=require ../../vendor/imgLiquid/js/imgLiquid-min.js

var heightIntro = 0;

$(document).ready(function() {
    $('.imgLiquid').imgLiquid();

    overlayIntro();
});


$(window).load(function() {
    var intro = document.getElementById('intro');
    heightIntro = intro.offsetHeight;
    intro.addEventListener('mousemove', introMove, false);

    $('.scroll-arrow').on('click', function() {

        intro.removeEventListener('mousemove', introMove);
        scrollArrow.removeAttribute('style');

        document.documentElement.scrollTop = heightIntro;

        stopMoveIntro = true;
    });
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


// --- INTRO ---
var mouseY = 0;
var scrollToValue = 0;
var stopMoveIntro = false;
var scrollArrow = document.getElementsByClassName('scroll-arrow')[0];
var intro = document.getElementById('intro');
var oneThirdHeight = 0; (heightIntro / 3);

function introMove(event) {

    if (typeof(intro) != 'undefined' && intro != null) {
        if(!stopMoveIntro) {
            mouseY = event.pageY;
            oneThirdHeight = heightIntro / 3;
            
            if(mouseY > oneThirdHeight) {
                scrollToValue = ((mouseY - oneThirdHeight) / 6);
                
                document.documentElement.scrollTop = scrollToValue;

                scrollArrow.style.opacity = Math.abs(1 - (mouseY / oneThirdHeight));
            }

        } else {

            scrollArrow.removeAttribute('style');

        }
    }
};