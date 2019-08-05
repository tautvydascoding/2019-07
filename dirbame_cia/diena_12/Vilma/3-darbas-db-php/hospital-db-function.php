<?php

// prisijungimas DB

// konstantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital8');

function getPrisijungimas (){
$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME  );
if ($prisijungimas == false) {
    echo "Klaida!!!!! <br/>";
echo mysqli_connect_error();
}
return $prisijungimas;
        mysqli_close($prisijungimas); //atsijungti nuo DB
}
getPrisijungimas ();
echo "Veikia <br/>";

//------------
function getDoctor ($nr){
    $manoSQL = "SELECT * from doctors where id = '$nr' ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($rezultatai==false) {
        return "Error: " . mysqli_error(getPrisijungimas());}
    //print_r($rezultatai);
    //var_dump($rezultatai); - parodo ir tipus

    $rezultataiArray = mysqli_fetch_row($rezultatai);
return $rezultataiArray;
}

$gydytojas = getDoctor(5);

print_r($gydytojas);
