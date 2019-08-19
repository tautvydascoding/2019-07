<?php
session_start();
$cookie_name = "shopping-cart-tracker";

if(isset($_POST["data"]) && isset($_POST["vardas"]) && isset($_POST["pavarde"]) && isset($_POST["pastas"]) && isset($_POST["miestas"]) && isset($_POST["gatve"]) && isset($_POST["bendra_kaina"]) && isset($_COOKIE[$cookie_name])){
    include ("model_view_controller.php");
    echo $_POST["bendra_kaina"];
    $conn = connect_to_db('user_info');
    $vardas = mysqli_real_escape_string($conn,$_POST["vardas"]);
    $pavarde = mysqli_real_escape_string($conn,$_POST["pavarde"]);
    $pastas = mysqli_real_escape_string($conn,$_POST["pastas"]);
    $miestas = mysqli_real_escape_string($conn,$_POST["miestas"]);
    $gatve = mysqli_real_escape_string($conn,$_POST["gatve"]);
    $data = mysqli_real_escape_string($conn,$_POST["data"]);
    $bendraKaina = mysqli_real_escape_string($conn,$_POST["bendra_kaina"]);
    $cookie = $_COOKIE[$cookie_name];
    if(isset($_SESSION["logged_in_user"])){
    $username = $_SESSION["logged_in_user"];
    }
    else{
        $username = "anonimas";
    }
    $sql =  "INSERT INTO uzsakymai (user, cookie, data, Miestas, Gatve, Vardas, Pavarde, Pastas, Bendra_kaina) VALUES ('$username','$cookie','$data','$miestas','$gatve','$vardas','$pavarde','$pastas', '$bendraKaina')";

    if($conn->query($sql) === TRUE){
        echo "uzsakymas issiustas sekmingai!";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    unset($_COOKIE[$cookie_name]);
}
?>
