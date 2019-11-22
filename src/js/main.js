// IMPORT UTILS
var utils = require('./components/_utils');
var functions = require('./components/_functions');

import {HeaderClass} from './components/_header';
import {homePage} from './pages/home';
import {singleProjectPage} from './pages/project';
import {page404} from './pages/page-404';

import $ from 'jquery';
window.$ = window.jQuery = $;

// Animate on scroll
import AOS from 'aos';

// LazyLoad images
import LazyLoad from 'vanilla-lazyload';

// Polyfill for svg
import 'svgxuse';

// Fast click for mobile
var FastClick = require('fastclick');
FastClick.attach(document.body);



var dragging = false;

// ----------------------------------- DOCUMENT READY -----------------------------------
// --------------------------------------------------------------------------------------
$(document).ready(function () {
    // --- INIT FUNCTIONS ---
    utils.checkDevice();

    let Header = new HeaderClass();
    Header.initHeader();

        
    // LAZY LOAD IMGS
    var myLazyLoad = new LazyLoad({ elements_selector: 'img' });


    // SCRIPTS FOR PAGES
    if(document.getElementsByTagName('body')[0].classList.contains('home')) {
        homePage.readyFn();
    }
    if(document.getElementsByTagName('body')[0].classList.contains('project')) {
        singleProjectPage.readyFn();
    }
    if(document.getElementsByTagName('body')[0].classList.contains('page-404')) {
        page404.readyFn();
    }

    
    // --- ACTIONS ---
    // ON RESIZE
    window.onresize = functions.windowResize;

    // SWITCH MENU MOBILE
    $("body")
        .on("touchmove", function() {
            dragging = true;
        })
        .on("touchstart", function() {
            dragging = false;
        });


    $('#header .navbar-toggle, #header .filter').on('touchend, click', function(e) {
        if(dragging) return;

        Header.switchMenu();

        e.preventDefault();
    });
});
    
    
$(window).on('load', function() {
    document.body.classList.add('loaded');


    // SCRIPTS FOR PAGES
    if(document.getElementsByTagName('body')[0].classList.contains('home')) {
        homePage.loadFn();
    }
    

    setTimeout(() => {
        AOS.init({once:true});
    }, 200);
});