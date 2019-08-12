

<?php
    // print_r( $_GET );
    //test
    $pav_pavadinimas = $_GET['pav_pavadinimas'];
    $pav_aprasymas = $_GET['pav_aprasymas'];
    $pozicija = $_GET['pozicija'];
    $prekes_id = $_GET['prekes_id'];
// function createPreke($pavadinimas, $aprasymas, $kaina, $nuolaida, $pozicija, $kiekis, $ar_rodyti)
    include_once('el-parduotuves-db-fotos-functions.php');
    createPreke($pav_pavadinimas, $pav_aprasymas, $pozicija, $prekes_id);

    echo "Ivedete foto sekmingai! <hr />";

?>

<a class= "btn btn-info" href="index.php"> Gryzti </a>
