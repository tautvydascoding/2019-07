<?php
include_once('hospital_db_function.php');

//echo "$_SESSION["Gydytojas sėkmingai pašalintas"]";//kol kas neveikia, issiaiskinti ka daryti kad veiktu

 ?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
        <p>
<?php
// $gydyt = getDoctor(6); //grįžta masyvas (vienas gydytojas)
// echo "Gydytojo vardas pavarde:".$gydyt[1].$gydyt[2];
//print_r($gydyt);

 ?>
</p>
 <a class="btn btn-success" href="page-doctor-form.php">NAUJAS</a>

        <ul>

<?php

// for ($i=1; $i <10 ; $i++) {
//     $gydyt = getDoctor($i);
//     echo "Gydytojo pavarde:.$gydyt[2] <br/>";
// };

$visiGyd = getDoctors(10);//grista mysql objektas su daug gydytoju reikia fech
$gyd = mysqli_fetch_assoc($visiGyd);
while ($gyd) {
    echo "<li> <a href='page_doctor.php?nr={$gyd['id']}'> Gydytojo pavardė:   ".$gyd['lname']." </a></li>";
    echo " <a class='btn bg-danger text-white' href='doctor-delete.php?nr={$gyd['id']}'> TRINTI </a> ";
    echo " <a class='btn bg-success text-white ' href='page-doctor-form-update.php?nr={$gyd['id']}'> PAKEISTI </a> <br/>";
    $gyd = mysqli_fetch_assoc($visiGyd);
}
 ?>
      </ul>
    </body>
</html>
