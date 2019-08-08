<h1> DELETE doctor</h1>

<?php
include_once('doctor-db-functions.php');

$x = $_GET['nr'];
deleteDoctor($x);
?>

<h3 class='bg-success'>
    Sekmingai istrintas gydytojas nr: <?php echo ($x);  ?>
    <?= $x; ?>
</h3>

<!-- perkeliam svetaine i kita faila -->

<?php header('Location: ' . 'index.php'); ?>
