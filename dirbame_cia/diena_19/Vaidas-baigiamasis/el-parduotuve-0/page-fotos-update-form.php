<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

        include_once('el-parduotuves-db-fotos-functions.php');
        // print_r($_GET);
        $x = $_GET['nr'];
        $foto = getFoto($x);
        // print_r($foto);
        ?>

        <h1> Pasirinktos prekes foto keitimas  </h1>
            <form action="fotos-update.php" method="post">

                <input type="hidden" name="id" value=" <?php echo $foto[0];     ?>" $nr>
                <input type="text" name="pav_pavadinimas" value=" <?php echo $foto[1];  ?>" placeholder="Foto pavadinimas" >
                <input type="text" name="pav_aprasymas" value=" <?php echo $foto[2];     ?>" placeholder="Foto aprasymas">
                <input type="text" name="pozicija" value=" <?php echo $foto[3];     ?>" placeholder="Foto pozicija">
                <input type="text" name="prekes_id" value=" <?php echo $foto[4];     ?>" placeholder="Prekes id">


                <button type="submit" > Keisti </button>

            </form>



    </body>
</html>
