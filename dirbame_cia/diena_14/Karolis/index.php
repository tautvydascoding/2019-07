<?php
function getLoginStatus2(){
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if ($conn == false){
    echo "error!!!" . "<br />";
    echo mysqli_connect_error() . "<br />";
    }
    return $conn;
    //mysqli_close($conn);          //atsijungti nuo db
};
getLoginStatus2();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
        </header>




        <footer>
        </footer>
    </body>
</html>
