console.log("labas");



function dauginti(){

    console.log(  "paspaudei"  );
    // paimti ivedimo lauku info
    let x = document.querySelector(".pirmaIvestis").value;
    // console.log( "pirmas laukas", x);
    let y = document.querySelector(".antraIvestis").value;
    // console.log( "antras laukas");

    let ats = x * y;
    let tekstas = "Atsakymas: " + ats;
    document.querySelector('h4').innerHTML += tekstas;

}
