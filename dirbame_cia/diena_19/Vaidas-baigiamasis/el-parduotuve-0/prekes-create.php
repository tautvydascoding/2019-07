

<?php
    // print_r( $_GET );
    //test
    $pavadinimas = $_GET['pavadinimas'];
    $aprasymas = $_GET['aprasymas'];
    $kaina = $_GET['kaina'];
    $nuolaida = $_GET['nuolaida'];
    $pozicija = $_GET['pozicija'];
    $kiekis = $_GET['kiekis'];
    $ar_rodyti = $_GET['ar_rodyti'];
// function createPreke($pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti)
    include_once('el-parduotuves-db-prekes-functions.php');
    createPreke($pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti);

    echo "Uzregistravote preke sekmingai! <hr />";

?>

<a class= "btn btn-info" href="index.php"> Gryzti </a>
