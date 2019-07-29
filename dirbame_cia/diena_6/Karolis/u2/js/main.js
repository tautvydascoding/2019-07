console.log(" Labas ");
function calc(){
    var pi = Math.PI;   //math.PI, PI butinai didziosiomis raidemis
    var R = document.getElementById('a1').value;
    var ats = pi * Math.pow(R,2);
    var a = ats.toFixed(5);
    document.querySelector("h3").innerHTML = "Atsakymas:" + a;
}
