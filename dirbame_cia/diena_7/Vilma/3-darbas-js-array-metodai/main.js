console.log("labas");
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
let tekstas = names.toString();
console.log(tekstas);


tekstas = names.join("::");
console.log(tekstas);

names.push( "hobis kelionės");
document.querySelector("h1").innerHTML = names;


keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta
keliautojas.push ( "butelis vandens");
document.querySelector("h1").innerHTML = keliautojas +"<br>";
keliautojas.unshift ("ziebtuvelis");
document.querySelector("h1").innerHTML += keliautojas;
keliautojas.splice(2,1);
document.querySelector("h2").innerHTML = keliautojas;

let masyvas = [];
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}

console.log(masyvas);


let masyvas2 = [];
let a = 0;
while (a<50) { masyvas2[a] = 1;
a = a+1;
}

console.log(masyvas2);

for (var i = 0; i < 50; i=i+1) {
    masyvas[i]=3;
}

console.log(masyvas);
