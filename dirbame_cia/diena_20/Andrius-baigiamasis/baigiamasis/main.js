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


    var isOpen = false;
        $(".container").click(function() {
            if(isOpen){
            $( ".shopping-cart-menu" ).toggle( "slide" );
            isOpen = false;
        }
        });
        $(".shopping-cart-icon").click(function() {
            $( ".shopping-cart-menu" ).toggle( "slide" );
            isOpen = true;
        });
        $(document).on("click", ".show-user-button", function(){
            $.ajax({
                type: "POST",
                url: "show-diffrent-view.php",
                data: { what_to_show: "user"} ,
                success: function(response) {

                    location.reload();
                }

            });

        });
        $(document).on("click", ".show-admin-button", function(){
            $.ajax({
                type: "POST",
                url: "show-diffrent-view.php",
                data: { what_to_show: "admin"} ,
                success: function(response) {
                    location.reload();
                }

            });

        });
