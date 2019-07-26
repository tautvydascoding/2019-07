console.log("labas");


function skaiciuotiPlota(){
    // console.log( "llll" );
    let R = document.querySelector(".pirmaIvestis").value;
// console.log( R );

    let Plotas = Math.PI * R * R;


    // Plotas = pi * R*R
    // console.log( Plotas );


    document.querySelector("div").innerHTML += Plotas;
}
