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
        <?php require_once("process.php") ?>
    </head>

    <body>

        <h1></h1>

        <?php var_dump($autoData);

        echo "<br />";

        foreach($autoData as $array) {
            echo $array . "<br />";
        }

        $autoData["metai"] = 1999;

        echo "<hr />";

        foreach($autoData as $array) {
            echo $array . "<br />";
        }

        $autoData += ["modelis" => "A6"];

        echo "<hr />";

        var_dump($autoData);

        echo "<hr />";

        foreach($autoData as $keys => $values) {
            echo $keys . "<br />" . $values . "<br />";
        }


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
