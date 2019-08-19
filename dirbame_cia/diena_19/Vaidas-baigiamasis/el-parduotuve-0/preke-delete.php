<h1> DELETE doctor</h1>

<?php
include_once('el-parduotuves-db-prekes-functions.php');

$x = $_GET['nr'];
deletePreke($x);
?>

<h3 class='bg-success'>
    Sekmingai istrinta preke nr: <?php echo ($x);  ?>
    <?= $x; ?>
</h3>

<!-- perkeliam svetaine i kita faila -->

<?php header('Location: ' . 'index.php'); ?>
