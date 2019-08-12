<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>PHP objektai</h1>
        <?php
            include_once('mokykla.php');
            // 1) sukuriam tuscia obj
            $silainiai = new Mokykla();
            $dainava = new Mokykla();
            // 2) duom. idejimas i obj
            $silainiai->miestas = "Kaunas";
            $silainiai->adresas = "Sr. pr. 132";
            $silainiai->setDarbSk(3);
            echo "darb.sk.: " . $silainiai->getDarbSk();

         ?>


    </body>
</html>
