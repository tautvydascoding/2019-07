function loginTest() {
    var message, username, password;
    message = document.getElementById('error_code');
    message.innerHTML = "";
    username = document.getElementById('login_username').value;
    password = document.getElementById('login_password').value;
    $('.btn-success').data();
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
        $('.btn-success').popover({title:"Something went wrong!", content: err, placement: "left"});
    }
}
