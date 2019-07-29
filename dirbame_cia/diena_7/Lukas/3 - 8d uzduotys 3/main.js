// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

names.push("Hobis: Keliones"); // ideti i masyvo gala
console.log("po push", names);
names.pop(); // istrinti paskutini masyvo elementa
console.log("po pop", names);
names.unshift("Vyras"); // ideda i masyvo prieki, i 0 elementa
console.log("po unshift", names);
names.shift(); // istrynimas is priekio, 0 elementa
console.log("po shift", names);
delete names[2];
console.log("names po delete names[2]", names); // istrina turini, index 2 bus undefined

let kopija = names.slice(1, 3); // kopija nuo 1 iki 3
let kopija2 = names.slice(3); // kopija 3


let fruits = ["Apple", "Banana", "Orange", "Kiwi"];
fruits.splice(1,0, "Aplanke Graikija", "Aplanke Indija");
console.log("po splice (1,0, 'Aplanke Graikija', 'Aplanke Indija':" , fruits); // nuo pirmo indexo
// istrinti 0 elementu, ideti "aplanke graikija", "aplanke indija" nuo 1 indexo
fruits.splice(1, 2);
console.log("Po splice (1, 2)", fruits); // istrinti 1 iki 2 elementus


// metodai:
// .shift()
// .length
// .join()
// .pop()
// .slice()
// ...
// pvz    names.shift("Tomas");

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

document.querySelector("body").innerHTML += keliautojas.toString();
// pavers masyva i teksta(stringa)

// jungimas su skirtuku
document.querySelector("body").innerHTML += "<div>" + keliautojas.join(" "); + "</div>"

// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
// 3. istrinti 3-cia elmenta
console.log("pries istrinant 3 elemen", keliautojas);
keliautojas.splice(2, 1);
console.log("istrynus 3 elemen", keliautojas);


// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
let ilgumo50 = [];
for (var i = 0; i < 50; i++) {
    ilgumo50.push(0); // arba rasyt ilgumo50[i] = 0;
}
console.log(ilgumo50);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
let ilgumo50v2 = [];

var i = 0
while(i < 50) {
    i++;
    ilgumo50v2.push(1);
}

console.log(ilgumo50v2);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

for(var i = 1; i < 50; i = i + 2) {
    ilgumo50v2[i] = 3;
}

console.log("1,3,1,3", ilgumo50v2);

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"

for(var i = 0; i < 50; i = i + 5) {
    ilgumo50v2[i] = 9;
}

console.log("1,3,1,3,9", ilgumo50v2);
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....



//=============bootstrap---sm-md-lg-xl (30-60m)==========
