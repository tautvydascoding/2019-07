<!DOCtype html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="libs/Bootstrap4/css/bootstrap.min.css">
    <?php include("patient-functions.php"); ?>
</head>
<body>
    <div class="container">
        <ul>
    <?php
    $visiPacientai = getPatients();
    // print_r($visiPacientai); test
    $pacientas = mysqli_fetch_assoc($visiPacientai);
    // print_r($pacientas);  test
    while($pacientas) {
        echo "<li><a href='temp-patients.php?id={$pacientas['id']}'>" . $pacientas['name'] . " " . $pacientas['lname'] . "</a></li>";
        $pacientas = mysqli_fetch_assoc($visiPacientai);
    }


    ?>
        </ul>
    </div>


</body>




</html>
