
<?php
include_once('Patients-DB-functions.php');
// print_r($_GET);
$vardas = $_GET['vardas'];
$pavarde = $_GET['pavarde'];
$adresas = $_GET['adresas'];
$mobTelnr = $_GET['mobNr'];
$elPastas = $_GET['elPastas'];
createPatient($vardas, $pavarde, $adresas, $mobTelnr, $elPastas);

echo "Pacientas užregistruotas sėkmingai :)<hr/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Namų darbas su pacientais 08-07</title>
</head>
<body>

    <a class="btn btn-info" href="index.php">GRĮŽTI ATGAL</a>

    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>