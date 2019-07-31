console.log("labas");

let auto = {}; //tuscias objektas

auto = {
    pavadinimas: "Audi",
    spalva:      "juoda",
    metai:        1997,
    stabdyti: function() {
                console.log("stabdau!!!");
            }
};
//paemimas
console.log(auto.pavadinimas);

//objekto funkcijos issaukimas
auto.stabdyti();
auto.stabdyti();
auto.stabdyti();
auto.stabdyti();
auto.stabdyti();
