<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>PHP objektai - klasės</h1>
        <?php
        require_once('mokykla.php');

        $KTUGimnazija = new Mokykla("Kaunas", "Studentų 50", 30);
        $JezuituLicejus = new Mokykla("Kaunas", "Rotušės a. 1", 25);
        $GirzadoProgimnazija = new Mokykla("Kaišiadorys", "Paukštininkų 5", 50);
        $silainiai = new Mokykla("aaa", "bbb", 333);

        $silainiai->miestas = "Kaunas";
        $silainiai->adresas = "Savanorių pr. 132";
        $silainiai->setDarbSk(22);

        echo "Darbuotoju skaicius: ".$silainiai->getDarbSk()."<br>";
        echo "Darbuotoju skaicius: ".$KTUGimnazija->getDarbSk();



         ?>
    </body>
</html>
