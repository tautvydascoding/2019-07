<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PAGE-DOCTOR</title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>
<?php
// print_r($_GET); // Pasitikriname ir viskas veikia ir gauname rezultatą
include('DOCTOR-DB-FUNCTIONS.php');
$number = $_GET['number'];
$doctor = getDoctor($number);
// print_r($doctor);

// Atspausdinam visą informaciją apie gydytoją
echo "<h4>Doctor: {$doctor['Name']} {$doctor['LastName']} {$doctor['Location']} {$doctor['Practitioner']} {$doctor['Experience']} </h4>";
?>

        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>
        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>