// sukurti tuscia masyva
// uzpildyti masyva "1" (50 stalciu)
// parasyti su IF, kuris tikrina ar stalciaus nr yra lyginis

let masyvas = [];
// uzpildome masyvo stalcius skaiciais
for(let i = 0; i < 50; i++){
    masyvas[i] = 1;
}
console.log(masyvas);

// patikrinam ar masyve esantys skaiciai yra lyginiai
for(a = 0; a < masyvas.length; a++){
    if((masyvas[a] % 2) === 0){
    console.log("visi skaiciai yra lyginiai");
} else {
    console.log("masyve esantys skaiciai yra nelyginiai");
}
}

// patikrinti ar masyve esantys skaiciai yra nelyginiai
for(a = 0; a < masyvas.length; a++){
    if((masyvas[a] % 2) === 1){
    console.log("visi skaiciai yra nelyginiai");
} else {
    console.log("masyve esantys skaiciai yra lyginiai");
}
}


// dėstytojo variantas
// visi lyginiai masyvo konteineriai užsipildė "5";
for(var i = 1; i < masyvas.length; i++){
    // ar skaicius lyginis?
    if((i % 2) === 0){
        console.log("if veikia");
       masyvas[i] = 5;
        //masyvas[(i + 4)] = 9 
    }
}
console.log(masyvas);
// jeigu parašome i % 3, tuomet kas trecias masyvo elementas užsipildo skaiciumi 5
