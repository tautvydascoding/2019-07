<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>
        <p>
            <?php
            include_once('doctor-db-functions.php');

            echo "<a class= 'btn btn-bg-success' href='page-doctor-form.php'> New </a>";

            // $gydytojas = getDoctor(4);  //grista vienas gydytojas MYSQL objektas

            //jei kvieciu vienaskaita tada nereikia fetch, daugiskaitoje reiks fetch
            // print_r($gydytojas);    //test

            // echo "$gydytojas[1]  $gydytojas[2] <hr />";
//--------------------------------------------------------
            // 3.1 su for visi gydytojai

            // for ($i=1; $i < 6 ; $i++) {
            //     $gydytojas = getDoctor($i);
            //     echo "pavarde: $gydytojas[2] <br />";
            // }
//--------------------------------------------------------
            // su while ciklu   visi gydytojai

            $visiGydytojas  = getDoctors(24); //grista MYSQL OBJ jo viduje yra
            $gyd = mysqli_fetch_assoc($visiGydytojas);  //array asocc

            // print_r( $gyd );    //test
            while ($gyd) {
                // echo $gyd["name"] ." ". $gyd["lname"] . "<hr>";
                echo "<a href='page-doctor.php?nr={$gyd['id']}'>" . "</br>". $gyd['lname'] . "</a>" . "</br>";

                echo "<a class='btn bg-danger text-white' href='doctor-delete.php?nr={$gyd['id']}'> DELETE </a>";

                $gyd = mysqli_fetch_assoc($visiGydytojas);
            }
             ?>
        </p>
        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
