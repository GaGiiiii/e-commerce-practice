$(document).ready(function () {

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
    $(".button-group").on('click', "button", function () {
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


    // Product Qty Section

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    $qty_up.click(function (event) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "template/ajax.php",
            type: "POST",
            data: {
                itemid: $(this).data("id")
            },
            success: function (result) {
                let obj = JSON.parse(result);
                console.log(obj);
                let item_price = obj[0]['item_price'];

                if ($input.val() >= 1 && $input.val() < 10) {
                    $input.val((i, oldVal) => {
                        return ++oldVal;
                    });


                    $price.text(parseInt(item_price * $input.val()).toFixed());

                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    console.log(subtotal);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });

    });

    $qty_down.click(function (event) {

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "template/ajax.php",
            type: "POST",
            data: {
                itemid: $(this).data("id")
            },
            success: function (result) {
                let obj = JSON.parse(result);
                console.log(obj);
                let item_price = obj[0]['item_price'];

                if ($input.val() > 1 && $input.val() <= 10) {
                    $input.val((i, oldVal) => {
                        return --oldVal;
                    });

                    $price.text(parseInt(item_price * $input.val()).toFixed());

                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    console.log(subtotal);
                    $deal_price.text(subtotal.toFixed(2));
                }
            }
        });

    });

});