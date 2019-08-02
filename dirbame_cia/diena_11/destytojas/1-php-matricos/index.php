<?php

    echo "Sveiki sveiki <br />";
    print(" EInasi gerai <br />");

    $m = ["TOmas", "jortautas", 1995];
    print_r( $m );
    print_r( "Jokubo istorijos <br />");
    // issamus spausdinimas
    var_dump( $m ); // kaip print_r tik tipais

// matrix sukurimas
    $autos = [
                ["Audi", "A6", 2004],  // [0]
                ["BMW", "X6", 2010]    // [1]
             ];
    // ARBA kita budas
    $autos = [];
    $auto1 = ["Audi", "A6", 2004];
    $auto2 = ["BMW", "X6", 2010];
    $autos[0] = $auto1;
    $autos[1] = $auto2;

    echo "<BR />";
    print_r( $autos );

    // for
    // asoc array
    // switch

    // isisvedima su for ciklu

    for ($i=0; $i < count($autos); $i++) {
        echo $autos[$i][0]  .  "<br>"; // pavadinima
        echo $autos[$i][2]  .  "<br>"; // metai
    }
 ?>
