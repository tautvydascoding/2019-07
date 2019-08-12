<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>
        <?php


        class Mokykla {
            public $miestas = 'Miestas';
            public $adresas = 'Adresas';
            private $darbuotojai = 2;
            function __construct($miestas, $adresas, $darbuotojai) {
                $this->miestas = $miestas;
                $this->adresas = $adresas;
                $this->darbuotojai = $darbuotojai;
            }
            function setMokykla($new_miestas, $new_adresas, $new_darbuotojai) {
                $this->miestas = $new_miestas;
                $this->adresas = $new_adresas;
                $this->darbuotojai = $new_darbuotojai;
            }
            function getMokykla() {
                echo $this->miestas . " " . $this->adresas . " " . $this->darbuotojai;
            }
        }

        $vilno = new Mokykla("Vilnius", "Zveryno g. 25", 25);
        print_r($vilno);
        echo "<br />";
        // echo $vilno->darbuotojai;
        $vilno->setMokykla("Kaunas", "Vytauto pr. 24", 20);

        print_r($vilno);
        echo "<hr />";
        $vilno->getMokykla();




         ?>




        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js">

        </script>


    </body>
</html>
