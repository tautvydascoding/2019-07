<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Namų darbas su pacientais 08-07</title>
</head>
<body>
    <ul>
        <?php
            include_once('Patients-DB-functions.php');
        ?>

        <a class="btn btn-success" href="Page-form-CREATE-patient.php">PRIDĖTI NAUJĄ PACIENTĄ</a><br><br>

        <?php

            // Grąžiname nurodytą pacientų skaičių
            $allPatients = getPatients(6); // skliausteliuose pasirenkame kiek pacientų norime išvesti ekrane
            // Gautą informacija apie pacientus sudedame į masyvą, kuriame yra informacija apie kiekvieną pacientą (1pacientas-1masyvas)
            $patient = mysqli_fetch_assoc($allPatients); 
            // print_r($patient);

            while ($patient) {
                echo "<a href='Page-print-patient.php?ID_NUMERIS={$patient['ID']}' >" . $patient['Name'] . " " . $patient['LastName'] . "</a>" . "    ";
                // Sukuriame mygtuką, kurį paspaudus bus ištrintas pasirinktas pacientas, šalia sukuriame mygtuką su kuriuo galės atnaujinti info apie pacientą
                // Už .php nurodome paciento ID numerį, kurį gauname iš DB
                echo "<a class='btn bg-danger text-white' href='Patient-delete.php?ID_NUMERIS={$patient['ID']}' >" . "IŠTRINTI" . "</a>" . "    " . 
                 "<a class='btn bg-info text-white' href='Page-form-UPDATE-patient.php?ID_NUMERIS={$patient['ID']}' >" . "ATNAUJINTI DUOMENIS" . "</a><br/>";
                 $patient = mysqli_fetch_assoc($allPatients);
            }
        ?>
    </ul>

    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>