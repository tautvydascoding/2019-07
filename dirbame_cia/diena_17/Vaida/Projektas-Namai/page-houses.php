



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        include_once('model/house-db-functions.php');
        // print_r($GET);
        $numeris = $_GET['nr'];
        $namas = getHouse($numeris);

        echo "<h1> Namas: $namas[1]  $namas[2]  </h1>";
        ?>
        </h1>
    </body>
</html>







<!-- // -->
