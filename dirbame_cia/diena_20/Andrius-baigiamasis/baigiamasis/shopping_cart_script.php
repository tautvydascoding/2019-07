<?php
echo'<script type="text/javascript">

$(document).ready(function(){
    var kiekis = $(".item-counter").text();
    $.ajax({
        type: "POST",
        url: "check_shopping_cart.php",
        data: { product_count: kiekis} ,
        success: function(response) {
            $(".status").html(response);
        }

    });
    var matched = $(".shopping-cart-menu .product-in-cart-card");
    $(".item-counter").text(matched.length);
    $(".add-to-cart").click(function(){
        var x = $(this).parent().parent().children("a").children("div").text();
            $.ajax({
                type: "POST",
                url: "shopping_cart.php",
                data: { product_name: x} ,
                success: function(response) {
                    $(".shopping-cart-menu").append(response);
                    var matched = $(".shopping-cart-menu .product-in-cart-card");
                    $(".item-counter").text(matched.length);
                    var kiekis = $(".item-counter").text();
                    $.ajax({
                        type: "POST",
                        url: "check_shopping_cart.php",
                        data: { product_count: kiekis} ,
                        success: function(response) {
                            $(".status").html(response);
                        }

                    });
                }

            });


    });
    $(document).on("click", ".remove-from-cart", function(){
        var x = $(this).parent().parent().children("a").children("div").text();
        var removable = "." + $(this).parent().parent().attr("class");
        $.ajax({
            type: "POST",
            url: "shopping_cart_removal.php",
            data: { product_name: x} ,
            success: function(response) {
                $(".card.product-in-cart-card:contains("+x+")").remove();
                var matched = $(".shopping-cart-menu .product-in-cart-card");
                $(".item-counter").text(matched.length);
                var kiekis = $(".item-counter").text();
                $.ajax({
                    type: "POST",
                    url: "check_shopping_cart.php",
                    data: { product_count: kiekis} ,
                    success: function(response) {
                        $(".status").html(response);
                    }

                });
            }
        });
    });
});

</script>'; ?>
