<?php
    print_r( $_GET );
    //test
    $vardas = $_GET['vard'];
    $pavarde = $_GET['pard'];

    include_once('doctor-db-functions.php');
    createDoctor($vardas, $pavarde);

    echo "Uzregistravome sekmingai!<hr />";

    ?>
    <a class="btn btn-info" href="index.php"> Back </a>
