
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>PHP objektai</h1>
        <?php

        include_once('mokykla.php');
        //pirmiausia susikurti objekta pvz silainiai ar kita
        $silainiai = new Mokykla();
        $dainava = new Mokykla();

//naudoti objeta is kurio paiima---ideti duomenis i objekta
        $silainiai->miestas = "Kaunas";
        $silainiai->adresas = "Laisves al.10";
        $silainiai->setDarbSk(5);
        echo "darbuotoju skaicius: " . $silainiai->getDarbSk();

        ?>
    </body>
</html>
