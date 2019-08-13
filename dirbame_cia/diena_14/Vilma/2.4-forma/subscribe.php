<?php

if (array_key_exists('kaRasytiiGet', $_GET) && strlen($_GET['kaRasytiiGet']) >= 6  ) {
    echo "Jūs užsisakėte naujienlaiškį:  ".$_GET['kaRasytiiGet'];
    }
    else {
        echo "Klaida! Neuzpildete lauko";
        echo "<a href='index.php'> Atgal</a>";
    };
