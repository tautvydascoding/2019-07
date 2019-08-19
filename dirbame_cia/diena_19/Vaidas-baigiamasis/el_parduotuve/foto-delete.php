<h1> DELETE doctor</h1>

<?php
include('el-parduotuve-db-prisijungimas.php');
include_once('el-parduotuves-db-fotos-functions.php');

$x = $_GET['nr'];
deleteFoto($x);
?>

<h3 class='bg-success'>
    Sekmingai istrinta preke foto nr: <?php echo ($x);  ?>
    <?= $x; ?>
</h3>

<!-- perkeliam svetaine i kita faila -->

<?php header('Location: ' . 'index.php'); ?>
