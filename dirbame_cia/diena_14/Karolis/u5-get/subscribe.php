<?php
print_r($_GET);
$pastas = $_GET['pastas'];
if ( array_key_exists('pastas', $_GET) && strlen($_GET['pastas']) != 0 ){
    $x = $_GET['pastas'];
    if ( isset($x) ){
        echo "stalcius 'pastas' egzistuoja:" . $x .  "<hr />";

    }
} else {
    echo "stalciaus tolkiu pavadinimu 'pastas' nera";
    echo "<a href='index.php'>Grizti atgal</a>";
}
// <----------------------- Trumpas variantas ---------------------------->
// if (array_key_exists('pastas', $_GET) && strlen($_GET['pastas']) >= 6){
//     echo "pavyko";
// }else{
//     echo "Klaida!" . "<br>";
//     echo "<a href='index.php'>Atgal</a>;
// }
//
//  ?>
