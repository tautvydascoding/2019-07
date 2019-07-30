console.log("labas");


// sukurit tuscia masyvas
// uzpildyti masyva "1" (50 stalciu)
// parasyti IF, kuris tikrina ar stalcius nr. lyginis
// ir ideti 5

let mas = [];
for (var i = 0; i < 50; i++) {
    mas[i] = 1;
}
// test
console.log("pries pakeiciant: ", mas);

 // % - dalyba - grazina liekana, pvz: 5 % 3 = 2 liekana,
 // jei 4 % 2 = 0 liekanos
if ((i % 2) ==  0){
    // skaicius lygini
}
for (var i = 1; i < mas.length; i++) {
    // tikrinam ar skaicius lyginis
    if ((i % 2) ==  0){
        mas[i] = 5;
        console.log("IF suveike"); //test
    }
}
console.log( "mas po pakeitimo:" , mas);
