<?php

$reitingas = $row["Ivertinimas"];
if($reitingas == null){
    $reitingas = 0.5;
}
$reitingas = $reitingas*10*2;
echo'<div class="card">
        <div class="card-body">
            <div class="card-title komentaro-autorius">
            <strong class="autorius">'.$row["Username"].'</strong>
                <div class="card-subtitle produkto-ivertinimas">
                    <div class="star-ratings-sprite"><span style="width:'.$reitingas.'%" class="star-ratings-sprite-rating"></span></div>
                    <div class="komentaro-ivertinimas">'.$row["Ivertinimas"].'</div> <br>
                    <div class="card-text komentaro-paragrafas">'.$row["Komentaras"].'</div><br>
                </div>
                <div class="komentaro-data">'.$row["Data"].'</div>
            </div>
            <div class="trinti-komentara">';
            if(isset($_SESSION["show_admin"])){
                if($_SESSION["show_admin"] == "true"){
                    echo '<input type="button" name="" value="Trinti" class="delete-comment">';
                }
            }
        echo '</div>
        </div>
    </div>';
?>
