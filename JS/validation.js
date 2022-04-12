function  ValidateFormSign(){
    var username = document.getElementById("usernm").value;
    var spuser = document.getElementById("user");
    var password = document.getElementById("psswrd").value;
    var sppwd = document.getElementById("pwd");
    var verfipawd = document.getElementById("verfpwd").value;
    var spvepwd = document.getElementById("vepwd");
    var reg=/^[a-zA-Z]{3,}$/;
    // inpute=username
    if ( username==""  ) {
       spuser.innerHTML="Fill the username ";
        spuser.style.color="red";
        return false;
    }
    if ( username.length<3 ) {
       spuser.innerHTML="username length must be atleast 3 characters";
        spuser.style.color="Magenta";
        return false;
    }
    if (!reg.test(username) ) {
        spuser.innerHTML="the username should contain only letters !!! ";
         spuser.style.color="blue";
         return false;
    }
    else{
        spuser.innerHTML="username is valide  ";
        spuser.style.color="green";
    }
     // inpute=password
    if ( password==""  ) {
         sppwd.innerHTML="Fill the password !!";
         sppwd.style.color="red";
        return false;
    }
    if ( password.length<6 ) {
         sppwd.innerHTML="password length must be atleast 6 characters !!";
         sppwd.style.color="Magenta";
        return false;
    }
    else{
        sppwd.innerHTML=" password is valide";
        sppwd.style.color="green"; 
    }
    // input =verpasword
    if ( verfipawd=="" ) {
         spvepwd.innerHTML="Fill the confirm password !!";
         spvepwd.style.color="red";
        return false;
    }
    if (  verfipawd.length<6) {
         spvepwd.innerHTML="confirm password length must be atleast 6 characters !!";
         spvepwd.style.color="Magenta";
        return false;
    }
    else{
        spvepwd.innerHTML="confirm password is valide";
        spvepwd.style.color="green";
    }
    // cnparer les paswords
    if ( password != verfipawd) {
        spvepwd.innerHTML="Passwords are not same !!";
         spvepwd.style.color="red";
    }
    else{
        alert("Your compte created successfully");
    }

}


