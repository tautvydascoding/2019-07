<?php
include_once ("model_view_controller.php");
$pavadinimas = $row["Pavadinimas"];
$result = get_product_rating_average($pavadinimas);
if($result["Ivertinimo_vidurkis"] == null){
    $result["Ivertinimo_vidurkis"] = 0.5;
}
$formattedNum = number_format($row["Kaina"], 2);
$rating = $result["Ivertinimo_vidurkis"]*10*2;

echo'<div class="uzsakymas">
    <div class="card uzsakymas">
        <div class="card-body">
            <img class=\"card-img-top\" src="css/'.$row["Nuotrauka"].'"alt="Card image" height="20%" width="20%" style="float: left;">
            <h3 class="card-title uzsakymo-pavadinimas">'.$row["Pavadinimas"].'</h3>
            <h3 class="card-title"><div class="star-ratings-sprite"><span style="width:'.$rating.'%" class="star-ratings-sprite-rating"></span></div></h3><br>
            <h4 class="card-text">Kaina: '.$formattedNum.' $</h4>
            <a href="#" class="btn btn-primary remove-from-cart" style="float: right;">Istrinti</a>
        </div>
    </div>
</div>';



?>
