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
        include_once('prekes-db-functions.php');

        $preke = getPreke(1);
        print_r($preke);

         ?>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="img/img/<?php echo $preke[2]?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $preke[1]?> </h4>
            <p class="card-text">Kaina: <?php echo $preke[4]?> &euro; </p>
            <button id="myBtn" class="btn btn-primary" >Plačiau...</button>
            <a href="add_to_krepselis.php?id=<?php echo $preke[0]?>" class="btn btn-primary">Pirkti</a>
            </div>
        </div>


<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php echo $preke[3]?></p>
  </div>
</div>


<script src="libs/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
<script type="text/javascript" src="main.js"> </script>
    </body>
</html>
