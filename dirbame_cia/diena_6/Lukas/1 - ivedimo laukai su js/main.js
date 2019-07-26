function dauginti() {
    // console.log("Paspaudei");
    let x = document.querySelector(".pirmaIvestis").value;
    // testui, paziureti ar veikia console.log("pirmas laukas:", x);
    let y = document.querySelector(".antraIvestis").value;
    // console.log("Antras laukas:", y);
    let ats = x * y;
    document.querySelector("h1").innerHTML = ats;
}
