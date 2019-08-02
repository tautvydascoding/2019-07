window.onscroll = function() {sticky_bar(); pop_up();};

var navbar = document.querySelector(".nav");
var sticky = navbar.offsetTop;

function sticky_bar() {

    if(window.pageYOffset >= sticky){
        navbar.classList.add("sticky");
    }else{
        navbar.classList.remove("sticky");
    }
}

var pop_up_bar = document.querySelector(".pop_up_bar");

function pop_up() {
    console.log(window.pageYOffset);
    if(window.pageYOffset >= 450){
        pop_up_bar.classList.add("pop-up-info");
    }
    else {
        pop_up_bar.classList.remove("pop-up-info");
    }
}
