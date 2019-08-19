<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php include "styles.php" ?>
    </head>
    <body>



        <?php include "header.php" ?>

        <?php include "nav.php"?>
        <div class="container">
        <?php
        include_once ("model_view_controller.php");

        $cookie_name = "shopping-cart-tracker";

        if(!empty($_GET["cookie"])){

            $array = explode(";",$_GET["cookie"]);

            $bendraKaina = 0;

            foreach ($array as $pavadinimas) {
                if($pavadinimas != null){
                    $row = get_product_data($pavadinimas);
                    $bendraKaina += $row["Kaina"];
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

                            </div>
                        </div>
                    </div>';
                }
            }

            echo '<h4 style=" margin-top: 3%" class="">Bendra kaina: </h4>
            <h4 class="bendra-kaina " id="bendra_kaina">'.$bendraKaina.'<label for="bendra_kaina"> $</label></h4>

            ';

            if(isset($_SESSION["logged_in_user"])){
            $results1 = get_uzsakymai_by_username1($_SESSION["logged_in_user"], $_GET["cookie"]);
            $results = $results1->fetch_assoc();
            echo '<form class="" action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="outputVardas">Vardas</label>
                        <input type="text" class="form-control" id="outputVardas" placeholder="Vardenis" value="'.$results["Vardas"].'">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="outputPavarde">Pavarde</label>
                        <input type="text" class="form-control" id="outputPavarde" placeholder="Pavardenis" value="'.$results["Pavarde"].'">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputEmail">El. pastas</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Pastas" value="'.$results["Pastas"].'">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputMiestas">Miestas</label>
                        <input type="text" class="form-control" id="inputMiestas" placeholder="Miestas" value="'.$results["Miestas"].'">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputGatve">Gatve</label>
                        <input type="text" class="form-control" id="inputGatve" placeholder="Gatve" value="'.$results["Gatve"].'">
                    </div>
                </div>
                <h3 class="status_messsage1"></h3>
            </form>';
            }
            unset($_COOKIE[$cookie_name]);
        }
        ?>

    </div>
    <?php include "footer.php" ?>
    </body>
</html>
