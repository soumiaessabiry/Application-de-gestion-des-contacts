function validelogin(){
    var reg=/^[a-zA-Z]{3,}$/;
    var usernamelog = document.getElementById("usernmlog").value;
    var spuserlog = document.getElementById("userlg");
    var passwordlogin = document.getElementById("pwdlogin").value;
    var sppswdlog = document.getElementById("pswdlog");
    if ( usernamelog==""  ) {
        spuserlog.innerHTML="Fill the username ";
         spuserlog.style.color="red";
         return false;
     }
     if ( usernamelog.length<3 ) {
        spuserlog.innerHTML="username length must be atleast 3 characters";
        spuserlog.style.color="Magenta";
         return false;
     }
     if (!reg.test(usernamelog) ) {
         spuserlog.innerHTML="the username should contain only letters !!! ";
          spuserlog.style.color="blue";
          return false;
     }
     else{
         spuserlog.innerHTML="username is valide  ";
         spuserlog.style.color="green";
     }
      // inpute=password
     if ( passwordlogin==""  ) {
          sppswdlog.innerHTML="Fill the password !!";
          sppswdlog.style.color="red";
         return false;
     }
     if ( passwordlogin.length<6 ) {
          sppswdlog.innerHTML="password length must be atleast 6 characters !!";
          sppswdlog.style.color="Magenta";
         return false;
     }
     else{
         sppswdlog.innerHTML=" password is valide";
         sppswdlog.style.color="green"; 
     }

}