// import './bootstrap';
// import Alpine from 'alpinejs';
// window.Alpine = Alpine;
// Alpine.start();
//

;(function($) {
    "use strict";

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    var flatSpacer = function() {
        $(window).on('load resize', function(){
            var mode = 'desktop';
            if(matchMedia('only screen and (max-width: 991px)').matches)
                mode = 'mobile';
            if(matchMedia('only screen and (max-width: 767px)').matches)
                mode = 'smobile';
            $('.themesflat-spacer').each( function(){
                if( mode === 'desktop'){
                    $(this).attr('style','height:' + $(this).data('desktop') + 'px')
                }else if( mode == 'mobile') {
                    $(this).attr('style','height:' + $(this).data('mobile') + 'px')
                }else {
                    $(this).attr('style','height:' + $(this).data('smobile') + 'px')
                }
            });
        });
    };

    var Parallax = function() {
        if ( $().parallax && isMobile.any() == null ) {
            $('.parallax-1').parallax("50%", 0.1);
            $('.parallax-3').parallax("50%", 0.1);
            $('.parallax-4').parallax("50%", 0.1);
        }
    };


    var flatContentBox = function () {
        $(window).on('load resize', function() {
            var mode = 'desktop';
            if(matchMedia('only screen and (max-width: 1199px)').matches)
                mode = "mobile";
            $('.themesflat-content-box').each(function(){
                var margin = $(this).data('margin');
                if(margin) {
                    if(mode === 'desktop'){
                        $(this).attr('style','margin:' + $(this).data('margin'))
                    }else if( mode === 'mobile'){
                        $(this).attr('style','margin:' + $(this).data('mobilemargin'))
                    }
                }
            });
        });
    };

    var searchIcon = function () {
        $(document).on('click', function(e) {
            var clickID = e.target.id;
            if ( ( clickID !== 'input-search' ) ) {
                $('.header-search-form').removeClass('show');
            }
        });

        $('.header-search-icon').on('click', function(event){
            event.stopPropagation();
        });

        $('.header-search-form').on('click', function(event){
            event.stopPropagation();
        });

        $('.header-search-icon').on('click', function (event) {
            if(!$('.header-search-form').hasClass( "show" )) {
                $('.header-search-form').addClass('show');
                event.preventDefault();
            }

            else
                $('.header-search-form').removeClass('show');
            event.preventDefault();

        });

    };

    var flatTabs =  function() {
        $('.themesflat-tabs').each(function(){
            var
                list ="",
                title = $(this).find('.item-title'),
                titleWrap = $(this).children('.tab-title') ;

            title.each(function() {
                list = list + "<li>" + $(this).html() + "</li>";
            }).appendTo(titleWrap);

            $(this).find('.tab-title li').filter(':first').addClass('active');
            $(this).find('.tab-content-wrap').children().hide().filter(':first').show();

            $(this).find('.tab-title li').on('click', function(e) {
                var
                    idx = $(this).index(),
                    content = $(this).closest('.themesflat-tabs').find('.tab-content-wrap').children().eq(idx);

                $(this).addClass('active').siblings().removeClass('active');
                content.fadeIn('slow').siblings().hide();

                e.preventDefault();
            });
        });
    };

    var flatAccordions = function() {
        var args = {easing:'easeOutExpo', duration:500};

        $('.accordion-item.active').find('.accordion-content').show();
        $('.accordion-heading').on('click', function () {
            if ( !$(this).parent().is('.active') ) {
                $(this).parent().toggleClass('active')
                    .children('.accordion-content').slideToggle(args)
                    .parent().siblings('.active').removeClass('active')
                    .children('.accordion-content').slideToggle(args);
            } else {
                $(this).parent().toggleClass('active');
                $(this).next().slideToggle(args);
            }
        });
    };


    var themesflatTheme = {

        // Main init function
        init : function() {
            this.config();
            this.events();
        },

        // Define vars for caching
        config : function() {
            this.config = {
                $window : $( window ),
                $document : $( document ),
            };
        },

        // Events
        events : function() {
            var self = this;

            // Run on document ready
            self.config.$document.on( 'ready', function() {

                // PreLoader
                self.preLoader();

                // Retina Logos
                self.retinaLogo();

                // Header Fixed
                self.headerFixed();

                // Mobile Navigation
                self.mobileNav();

                // Scroll to Top
                self.scrollToTop();

            } );

            // Run on Window Load
            self.config.$window.on( 'load', function() {

            } );
        },

        // PreLoader
        preLoader: function() {
            if ( $().animsition ) {
                $('.animsition').animsition({
                    inClass: 'fade-in',
                    outClass: 'fade-out',
                    inDuration: 1500,
                    outDuration: 800,
                    loading: true,
                    loadingParentElement: 'body',
                    loadingClass: 'animsition-loading',
                    timeout: false,
                    timeoutCountdown: 5000,
                    onLoadEvent: true,
                    browser: [
                        '-webkit-animation-duration',
                        '-moz-animation-duration',
                        'animation-duration'
                    ],
                    overlay: false,
                    overlayClass: 'animsition-overlay-slide',
                    overlayParentElement: 'body',
                    transition: function(url){ window.location.href = url; }
                });
            }
        },

        // Retina Logos
        retinaLogo: function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            var $logo = $('#site-logo img');
            var $logo_retina = $logo.data('retina');

            if ( retina && $logo_retina ) {
                $logo.attr({
                    src: $logo.data('retina'),
                    width: $logo.data('width'),
                    height: $logo.data('height')
                });
            }
        },

        // Header Fixed
        headerFixed: function() {
            if ( $('body').hasClass('header-fixed') ) {
                var nav = $('#site-header');

                if ( $('body').is('.header-style-8') ) {
                    var nav = $('.site-navigation-wrap');
                }

                if ( nav.length ) {
                    var offsetTop = nav.offset().top,
                        headerHeight = nav.height(),
                        injectSpace = $('<div />', {
                            height: headerHeight
                        }).insertAfter(nav);

                    $(window).on('load scroll', function(){
                        if ( $(window).scrollTop() > offsetTop ) {
                            nav.addClass('is-fixed');
                            injectSpace.show();
                        } else {
                            nav.removeClass('is-fixed');
                            injectSpace.hide();
                        }

                        if ( $(window).scrollTop() > 300 ) {
                            nav.addClass('is-small');
                        } else {
                            nav.removeClass('is-small');
                        }
                    })
                }
            }
        },

        // Mobile Navigation
        mobileNav: function() {
            var menuType = 'desktop';

            $(window).on('load resize', function() {
                var mode = 'desktop';
                var wrapMenu = $('#site-header-inner .wrap-inner');
                var navExtw = $('.nav-extend.active');
                var navExt = $('.nav-extend.active').children();

                if ( matchMedia( 'only screen and (max-width: 991px)' ).matches )
                    mode = 'mobile';

                if ( mode != menuType ) {
                    menuType = mode;

                    if ( mode === 'mobile' ) {
                        $('#main-nav').attr('id', 'main-nav-mobi')
                            .appendTo('#site-header')
                            .hide().children('.menu').append(navExt)
                            .find('li:has(ul)')
                            .children('ul')
                            .removeAttr('style')
                            .hide()
                            .before('<span class="arrow"></span>');
                    } else {
                        if ( $('body').is('.header-style-3') )
                            wrapMenu = $('.site-navigation-wrap .inner');

                        $('#main-nav-mobi').attr('id', 'main-nav')
                            .removeAttr('style')
                            .prependTo(wrapMenu)
                            .find('.ext').appendTo(navExtw)
                            .parent().siblings('#main-nav')
                            .find('.sub-menu')
                            .removeAttr('style')
                            .prev().remove();

                        $('.mobile-button').removeClass('active');
                    }
                }
            });

            $(document).on('click', '.mobile-button', function() {
                $(this).toggleClass('active');
                $('#main-nav-mobi').slideToggle();
            })

            $(document).on('click', '#main-nav-mobi .arrow', function() {
                $(this).toggleClass('active').next().slideToggle();
            })
        },

        // Scroll to Top
        scrollToTop: function() {
            $(window).scroll(function() {
                if ( $(this).scrollTop() > 300 ) {
                    $('#scroll-top').addClass('show');
                } else {
                    $('#scroll-top').removeClass('show');
                }
            });

            $('#scroll-top').on('click', function() {
                $('html, body').animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
                return false;
            });
        },

    };

    themesflatTheme.init();

    // Dom Ready
    $(function() {
        flatSpacer();
        flatContentBox();
        searchIcon();
        flatTabs();
        flatAccordions();


        $( window ).load(function() {
            Parallax();

        });
    });

})(jQuery);


