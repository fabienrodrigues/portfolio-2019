
let homePage = {
    heightIntro : 0,

    // execute in document.ready
    readyFn : function() {
        this.overlayIntro();

        window.pageResize.push(this.overlayIntro);
    },

    // execute in window.load
    loadFn : function() {
        let intro = document.getElementById('intro');
        this.heightIntro = intro.offsetHeight;

        intro.querySelectorAll('.scroll-arrow')[0].onclick = function() {
            document.documentElement.scrollTop = this.heightIntro;
        };
    },

    // Pixel perfect overlay intro
    overlayIntro : function() {
        let overlay = document.getElementById('intro').querySelectorAll('.overlay')[0];
        let overlayWidth;
        
        overlay.removeAttribute('style');
        overlayWidth = Math.round(overlay.offsetWidth);

        if(overlayWidth % 2 != 0) {
            overlayWidth = overlayWidth + 1;
        }

        overlay.style.width = overlayWidth + 'px';
    }    
}

export {homePage};