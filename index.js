$(document).ready(function(){

    // BANNER OWL CAROUSEL
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // TOP SALE OWL CAROUSEL
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    // ISOTOP
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // FILTER ITEMS ON BUTTON CLICK
    $(".button-group").on('click', "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });


    // NEW PHONES OWL CAROUSEL
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

        // BLOGS OWL CAROUSEL
        $("#blogs .owl-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                }
            }
        });








});