// IMPORT UTILS
var utils = require('./components/_utils');
var functions = require('./components/_functions');

import {
    HeaderClass
} from './components/_header';
import {
    homePage
} from './pages/home';
import {
    singleProjectPage
} from './pages/project';
import {
    page404
} from './pages/page-404';

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
    var myLazyLoad = new LazyLoad();


    // SCRIPTS FOR PAGES
    if (document.getElementsByTagName('body')[0].classList.contains('home')) {
        homePage.readyFn();
    }
    if (document.getElementsByTagName('body')[0].classList.contains('project')) {
        singleProjectPage.readyFn();
    }
    if (document.getElementsByTagName('body')[0].classList.contains('page-404')) {
        page404.readyFn();
    }


    // --- ACTIONS ---
    // ON RESIZE
    window.onresize = functions.windowResize;

    // SWITCH MENU MOBILE
    $("body")
        .on("touchmove", function () {
            dragging = true;
        })
        .on("touchstart", function () {
            dragging = false;
        });


    $('#header .navbar-toggle, #header .filter').on('touchend, click', function (e) {
        if (dragging) return;

        Header.switchMenu();

        e.preventDefault();
    });

    $(document).on('aos:in:gasend', (detail) => {
        sendGAEvent($(detail.detail));
    });

    AOS.init({
        once: true
    });
});


$(window).on('load', function () {
    document.body.classList.add('loaded');


    // SCRIPTS FOR PAGES
    if (document.getElementsByTagName('body')[0].classList.contains('home')) {
        homePage.loadFn();
    }

    $('.gasend').on('click', function () {
        sendGAEvent($(this));
    })


});


let sendGAEvent = function (elm) {
    let eventCategory = elm.data('event-category');
    let eventAcion = elm.data('event-action');
    let eventLabel = elm.data('event-label');

    ga('send', 'event', eventCategory, eventAcion, eventLabel);
};