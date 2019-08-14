<?php


//----------------------------------------------
//      PAIMA  VIENA KONTAKTA
//----------------------------------------------
function getContact($nr){
    $manoSQL = "SELECT * FROM contacts WHERE id = '$nr' ";
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
// $kontaktas = getContact(5);
// print_r( $kontaktas );

//----------------------------------------------
//      IŠVEDIMAS VISU KONTAKTUS
//----------------------------------------------
function getContacts($kiekis){
    $manoSQL = "SELECT * FROM contacts
                         ORDER BY name
                         LIMIT $kiekis
                                ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;     //cia mySQL objektas, o su fetch butu masyvas
}

//------testavimas---
// $visiKontaktai = getContacts(10);   //mySQL objektas, NE MASYVAS
//
// $kontaktas = mysqli_fetch_assoc( $visiKontaktai );  //vienas kontaktas
//
//
// while ( $kontaktas ){
//     print_r( $kontaktas );     //test
//     $kontaktas = mysqli_fetch_assoc( $kontaktas );    //vienas kontaktas
// }








//
