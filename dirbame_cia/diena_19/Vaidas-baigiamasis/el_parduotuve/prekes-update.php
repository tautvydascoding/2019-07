
<?php
    include_once('el-parduotuves-db-prekes-functions.php');
    // print_r( GET );
    // print_r( $_POST );
    //test


    $nr = $_POST['id'];
    $pavadinimas = $_POST['pavadinimas'];
    $aprasymas = $_POST['aprasymas'];
    $kaina = $_POST['kaina'];
    $nuolaida = $_POST['nuolaida'];
    $pozicija = $_POST['pozicija'];
    $kiekis = $_POST['kiekis'];
    $ar_rodyti = $_POST['ar_rodyti'];


    editPreke($nr, $pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti);

?>

<h1>Issaugota sekmingai</h1>
<a href="index.php"> Gryzti </a>
