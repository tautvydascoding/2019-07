<?php

// echo "Naujienos uzsakytos sekmingai: " . $_GET['email'];

// Tikrinam ar egzistuoja musu masyvo stalcius su pavadinimu email
if(array_key_exists('email', $_GET)){
    $x = $_GET['email'];

    // Tikrinam ar egizstuoja mūsų kintamasis x IR ar kazkas yra ivesta
    if(isset($x) && strlen($x) != 0){
        echo "Naujienos uzsakytos sekmingai: " . $_GET['email'];
    } else {
        echo "Iveskite savo el.pasto adresa   ";
        echo "<a href='index.php'>Grizkite atgal</a>";
    }
} else {
    echo "Iveskite savo el.pasto adresa   ";
    echo "<a href='index.php'>Grizkite atgal</a>";
}

// Trumpasis variantas:
// Jeigu nėra net 6 simbolių tai tikrai įvestas ne email, nes dažniausiai email susideda iš mažiausiai 8 simbolių
// if(array_key_exists('email', $_GET) && strlen($_GET['email']) >= 6){
//         echo "Naujienos uzsakytos sekmingai: " . $_GET['email'];
//     } else {
//         echo "Iveskite savo el.pasto adresa   ";
//         echo "<a href='index.php'>Grizkite atgal</a>";
//     }

// print_r($_GET);