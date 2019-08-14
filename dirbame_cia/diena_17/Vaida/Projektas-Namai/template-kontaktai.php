<!DOCTYPE html>



<!-- /cia tik PVZ -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
        <h1> Naujo paciento registracija </h1>

            <form action="patient-create.php" method="get">

                <label for="vardas">Jusu vardas</label> <br />
                <input type="text" name="vard"> <br />

                <label for="pavarde">Jusu pavarde</label> <br />
                <input type="text" name="pav"> <br />

                <button type="submit"> Registruotis </button>
            </form>

    </body>
</html>

<!--  -->


<div >
    <!-- darbuotojai -->
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
