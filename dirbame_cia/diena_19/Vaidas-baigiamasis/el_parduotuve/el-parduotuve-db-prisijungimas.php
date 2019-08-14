<?php

//prisijungimas prie DB

//konstantos

define("DB_USER", 'vaidasober');
define("DB_PASS", 'slaptazodis');
define("DB_HOST", 'localhost');
define("DB_NAME", 'el_parduotuve2');

mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// echo "Veikia  <br />  <br />";

//arba
function getPrisijungimas (){
    $prisijungimas = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($prisijungimas == false) {
        echo "ERROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br  />";
    }
    mysqli_set_charset($prisijungimas, "utf8"); // utf8 rasom be bruksneliu
    return $prisijungimas;
    // mysqli_close($prisijungimas);  // atsijungit nuo DB
}
