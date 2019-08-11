<?php
include_once('hospital_db_function.php');

$gydid = $_GET['nr'];
$gyd = getDoctor($gydid);

//print_r($gyd);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Gydytojo duomenų redagavimas</h1>
        <form  action="doctor-update.php" method="get">
            <input type="hidden" name="nr" value="<?php echo $gyd[0]; ?>" >
            <label for="vard">Jūsų vardas</label>
            <input type="text" name="vard" value="<?php echo $gyd[1]; ?>">
            <label for="pavard">Jūsų pavardė</label>
            <input type="text" name="pavard" value="<?php echo $gyd[2]; ?>">


            <button type="submit" >Išsaugoti</button>
        </form>
    </body>
</html>
