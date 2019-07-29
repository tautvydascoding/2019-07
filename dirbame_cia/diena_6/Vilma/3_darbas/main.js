console.log("labas3");
function skaiciuoti () {
    let a = document.querySelector (".a").value;
    console.log(a);
    let b = document.querySelector (".b").value;
    console.log(b);
    let plotas = a * b;
    console.log(plotas);
    let ats = "Stačiakampio plotas yra: " + plotas;
    document.querySelector("h3").innerHTML = ats;
}
