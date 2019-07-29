console.log("labas66");

function dauginti() {
    console.log( "paspaudei");
    let pirmas = document.querySelector (".x1").value;
    console.log("pirmas", pirmas);

    let antras = document.querySelector (".x2").value;
    console.log("antras", antras);
if (!isNaN(pirmas) && !isNaN(antras)) {
    let sandauga = pirmas*antras;
    document.querySelector ("h3").innerHTML = sandauga;
    }
else {document.querySelector ("h3").innerHTML = "x arba y yra ne skaičius";}

}
