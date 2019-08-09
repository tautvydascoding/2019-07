<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PAGE-PATIENT</title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>
        <?php
            include('patient-db-functions.php');
            $numeris = $_GET['patientNumber'];
            $patient = getPatient($numeris);
            // print_r($patient); // pasitikrinom ar veikia informacijos paėmimas

            echo "<h4>Patient: {$patient[1]} {$patient[2]}</h4>";
        ?>
    <script src="libs/jquery-3.4.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
    <script type="text/javascript" src="main.js"></script>
    </body>
</html>