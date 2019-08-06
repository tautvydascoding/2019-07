<?php

// test
// print_r( $_POST );
// print_r( $_GET );

if( array_key_exists('pastas', $_GET)) {
    $t = $_GET['pastas'];
    // ar $t egzistuoja IR ar $t tekstas  > 0
    if (  isset($t)    &&    strlen($t) != 0) {
        echo "Naujienlaiskis uzsakytas sekmingai: " . $t;
    } else {
            echo "Klaida. Neuzpildet gerai lauku!";
            echo "<a href='index.php'> Atgal </a> ";
    }
} else {
    echo "Klaida. Neuzpildet gerai lauku!";
    echo "<a href='index.php'> Atgal </a> ";
}
// --------------------trumpesnis -------
if( array_key_exists('pastas', $_GET)  && strlen($_GET['pastas']) >= 6 ) {
    echo "Naujienlaiskis uzsakytas sekmingai: " . $t;
} else {
    echo "Klaida. Neuzpildet gerai lauku!";
    echo "<a href='index.php'> Atgal </a> ";
}
