<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        include("db-funkcijos.php");
        $id = $_GET['id'];
        $gydytojas = getDoctor($id);
        ?>
        <h1>Gydytojo redagavimas</h1>
        <form class="" action="doctor-update.php" method="get">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <label for="vardas">Vardas</label>
            <input type="text" name="vardas" value="<?= $gydytojas[1] ?>">
            <label for="pavarde">Pavarde</label>
            <input type="text" name="pavarde" value="<?= $gydytojas[2] ?>">
            <button type="submit" name="button">Update</button>
        </form>

    </body>
</html>
