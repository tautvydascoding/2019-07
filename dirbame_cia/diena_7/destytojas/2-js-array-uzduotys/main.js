console.log("labas");
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
    // 1.3
    console.log(  prekiautojai   );  // pasitikrinimas
    // 2
    prekiautojai[0] += " ir Ko";
    // arba
    prekiautojai[0] = "Senukai ir Ko";

    console.log(  prekiautojai   );  // pasitikrinimas


    console.log(  "pries sukeitima: ", prekiautojai  );

    // sukeitimas vietomis:
    let isimenam2 = prekiautojai[2];
    prekiautojai[2] = prekiautojai[3];
    prekiautojai[3] = isimenam2;

    //
    console.log(  "po sukeitimo: ", prekiautojai  );
    // ----------------------
    function sukeistiMasyvo2elementus(nr1, nr2) {
        // sukeitimas vietomis:
        let isimenam2 = prekiautojai[nr1];
        prekiautojai[nr1] = prekiautojai[nr2];
        prekiautojai[nr2] = isimenam2;
    }
    sukeistiMasyvo2elementus(2, 3);   // Depo -> Moki verzi
    sukeistiMasyvo2elementus(0, 4);  // senukai -> maxima
    console.log(  "po sukeitimo 2-3 ir 0-4: ", prekiautojai  );
