<!DOCTYPE html>
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
            include('patients-db-functions.php');
            $nr = 5;
            $patient = getPatients($nr);
            // print_r($patient); // Vis dar gaunam MySql objektą, nes su fetch niekur gautos informacijos nesudėjom į masyvus

            // Užfiksuojam gautą atsakymą
            $allPatients = getPatients($nr);
            $patient = mysqli_fetch_assoc($allPatients);
            // print_r($Patient); // Pasitikrinam ar veikia mūsų fetch ir ar gauname teisingus duomenis

            // Išvedame į ekraną visus mūsų pacientus su WHILE ciklu PAPRASTAI
            // while ($patient) {
            //     echo "<h4>" . $patient['name'] . " | " . $patient['lastName'] . "</h4>";
            //     $patient = mysqli_fetch_assoc($allPatients); // Užfiksuojam atsakymus
            // }


            // ĮDEDAME GAUTUS REZULTATUS Į SĄRAŠO ELEMENTUS SU NUORODOMIS Į KITĄ PUSLAPĮ, KURIAME BUS VISA INFO APIE PACIENTĄ
            while ($patient) {
                    echo "<li><a href='page-patient.php?patientNumber'>" . $patient['name'] . " " . $patient['lastName'] . "</a></li>";
                    
                    $patient = mysqli_fetch_assoc($allPatients); // Užfiksuojam atsakymus
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
