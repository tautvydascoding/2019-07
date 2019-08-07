<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        include_once('doctor-db-functions.php');
        // print_r($GET);
        $numeris = $_GET['nr'];
        $gydytojas = getDoctor($numeris);
        
        echo "<h1> GYDYTOJAS: $gydytojas[1]  $gydytojas[2]  </h1>";
        ?>
        </h1>
    </body>
</html>
