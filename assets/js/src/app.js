'use strict';

// include npm plugin packages
window.$ = window.jQuery = require('jquery');
require('jquery-easing');
require('slick-carousel');
// require('waypoints/lib/jquery.waypoints');
// require('waypoints/lib/shortcuts/inview');
window.Cookies = require('js-cookie');
// window.GMaps = require('gmaps');
// var lockr = require('lockr');
// window.Pikaday = require('pikaday');
// window.moment = require('moment');
// require('moment/locale/nl');


// include local plugin packages
require('./plugins/nivo-lightbox/nivo-lightbox.min');
require('./plugins/bootstrap-modules/affix');
require('./plugins/bootstrap-modules/scrollspy');
require('./plugins/bootstrap-modules/tooltips');
require('./plugins/bootstrap-modules/tabs');
require('./plugins/bootstrap-modules/popovers');


window.removeCookie = function(cookie) {
    Cookies.remove(cookie);
};

window.setCookie = function(cookie,value,expires) {
    Cookies.set(cookie, value, { expires: expires });
};

window.viewport = function() {
    let e = window,
        a = 'inner';

    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }

    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}

/*
** Require local packages
*/
let App = require('./lib/dbk-app/app');
/*
** Initialize the app.
** Example: If you have a template called 'templates-examples.php' add it here as: template_examples
** this code will only get executed on templates-examples.php
*/
let app = new App({
    global: require('./modules/global'),
    front_page: require('./modules/front-page')
});
jQuery(document).ready(app.loadEvents);