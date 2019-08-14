<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        include_once('model/house-db-functions.php');
            // print_r($_GET); TEST
            $x = $_GET['nr'];
            $nam  = getHouse($x);
            // print_r($nam;

        ?>

        <h1> Namo redagavimas </h1>

            <form action="huose-update.php" method="post">

                <label for="vardas">Jusu vardas</label> <br />
                <input type="text" name="vardas" value="<?php echo $nam[1]; ?>" placeholder="vardas"> <br />

                <label for="pavarde">Jusu pavarde</label> <br />
                <input type="text" name="pavarde" value="<?php echo $nam[2]; ?>" placeholder="pavarde"> <br />

                <label for="id">namas</label> <br />
                <input type="hidden" name="id" value="<?php echo $nam[0]; ?>"><br />

                <button type="submit"> Save </button>
            </form>
        </body>
    </html>
