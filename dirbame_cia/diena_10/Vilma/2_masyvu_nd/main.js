console.log("labas");



$('h1').hide(3000);
//  sukurti nauja masyva uzpildyta, atsitiktiniais skaiciais
//  var nuoVienoIkiSimto = Math.floor(Math.random() * 100) ;
masyvas = [];
for (var i = 0; i < 20; i++) {
    masyvas[i] = Math.floor(Math.random() * 100);
}
console.log(masyvas.toString());

// sukurti f-ja getData(masyvas, x), kuri grazina is masyvo "masyvas" "x" stalciaus duomenis

function getData(masyvas, x) {
    for (var i = 0; i < masyvas.length; i++) {
        var a = masyvas[x];
    }
    console.log(a);
};

getData(masyvas, 15);

// sukurti f-ja rikiuojaDidejanciai(masyvas), kuri grazina surikiuota masyva dedejimo tvarka

function rikiuojaDidejanciai(mas) {

    for (var i = 0; i < mas.length ; i++) {
        for (var j = 1; j < mas.length; j++) {
            if (mas[j-1] > mas[j])
            {var keitimas = mas[j-1];
            mas[j-1] = mas[j];
            mas[j] = keitimas;
            }
    }
}
console.log(mas);
};

rikiuojaDidejanciai(masyvas);

//  sukurti f-ja rikiuojaMazejanciai(masyvas), kuri grazina surikiuota masyva mazejimo tvarka

function rikiuojaMazejanciai(mas) {

    for (var i = 0; i < mas.length ; i++) {
        for (var j = 1; j < mas.length; j++) {
            if (mas[j-1] < mas[j])
            {var keitimas = mas[j-1];
            mas[j-1] = mas[j];
            mas[j] = keitimas;
            }
    }
}
console.log(mas);
};

rikiuojaMazejanciai(masyvas);
