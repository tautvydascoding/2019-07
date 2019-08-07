<?php



    // echo "uzpildyk URL adresa: <br />";
    // $x = $_GET['pulas'];
    //
    // echo $x;



    // 1. sukurti index.php
    // 2. parasyti PHP koda:



//susikurti masyva - preke1: kaina, pavadinimas, kiekis
//pvz: $preke1 = [499, "XXL dviratis", 2];

        echo "tekstas is URL adreso: <br />";
        $preke1 = [499, "XXL dviratis", "2 vnt"];
        $preke2 = [199, "Papirtukas", "250 vnt"];
        $preke3 = [399, "Rieduciai", "60 vnt"];

        $visosPrekes[0] = $preke1;
        $visosPrekes[1] = $preke2;
        $visosPrekes[2] = $preke3;

// ARBA
// $visosPrekes = [$preke1, $preke2, $preke3];


        $numeris = $_GET['x'];      //is URL adreso paimtas  ?x=...

        echo "numeris is URL adreso: $numeris <br />";
        echo $preke1[$numeris] . "<hr />";

//-----------------------------------------------------

        $numeris = $_GET['x'];      //paimam IS URL paimam x
        
        $manoPreke =  $visosPrekes[$numeris]; //paimam  nurodyta preke
        print_r($manoPreke);    // testuojam
        echo "<hr />";



    // 3. pasileisti Narsykleje si puslapi
    // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
         // ?x=1
     // 4. Narsykles adrese  pakeisti ?x=0
     // 4. Narsykles adrese  pakeisti ?x=2
     // ir paziureti kas bus



    // 5.===============sunkesnis====================

     // A)  susikurti dar 2 masyvus  preke2, prek3
     // B) susikurti masyva 'visosPrekes'
     // C) sudeti visas prekes i masyva 'visosPrekes'
     // 6. parasyti PHP koda:
         // $numeris = $_GET['x'];
         // $manoPreke =  $visosPrekes[$numeris];
         // print_r($manoPreke);
         // echo "<hr />";
     // 7. pasileisti Narsykleje si puslapi
     // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
          // ?x=1
      // 4. Narsykles adrese  pakeisti ?x=0
      // 4. Narsykles adrese  pakeisti ?x=2
      // ir paziureti kas bus






 ?>
