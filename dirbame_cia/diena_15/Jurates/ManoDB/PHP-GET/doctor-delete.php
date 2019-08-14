<?php
include('DOCTORS-DB-FUNCTIONS.php');
// session_start();
// $_SESSION['zinute'] = "Gydytojas sėkmingai ištrintas";
// echo $_SESSION['zinute'];

// Informuoti vartotoją, kad ištrynimas sėkmingai, įdėti sugrąžinimą atgal į main puslapį ir dar main puslapyje parodyti, jog viskas sėkmingai išsitrynė
// echo "Gydytojas sėkmingai ištrintas";

// Trumpai galime aprašyti HTML php tai vietoj <?php rašome <?= ir užbaigimo ženklas tas pats
$x = $_GET['number'];
deleteDoctor($x);
?>
<h4 class="bg-success">Gydytojas sėkmingai ištrintas: <?php echo $x?></h4>

<?php
// Perkeliam Vartotoją atgal į pagrindinį puslapį, bet labai labai greitai
header('Location: ' . 'index.php');
?>