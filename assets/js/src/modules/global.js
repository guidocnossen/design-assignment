module.exports = function() {
    // global functionality goes here

    const $body = $('body'),
        $header = $('header.masthead .header'),
        $cookies = $('.cookies');

    $body.addClass('jsenabled');


    // check if browser is IE - if true, add body class
    const isIE = navigator.appName === 'Microsoft Internet Explorer' ||
        !!(navigator.userAgent.match(/Trident/) ||
        navigator.userAgent.match(/rv:11/)) ||
        (typeof $.browser !== "undefined" && $.browser.msie === 1);

    if (isIE) {
        $body.addClass('browser-ie');
    }


    // push gtm-event data-values on anchors to datalayer
    $body.on( 'click', '[data-gtm-event]', function() {
        let gtm_event = $(this).data('gtm-event');
        let page_url = $(location).attr('href');

        // console.log({'dbk_category' : 'click_event', 'dbk_event' : gtm_event, 'dbk_url' : page_url }); // development

        if ( typeof dataLayer !== 'undefined' ) {
            dataLayer.push({'dbk_category': 'click_event', 'dbk_event': gtm_event, 'dbk_url': page_url}); // production
        }
    });


    if ($cookies.length > 0) {
        let CookieName = $cookies.data('cookie-hash'),
            CookieDuration = $cookies.data('cookie-duration');

        if (typeof CookieName === 'undefined' || '' === CookieName) {
            CookieName = 'dbk_confirm_cookies';
        }

        if (typeof CookieDuration === 'undefined' || '' === CookieDuration) {
            CookieDuration = 365;
        } else {
            CookieDuration = parseInt(CookieDuration);
        }

        // confirm cookies
        $('.confirm-cookies').on('click', function(e) {
            e.preventDefault();

            setCookie( CookieName, 'true', CookieDuration );
        });

        // removeCookie( CookieName );

        // show cookie notification
        if ( Cookies.get(CookieName) !== 'true' ) {
            $cookies.show();
        }

        // close cookie notification (in this case: reload page)
        $('.cookies__close').on('click', function(e) {
            e.preventDefault();

            location.reload();
        });
    }


    // prevent disabled buttons to execute default actions
    $('.btn-disabled').click( function(e) {
        e.preventDefault();
    });


    // unfocus links after click
    $('a, button').click( function() {
        $(this).blur();
    });


    // init lightbox
    $('a.lightbox').nivoLightbox({
        afterShowLightbox: function(){
            let $iframe = $('.nivo-lightbox-content > iframe'),
                src = $iframe.attr('src');

            $iframe.attr('src', src + '?autoplay=1&rel=0&disablekb=1&fs=0');
        }
    });


    // init tooltips
    $body.tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });

    // init popovers
    $body.popover({
        // trigger: 'click',
        selector: '[data-toggle="popover"]',
        trigger: 'hover',
        html: true,
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });


    // toggle-menu
    $('#toggle-menu').click( function(e) {
        e.preventDefault();
        if ( $body.hasClass('show-menu') ) {
            $body.removeClass('show-menu');
        } else {
            $body.addClass('show-menu');
        }
    });
    // close menu
    $('#close-mobile-nav').click( function(e) {
        e.preventDefault();
        if ( $body.hasClass('show-menu') ) {
            $body.removeClass('show-menu');
        }
    });


    // when a link is clicked with href attribute starting with #, scroll that shit smoothly (if target exists)
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        let $this = $(this);
        let target = $(this).attr('href');
        let scrollOffset = $header.outerHeight();

        if ( $this.data('extra-scroll-offset') ) {
             scrollOffset = scrollOffset + $(this).data('extra-scroll-offset');
        }

        // if target exists
        if ( $(target).length > 0 ) {

            // if target has top margin, add half of it to scroll offset
            let targetMargin = parseInt($(target).css('marginTop'));

            if (targetMargin > 0) {
                scrollOffset = scrollOffset + (targetMargin / 2);
            }

            $('html, body').animate({
                scrollTop: $(target).stop().offset().top - scrollOffset
            }, 1000, 'easeInOutCubic', function() {
                $this.blur();
            });
        }
    });


    // disable hero-video with URL variable
    if ( window.location.search.indexOf('no_video=1') >= 0 ) {
        $('section.hero .hero__background-video').hide();
    }


    // insert check icon elements to ul.list-checked in content-wrapper
    $('.content-wrapper .list-checked > li').each( function() {
        $(this).prepend('<i class="item-icon far fa-check"></i>');
    });


    // load extra JS parts
    require('./gravity-forms.js');

};