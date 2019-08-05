<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
</head>
    <body>

        <?php
            include_once("ManoAsmenineDB.php");
            // Atspausdiname masyva su klinikos infomacija ekrane
            $clinic = getClinic(1);
            // print_r($clinic);

            // Atspausdiname klinikos informaciją HTML elemento viduje
            echo "<h4> $clinic[1] | $clinic[2] | $clinic[3] | $clinic[4] | $clinic[5] </h4>";

            // Atspausdiname visų klinikų pavadinimus naudojant ciklą
            for($i=1; $i < 4; $i++){
                $clinics = getClinic($i);
                echo "<li> $clinics[1] | $clinics[2] | $clinics[3] | $clinics[4] | $clinics[5] </li>";
            }
            echo "<hr>";
        ?>

    <section>
        <?php
            include_once("ManoAsmenineDB.php");
            $allDoctors = getDoctors(7); // Atsakymas gaunamas kaip MySql objektas

            // Iš MySql objekto, paimame po vieną reikšmę ir ją talpiname į masyvą
            $doctor = mysqli_fetch_assoc($allDoctors);
            // print_r($doctor); // pasitikrinimui ar atspausdina informaciją apie gydytoją

            // Išvedame duomenis į ekraną apie visus gydytoju naudojantis while ciklu
            while ($allDoctors) {
                echo "<h4>" . $doctor['Name'] . " " . $doctor["LastName"] . " " 
                . $doctor['Location'] . " " . $doctor['Practitioner'] . " " 
                . $doctor['Experience'] . "</h4>";
                
                // Užfiksuojam atsakymus masyve
                $doctor = mysqli_fetch_assoc($allDoctors);
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
