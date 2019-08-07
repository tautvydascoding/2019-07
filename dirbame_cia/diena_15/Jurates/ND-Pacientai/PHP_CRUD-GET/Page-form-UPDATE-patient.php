<?php
include_once('Patients-DB-functions.php');
$nr = $_GET['ID_NUMERIS'];
// print_r($nr);
$pacientas = getPatient($nr);
print_r($pacientas);
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
    <h1>Atnaujinkite paciento duomenis</h1>
    <form action="Patient-update.php" method="GET">

        <label for="vardas">Paciento vardas</label><br>
        <input type="text" name="vardas" value="<?php echo $pacientas['Name'];?>"><br>

        <label for="pavarde">Paciento pavarde</label><br>
        <input type="text" name="pavarde" value="<?php echo $pacientas['LastName'];?>"><br>

        <label for="pavarde">Paciento pavarde</label><br>
        <input type="text" name="pavarde" value="<?php echo $pacientas['Address'];?>"><br>

        <label for="pavarde">Paciento pavarde</label><br>
        <input type="text" name="pavarde" value="<?php echo $pacientas['MobileNumber'];?>"><br>

        <label for="pavarde">Paciento pavarde</label><br>
        <input type="text" name="pavarde" value="<?php echo $pacientas['Email'];?>"><br>

        <input type="hidden" name="id" value="<?php echo $pacientas['ID'];?>">

        <button class="bg-success" type="submit">IŠSAUGOTI PAKEITIMUS</button>
    </form>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>