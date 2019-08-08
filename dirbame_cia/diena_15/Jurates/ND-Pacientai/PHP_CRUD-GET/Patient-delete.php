<?php
include_once('Patients-DB-functions.php');

// Pasiimame ID numerį iš URL adreso, kuriame nurodėme paciento ID
$pacientoID = $_GET['ID_NUMERIS'];
deletePatient($pacientoID);
?>
<h4 class="bg-success">Paciento informacija sėkmingai ištrinta: <?php echo $pacientoID?></h4>

<?php
// Perkeliam vartotoją atgal į pagrindinį puslapį, bet LABAI greitai
header('Location: ' . 'index.php');
?>