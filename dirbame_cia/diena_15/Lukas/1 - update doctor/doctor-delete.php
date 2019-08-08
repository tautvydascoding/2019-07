<?php
include('db-funkcijos.php');
$id = $_GET['id'];


deleteDoctor($id); // vietoj id galima istatyt $_GET['id']; ir nereikes $id kintamojo
?>
<h3 class='btn btn-success'>Gydytojas nr <?= $id ?> istrintas sekmingai</h3>

<?php header("Location: index.php"); ?>
