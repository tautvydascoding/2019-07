<h1>DELETE doctor</h1>

<?php

include_once('doctor-db-functions.php');
 // print_r( $_GET) ; // test
 $x = $_GET['nr'];
 deleteDoctor($x);
?>

<h3 class='bg-success'>
    Sekmingai istrintas gydytojas nr:  <?php echo $x; ?>
    <?=  $x; ?>
</h3>

<!-- perkeliam vartotoja i kita faila -->
<?php    header('Location: '. 'index.php');    ?>
