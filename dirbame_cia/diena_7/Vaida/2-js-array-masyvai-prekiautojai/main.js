console.log("labas");
//


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

	let prekiautojai = []; // empty array
    prekiautojai[0] = "Senukai";
    prekiautojai[1] = "Ermitazas";
    prekiautojai[2] = "Moki vezi";
    prekiautojai[3] = "Depo";
    prekiautojai[4] = "Maxima";
    prekiautojai[5] = "Rimi";
// 1.3 isvesti i console/ekrana "prekiautojai" masyva
    console.log( prekiautojai ); //rodo visus prekiautojus
// 2 pervadinti pirma stalciu pvz + "ir KO"
    prekiautojai[0] += "ir KO";
    console.log( prekiautojai ); //pasitirkinimas

// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.

let isimenam2 = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = isimenam2;

console.log( "po sukeitimo:", prekiautojai);
// --------------------arba su funkcija
function sukeistiMasyvo2elementus(nr1, nr2) {
    let isimenam2 = prekiautojai[nr1];
    prekiautojai[nr1] = prekiautojai[nr2];
    prekiautojai[nr2] = isimenam2;
}

sukeistiMasyvo2elementus(2, 3); //Depo -> Moki  vezi
sukeistiMasyvo2elementus(0, 4); //senukai -> Maxima

console.log( "po sukeitimo 2-3 ir 0-4:", prekiautojai);
