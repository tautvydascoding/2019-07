console.log("labas222");

function dauginti() {
    console.log( "paspaudei");
    // paimu ivedimo lauku iinfo
    let x = document.querySelector(".pirmaIvestis").value;
   // document.querySelector("input[name=x1]")
   // zemiau prasitestuojam
   // console.log("pirmas laukas", x);

   let y = document.querySelector(".antraIvestis").value;
   // console.log("antras laukas", y);

// patikrinimas
// ar x yra skaicius?
   if ( !isNaN(x) )  {
       let ats = x * y;
       let tekstas = "Atsakymas: " + ats;
       // isvedu i ekrana (DOM'a) atsakyma
       document.querySelector("h4").innerHTML = tekstas;

   }
   else {
       // isvedu i ekrana (DOM'a) atsakyma
       document.querySelector("h4").innerHTML = "x yra ne skaicius";
   }

// ar x yra tekstas
   // if ( isNaN(x) )  {
   //     // isvedu i ekrana (DOM'a) atsakyma
   //     document.querySelector("h4").innerHTML = "x yra ne skaicius";
   //
   // }
   // else {
   // }
   // let ats = x * y;
   // let tekstas = "Atsakymas: " + ats;
   // // isvedu i ekrana (DOM'a) atsakyma
   // document.querySelector("h4").innerHTML = tekstas;

}
