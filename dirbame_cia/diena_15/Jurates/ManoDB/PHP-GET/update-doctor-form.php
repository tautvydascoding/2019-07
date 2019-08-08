<?php
include('DOCTORS-DB-FUNCTIONS.php');
$nr = $_GET['number'];
// print_r($number);
$gydytojas = getDoctor($nr);
// print_r($gydytojas);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>KLASES DARBAS 08-07</title>
    <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
</head>
    <body>
    <h1>Atnaujinkite duomenis</h1>
    <form action="doctor-update.php" method="get">

        <label for="vardas">Gydytojo vardas</label><br>
        <input type="text" name="vardas" value="<?php echo $gydytojas['Name'];?>"><br>

        <label for="pavarde">Gydytojo pavarde</label><br>
        <input type="text" name="pavarde" value="<?php echo $gydytojas['LastName'];?>"><br>

        <input type="hidden" name="id" value="<?php echo $gydytojas['ID'];?>">

        <button class="bg-success" type="submit">SAVE</button>
    </form>
        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>
        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>