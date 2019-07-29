console.log("labas");

let zmogus =["Tomas", "Tomaitis", 20, true];
zmogus[1] = "Petraitis";
console.log(zmogus); // issovedam visa masyva
console.log(zmogus[1]); //issivedam tik viena konkretu 'stalciu' ar duomeni
console.log(zmogus[2]);
zmogus[4] = "1999-04-05"; // pridedu dar viena stalciu
console.log(zmogus);
let amzius = zmogus[2];
console.log("amzius yra:" + amzius);
let ilgis = zmogus.length;
console.log( "masyvo ilgis:", ilgis);

document.querySelector ('body').innerHTML += ilgis;
