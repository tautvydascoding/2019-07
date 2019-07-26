console.log("labas");



function dauginti(){

    console.log(  "paspaudei"  );
    // paimti ivedimo lauku info
    let x = document.querySelector(".pirmaIvestis").value;
    // console.log( "pirmas laukas", x);
    let y = document.querySelector(".antraIvestis").value;
    // console.log( "antras laukas");


// ar x yra tekstas

if ( !isNaN(x)  ) {

    let ats = x * y;
    let tekstas = "Atsakymas: " + ats;

    // ivedu i ekrdana ats
    document.querySelector('h4').innerHTML = tekstas;

    } else {
    // ivedu i ekrana
        document.querySelector('h4').innerHTML = "x yra ne skaicius";
    }
}
