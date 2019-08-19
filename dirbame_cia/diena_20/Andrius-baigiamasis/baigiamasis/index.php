<!DOCTYPE html>
<?php
if(!session_id()){session_start();}


$cookie_name = "shopping-cart-tracker";
if(!isset($_COOKIE[$cookie_name])){
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() + (86400*30), '/');
}

 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Elektroninių cigarečių parduotuvė</title>
    </head>

    <?php include "styles.php" ?>

    <script type="text/javascript" >

    $(document).ready(function(){
    $(".product-card").mouseenter(function(){
        $(this).find("img").animate({
            paddingLeft:'3%',
            paddingRight:'3%',
            paddingTop:'3%',
            paddingBottom:'3%',
        }, 100);
    });
    $(".product-card").mouseleave(function(){
        $(this).find("img").animate({
            paddingLeft:'-6%',
            paddingRight:'-6%',
            paddingTop:'-6%',
            paddingBottom:'-6%',
        }, 100);
    });
    $(".kategorijos-sekcija ul ul li a").click(function() {
        var x = $(this).text();
        $.ajax({
            type: 'POST',
            url: 'category-filter.php',
            data: { category: x} ,
            success: function(response) {
                $(".products-paragraph").empty();
                $(".products-paragraph").append(response);
            }
        });

    });
    $(".DropDownContent a").click(function() {
        var x = $(this).text();
        $.ajax({
            type: 'POST',
            url: 'category-filter.php',
            data: { category: x} ,
            success: function(response) {
                $(".products-paragraph").empty();
                $(".products-paragraph").append(response);
            }
        });

    });
    $(document).on("click", ".logout-button", function(){
        $.ajax({
            type: "POST",
            url: "logout.php",
            success: function(response) {
                location.href = "index.php";
            }

        });

    });



    $(document).on("click", ".login-button", function(){
        var message, username, password;
        message = $('#error_code').val();
        message.innerHTML = "";
        username = $('#login_username').val();
        password = document.getElementById('login_password').value;
        $('.login-button').popover('dispose');
        try {
            if(username.length < 7 && password.length < 7){
                throw "username and password are too short";
            }
            else if(username.length < 7){
                throw "username is too short";
            }
            else if(password.length < 7){
                throw "password is too short";
            }
            else{
                window.login_parameters_checked = true;
            }

        } catch (err) {
            $('.login-button').popover({title:"Something went wrong!", content: err, placement: "bottom"});
            $('.login-button').popover('show');
        }

        var user_username = $("#login_username");
        var user_password = $("#login_password");

        if(window.login_parameters_checked == true){
            $.ajax({
                type: 'POST',
                url: 'login-check.php',
                data: { user_username: username, user_password: password} ,
                success: function(response) {
                    location.href = "index.php";

                }

            });

        }

    });

    });

    // TODO:    paieska, responsive

    </script>

    <body>

        <?php include "shopping_cart_box.php" ?>
        <div class="shopping-cart-menu">
            <div class="status">

            </div>
             <?php  include "update-from-cookies.php";
             include "shopping_cart_script.php";?>



        </div>

        <?php include "header.php" ?>

        <?php include "nav.php"?>

        <?php include "main_content.php" ?>

        <div class="shopping-cart-icon">
            <img src="css/shopping_cart.svg" alt="shopping cart" height="50px" width="50px">
            <h3 class="item-counter"></h3>
        </div>
        <script type="text/javascript">
        var kiekis = $(".item-counter").text();
        $.ajax({
            type: "POST",
            url: "check_shopping_cart.php",
            data: { product_count: kiekis} ,
            success: function(response) {
                $(".status").html(response);
            }

        });
        </script>
        <?php include "footer.php" ?>


    </body>

<script type="text/javascript" src="main.js" >


</script>


</html>
