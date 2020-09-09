import { EventEmitter } from 'events';


// Map number x from range [a, b] to [c, d]
const map = (x, a, b, c, d) => (x - a) * (d - c) / (b - a) + c;

// Linear interpolation
const lerp = (a, b, n) => (1 - n) * a + n * b;

const calcWinsize = () => {
    return {width: window.innerWidth, height: window.innerHeight};
};

// Gets the mouse position
const getMousePos = (e) => {
    let posx = 0;
    let posy = 0;
    if (!e) e = window.event;
    if (e.pageX || e.pageY) {
        posx = e.pageX;
        posy = e.pageY;
    }
    else if (e.clientX || e.clientY) {
        posx = e.clientX + body.scrollLeft + document.documentElement.scrollLeft;
        posy = e.clientY + body.scrollTop + document.documentElement.scrollTop;
    }
    
    return { x : posx, y : posy }
};

/* const distance = (x1,y1,x2,y2) => {
    var a = x1 - x2;
    var b = y1 - y2;

    return Math.hypot(a,b);
} */

const distance = (x,y) => {
    return Math.hypot(x,y);
} 


// Calculate the viewport size
let winsize = calcWinsize();
window.addEventListener('resize', () => winsize = calcWinsize());

// Track the mouse position
let mousepos = {x: 0, y: 0};
window.addEventListener('mousemove', ev => mousepos = getMousePos(ev));

export default class ButtonCtrl extends EventEmitter {
    constructor(el) {
        super();
        // DOM elements
        // el: main button
        // text/textinner: inner text elements
        let self = this;
        self.DOM = {el: el};
        self.DOM.text = self.DOM.el.querySelector('.button-text');
        self.DOM.textinner = self.DOM.el.querySelector('.button-inner');
        // amounts the button will translate
        self.renderedStyles = {
            tx: {previous: 0, current: 0, amt: 0.1},
            ty: {previous: 0, current: 0, amt: 0.1}
        };
        // button state (hover)
        self.state = {
            hover: false
        };
        // calculate size/position
        self.calculateSizePosition();
        // init events
        self.initEvents();
        // loop fn
        self.anim;
        self.el = el;
        self.playing = false;
        
        let logViewport = function () {
            let isOut = self.isOutOfViewport(self.el);
            
            if (!isOut.any) {
                if(!self.playing) {
                    requestAnimationFrame(() => self.render());
                    self.playing = true;
                }
            } else {
                self.playing = false;
            }
        };
        
        logViewport();
        window.addEventListener('scroll', logViewport, false);
    }

    calculateSizePosition() {
        // size/position
        this.rect = this.DOM.el.getBoundingClientRect();
        // the movement will take place when the distance from the mouse to the center of the button is lower than this value
        this.distanceToTrigger = this.rect.width*0.7;
    }

    mouseTarget(e) {
        var targ;
        if (!e) var e = window.event;
        if (e.target) targ = e.target;
        else if (e.srcElement) targ = e.srcElement;
        if (targ.nodeType == 3) // defeat Safari bug
            targ = targ.parentNode;
        return targ;
    }

    findPos() {
        let obj = this.DOM.el;
        var curleft, curtop = curleft = 0;
        if (obj.offsetParent) {
            do {
                curleft += obj.offsetLeft;
                curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
        }
        return {
            left : curleft,
            top : curtop
        };
    }

    mousePositionElement(e) {
        var targetPos = this.findPos();
        var rect = e.getBoundingClientRect();
        var posx = mousepos.x - (targetPos.left + rect.width/2);
        var posy = mousepos.y - (targetPos.top + rect.height/2);
        return {
            x : posx,
            y : posy
        };
    }

    initEvents() {
        this.onResize = () => this.calculateSizePosition();
        window.addEventListener('resize', this.onResize);
    }

    render() {
        // calculate the distance from the mouse to the center of the button
        let mousePos = this.mousePositionElement(this.DOM.el);
        
        const distanceMouseButton = distance(mousePos.x, mousePos.y);        
        
        // new values for the translations
        let x = 0;
        let y = 0;

        if ( distanceMouseButton < this.distanceToTrigger ) {
            if ( !this.state.hover ) {
                this.enter();
            }
            x = mousePos.x*.3;
            y = mousePos.y*.3;
        }
        else if ( this.state.hover ) {
            this.leave();
        }

        this.renderedStyles['tx'].current = x;
        this.renderedStyles['ty'].current = y;
        
        for (const key in this.renderedStyles ) {
            this.renderedStyles[key].previous = lerp(this.renderedStyles[key].previous, this.renderedStyles[key].current, this.renderedStyles[key].amt);
        }

        this.DOM.el.style.transform = `translate3d(${this.renderedStyles['tx'].previous}px, ${this.renderedStyles['ty'].previous}px, 0)`;
        this.DOM.text.style.transform = `translate3d(${-this.renderedStyles['tx'].previous*0.6}px, ${-this.renderedStyles['ty'].previous*0.6}px, 0)`;

        let self = this;
        let isOut = self.isOutOfViewport(self.el);
            
        if (!isOut.any) {
            self.anim = requestAnimationFrame(() => self.render());
        }
    }

    enter() {
        this.emit('enter');

        this.state.hover = true;
        this.DOM.el.classList.add('button--hover');

        document.body.classList.add('active');
    }

    leave() {
        this.emit('leave');
        
        this.state.hover = false;
        this.DOM.el.classList.remove('button--hover');
        
        document.body.classList.remove('active');
    }

    cancelAnimation() {
        var cancelAnimationFrame = window.cancelAnimationFrame || window.mozCancelAnimationFrame;
        cancelAnimationFrame(this.anim);
    }

    isOutOfViewport () {
        // Get element's bounding
        var bounding = this.DOM.el.getBoundingClientRect();
        
        // Check if it's out of the viewport on each side
        let out = {};
        out.top = bounding.top < 0;
        out.left = bounding.left < 0;
        out.bottom = bounding.bottom > (window.innerHeight || document.documentElement.clientHeight);
        out.right = bounding.right > (window.innerWidth || document.documentElement.clientWidth);
        out.any = out.top || out.left || out.bottom || out.right;
        out.all = out.top && out.left && out.bottom && out.right;
    
        return out;
    }
}