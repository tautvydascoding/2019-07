<!DOCTYPE html>
<?php session_start();
//setcookie("shopping-cart-tracker", "", time() + (86400*30), '/');
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php include "styles.php" ?>
    </head>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <body>
        <?php include "header.php" ?>

        <?php include "nav.php"?>
        <div class="container">




        <?php include "uzsakymu_istrojos_cards.php" ?>
        <script>
          $(function() {
            $('#toggle-two').bootstrapToggle({
              on: 'Patvirtintas',
              off: 'Nepatvirtintas'
            });
          })
        </script>

        </div>
    </div>
        <?php include "footer.php" ?>
    </body>

</html>
