console.log("labas");

let auto = { }; // tuscias objektas  (obj)

auto = {
    pavadinimas: "Audi",
    spalva:     "juoda",
    duruSK:     5,
    stabdyti: function() {
                console.log("stabdau!!!");
            },
    greiteti: function() {   }
};

// paemimas
console.log(   auto.pavadinimas   );
// obj-to f-jos issaukimas
auto.stabdyti();
auto.stabdyti();
auto.stabdyti();
//
let ferari = auto;

let obj = 0; // number
