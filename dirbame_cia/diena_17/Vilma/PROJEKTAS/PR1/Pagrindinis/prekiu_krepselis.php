<?php
session_start();
include_once('prekes-db-functions.php');
$connect = getPrisijungimas();
if(isset($_POST["add_to_cart"]))
{
     if(isset($_SESSION["shopping_cart"]))
     {
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
          if(!in_array($_GET["id"], $item_array_id))
          {
               $count = count($_SESSION["shopping_cart"]);
               $item_array = array(
                    'item_id'      =>     $_GET["id"],
                    'item_name'    =>     $_POST["hidden_name"],
                    'item_price'   =>     $_POST["hidden_price"],
                    'item_quantity'=>     $_POST["quantity"],
                    'cart_id'      =>     $_POST["count"],     
               );
               $_SESSION["shopping_cart"][$count] = $item_array;

          }
          else
          {
               echo '<script>alert("Prekė jau įdėta")</script>';
               echo '<script>window.location="prekiu_krepselis.php"</script>';
          }
     }
     else
     {
          $item_array = array(
               'item_id'               =>     $_GET["id"],
               'item_name'               =>     $_POST["hidden_name"],
               'item_price'          =>     $_POST["hidden_price"],
               'item_quantity'          =>     $_POST["quantity"]
          );
          $_SESSION["shopping_cart"][0] = $item_array;
     }
}
if(isset($_GET["action"]))
{
     if($_GET["action"] == "delete")
     {
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               if($values["item_id"] == $_GET["id"])
               {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Prekė pašalinta")</script>';
                    echo '<script>window.location="prekiu_krepselis.php"</script>';
               }
          }
     }
}
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Prekiu krepselis</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/master.css">
     </head>
     <body>

          <div class="container mb-5" style="width:1000px;">
               <h2 align="center">Prekių krepšelis</h2><br />

               <?php
               $query = "SELECT * FROM prekes ORDER BY id ASC";
               $result = mysqli_query($connect, $query);
               if(mysqli_num_rows($result) > 0)
               {
                    while($row = mysqli_fetch_array($result))
                    {
               ?>
               <div class="col-md-3 " style="width:250px; height:450px;" >
                    <form method="post" action="prekiu_krepselis.php?action=add&id=<?php echo $row["id"]; ?>">
                         <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                              <img src="img/img/<?php echo $row["nuotrauka"]; ?>" class="img-responsive" /><br />
                              <h4 class="text-info"><?php echo $row["pavadinimas"]; ?></h4>
                              <h4 class="text-danger"> <?php echo $row["kaina"]; ?> &euro;</h4>
                              <input type="number" name="quantity" class="form-control" value="1" />
                              <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
                              <input type="hidden" name="hidden_price" value="<?php echo $row["kaina"]; ?>" />
                              <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Pirkti" />
                         </div>
                    </form>
               </div>
               <?php
                    }
               }
               ?>
               <div style="clear:both"></div>
               <br />
               <h3>Užsakymo detalės</h3>
               <div class="table-responsive">
                    <table class="table table-bordered">
                         <tr>
                              <th width="40%">Prekės pavadinimas</th>
                              <th width="10%">Kiekis</th>
                              <th width="20%">Kaina</th>
                              <th width="15%">Viso</th>
                              <th width="5%">veiksmas</th>
                         </tr>
                         <?php
                         if(!empty($_SESSION["shopping_cart"]))
                         {
                              $total = 0;
                              foreach($_SESSION["shopping_cart"] as $keys => $values)
                              {
                         ?>
                         <tr>
                              <td><?php echo $values["item_name"]; ?></td>
                              <td><?php echo $values["item_quantity"]; ?></td>
                              <td> <?php echo $values["item_price"]; ?> &euro;</td>
                              <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> &euro;</td>
                              <td><a href="prekiu_krepselis.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Pašalinti</span></a></td>
                         </tr>
                         <?php
                                   $total = $total + ($values["item_quantity"] * $values["item_price"]);
                              }
                         ?>
                         <tr>
                              <td colspan="3" align="right">Iš viso:</td>
                              <td align="right"> <?php echo number_format($total, 2); ?>&euro;</td>
                              <td></td>
                         </tr>
                         <?php
                         }
                         ?>
                    </table>
               </div>
               <a class="btn btn-success" href="registracija.php">Pirkti</a>


          </div>
           <!-- konteinerio pabaiga -->


          <script src="libs/jquery-3.4.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
          <script type="text/javascript" src="main.js"> </script>
     </body>
</html>
