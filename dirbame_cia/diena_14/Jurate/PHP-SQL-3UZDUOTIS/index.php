<ul>
<?php
include('Doctors-db-functions.php');
include('page-doctor.php');
// Kad grazintume viena gydytoja
// $numeris = 15; // gydytojo id numeris
// $gydytojas = getDoctors($numeris);

// Kad grazintume tam tikra gydytoju skaiciu
$visiGydytojai = getDoctors(7); // pasirinkome, kad grazintu tik 7 gydytojus (siuo atveju visus grazinu, nes turiu tik 7 gydytojus)
$gydytojas = mysqli_fetch_assoc($visiGydytojai); // gautus gydytojus sudedame i masyva, kuriame yra informacija apie kiekviena gydytoją (1gydytojas-1masyvas)
// print_r($gydytojas);

// Naudojantis While ciklu atspausdinam visus gydytojus
while ($gydytojas) {
    echo "<li>" . "<a href='page-doctor.php?numeris={$gydytojas['id']}' >" . $gydytojas['name'] . " " . $gydytojas['lastName'] . "</a>" . "</li>";

    $gydytojas = mysqli_fetch_assoc($visiGydytojai);
}

// Variantas su for ciklu:
    // for ($i=1; $i < 10; $i++) { 
    //     $gydytojas = getDoctors($i);
    //     echo "Gydytojas: " . $gydytojas[1] . $gydytojas[2] . "<hr>";
    // }
?>
</ul>