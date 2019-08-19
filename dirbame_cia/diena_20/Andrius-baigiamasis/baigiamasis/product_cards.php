<?php
include_once ("model_view_controller.php");
$pavadinimas = $row["Pavadinimas"];
$result = get_product_rating_average($pavadinimas);
if($result["Ivertinimo_vidurkis"] == null){
    $result["Ivertinimo_vidurkis"] = 0.5;
}
$formattedNum = number_format($row["Kaina"], 2);
$rating = $result["Ivertinimo_vidurkis"]*10*2;
echo"<a href=\"product_detail.php?pavadinimas=".$row["Pavadinimas"]."\"><div class=\"card product-card \">";
echo"<div class=\"card-body\">";
echo"<h5 class=\"card-title product-name\">".$row["Pavadinimas"]."</h5>";
echo"</div>";
echo"<img class=\"card-img-top\" src=\"css/".$row["Nuotrauka"]."\"alt=\"Card image\" height=\"50%\" width=\"10%\">";
echo"</a><div class=\"card-body\">";
echo"<h5 class=\"card-title\">".$formattedNum."$</h5>";
echo "<div class=\"star-ratings-sprite\"><span style=\"width:".$rating."%\" class=\"star-ratings-sprite-rating\"></span></div>";
echo "<form action=\"\" method=\"POST\" class=\"add-to-cart\">";
echo"<button type=\"button\" name=\"Į krepšelį\" class=\"add-to-shopping-cart-button btn btn-success\">Į krepšelį</button>";
echo "</form>";
echo"</div>";
echo "</div>";
echo "<br>";

?>
