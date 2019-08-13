<html>
<head>
    <meta charset="utf-8">
    <title>KARTOJAM PHP-SQL komandas</title>
    <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">
    <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
</head>
    <body>
<!-- 2019-08-06 paskaitos pasikartojimas -->
    <ul>
        <?php
            include("DOCTORS-DB-FUNCTIONS.php");
            // include("PAGE-DOCTOR.php");  //ŠITO NEREIKIA!!!!!!!!!!!!!!!!!!!!
            // // Sugrąžinam informaciją apie vieną (pasirinktą) gydytoją
            $number = 2; // Mūsų ieškomo gydytojo ID numeris
            $doctor = getDoctors($number);
            // print_r($doctor); // Sugrįžta MySql objektas ir pasitikrinam ir mums bent ką nors grąžina

            // Grąžiname nurodytą gydytojų skaičių
            $allDoctors = getDoctors(9); // skliausteliuose pasirenkame kiek gydytojų norime išvesti ekrane
            // Gautus gydytojus sudedame į masyvą, kuriame yra informacija apie kiekvieną gydytoją (1gydytojas-1masyvas)
            $doctor = mysqli_fetch_assoc($allDoctors); 
            // print_r($doctor);

            while ($doctor) {
                // Naudojantis While ciklu atspausdinam visus gydytojus, juos įterpiame į HTML sąrašo elementus
                // echo "<li>" . $doctor['Name'] . " " . $doctor['LastName'] . "</li>";

                // Paspaudus ant gydytojo informacijos, vartotoją nukeliame į kitą php failą, kuriame atspausdiname VISĄ informaciją apie pasirinktą gydytoją
                echo "<li>" . "<a href='PAGE-DOCTOR.php?number={$doctor['ID']}' >" . $doctor['Name'] . " " . $doctor['LastName'] . "</a>" . "</li>";
                // Užfiksuojam gautus rezultatus į masyvus/masyvą (1gydytojas-1masyvas)
                $doctor = mysqli_fetch_assoc($allDoctors);
            }
        ?>
    </ul>
        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>
        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js"></script>
    </body>
</html>
