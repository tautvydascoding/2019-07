
<?php
$vardas = "Tomas";
$pavarde = "Tomaitis";



$straipsnis1 = ["antraste" => "BMW vel praleke saligatviu",
                "aprasymas" => "Lorem lorem....",
                "data" => "2010-12-01"
            ];

$straipsnis2 = ["antraste" => "Svinta vis veliau",
                "aprasymas" => "2 Lorem lorem....",
                "data" => "2010-12-02"
            ];

$straipsnis3 = ["antraste" => "Kainos smarkiai leidziasi",
                "aprasymas" => "3 Lorem lorem....",
                "data" => "2010-12-03"
            ];

$visiStraipsniai = [$straipsnis1, $straipsnis2, $straipsnis3];


foreach ($visiStraipsniai as $straipsnis) {
    include("straipsnis.php");
    // print_r ($straipsnis);
}



// UZDUOTIS
// 1.0 index.php faile sukurti   'container' 'main'
// 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde, priskirti jiems reiksmes
// 1.2 index.php faile sukurti masyva: 'straipnis1','straipnis2','straipnis3'
//   = ['antraste', 'aprasymas', 'data'];
//  pvz:   'BMW vel praleke saligatviu',   'Lorem lorem....', '2010-12-01'
//  pvz:   'Svinta vis veliau',   '2 Lorem lorem....', '2010-12-01'
//  pvz:   'Kainos smarkiai leidziasi',   '3 Lorem lorem....', '2010-12-03'
// 1.2.2 visus straipsnius sudeti i masyva: VisiStraipsniai

// 2.0. index.php faile  ideti:
// include( 'straipsnis.php');

// 2.1. suskurti faila:  straipsnis.php
// 2.2 straipsnis.php  faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde

// 3.1 'article' videje sukurti:
// 3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)


// 4.0 index.php faile  panaudoti FOREACH cikla
// i jo vidu ideti include(straipsnis.php)
?>
