function dauginti() {
    // paimu per DOM inputo value is html'o
    let x = document.querySelector(".pirmaIvestis").value;
    // testui, paziureti ar veikia console.log("pirmas laukas:", x);
    let y = document.querySelector(".antraIvestis").value;
    // console.log("Antras laukas:", y);
    if( !isNaN(x) ) { // isNaN = if it's not a number = true, but we use negate ! to make if it's A NUMBER then
        let ats = x * y;
        document.querySelector("h1").innerHTML = ats;
    } else {
        document.querySelector("h1").innerHTML = "x yra ne skaicius";
    }
}
