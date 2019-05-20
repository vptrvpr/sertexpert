'use strict';

$( document ).ready( function () {

    // HOME PAGE HEIGHT
    jQuery( window ).load( function () {
        // will first fade out the loading animation
        jQuery( ".loader" ).fadeOut();
        // will fade out the whole DIV that covers the website.
        setTimeout(function (  ) {
            jQuery( ".preloader" ).fadeOut( "slow" );
        },1000);
    } );

//     function fullhome() {
//         var hometext = $( '.home, .portfolio-hero' );
// //            var homett = $('.hero-title').offset();
// //            $('.social').css('margin-top', homett.top)
//         hometext.css( {
//             "height": "800px"
//         } );
//     }

    // // HOME PAGE HEIGHT
    // if ( $( '.home, .portfolio-hero' ).length ) {
    //     fullhome();
    //     $( window ).resize( fullhome );
    // }


    // HOME TYPED JS
    if ( $( '.element' ).length ) {
        $( '.element' ).each( function () {
            $( this ).typed( {
                strings: [ $( this ).data( 'text1' ), $( this ).data( 'text2' ), $( this ).data( 'text3' ) ],
                loop: $( this ).data( 'loop' ) ? $( this ).data( 'loop' ) : false,
                backDelay: $( this ).data( 'backdelay' ) ? $( this ).data( 'backdelay' ) : 2000,
                typeSpeed: 10,
            } );
        } );
    }


    // PORTFOLIO ISOTOPE
    if ( $( '.isotope_items' ).length ) {
        var $container = $( '.isotope_items' );
        $container.isotope();

        $( '.portfolio-filter ul li' ).on( "click", function () {
            $( ".portfolio-filter ul li" ).removeClass( "select-cat" );
            $( this ).addClass( "select-cat" );
            var selector = $( this ).attr( 'data-filter' );
            $( ".isotope_items" ).isotope( {
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            } );
            return false;
        } );
    }


    // PORTFOLIO EFFECT
    $( ".cbp-item" ).hover3d( {
        selector: "figure",
        perspective: 3000,
        shine: true
    } );


    // $('.site-btn').click(function(){
    //      $('.isotope_items').load('port.html').fadeIn();
    //  });


    // RESPONSIVE MENU
    $( '.nav-icon' ).click( function () {
        $( 'body' ).toggleClass( 'full-open' );
    } );


    // OWL CAROUSEL GENERAL JS
    var owlcar = $( '.owl-carousel' );
    if ( owlcar.length ) {
        owlcar.each( function () {
            var $owl = $( this );
            var itemsData = $owl.data( 'items' );
            var autoPlayData = $owl.data( 'autoplay' );
            var paginationData = $owl.data( 'pagination' );
            var navigationData = $owl.data( 'navigation' );
            var stopOnHoverData = $owl.data( 'stop-on-hover' );
            var itemsDesktopData = $owl.data( 'items-desktop' );
            var itemsDesktopSmallData = $owl.data( 'items-desktop-small' );
            var itemsTabletData = $owl.data( 'items-tablet' );
            var itemsTabletSmallData = $owl.data( 'items-tablet-small' );
            $owl.owlCarousel( {
                items: itemsData
                , pagination: paginationData
                , navigation: navigationData
                , autoPlay: autoPlayData
                , stopOnHover: stopOnHoverData
                , navigationText: [ "<", ">" ]
                , itemsCustom: [
                    [ 0, 1 ]
                    , [ 500, itemsTabletSmallData ]
                    , [ 710, itemsTabletData ]
                    , [ 992, itemsDesktopSmallData ]
                    , [ 1199, itemsDesktopData ]
                ]
                ,
            } );
        } );
    }

    /**
     * Services animation
     */
    $( '.industry-general' ).each( function ( key, item ) {
        var industryGeneral = $( item );
        var industryDiv = $( item ).children( ".industry-div" );
        var industryLi = $( industryDiv ).parent().find( '.li' );
        var divBack = $( industryDiv ).parent().find( 'div.back' );


        $( divBack ).hide().css( 'left', 0 );

        function mySideChange( front ) {
            if ( front ) {
                $( industryLi ).parent().find( 'div.front' ).show();
                $( industryLi ).parent().find( 'div.back' ).hide();

            } else {
                $( industryLi ).parent().find( 'div.front' ).hide();
                $( industryLi ).parent().find( 'div.back' ).show();
            }
        }

        $( industryGeneral ).hover(
            function () {
                $( industryLi ).find( 'div' ).stop().rotate3Di( 'flip', 250, {
                    direction: 'clockwise',
                    sideChange: mySideChange
                } );
            },
            function () {
                $( industryLi ).find( 'div' ).stop().rotate3Di( 'unflip', 500, { sideChange: mySideChange } );
            }
        );
    } );


    /**
     * ScrollMagic animate
     *
     */
    setTimeout( function () {
        $( document ).ready( function () {
            var delay = 300;
            $( ".banner-animation-start-page" ).each( function ( index ) {
                delay += 100;
                $( this ).delay( delay ).queue( function ( next ) {
                    $( this ).css( {
                        transform: 'translateY(0px)',
                        opacity: 1
                    } );
                    next();
                } );
            } );
        } );


        var controller = new ScrollMagic.Controller();

        var sceneAnimateLeft = new ScrollMagic.Scene( {
            triggerElement: '.animate-left',
            triggerHook: .6,
            reverse: false
        } )
            .setClassToggle( '.animate-left', 'animate-left-scroll' )
            .addTo( controller );

        var sceneAnimateLeft = new ScrollMagic.Scene( {
            triggerElement: '.animate-left',
            triggerHook: .6,
            reverse: false
        } )
            .setClassToggle( '.animate-left', 'animate-left-scroll' )
            .addTo( controller );

        var sceneAnimateRight = new ScrollMagic.Scene( {
            triggerElement: '.animate-right',
            triggerHook: .6,
            reverse: false
        } )
            .setClassToggle( '.animate-right', 'animate-right-scroll' )
            .addTo( controller );

        var sceneAnimateRightSearch = new ScrollMagic.Scene( {
            triggerElement: '.animate-right-search',
            triggerHook: .6,
            reverse: false
        } )
            .setClassToggle( '.animate-right-search', 'animate-right-search-scroll' )
            .addTo( controller );

    }, 1000 );

    setTimeout(function (  ) {
        var delay = 300;
        $( ".top-menu-li" ).each( function ( index ) {
            delay += 100;
            $( this ).delay( delay ).queue( function ( next ) {
                $( this ).css( {
                    transform: 'translateY(0px)',
                    opacity: 1
                } );
                next();
            } );
        } );
    },1000);


    /**
     * Подчеркивает меню
     *
     */
    function decorationIfPageTopMenu(  ) {
        var url = window.location.href;
    }

    decorationIfPageTopMenu();

    $(document).ready(function(){
        $('#btn-services').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });


        $('#btn-sertification').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-200 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });


        $('#btn-base').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    });


    $(document).ready(function(){
        $('#btn-services-mobile').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });


        $('#btn-sertification-mobile').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-200 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });


        $('#btn-base-mobile').click( function(){ // ловим клик по ссылке с классом go_to
            if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
                $( 'body' ).toggleClass( 'full-open' );
            }
            var scroll_el = $(this).attr('scroll'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
            if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 500); // анимируем скроолинг к элементу scroll_el
            }
            return false; // выключаем стандартное действие
        });
    });

    /**
     * Desktop
     */

    $('#btn-services-not-general').click( function(){
        $.cookie('btn-services-not-general',1);
    });


    $('#btn-sertification-not-general').click( function(){
        $.cookie('btn-sertification-not-general',1);
    });


    $('#btn-base-not-general').click( function(){
        $.cookie('btn-base-not-general',1);
    });


    /**
     * Mobile
     */

    $('#btn-services-mobile-not-general').click( function(){
        $.cookie('btn-services-not-general',1);
    });


    $('#btn-sertification-mobile-not-general').click( function(){
        $.cookie('btn-sertification-not-general',1);
    });


    $('#btn-base-mobile-not-general').click( function(){
        $.cookie('btn-base-not-general',1);
    });






    /**
     * Animation scroll on object
     *
     * First services
     *
     * @type {jQuery|HTMLElement}
     */
    var target = $( '.animate-first' );
    var targetPos = target.offset().top;
    var winHeight = $( window ).height();
    var scrollToElem = targetPos - winHeight;

    $( window ).scroll( function () {
        var winScrollTop = $( this ).scrollTop();
        if ( winScrollTop > scrollToElem ) {
            var delay = 300;
            $( ".btn__submit" ).each( function ( index ) {
                delay += 100;
                $( this ).delay( delay ).queue( function ( next ) {
                    $( this ).css( {
                        transform: 'translateY(0px)',
                        opacity: 1
                    } );
                    next();
                } );
            } );
        }
    } );




    /**
     * Animation scroll on object
     *
     * Second services
     *
     * @type {jQuery|HTMLElement}
     */
    var target1 = $( '.animate-second' );
    var targetPos1 = target1.offset().top;
    var winHeight1 = $( window ).height();
    var scrollToElem1 = targetPos1 - winHeight1;

    $( window ).scroll( function () {
        var winScrollTop = $( this ).scrollTop();
        if ( winScrollTop > scrollToElem1 ) {
            var delay = 300;
            $( ".industry-div" ).each( function ( index ) {
                delay += 100;
                $( this ).delay( delay ).queue( function ( next ) {
                    $( this ).css( {
                        transform: 'translateY(0px)',
                        opacity: 1
                    } );
                    next();
                } );
            } );
        }
    } );


    /**
     * Animation scroll on object
     *
     * Third services
     *
     * @type {jQuery|HTMLElement}
     */
    var target2 = $( '.animate-third' );
    var targetPos2 = target2.offset().top;
    var winHeight2 = $( window ).height();
    var scrollToElem2 = targetPos2 - winHeight2;

    $( window ).scroll( function () {
        var winScrollTop = $( this ).scrollTop();
        if ( winScrollTop > scrollToElem2 ) {
            var delay = 300;
            $( ".btn__submit_3" ).each( function ( index ) {
                delay += 100;
                $( this ).delay( delay ).queue( function ( next ) {
                    $( this ).css( {
                        transform: 'translateY(0px)',
                        opacity: 1
                    } );
                    next();
                } );
            } );
        }
    } );


    if ( $.cookie('btn-services-not-general') === '1' ) {
        if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
            $( 'body' ).toggleClass( 'full-open' );
        }

        var scroll_el = $('.scroll-services'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 1000); // анимируем скроолинг к элементу scroll_el
        }
        $.cookie('btn-services-not-general',null);
        return false; // выключаем стандартное действие


    }

    if ( $.cookie('btn-sertification-not-general') === '1' ) {
        if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
            $( 'body' ).toggleClass( 'full-open' );
        }

        var scroll_el = $('.scroll-sertification'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 1000); // анимируем скроолинг к элементу scroll_el
        }
        $.cookie('btn-sertification-not-general','2');

        return false; // выключаем стандартное действие

    }

    if ( $.cookie('btn-base-not-general') === '1' ) {
        if ( $( 'body' ).attr( 'class' ) === 'full-open' ) {
            $( 'body' ).toggleClass( 'full-open' );
        }

        var scroll_el = $('.scroll-base'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top-250 }, 1000); // анимируем скроолинг к элементу scroll_el
        }

        $.cookie('btn-base-not-general','2');

        return false; // выключаем стандартное действие

    }








} ); // document ready end




































