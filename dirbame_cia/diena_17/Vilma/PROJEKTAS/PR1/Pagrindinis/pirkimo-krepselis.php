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
include_once('prekes-db-functions.php');
var_dump($_SESSION['cart']);
$whereIn = implode(',', $_SESSION['cart']);

$sql=getPreke($whereIn);
//var_dump($sql);
print_r($sql) ;

if(isset($_POST["add_to_cart"]))
 {
      if(isset($_SESSION["cart"]))
      {
           $item_array_id = array_column($_SESSION["cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("Prekė jau įdėta")</script>';
                echo '<script>window.location="pirkimo-krepselis.php"</script>';
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
           $_SESSION["cart"][0] = $item_array;
      }
 }
 if(isset($_GET["action"]))
 {
      if($_GET["action"] == "delete")
      {
           foreach($_SESSION["cart"] as $keys => $values)
           {
                if($values["item_id"] == $_GET["id"])
                {
                     unset($_SESSION["cart"][$keys]);
                     echo '<script>alert("Prekė išimta")</script>';
                     echo '<script>window.location="pirkimo-krepselis.php"</script>';
                }
           }
      }
 }
 ?>


?>
<h3>Užsakym detalės</h3>
                <div class="table-responsive">
                     <table class="table table-bordered">
                          <tr>
                               <th width="40%">Prekes pavadinimas</th>
                               <th width="10%">Kiekis</th>
                               <th width="20%">Kaina</th>
                               <th width="15%">Viso</th>
                               <th width="5%">Veiksmas</th>
                          </tr>
                          <?php
                          if(!empty($_SESSION["cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td><?php echo $values["item_name"]; ?></td>
                               <td><?php echo $values["item_quantity"]; ?></td>
                               <td>$ <?php echo $values["item_price"]; ?></td>
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
                     <button class="btn btn-success" name="pirkti">Pirkti</button>


 <script src="libs/jquery-3.4.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
 <script type="text/javascript" src="main.js"> </script>
     </body>
 </html>
