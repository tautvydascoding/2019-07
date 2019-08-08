<?php
function deleteDoctor($nr){
    $mysql = "delete from doctors  where id = $_GET['$nr'] "; // jei nenurodoma where salyga, komandos gale gerai pasirasyti LIMIT 1, kad neistrintu daugiau nei 1 iraso;
    $rez = mysqli_query(getLoginStatus2(),$mysql);
}
 ?>
