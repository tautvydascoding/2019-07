<?php

function deleteDoctor($x){
    $mysql = "delete from doctors  where id = '$x' "; // jei nenurodoma where salyga, komandos gale gerai pasirasyti LIMIT 1, kad neistrintu daugiau nei 1 iraso;
    $rez = mysqli_query(getLoginStatus2(),$mysql);
}
deleteDoctor(7);
