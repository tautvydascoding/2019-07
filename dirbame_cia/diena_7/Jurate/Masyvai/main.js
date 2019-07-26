
// =========================================================
// SAVARANKISKA UZDUOTIS  Array


//  keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//  let konvertuojam = keliautojas.toString();
//  console.log(konvertuojam);
// keliautojas.push("butelis vandens"); // idedam nauja elementa i masyvo pabaiga
// keliautojas.unshift("ziebtuvelis");
// delete keliautojas[2];
// console.log(keliautojas);

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// Kai noriu ideti elementus i masyva naudojantis ciklu
/*
let masyvas = [];
for(let i = 0; i < 50; i++){  
    masyvas[i] = 0;
}
console.log(masyvas);
console.log(masyvas.length);
*/

// While loop
let arr = [];
let i = 0;
while(i < 50){
    arr[i] = 1;
    i++;
}
console.log(arr);
console.log(arr.length);










