

<?php

    print_r($_GET);


    $vardas=$_GET['vard'];
    $pavarde=$_GET['pav'];

    include_once('doctor-db-functions.php');
    createDoctor($vardas, $pavarde);

    echo "Uziregistravot sekmingai <hr />";

 ?>
 <a class="btn btn-info" href="index.php">Back </a>
