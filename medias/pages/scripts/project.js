//=include ../../vendor/imgLiquid/js/imgLiquid-min.js

$(document).ready(function() {
    headerState.isForceScrolled = true;

    initHeader();

    $('.imgLiquid').imgLiquid();
});

/* pageScroll.push(imageScroll);


var pageContent = document.getElementById('page-content');
var imgs = pageContent.querySelectorAll('img');
function imageScroll(windowScroll) {
    
    Array.prototype.forEach.call(imgs, function(el, index, array) {
        var scrollSpeed = el.getAttribute('data-scroll-speed');
        
        //el.style.transform = 'translateY(' + ((windowScroll / 100) * (scrollSpeed* -1))  + '%)';
        el.style.marginTop = ((windowScroll / 100) * (scrollSpeed* -1))  + 'px';
    });
}; */