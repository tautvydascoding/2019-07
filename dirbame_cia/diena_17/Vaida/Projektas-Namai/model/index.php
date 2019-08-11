
<?php

    include("header.php");
?>

  <!-- NAMAI korteles -->
  <?php
  include_once('house-db-functions.php');
  $visiNamai = getHouses(3);       //mySQL OBJEKTAS
  $namas = mysqli_fetch_assoc($visiNamai);      //atspausdins viena nama is visu
  while ( $namas ){ //spausdins kol yra namu
  ?>
  <section class="newprojects">
        <div class="container">
            <h2>Naujos statybos projektai</h2>
      			<div class="row">
      			      <div class="col-md-4">
      					<div class="card text-center border-success mb-resp">
      						<img src="<?=$namas['img'];?>" alt="<?=$namas['namas'];?>" class="card-fluid">
      						<div class="card-img-overlay">
      							<h3>"<?=$namas['name'];?>"</h3>
                                <p class="vieta">Vieta: <?=$namas['adresas'];?>"</p>
                                <p class="plotas">Plotas, m2: <?=$namas['plotas'];?>"</p>
                                <p class="metai">Statybos metai: <?=$namas['metai'];?>"</p>
                                <p class="kaina">Kaina, eur: <?=$namas['kaina'];?>"</p>
      							<a href="" class="btn btn-info">Plačiau</a>
      						</div>

      					</div>
      				</div>
                </div>
            </div>
    </section>









    <?php
        $namas = mysqli_fetch_assoc( $visiNamai );}
    ?>



    <?php
        include("footer.php");
    ?>
