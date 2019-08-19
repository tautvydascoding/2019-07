<?php
include_once ("model_view_controller.php");

$cookie_name = "shopping-cart-tracker";

if(!empty($_COOKIE[$cookie_name])){

    $array = explode(";",$_COOKIE[$cookie_name]);

    $bendraKaina = 0;

    foreach ($array as $pavadinimas) {
        if($pavadinimas != null){
            $row = get_product_data($pavadinimas);
            $bendraKaina += $row["Kaina"];
            include ("uzsakymo_cards.php");
        }
    }
    echo '<h4 style=" margin-top: 3%" class="">Bendra kaina: </h4>
    <h4 class="bendra-kaina " id="bendra_kaina">'.$bendraKaina.'</h4><label for="bendra_kaina"> $</label>';
}
?>
