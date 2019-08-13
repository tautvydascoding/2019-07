<?php
    include_once('doctor-db-functions.php');

    // print_r($_GET);
    // print_r($_POST);

    //
    $vard = $_POST['vardas'];
    $pavard = $_POST['pavarde'];
    $nr = $_POST['id'];




    // editDoctor($_POST['id'], $_POST['vardas'],$_POST['pavarde'] );
    editDoctor( $nr, $vard, $pavard );


    // echo "Redaguoti <hr />";

 ?>

 <h1> Isaugota sekmingai</h1>
 <a href="index.php"> Back </a>
