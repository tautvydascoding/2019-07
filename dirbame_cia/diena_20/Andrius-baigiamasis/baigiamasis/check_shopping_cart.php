<?php

if(isset($_POST["product_count"])){
    if($_POST["product_count"] == 0){
        echo'<h3>Your shopping cart is empty!</h3>';
    }
    else{

        echo'<form class="checkout" action="patvirtinti_uzsakyma.php" method="post">
            <input type="submit" name="Patvirtinti uzskakyma" value="Patvirtinti uzskakyma" class="uzsakymo-patvirtinimas btn btn-success">
        </form>';
    }
}else{
    echo'<h3>Your shopping cart is empty!</h3>';
}
 ?>
