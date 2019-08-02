console.log("labas2222");


function dauginti() {
    console.log(   "paspaudei ");
    // paimu ivedimo lauku info
    let x = document.querySelector(".pirmaIvestis").value;
    // console.log( "pirmas laukas", x); // pasitestuoti

    let y = document.querySelector(".antraIvestis").value;
    // console.log( "pirmas laukas", y); // pasitestuoti

    // ar x yra tekstas?
    if(   isNaN(x)   ) {
        // isvedu i ekrana atsakyma
        document.querySelector("h4").innerHTML  = "x yra ne skaicius";
    } else {
        let ats = x * y;
        let tekstas = "Atsakymas: " + ats;

        // isvedu i ekrana atsakyma
        document.querySelector("h4").innerHTML  = tekstas;
    }

}
