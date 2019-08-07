<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once('doctor-db-functions.php');
            // print_r( $_GET); // test
            $x = $_GET['nr'];
            $gyd = getDoctor($x);
            // print_r($gyd); // test
         ?>
        <h1>gydytojo redagavimas</h1>

        <form  action="doctor_update.php" method="post">
            <input type="text" name="vardas"  value="<?php  echo $gyd[1]; ?>"  placeholder="vardas">
            <input type="text" name="pavarde" value="<?php  echo $gyd[2]; ?>" placeholder="pavarde">
            <input type="hidden" name="id" value="<?php  echo $gyd[0]; ?>">

            <button type="submit" > Save </button>
        </form>

    </body>
</html>
