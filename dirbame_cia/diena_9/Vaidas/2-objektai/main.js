console.log("labas");

let auto = {};   // tuscias objektas (obj) riestiniuose skliaustuose
let obj = 0;    // cia yra number   /  prie let parasyta obj - tai ne objektas o


auto = {
    pavadinimas: "Audi",
    spalva: "juoda",
    duruSK: 5;
    stabdyti: function() {
            console.log("stabdau!!!");
        },
    greiteti: function() {   }
}

//auksciau pavaizduotas JSON formatas - tai rasomi objektai

// paemimas
console.log( auto.pavadinimas );

// objekto funkcijos issaukimas
auto. stabdyti();
auto. stabdyti();
auto. stabdyti();

// kurti objekto kopija?
//let ferari = auto   // kopijos kurti taip negalima, reikia kurit kitaip, naudojant spec komandas
