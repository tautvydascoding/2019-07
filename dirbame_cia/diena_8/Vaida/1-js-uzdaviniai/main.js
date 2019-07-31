console.log("labas");

// 1.1 sukurti tusia masyvas
// 1.2 uzpildyti masyva "1" (50 stalciu)



 let mas = [];
 for (var i = 0; i < 50; i++) {
 	mas[i] = 1; // ka nori ideti pvz "1"
 	// console.log("aaa");//pasitint
 }
 console.log( "pries pakeiciant: ", mas );

 // 1.3 parasyti IF, kuris tikrina ar stalcius nr. lyginis

 //ieskom liekanos ir lyginam ar lygu 0

 // if (condition), % dalyba grazina kiek lieko- liekana pvz: 5 % 3 = 2 liekana;
 // 4 % 2 = 0 liekanos

 if ( (i % 2) == 0 ) {
     // skaicius lygini

 }
for (var i = 1; i < mas.length; i++) {
    // ar skaicius lyginis
    //console.log( "IF suveike");       //testas
    if ( (i % 2) == 0 ) {
        mas[i] = 5;
    }
}
console.log( "mas po pakeitimo:", mas );


//
// for (var i = 1; i < mas.length; i++) {
//    // ar skaicius lyginis
//    //console.log( "IF suveike");       //testas
//    if ( (i % 3) == 0 ) {
//        mas[i] = 5;
//        // mas[ (i+4) ] = 9;
//    }
// }
// console.log( "mas po pakeitimo:", mas );
