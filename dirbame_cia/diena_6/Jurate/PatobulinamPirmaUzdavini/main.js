// Mokinames padaryti skaiciavima
function dauginti() {
    document.querySelector("h5").innerHTML = "Sekmingai atliktas skaiciavimas";

    // Paimam ivedimo lauku informacija, input[name=x1] - reiskia, kad nurodai input, kurio name="x1"
    let reiksme1 = document.querySelector('input[name=x1]').value;
    let reiksme2 = document.querySelector('input[name=x2]').value;

    // Ar x yra skaicius?
    if( !isNaN(reiksme1) ){
        let rezultatas = reiksme1 * reiksme2;
        // Isvedam i ekrana atsakyma
        document.querySelector('h6').innerHTML = "Rezultatas yra: " + rezultatas;
    } else{
        document.querySelector('h6').innerHTML = "Neteisingai, iveskite skaiciu";
    }
}

