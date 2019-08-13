
<?php
    include_once('doctor-db-functions.php');
    // print_r( GET );
    print_r( $_POST );
    //test



    $vard = $_POST['vard'];
    $pavard = $_POST['pvard'];
    $nr = $_POST['id'];

    editDoctor($nr, $vard, $pavard);

?>

<h1>Issaugota sekmingai</h1>
<a href="index.php"> BACK </a>
