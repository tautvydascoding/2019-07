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
$nr = $_GET['nr'];
$aprasymas = getPreke($nr);



 ?>
 <div class="container w-50 ">
      <h4><?php echo $aprasymas[1] ?> </h4>
          <div class="row">
         <div class="col">
             <?php
             echo "<img width='300px' src='img/img/{$aprasymas[2]}' alt='Card image' >";
               ?>
         </div>
         <div class="col text-justify">
              <h6><?php echo $aprasymas[3] ?><h6>
                <a href='prekiu_krepselis.php' class='btn btn-primary'>Pirkti</a>  
         </div>

     </div>


 </div>

 <script src="libs/jquery-3.4.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
 <script type="text/javascript" src="main.js"> </script>
 </body>
 </html>
