<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

        include_once('doctor-db-functions.php');
        // print_r($_GET);
        $x = $_GET['nr'];
        $gyd = getDoctor($x);
        // print_r($gyd);
        ?>

        <h1> Gydytojo duomenu keitimas  </h1>
            <form action="doctor-update.php" method="post">
                <!-- <label for="vard"> Jusu vardas: </label> <br /> -->
                <input type="text" name="vard" value=" <?php echo $gyd[1];  ?>" placeholder="vardas" >

                <!-- <label for="pvard"> Jusu pavarde: </label> <br /> -->
                <input type="text" name="pvard" value=" <?php echo $gyd[2];     ?>" placeholder="pavarde">

                <input type="hidden" name="id" value=" <?php echo $gyd[0];     ?>" $nr>

                <button type="submit" > Keisti </button>

            </form>



    </body>
</html>
