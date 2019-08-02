console.log("labas");
function skaiciuoti (){
    console.log( "paspaudei");
    let r = document.querySelector (".x1").value;
    console.log("spindulys", r);

    let plotas = Math.PI*r*r;
    let tekstas = "Atsakymas: " + plotas;
document.querySelector ("h3").innerHTML = tekstas;
}
