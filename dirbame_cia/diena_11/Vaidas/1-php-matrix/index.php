<?php

    echo "Sveiki sveikai <br / />"";
    print("Einasi gerai <br / />");

    print_r( $m);
    print_r("jokubo istorijos <br / />")

    //issamus spausdinimas

    var_dump( $m); // isspausdina ir kintamuju tipus

//pirmas budas sukurti matrix:
    $autos = [
                ["Audi", "A6", 2004],
                ["BMW", "X4", 2010]
            ];
//arba paprastesnis budas
    $autos = [];
    $auto1 = ["Audi", "A6", 2004];
    $auto2 = ["BMW", "X4", 2010];
    $autos[0] = $auto1;
    $autos[1] = $auto2;

    echo "<br / />";
    print_r($autos);


//issivedimas duomenu su for ciklu

for ($i=0; $i < caunt($autos); $i++) {
    echo $autos[$i][0] . "<br />"; //pavadinima
    echo $autos[$i][2] . "<br />"; //metai
}


for ($i=0; $i < 3; $i++) {
    echo $autos[0][$i] . "<br />"; //atspausdins vis 0 stalciu - Audi, A6, 2008

}

//for ciklai, pvz:
for ($i=0; $i < caunt($autos); $i++) {
    for ($k=0; $k < ; $k++) {

    }
    echo $autos[$i][$k] . "<br />"; //pavadinima
    echo $autos[$i][$k] . "<br />"; //metai
}



 ?>
