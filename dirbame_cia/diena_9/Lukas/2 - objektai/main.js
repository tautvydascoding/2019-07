let auto = {};
auto = {
    pavadinimas: "Audi", // dazna klaida nepadeti kablelio
    spalva: "raudona",
    duruSkaicius: 4,
    stabdyti: function() {
                console.log("stabdau...!")
            },
    greiteti: function() {} // po paskutiniu key-value pair nedeti kabelelio
};

// paemimas
console.log(auto.spalva);

// funkcijos issaukimas
auto.stabdyti();

// kaip ir su masyvais taip ir su objektais let ferari = auto;
// butu bloga kopija, nes tiesiog du kintamieji butu tas pats objektas/masyvas
// kadangi ferari = auto, turi viena laukeli vietoje, bet du skirtingus adresus jam prieiti
// toks kopijavimas tera papildomo adreso i ta pacia vieta sukurimas
// jei nori nukopijuoti turini, o ne adresa, googlinti kaip daryti "deep copy" 
