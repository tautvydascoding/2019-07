<?php define ('DB_USER','Ahzel');
define ('DB_PASS', 'qwaszx12589159');
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'experimentas');

// function getLoginStatus(){
// $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// if ($conn){
//     echo "veikia!!!!!!!!!!!!";
// }else{
//     echo "nope";
//     echo mysqli_connect_error() . "<br />";
// }};
// getLoginStatus();

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
$doctor = getDoctor(1);
print_r($doctor);

// function createDb($pav){
//     $dbc = "create database $pav";
//
// }
// function createTable($table){
//     $dbt = "create table $table (id (INT), title varchar(255), description (text),date (datetime), author(varchar(60) )";
//
// }
function createDoctor($vardas,$pavarde){
    $mysql = "insert into doctors values (null, '$vardas', '$pavarde')";
    $rez = mysqli_query(getLoginStatus2(),$mysql);
    if ($rez == false){
            echo "klaida";
    }
};
// createDoctor("Karolis","Belekas");
// createDoctor("Tomas","Putinas");

function deleteDoctor($x){
    $mysql = "delete from doctors  where id = '$x' "; // jei nenurodoma where salyga, komandos gale gerai pasirasyti LIMIT 1, kad neistrintu daugiau nei 1 iraso;
    $rez = mysqli_query(getLoginStatus2(),$mysql);
}
deleteDoctor(7);

function editDoctor($z,$vardas,$pavarde){
    $mysql = "update doctors set name='$vardas', lname='$pavarde' where id='$z' ";
    $rez = mysqli_query(getLoginStatus2(),$mysql);
}

editDoctor(6,"Tomas","Putinas");




// function getDoctors($kiek){
//     $mysql = "select * from doctors order by lname Limit $kiek";
//     $rez = mysqli_query(getLoginStatus2,$mysql);
//     return $rez;            //mySQL objektas, ne masyvas
// }
//
// $doctors = getdoctors(15);
// $doctorsArray = mysqli_fetch_assoc($doctors);
