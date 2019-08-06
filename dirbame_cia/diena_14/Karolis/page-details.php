<?php

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
