
<?php
    include_once('el-parduotuves-db-fotos-functions.php');
    // print_r( GET );
    // print_r( $_POST );
    //test


    $nr = $_POST['id'];
    $pav_pavadinimas = $_POST['pav_pavadinimas'];
    $pav_aprasymas = $_POST['pav_aprasymas'];
    $pozicija = $_POST['pozicija'];
    $prekes_id = $_POST['prekes_id'];


    editPreke($nr, $pav_pavadinimas, $pav_aprasymas, $pozicija, $prekes_id);

?>

<h1>Issaugota sekmingai</h1>
<a href="index.php"> Gryzti </a>
