<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <title></title>
    </head>
    <body>


<?php
    session_start();
    include_once('header.php');
    include_once('prekes-db-functions.php');
//  visos prekes
$visosPrekes = getPrekes(50); // grista MYSQL OBJ (jo vidueje yra daug prekiu)

$prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus

// ar tiesa?   (ar turime preke?)
while ( $prekes ) {
    echo "<div class='card float-kaire w-25 ' style='width:300px; height:600px;'>";
    echo "<img width='300px' src='img/img/{$prekes['nuotrauka']}' alt='Card image' >";
    echo "<div class='card-body'>";
    echo "<h4>".$prekes['pavadinimas']."</h4>";
    echo "<p class='card-text'>Kaina: ".$prekes['kaina']." &euro; </p>";
    echo "<button id='myBtn' class='btn btn-primary' >Plačiau...</button>";
    echo "<div id='myModal' class='modal'>";
    echo "<div class='modal-content'> <span class='close'>&times;</span>";
    echo "<p>".$prekes['aprasymas']."</p> </div> </div>";
    echo "<a href='add_to_krepselis.php?id={$prekes['id']}' class='btn btn-primary '>Pirkti</a>";
    echo "</div> </div>";

    $prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus
}
echo "<div class='isjungiu-float'> </div>";
?>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php echo $prekes['aprasymas']?></p>
  </div>
</div>


<script src="libs/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
<script type="text/javascript" src="main.js"> </script>
</body>
</html>
