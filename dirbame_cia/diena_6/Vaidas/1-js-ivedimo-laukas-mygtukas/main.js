console.log("labas222");

function dauginti() {
    console.log( "paspaudei");
    // paimu ivedimo lauku iinfo
   // document.querySelector("input[name=x1]")
   let x = document.querySelector(".pirmaIvestis").value;
   // zemiau prasitestuojam
   // console.log("pirmas laukas", x);

   let y = document.querySelector(".antraIvestis").value;
   // console.log("antras laukas", y);

   let ats = x * y;
   let tekstas = "Atsakymas: " + ats;
   document.querySelector("h4").innerHTML = tekstas;
}
