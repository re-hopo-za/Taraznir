;(function($) {

    "use strict";



    var flatOwl = function() {
        if ( $().owlCarousel  ) {
            $('.themesflat-carousel-box').each(function(){
                var
                    $this = $(this),
                    auto = $this.data("auto"),
                    item = $this.data("column"),
                    item2 = $this.data("column2"),
                    item3 = $this.data("column3"),
                    gap = Number($this.data("gap"));

                $this.find('.owl-carousel').owlCarousel({
                    margin: gap,
                    nav: true,
                    navigation : true,
                    pagination: true,
                    autoplay: auto,
                    autoplayTimeout: 5000,
                    responsive: {
                        0:{
                            items:item3
                        },
                        600:{
                            items:item2
                        },
                        1000:{
                            items:item
                        }
                    }
                });
            });
        }
    };

    var flatIsotope = function() {
        if ( $().isotope ) {
            var $container = $('.isotope-project');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.project-item',
                    transitionDuration: '1s',
                    layoutMode: 'fitRows'
                });
            });

            $('.themesflat-filter li').on('click',function() {
                var selector = $(this).find("a").attr('data-filter');
                $('.themesflat-filter li').removeClass('active');
                $(this).addClass('active');
                $container.isotope({ filter: selector });
                return false;
            });
        };
    };




    // Dom Ready
    $(function() {
        flatIsotope();

        $( window ).load(function() {
            flatOwl();
        });


    });


})(jQuery);
