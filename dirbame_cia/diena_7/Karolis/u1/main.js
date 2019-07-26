console.log("labas");
// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"
	let prekiautojai = ["senukai" , "rimi" , "maxima" , "iki" ]
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva


	// 2 pervadinti pirma stalciu pvz + "ir KO"
prekiautojai [0] += " ir ko";
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
    // let a = prekiautojai[1];
    // let b = prekiautojai[2];
    // prekiautojai[1] = b;
    // prekiautojai[2] = a;
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
function keitimas(x,y){
    let a = prekiautojai[x];
    let b = prekiautojai[y];
    prekiautojai[x] = b;
    prekiautojai[y] = a;
}
keitimas(0,2)
	//var prekiautojai = []; // empty array
console.log(prekiautojai);
