<?php
// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
// uzduotis 3.1: atspausdinti visas gydytoju pavardes naudojant FOR cikla, kaip list item "ul li"
// uzduotis 3.2: patobulinti 'uzduotis3',
// kad paspaudus ant gydytojo pavardes   atidarytu doctor.php faila
// HINT: '<a href=""></a>' nuorodoje,
// uzduotis 3.3:
// doctor.php faile isvesti info apie - paspausta gydytoja:
// vardas pavarde numeris

// HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji
// define ('DB_USER','Ahzel');
// define ('DB_PASS', 'qwaszx12589159');
// define ('DB_HOST', 'localhost');
// define ('DB_NAME', 'experimentas');
// function getLoginStatus2(){
// $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// if ($conn == false){
//     echo "error!!!" . "<br />";
//     echo mysqli_connect_error() . "<br />";
//     }
//     return $conn;
//     //mysqli_close($conn);          //atsijungti nuo db
// };
include('experimentas-db-output.php')
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1> <?php echo "Gydytojas" ?></h1>
        <P>
            <!-- <form class="" action="doctor.php" method="get">
                <input type="text" name="" value=""  placeholder="ivesti sk.">
            </form> -->
         <?php
             // $z=1;
             // getDoctor($z);
             // $x = getDoctor($z);
             // echo "vardas $x[1] pavarde $x[2]";
             //
             // for ($i=1;$i<10;$i++){
             //     $x = getDoctor($i);
             //     echo "pavarde $x[2]" . "<br>";
             // };
             //
             // while ($id <= 10) {
             //     $x=getDoctor($id);
             //     echo "vardas $x[1] pavarde $x[2]" . "<br>";
             //     $id++;
             // };
              ?>


        </P>
    </body>
</html>
