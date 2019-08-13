<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1> PHP panaudojimas</h1>

        <?php

        require_once('mokykla.php');
        // butina sukurti objekta:
        $silainiai =  new Mokykla();
        $dainava =  new Mokykla();
        // tada ji naudojam - duomenu  idejimas i objekta:

        $silainiai->miestas = "Kaunas";
        $silainiai->adresas = "Savanoriu pr. 14";
        $silainiai->setDarbSk(3);
        echo "darb.sk.: " . $silainiai->getDarbSk();




        // echo "Mokykla: " . $Monika->getManoMokykla();
        //
        // $Monika->setManoVardas( 'Monika');
        // echo "vardas: " . $Monika->getManoVardas();



         ?>
    </body>
</html>
