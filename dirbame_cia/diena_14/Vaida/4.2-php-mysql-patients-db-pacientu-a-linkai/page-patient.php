<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        include_once('patient-db-functions.php');
        // print_r($GET);
        $numeris = $_GET['nr'];
        $pacientas = getPatient($numeris);

        echo "<h1> Pacientas: $pacientas[1]  $pacientas[2]  </h1>";
        ?>
        </h1>
    </body>
</html>
