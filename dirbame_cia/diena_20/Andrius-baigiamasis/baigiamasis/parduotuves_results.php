<?php
include_once  ("model_view_controller.php");

$results = get_all_parduotuves_data();

//print_r($results);
$number = 0;
while($row = $results->fetch_assoc()){

        echo'<script type="text/javascript">
            function initMap() {
                var parduotuve = {lat: '.$row["lat"].', lng: '.$row["lng"].'};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById(\'map\'), {zoom: 14, center: parduotuve});
                    // The marker, positioned at Uluru
                    var marker = new google.maps.Marker({position: parduotuve, map: map});
                }

        </script>
        <div class="main-content">
            <div class="col-8">
                <div id="map"></div>
            </div>
            <div class="col-4 ml-5 ">

                <div class="d-flex flex-row">
                <h4>Darbo laikas: <h3 id="nuo">'.$row["nuo"].'</h3>  :  <h3 id="iki">'.$row["iki"].'</h3></h4><br>

                </div>
                <div class="row d-inline">
                <h4>Gatve: <h5 id="gatve">'.$row["gatve"].'</5></h4>
                </div>
            </div>

        </div>';

}
 ?>
