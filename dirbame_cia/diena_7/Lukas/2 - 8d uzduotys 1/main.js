// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"

var prekiautojai = [];

	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...

prekiautojai.push("Senukai", "Maxima", "Norfa", "Ermitazas");

	// 1.3 isvesti i console/ekrana "prekiautojai" masyva

document.querySelector("body").innerHTML += prekiautojai;

	// 2 pervadinti pirma stalciu pvz + "ir KO"

prekiautojai[0] += " ir KO";
prekiautojai.indexOf("Maxima"); // 1

console.log(prekiautojai);


 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

let exchange = prekiautojai[1]

prekiautojai[1] = prekiautojai[2];

prekiautojai[2] = exchange;

console.log(prekiautojai);

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

function sukeistiMasyvo2elementus(x, y) {
    let stalcius = prekiautojai[x];
    prekiautojai[x] = prekiautojai[y];
    prekiautojai[y] = stalcius;
}

sukeistiMasyvo2elementus(3, 2);
