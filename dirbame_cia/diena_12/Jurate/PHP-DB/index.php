<html>
<head>
    <meta charset="utf-8">
    <title>PHP pamoka</title>
    <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
</head>
    <body>
        <header>
            <nav></nav>
        </header>

        <div class="wrapper">
            <main>
                <h1>Labas</h1>
            </main>
        </div>
    <?php
    include_once("Doctors-db-functions.php");
    $gyd1 = getDoctor(9);
    // print_r($gyd1);
    echo "<h2> $gyd1[1] $gyd1[2] </h2>";
    echo "<hr>";

    // Su ciklu gauti visus gydytojus
    // $visiGydytojai = getDoctor();
    for($i=5; $i < 12; $i++){
        $gyd = getDoctor($i);
        echo "<h5> $gyd[1] $gyd[2] </h5>";
    }
    ?>

    <footer></footer>
        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>
        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script src="main.js"></script>
    </body>
</html>