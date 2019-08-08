<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        include_once('doctor-db-functions.php');
            // print_r($_GET); TEST
            $x = $_GET['nr'];
            $gyd  = getDoctor($x);
            // print_r($gyd);

        ?>

        <h1> gydytojo redagavimas </h1>

            <form action="doctor-update.php" method="post">

                <label for="vardas">Jusu vardas</label> <br />
                <input type="text" name="vardas" value="<?php echo $gyd[1]; ?>" placeholder="vardas"> <br />

                <label for="pavarde">Jusu pavarde</label> <br />
                <input type="text" name="pavarde" value="<?php echo $gyd[2]; ?>" placeholder="pavarde"> <br />

                <label for="id">gydytojas</label> <br />
                <input type="hidden" name="id" value="<?php echo $gyd[0]; ?>"><br />

                <button type="submit"> Save </button>
            </form>
        </body>
    </html>
