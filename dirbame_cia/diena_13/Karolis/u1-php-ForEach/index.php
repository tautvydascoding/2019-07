<?php
$vardas = "karolis";
$pavarde = "belekas";
$str1=["antraste" => "bmw","aprasymas" => "lorem1","data" => '2010-12-01'];
$str2=["antraste" => "svinta","aprasymas" => "lorem2","data" => '2010-12-02'];
$str3=["antraste" => "kainos","aprasymas" => "lorem3","data" => '2012-12-03'];
$straipsniai = [$str1,$str2,$str3] ;
include('straipsnis.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <container>
            <main>
                <article>

<?php foreach($straipsniai as $straipsnis){
    include ('straipsnis.php');
} ?>
                </article>
            </main>



        </container>

    </body>
</html>
<?php
// print_r($straipsniai);
// $autodata = ["Marke" => "Audi",
//              "metai" => 2010 ,
//              "kaina" => 6010];
// $x = $autodata ["Marke"];
// echo "<h1>$x</h1>";
// $autodata ["kaina"] +=100;
// $autodata += ["modelis" => "a6"];
// foreach($autodata as $masina => $val){
//     echo "<h3>$masina</h3>";
//     echo "<h3>$val</h3>" . "<br>";
// };
// $z = $autodata["modelis"];
// echo "<h1>$z</h1>";
// // echo "<h2>$autodata['modelis']</h2>";
// print_r($autodata);


// UZDUOTIS
// 1.1 index.php faile sukurti   'container' 'main'
// 1.2 index.php faile sukurti 2 kintamuosius $vardas, $pavarde, priskirti jiems reiksmes
// 1.3. index.php faile  ideti:
// include( 'straipsnis.php');

// 2.0. suskurti faila:  straipsnis.php
// 2.1 straipsnis.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
//  pvz:   'BMW vel praleke saligatviu',   'Lorem lorem....', '2010-12-01'
//  pvz:   'Svinta vis veliau',   '2 Lorem lorem....', '2010-12-01'
//  pvz:   'Kainos smarkiai leidziasi',   '3 Lorem lorem....', '2010-12-03'

// 2.2 straipsnis.php  faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde

// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)
// foreach($straipsniai as $straipsnis){
//     $x = $straipsnis['antraste'];
//     Echo "<h2>$x</h2>" . "<br>";
//     $x = $straipsnis['aprasymas'];
//     echo "<p>$x</p>" . "<br>";
//     $x = $straipsnis['data'];
//     echo "<div>$x</div>";
// };
