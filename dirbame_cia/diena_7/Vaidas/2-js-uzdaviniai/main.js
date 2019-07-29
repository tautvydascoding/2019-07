console.log("labas");

var prekiautojai = [];
prekiautojai[0] =  "senukai";
prekiautojai[1] =  "ermitazas";
prekiautojai[2] =  "moki-vezi";
prekiautojai[3] =  "depo";
prekiautojai[4] =  "maxima";
prekiautojai[5] =  "rimi";

//1.2 uzdavinukas
console.log(prekiautojai);
document.querySelector ('body').innerHTML += prekiautojai;

//2 uzdavinukas
prekiautojai[0] += " ir KO";
// ilgesnis budas:
//prekiautojai[0] = "senukai ir KO"
console.log(prekiautojai);
document.querySelector ('body').innerHTML += prekiautojai;

//3 uzduotis - sukeitimas vietomis - isiminti!!!!!!!!!!!!!!!!!
let x = prekiautojai[1];
prekiautojai[1] = prekiautojai[2];
prekiautojai[2] = x;


console.log( "po sukeitimo: " , prekiautojai);
document.querySelector ('body').innerHTML += prekiautojai;
// prekiautojai[1] = ;

//cia isiminti!!!!!!!!!!!!!!
function sukeistiMasayvoElementus(nr1, nr2) {
let y = prekiautojai[nr1];
prekiautojai[nr1] = prekiautojai[nr2];
prekiautojai[nr2] = y;

}
sukeistiMasayvoElementus(2, 3);
sukeistiMasayvoElementus(0, 4);
console.log( "po sukeitimo 2-3 ir 0-4: ", prekiautojai);

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

	// 2 pervadinti pirma stalciu pvz + "ir KO"
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	// var prekiautojai2 = []; // empty array
