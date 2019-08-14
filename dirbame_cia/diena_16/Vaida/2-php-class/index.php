<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1> PHP class objektai </h1>
        <?
        require_once('zmogus.php');

        $Monika = new Zmogus();
        $Tadas = new Zmogus();
        $Kestas = new Zmogus();

        $Monika->vardas = "Monika";
        $Monika->ugis = 155;
        echo "vardas: $Monika->vardas <br />";
        // print_r($Monika);
        // var_dump($Monika);


        //iscvkietimas funkcijos
        $Monika->einu();


    



        ?>
    </body>
</html>
