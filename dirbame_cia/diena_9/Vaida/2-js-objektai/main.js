console.log("labas");

let auto = { }; // tuscias objektas (obj)

auto = {
    pavadinimas: "Audi",   //dedami kableliai ne kabliataskiai
    spalvva: "juoda",
    duruSk = 5,
    stabdyti: function() {
                    console.log( "stabdau!!" );
                },
    greiteti: function() { }     ///nedeti kablelio paskutiniame
};


//paemimas (nurodom teti, po to vaika)
console.log( auto.pavadinimas );

//funkcijos isaukimas, nurodyt kur laikomas zodis

auto.stabdyti();
auto.stabdyti();
auto.stabdyti();


// objektu negalima lyginti
// let ferari = auto;  TAIP NEDARYTI, nes pakeitus vienam pasikeis ir kitam



let obj = 0; //number
