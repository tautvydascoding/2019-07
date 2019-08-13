<?php
include_once('patient_DB_functions.php');

$pac = getPatient($_GET['nr']);

print_r($pac);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Paciento duomenų redagavimas</h1>
        <form  action="patient-update.php" method="get">
            <input type="hidden" name="nr" value="<?php echo $pac[0]; ?>" >
            <label for="vard">Jūsų vardas</label> <br/>
            <input type="text" name="vard" value="<?php echo $pac[1]; ?>"> <br/>
            <label for="pavard">Jūsų pavardė</label> <br/>
            <input type="text" name="pavard" value="<?php echo $pac[2]; ?>"> <br/>
            <label for="gydId">Jūsų gydytojo numeris</label> <br/>
            <input type="text" name="gydId" value="<?php echo $pac[3]; ?>"><br/>
<hr>
            <button type="submit" >Išsaugoti</button>
        </form>
    </body>
</html>
