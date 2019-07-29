console.log("labas");

// 1.1 susikurti tuscia masyva
// 1.2 uzpildyti masyva "1" (50 stalciu)
// 1.3 parasyti IF, kuris tikrina ar stalciaus nr. lyginis
// ir ideti 5

//  1)
let mas = [];
// 1.2)
for (var i = 0; i < 50; i++) {
    mas[i] = 1;
}
// test
console.log(  "pries pakeiciant:", mas);

// 1.3
//  % - dalyba - grazina liekana, pvz: 5 % 3 = 2 liekana,
//  4 % 2 = 0 liekanos
if (   (i % 2) ==   0    ) {
    // skaicius lygini
}
for (var i = 1; i < mas.length; i++) {
    // ar skaicius lyginis?
    if (   (i % 2) ==   0    ) {
        mas[ i ] = 5;
        console.log("IF suveike"); // test
    }
}
console.log( "mas po pakeitimo:", mas);
