let auto = {}; // tuščias objektas
auto = {
    pavadinimas: "Audi",
    spalva: "Black",
    stabdyti: function(){
        console.log("stabdau");
    },
    greiteti: function(){}
};

console.log(auto.pavadinimas);
// funkcijos iššaukimas, kuri yra objekte
auto.stabdyti();