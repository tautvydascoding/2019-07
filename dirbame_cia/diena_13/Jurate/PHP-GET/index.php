<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>

        <h1>Visi Gydytojai</h1>
        <section>
            <?php
                include_once('Doctors-db-functions.php');
                $visiGyt = getDoctors(4);
                // ats gaunam mysql objektą

                $gydytojas = mysqli_fetch_assoc($visiGyt);
                // print_r($gydytojas);

                while ($gydytojas) {
                    // print_r($gydytojas);
                    echo "<h2>" . $gydytojas['name'] . " " . $gydytojas['lastName'] . "<h2/>";
                    $gydytojas = mysqli_fetch_assoc($visiGyt);
                }
            ?>
        </section>
        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>
        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
