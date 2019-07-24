function loginTest() {
    var message, username, password;
    message = document.getElementById('error_code');
    message.innerHTML = "";
    username = document.getElementById('login_username').value;
    password = document.getElementById('login_password').value;
    $('.btn-success').popover('dispose');
    try {
        if(username.length < 7 && password.length < 7){
            throw "username and password are too short";
        }
        else if(username.length < 7){
            throw "username is too short";
        }
        else if(password.length < 7){
            throw "password is too short";
        }
    } catch (err) {
        // message.innerHTML = err;
        $('.btn-success').popover({title:"Something went wrong!", content: err, placement: "bottom"});
        $('.btn-success').popover('show');
    }
}
function skaiciuotuvas() {
    var lygtis = document.querySelector(".lygtis").value;
    var simboliuMasyvas = [];
    var bendras = 0;
    var x1 = 0, x2 = 0;
    var suma = 0;
    var dabartinisVeiksmas = "";
    var rezultatas = document.querySelector("#result");
    var uzbaigtasNumeris = false;

    for(var i = 0; i < lygtis.length; i++){          //Nuskaitoma visa eilute
        simboliuMasyvas[i]=lygtis[i];
        console.log(simboliuMasyvas[i]);
    }
    for (i = 0; i < simboliuMasyvas.length; i++) {   //Skaiciavimo ciklas

        if(isFinite(simboliuMasyvas[i])){
            bendras += simboliuMasyvas[i];           //Tikrinama ar simbolis yra skaicius
        }

        else if(isNaN(simboliuMasyvas[i]) && simboliuMasyvas[i] != " " && dabartinisVeiksmas == ""){

            if(x1 == 0){
            x1 = Number(bendras);
            }                                    //tikrinama ar simbolis yra operatorius
            bendras = "";
            switch (simboliuMasyvas[i]) {
                case "+":
                    dabartinisVeiksmas = "+";
                    break;
                case "-":
                    dabartinisVeiksmas = "-";
                    break;
                case "*":
                    dabartinisVeiksmas = "*";
                    break;
                case "/":
                    dabartinisVeiksmas = "/";
                    break;
                default:
            }

        }
    if (isNaN(simboliuMasyvas[i+1]) && dabartinisVeiksmas != "" && simboliuMasyvas[i+1] != " " && !uzbaigtasNumeris){
        x2 = Number(bendras);
            switch (dabartinisVeiksmas) {           //tikrinama ar sekantas simbolis yra operatorius
                case "+":
                    suma = x1 + x2;
                    break;
                case "-":
                    suma = x1 - x2;
                    break;
                case "*":
                    suma = x1 * x2;
                    break;
                case "/":
                    suma = x1 / x2;
                    break;
                default:
        }
        uzbaigtasNumeris = true;
        dabartinisVeiksmas = "";
        x1 = suma;
        x2 = 0;

    }
    else if (isNaN(simboliuMasyvas[i+1]) && dabartinisVeiksmas != "" && simboliuMasyvas[i+1] != " " && uzbaigtasNumeris)
    {

                x2 = Number(bendras);
                switch (dabartinisVeiksmas) {
                    case "+":
                        suma = x1 + x2;
                        break;
                    case "-":
                        suma = x1 - x2;
                        break;
                    case "*":
                        suma = x1 * x2;
                        break;
                    case "/":
                        suma = x1 / x2;
                        break;
                    default:
            }
            dabartinisVeiksmas = "";
            x1 = suma;
            x2 = 0;
    }
}

    rezultatas.innerHTML = "Atsakymas yra: " + suma;
}
