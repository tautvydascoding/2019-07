<?php


//----------------------------------------------
//      PAIMA  VIENA FOTO
//----------------------------------------------
function getFoto($house_id){
    $manoSQL = "SELECT * FROM img
                -- INNER JOIN houses;
                -- ON img_name = houses_id;
                WHERE house_id = '$house_id' ";

    // $manoSQL = "SELECT * FROM img WHERE id = '$nr' "; //veike
    // mysqli_query($link, $query);
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    // print_r( $rezultatai );
    // var_dump( $rezultatai ); //labai stipri atspausdinas ir tipus;
    //paima objekta ir ji pavercia i masyva (ARRAY)
    if ($rezultatai == false) {
        return "ERORR: " . mysqli_error(getPrisijungimas() );
        // code...
    }
    //is $Resultatai paimam TIK viena eilute(kontakta), pavercia i masyva1
    $rezultataiArray = mysqli_fetch_row($rezultatai);
    return $rezultataiArray;
}
//testuojam
// $paveiksliukas = getFoto(5);
// print_r( $paveiksliukas );

//----------------------------------------------
//      IŠVEDIMAS VISAS FOTO
//----------------------------------------------
function getFotos($kiekis){
    $manoSQL = "SELECT * FROM img
                         ORDER BY house_id
                         LIMIT $kiekis
                                ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;     //cia mySQL objektas, o su fetch butu masyvas
}

//------testavimas---
// $visiPaveiksliukai = getFotos(10);   //mySQL objektas, NE MASYVAS
//
// $paveiksliukas = mysqli_fetch_assoc( $visiPaveiksliukai );  //vienas paveiksliukas
//
//
// while ( $paveiksliukas ){
//     print_r( $paveiksliukas );     //test
//     $paveiksliukas = mysqli_fetch_assoc( $paveiksliukas );    //vienas paveiksliukas
// }
