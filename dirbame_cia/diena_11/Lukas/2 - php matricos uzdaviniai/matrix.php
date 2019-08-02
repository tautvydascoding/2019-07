<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php



        // =================svarbus patarimai===================:
        // ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
        // FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
        // matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
        // matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
        // matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
        // matricos ilgis daznai skiriasi nuo plocio.
        //  pvz.:
         // for ( i < eiluciuSkaicius)
         //    for ( k < stulpeliuSkaicius)
         // =================// =================// ========



             // UZDUOTIS 1.0
             // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
             $darbuotojas1 = ["Jonas", "Jonaitis", 1980, "Inspektorius"];
             // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
             $darbuotojas2 = ["Ona", "Onute", 1980, "Sekretore"];
             // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
             $darbuotojas3 = ["Kestas", "Kerta", 2001, "Pavaduotojas"];
             // D. sukurti masyva 'visiDarbuotojai'
             $visiDarbuotojai = [];
             // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
             // UZDUOTIS 1.0
             $visiDarbuotojai[0] = $darbuotojas1;
             $visiDarbuotojai[1] = $darbuotojas2;
             $visiDarbuotojai[2] = $darbuotojas3;
             // isvesti visa informacija apie pirma darbuotoja (NEnaudojant FOR cikla)

             print_r ($visiDarbuotojai[0]);
             echo "<br />";

             // UZDUOTIS 1.1
            // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
                 echo "<h3>1.1</h3>";
             for($i = 0; $i < 4; $i++) {
                  echo $visiDarbuotojai[0][$i] . "<br />";
             }
              // UZDUOTIS 1.2
             // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
             echo "<h3>1.2</h3>";
             for($i = 0; $i < count($visiDarbuotojai); $i++) {
                 echo $visiDarbuotojai[$i][0] . "<br />";
             }
             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
             echo "<h3>1.3</h3>";
             for($i = 0; $i < 3; $i++) {
                 echo $visiDarbuotojai[$i][0] . "<br />";
                 echo $visiDarbuotojai[$i][1] . "<br />";

                 echo $visiDarbuotojai[$i][2] . "<br />";

                 echo $visiDarbuotojai[$i][3] . "<br />";

             }
             // UZDUOTIS 1.4
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
             echo "<h3>1.4</h3>";
             for($i = 0; $i < count($visiDarbuotojai); $i++) {
                 for($x = 0; $x < 4; $x++) {
                     echo $visiDarbuotojai[$i][$x] . "<br />";
                 }
             }
             // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
             // 1.5) surasti jauniausia darbuotoja
             echo "<h3>1.5</h3>";
             $jauniausioData = 1000;

             for($i = 0; $i < count($visiDarbuotojai); $i++) {
                 if ($visiDarbuotojai[$i][2] > $jauniausioData) {
                     $jauniausioData = $visiDarbuotojai[$i][2];
                     $jauniausioVardas = $visiDarbuotojai[$i][0];
                 }
             }
             echo $jauniausioData;
             echo "<br /> Jauniausio vardas ";
             echo $jauniausioVardas;


             // 1.6) surasti seniausia darbuotoja
             echo "<h3>1.6</h3>";
             $seniausias = 5000;
             $nr = 0;
             for($i = 0; $i < count($visiDarbuotojai); $i++){
                 if($visiDarbuotojai[$i][2] < $seniausias) {
                     $seniausias = $visiDarbuotojai[$i][2];
                     $nr = $i;
                 }
             }
             echo $nr . "<br />";
             echo $seniausias;
             // 1.6) apskaiciuoti darbuotoju amziaus vidurki

             y = 2019 - x;
             z = 

            // UZDUOTIS 2 --------------
            // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
            // Antraste, img pavadinimas, kaina, prekes aprasymas

            // 2.A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
            // butu gerai, jei kainos butu nuo 10 iki 200 eur (ivairios)
            // 2.B. i masyva visosPrekes, ideti "preke" masyva
            // 2.C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach(PHP kalba)) ir bootstrap dizaina

           // nuotrauka (javascript kalbai)
           // let x = "<img src='img/1.jpg' alt='medziginis fotelis'>";

           // 2  budai nuotraukoms (PHP kalbai)
            // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
            // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);



            // PAPAILDOMI LOGIKOS UZDAVINIAI (tiems kas juda greiciau nei visa klase ):
            // 3.1 surikiuoti prekes pagal kaina didejanciai
            // 3.2 atrinkti prekias iki 100 eur
            // sukurti visu prekiu masyvo kopija: i ja sudeti prekias iki 100 naudojant for arba foreach( PHP f-ja)
            // 3.3 suapvalinti prekiu kainas , kad nebutu centu  google convert variable into integer






         ?>
    </body>
</html>
