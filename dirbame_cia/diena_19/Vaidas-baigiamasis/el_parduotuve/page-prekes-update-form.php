<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

        include_once('el-parduotuves-db-prekes-functions.php');
        // print_r($_GET);
        $x = $_GET['nr'];
        $preke = getPreke($x);
        // print_r($gyd);
        ?>

        <h1> Pasirinktos prekes duomenu keitimas  </h1>
            <form action="prekes-update.php" method="post">
                
                <input type="hidden" name="id" value=" <?php echo $preke[0];     ?>" $nr>
                <input type="text" name="pavadinimas" value=" <?php echo $preke[1];  ?>" placeholder="Prekes pavadinimas" >
                <input type="text" name="aprasymas" value=" <?php echo $preke[2];     ?>" placeholder="Prekes aprasymas">
                <input type="text" name="kaina" value=" <?php echo $preke[3];     ?>" placeholder="Prekes kaina">
                <input type="text" name="nuolaida" value=" <?php echo $preke[4];     ?>" placeholder="Prekes nuolaida">
                <input type="text" name="pozicija" value=" <?php echo $preke[5];     ?>" placeholder="Prekes pozicija">
                <input type="text" name="kiekis" value=" <?php echo $preke[6];     ?>" placeholder="Prekes kiekis">
                <input type="text" name="ar_rodyti" value=" <?php echo $preke[7];     ?>" placeholder="Prekes ar_rodyti">



                <button type="submit" > Keisti </button>

            </form>



    </body>
</html>
