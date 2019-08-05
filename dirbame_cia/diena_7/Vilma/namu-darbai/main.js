console.log("labas");
let masyvas1 = [];
for (var i = 0; i < 50; i++) {
    masyvas1[i] = 0;
    }
console.log(masyvas1);

let masyvas2 = [];
let j = 0;
while (j<50) {
    masyvas2[j]=1;
j=j+1;
    }
console.log(masyvas2);
for (var i = 0; i < 50; i++) {
i++
masyvas2[i]=3;

}
console.log(masyvas2);

for (var i = 4; i < 50; i=i+5  ) {
    masyvas2[i]=9;
    }
console.log(masyvas2);



let zmg = ["Tomas", 21, "Kaunas", 820, true];
// if (zmg[4]==true)  {
//     document.querySelector("h1").innerHTML = "Sveikinu - gausite paskola";}
//     else {document.querySelector("h1").innerHTML = "Deja, jums paskola nepriklauso";}



    if (zmg[4]!==true)  {
        document.querySelector("h1").innerHTML = "Deja, jums paskola nepriklauso"}
        else {document.querySelector("h1").innerHTML = "Sveikinu - gausite paskola"}




let arRodyti = true; //  (galimi variantai true/ false)
let vartotojoTipas = "admin";
let userName = "Tomas";

if (arRodyti==true) {document.querySelector("h1").innerHTML = "Labas Tomai!"}
    else {document.querySelector("h1").innerHTML = "Sveiki atvykę!"};

if (vartotojoTipas=="admin"){document.querySelector("h1").innerHTML += "<img src='img/admin.jpg'> "
}
