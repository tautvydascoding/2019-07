console.log("labas");
// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// UZDUOTIS
// pa'googlinti "javascript array Methods":  https://www.w3schools.com/js/js_array_methods.asp
// ismeginti visas komandas/ metodus
// metodas - jau esama js f-ja, kuria suprogramavo js kalbos kurejai

// metodai:
// .shift()             panaikina pirmaji masyvo elementa ir sumazina likusiuju pozicija 1-u
//.unshift()            prideda nauja elementa masyvo pradzioje
// .length              keliautojas.length           tiktu naudoti "for" cikle pvz.: for(i=0;i<keliautojas.length;i++)
// .join()              sujungia visus masyvo elementus su nurodytu skirtuku
// .pop()               panaikina paskutini masyvo elementa
// .slice()             iskerpa dali masyvo pvz .slice(1,4) sukuria nauja masyva imdamas reiksmes nuo vietos (1) iki 4 (neiskaitant)
//                      .slice(1) iskerpa ir sukuria nauja masyva nuo pozicijos (1) iki galo
//                      .slice(-2) iskerpa ir sukuria nauja masyva nuo priespaskutinio (ar trecio nuo galo?) elemento
//.concat()             sujungia n skaiciu masyvu, pvz.: var keliautojoVardas = keliautojas.concat(names)
//.splice()
//                          NAIKINAM >>>>>>>>>>>>>keliautojas.splice(0,1)   , panaikins elementa esanti (0) pozicijoj, (1) nurodo kiek elementu bus panaikintu  (nepalieka "undefined" lauku)
//                          PRIDEDAM >>>>>>>>>>>>>keliautojas.splice(2,0,"vienas","du") , (2) nurodo vieta kurioje bus iterpti nauji elementai, (0) nurodo kiek elementu bus panaikinta, vienas ir du bus iterpti ...
// .push()              prideda nauja elementa masyvo gale
// pvz    names.shift("Tomas");
console.log(names.join(" * "));

// =========================================================
// SAVARANKISKA UZDUOTIS  Array

keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens")
//

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis")
// 3. istrinti 3-cia elmenta
keliautojas.splice(2,1)

console.log(keliautojas);
// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// var massive = [];
// for (i = 1 ; i < 50 ; i++){             //needs more work, check uploaded shit
//     if (i % 2 == 0){
//         massive[i] = 3;}
//         else{
//             massive[i] = 1;
//         }
// // for (i = 1 ; i < 50 ; i++){          //needs more work, check uploaded shit
//     if (i % 5 == 0){
//         massive[i] = 5;
//     }else{
//         massive[i] = 1;
//     }
// }

// for ( i = 0 ; i < 50 ; i++){
//
// }
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1
var massive = [];
var i=1;
while (i<50) {
    massive[i] = 1;
    if (i % 2 == 0){
        massive[i] = 3;}
        else{
            massive[i] = 1;
        }
    i++;
}
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
if (i % 5 == 0){
    massive[i] = 3;}




//=============bootstrap---sm-md-lg-xl (30-60m)==========






console.log(massive);
