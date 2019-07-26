console.log("labas2222");


function dauginti() {
    console.log(   "paspaudei ");
    // paimu ivedimo lauku info  is ekrano (DOM)
    let x = document.querySelector(".pirmaIvestis").value;
    // console.log( "pirmas laukas", x); // pasitestuoti

    let y = document.querySelector(".antraIvestis").value;
    // console.log( "pirmas laukas", y); // pasitestuoti

    let ats = x * y;
    let tekstas = "Atsakymas: " + ats;
    // isvedu i ekrana (DOM'a) atsakyma
    document.querySelector("h4").innerHTML  = tekstas;
}
