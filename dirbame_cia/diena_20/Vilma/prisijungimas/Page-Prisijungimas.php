<?php
include('Prisijungti.php');
// Jeigu visi laukai tisingai užpildyti, leidžiam prisijungti prie VALDYMO PANELĖS
if(isset($_SESSION['prisijungesVartotojas'])){
header("location: valdymas.php"); // Nukreipiam prisijungusį vartotją į VALDYMO PANELĘ
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP with Session</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">

    <input name="prisijungimovardas" placeholder="Prisijungimo Vardas" type="text">

    <input name="slaptazodis" placeholder="Slaptazodis" type="password"><br><br>

    <input name="prisijungti" type="submit" value=" Prisijungti ">

    <span><?php echo $error; ?></span>
    </form>
</body>
</html>