<?php
include "model_view_controller.php";
if(isset($_SESSION["show_admin"]) && isset($_SESSION["logged_in_user"])){
    if($_SESSION["show_admin"] == "true"){
        echo '<h1 style="text-align: center;">Visu uzsakymu istroija:</h1>';
        $results = get_visi_uzsakymai();
        while($row = $results->fetch_assoc()){
            //print_r ($row);

            echo'<div class="card">
              <div class="card-header">
                '.$row["data"].'<h5>'.$row["user"].'</h5>
                <input type="checkbox" data-toggle="toggle" data-on="Patvirtintas" data-off="Nepatvirtintas" data-style="float: right;" data-onstyle="success" data-offstyle="danger">
              </div>
              <div class="card-body">
              ';
              //$cookie_name = "shopping-cart-tracker";
              //setcookie($cookie_name, $row["cookie"], time() + (86400*30), '/');
              //$_COOKIE[$cookie_name] = $results["cookie"];
            if(!empty($row["cookie"])){
                echo '<a href="uzsakymo_istorijos_elementas.php?cookie='.$row["cookie"].'">';
                $array = explode(";",$row["cookie"]);

                foreach ($array as $pavadinimas) {
                    if($pavadinimas != null){
                        $row = get_product_data($pavadinimas);
                            echo'<img src="css/'.$row["Nuotrauka"].'" alt="" width="15%" height="15%">';

                    }
                }

            }
            echo '</a></div>
          </div>
          ';
          //setcookie($cookie_name, "", time() - 3600);
        }
    }
    else{
        echo '<h1 style="text-align: center;">Jusu uzsakymu istroija:</h1>';
        $results = get_uzsakymai_by_username($_SESSION["logged_in_user"]);
        while($row = $results->fetch_assoc()){
            //print_r ($row);

            echo'<div class="card">
              <div class="card-header">
                '.$row["data"].'<h5>'.$row["user"].'</h5>
              </div>
              <div class="card-body">';
              //$cookie_name = "shopping-cart-tracker";
              //setcookie($cookie_name, $row["cookie"], time() + (86400*30), '/');
              //$_COOKIE[$cookie_name] = $results["cookie"];
              if(!empty($row["cookie"])){
                  echo '<a href="uzsakymo_istorijos_elementas.php?cookie='.$row["cookie"].'">';
                  $array = explode(";",$row["cookie"]);

                  foreach ($array as $pavadinimas) {
                      if($pavadinimas != null){
                          $row = get_product_data($pavadinimas);
                              echo'<img src="css/'.$row["Nuotrauka"].'" alt="" width="15%" height="15%">';

                      }
                  }

              }
            echo '</a></div>
          '
          ;
          //unset($_COOKIE[$cookie_name]);
        }
    }
}
// else if(isset($_SESSION["logged_in_user"]){
//
// }
 ?>
