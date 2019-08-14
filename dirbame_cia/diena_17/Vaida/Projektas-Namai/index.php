
<?php

    include("header.php");
?>

    <!-- PARDUODAMI NAMAI-->
    <h2 class="text-center mb-4">Naujos statybos projektai</h2>
      <article class="allhouses py-2">
          <?php
          include_once('model/house-db-functions.php');
          $visiNamai = getHouses(10);       //mySQL OBJEKTAS
          $namas = mysqli_fetch_assoc($visiNamai);      //atspausdins viena nama is visu
          echo '<div class="row mb-5 justify-content-center">';
          while ( $namas ){ //spausdins kol yra namu
              // print_r($namas);
          ?>

          <?php
          include_once('model/img-db-functions.php');
          $nr = $namas['id'];
          // print_r($nr);
          $paveiksliukas = getFoto($nr);
          // print_r($paveiksliukas);
         ?>

        <div class=" ">
                <div class="col p-1 ml-5">
                    <div class="card col-12 border-warning mb-resp ">
                        <div class="card-body text-center">
                            <h3 class="house m-2">"<?=$namas['name'];?>"</h3>
                            <img src="img/<?=$paveiksliukas[1];?>" alt="" class="card-fluid" width="450" height="450">
                            <p class="vieta m-1">Vieta: <?=$namas['adresas'];?></p>
                            <p class="plotas m-1">Plotas, m2: <?=$namas['plotas'];?></p>
                            <p class="metai m-1">Statybos metai: <?=$namas['metai'];?></p>
                            <p class="kaina mb-3">Kaina, eur: <?=$namas['kaina'];?></p>
                            <a href="" class="btn btn-warning">Plačiau</a>
                        </div>
                      </div>
                  </div>
                </div>
            <!-- <div class="isjungiu-float"></div>/ -->

            <?php
            $namas = mysqli_fetch_assoc( $visiNamai );
        }
            ?>
        </div>
        </article>


    <article class="">
        <h2 class="text-center mb-5">Papildomos paslaugos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article>


    <!-- DARBUOTOJU KONTAKTAI -->
    <h2 class="text-center mb-5">Kontaktai</h2>
    <article class="allhouses py-2">
        <?php
        include_once('model/contact-db-functions.php');
        $visiKontaktai = getContacts(10);       //mySQL OBJEKTAS
        $kontaktas = mysqli_fetch_assoc($visiKontaktai);      //atspausdins viena kontakta is visu
        while ( $kontaktas ){ //spausdins kol yra kontaktu
            ?>
      <div class="container">
          <div class="row mb-5">
              <div class="col-md-12 p-1">
                  <div class="card border-warning mb-resp">
                      <div class="card-body text-center">
                          <p class="vardas m-1"><?=$kontaktas['name'];?></p>
                          <p class="pavarde m-1"><?=$kontaktas['lname'];?></p>
                          <p class="pareigos m-1"><?=$kontaktas['pareigos'];?></p>
                          <p class="tel m-1"><?=$kontaktas['tel'];?></p>
                          <p class="pastas m-1"><?=$kontaktas['pastas'];?></p>
                      </div>
                    </div>
                </div>
              </div>
          </div>
          <!-- <div class="isjungiu-float"></div> -->

          <?php
          $kontaktas = mysqli_fetch_assoc( $visiKontaktai );}
          ?>
      </article>

      <!-- email FORMA -->

    <h2 class="text-center mb-5">Registruotis susitikimui</h2>
      <article class="">



      </article>


    <?php
        include("footer.php");
    ?>
