<?php
include('Serveris.php');
// Tikrinam ar prisijungimas sėkmingas
if(!isset($_SESSION['prisijungesVartotojas'])){
header("location: Page-Prisijungimas.php"); // Jei ne, sugrąžinam atgal į prisijungimo puslapį
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<p><b id="welcome">Welcome : <i><?php echo $administratorius; ?></i></b></p>

<p><b id="logout"><a href="Atsijungti.php">Log Out</a></b></p>
</body>
</html>