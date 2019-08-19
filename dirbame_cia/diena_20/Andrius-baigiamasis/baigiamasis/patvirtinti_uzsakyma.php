<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php include "styles.php" ?>
    </head>
    <script type="text/javascript">
    $(document).ready(function() {
        $(document).on("click", ".siusti", function () {
            var d = new Date();
            var dabartineData = d.getFullYear() + "/" + (d.getMonth()+1) + "/" + d.getDate();
            var vardas = $("#outputVardas").val();
            var pavarde = $("#outputPavarde").val();
            var pastas = $("#inputEmail").val();
            var miestas = $("#inputMiestas").val();
            var gatve = $("#inputGatve").val();
            var bendra_kaina = $(".bendra-kaina").text();
            $.ajax({
                type: "POST",
                url: "siusti_uzsakyma.php",
                data: { data: dabartineData, vardas: vardas, pavarde: pavarde, pastas: pastas, miestas: miestas, gatve: gatve, bendra_kaina: bendra_kaina} ,
                success: function(response) {
                    alert(response);
                    $(".status_messsage1").text(response);
                }

            });
        });
        $(document).on("click", ".remove-from-cart", function(){
            var x = $(this).parent().children(".uzsakymo-pavadinimas").text();
            var itsPrice = $(this).parent().children(".card-text").text();
            var removable = "." + $(this).parent().parent().attr("class");
            $.ajax({
                type: "POST",
                url: "shopping_cart_removal.php",
                data: { product_name: x} ,
                success: function(response) {
                    $(".uzsakymas:contains("+x+")").remove();
                    var z = $(".bendra-kaina").text();


                }
            });
        });

    });
    </script>
    <body>

        <?php include "header.php" ?>

        <?php include "nav.php"?>


        <div class="container">
            <h2 style="text-align: center">Jusu uzsakymas:</h2>
            <?php include "uzsakymo_rezultatai.php";
            include "check_if_user.php"; ?>
        </div>
        <?php include "footer.php" ?>
    </body>
</html>
