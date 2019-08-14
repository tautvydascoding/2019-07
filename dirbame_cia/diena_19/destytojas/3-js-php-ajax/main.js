console.log("ar veikia?");

$('div.mygtukas').on('click', function(){

    <!-- // JavaScript -->
    $.ajax({
      url: "test.php",
      type: "POST",  // i php $_POST array
      data: {name: "John", location: "Boston", id:5},
      success: function(gryzo){
            console.log("lyg suveike");
            console.log(gryzo);

            // =======jei PHP darot: echo "String";================
            // gryzoPaverstasIString = JSON.stringify(gryzo);
            // console.log(gryzoPaverstasIString);
            // $("#results").append(gryzoPaverstasIString.vardas);
                    /* OR */
            //====== jei PHP darot: echo parseTOJSON( $manoAray);====
            // gryzoPaverstasIJSON = JSON.parse(gryzo);
            // console.log(gryzoPaverstasIJSON);
            // //this is what I am unsure about?
            //  $("#results").append(  gryzoPaverstasIJSON.vardas);
            //  $("#results").append(  gryzoPaverstasIJSON.location);
      },

      error: function(e) {
           //called when there is an error
           //console.log(e.message);
           $("#results").append( "Request failed: " + e );
           console.log("NESUVEIKE!@@@");
     }
    });

});
