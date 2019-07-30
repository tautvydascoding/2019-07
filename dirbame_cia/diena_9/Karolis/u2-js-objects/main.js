console.log("labas");

let auto = {};              // tuscias objektas, daznai trumpinami (obj)
let obj = 0 ; //numeris  arba text jei tekstas(duhhh)
auto = {pav:"marke",
    spalva:"melyna",
    metai:"2222",
    greitis: function(){console.log("spaudziu")}
};
console.log(auto.pav);



//console.log(auto.greitis);      sitas spausdina nesamone ==============  f(){console.log("spaudziu")}
//obj-o funkcijos issaukimas
auto.greitis();
