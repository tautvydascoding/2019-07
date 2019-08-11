<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>
        <h1> Naujos statybos projektai </h1>
        <section>
            <?php
            include_once('house-db-functions.php');

            $visiNamai = getHouses(20); //mySQL OBJEKTAS
            $namas = mysqli_fetch_assoc($visiNamai);     //atspausdins viena nama is visu
            // print_r($namas);

            while ( $namas ){           //spausdina tol kol yra namu
                // print_r( $namas );      //test
                echo("<h3>" . $namas['name'] . " ". "Vieta: ". $namas['adresas']. " ". "Plotas (m2): " . $namas['plotas']. " ". "Statybos metai:  " . $namas['metai']. " ". "Kaina eur: " . $namas['kaina']. "</h3>");
                $namas = mysqli_fetch_assoc( $visiNamai );    //vienas namas
                }
            ?>
        </section>





    <div >
    <?php
    include_once('contact-db-functions.php');

    $visiKontaktai = getContacts(15); //mySQL OBJEKTAS
    $kontaktas = mysqli_fetch_assoc($visiKontaktai);     //atspausdins viena nama is visu
    // print_r($namas);

    while ( $kontaktas ){           //spausdina tol kol yra namu
        // print_r( $namas );      //test
        echo("<h3>". $kontaktas['name'] . " ". $kontaktas['lname']. " ". $kontaktas['pareigos']. " ". $kontaktas['tel']. " ". $kontaktas['pastas']. "</h3>");
        $kontaktas = mysqli_fetch_assoc( $visiKontaktai );    //vienas namas
        }

    ?>
    </div>


        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
