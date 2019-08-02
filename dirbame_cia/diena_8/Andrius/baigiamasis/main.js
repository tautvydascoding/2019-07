window.onscroll = function() {sticky_bar();};

var navbar = document.querySelector(".nav");
var sticky = navbar.offsetTop;
var clone = document.querySelector('nav').cloneNode(true);

function sticky_bar() {

    if(window.pageYOffset >= sticky){

        navbar.classList.add("sticky");
    }else{
        navbar.classList.remove("sticky");
    }
}

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
