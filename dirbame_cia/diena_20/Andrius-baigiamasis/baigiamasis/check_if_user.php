<?php

if(isset($_SESSION["logged_in_user"])){
    include_once  ("model_view_controller.php");
    $results = get_user_info_by_username($_SESSION["logged_in_user"]);
    $mail = $results->fetch_assoc();
    echo'<form class="" action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="outputVardas">Vardas</label>
                <input type="text" class="form-control" id="outputVardas" placeholder="Vardenis" >
            </div>
            <div class="form-group col-md-6">
                <label for="outputPavarde">Pavarde</label>
                <input type="text" class="form-control" id="outputPavarde" placeholder="Pavardenis" value="">
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail">El. pastas</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Pastas" value="'.$mail["Email"].'">
            </div>
            <div class="form-group col-md-6">
                <label for="inputMiestas">Miestas</label>
                <input type="text" class="form-control" id="inputMiestas" placeholder="Miestas">
            </div>
            <div class="form-group col-md-6">
                <label for="inputGatve">Gatve</label>
                <input type="text" class="form-control" id="inputGatve" placeholder="Gatve">
            </div>
        </div>
        <input type="button" name="Submit" value="Patvirtinti uzsakyma" class="btn btn-success siusti">
        <h3 class="status_messsage1"></h3>
    </form>';
}
else{
    echo'<form class="" action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="outputVardas">Vardas</label>
                <input type="text" class="form-control" id="outputVardas" placeholder="Vardenis" >
            </div>
            <div class="form-group col-md-6">
                <label for="outputPavarde">Pavarde</label>
                <input type="text" class="form-control" id="outputPavarde" placeholder="Pavardenis" value="">
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail">El. pastas</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Pastas">
            </div>
            <div class="form-group col-md-6">
                <label for="inputMiestas">Miestas</label>
                <input type="text" class="form-control" id="inputMiestas" placeholder="Miestas">
            </div>
            <div class="form-group col-md-6">
                <label for="inputGatve">Gatve</label>
                <input type="text" class="form-control" id="inputGatve" placeholder="Gatve">
            </div>
        </div>
        <input type="button" name="Submit" value="Patvirtinti uzsakyma" class="btn btn-success siusti">
        <h3 class="status_messsage1"></h3>
    </form>';
}
?>
