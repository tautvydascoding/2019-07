<?php
define ('DB_USER','Ahzel');
define ('DB_PASS', 'qwaszx12589159');
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'experimentas');
function getLoginStatus2(){
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if ($conn == false){
    echo "error!!!" . "<br />";
    echo mysqli_connect_error() . "<br />";
    }
    return $conn;
    //mysqli_close($conn);          //atsijungti nuo db
};
function getDoctor($id){
    $mysql = "select * from doctors where id = '$id' ;";
    $results = mysqli_query(getLoginStatus2(),$mysql);
    print_r($results);
    //var_dump($results);     //spausdina ir tipus, su detalia informacija apie juos
    // is $results paimam 1-na eilute(doctor) ir keiciam i masyva
    $resultsArray = mysqli_fetch_row($results);
    if ($resultsArray==false){
        return "Error: " . mysqli_error(getLoginStatus2()  );
    }
    return $resultsArray;
};
