function  ValidateAddNeContc(){
    var Name = document.getElementById("name").value;
    var spname = document.getElementById("nm");
    var Email = document.getElementById("email").value;
    var spemail = document.getElementById("eml");
    var Phone = document.getElementById("phone").value;
    var spphone = document.getElementById("phne");
    var Address = document.getElementById("address").value;
    var spaddres = document.getElementById("add");
    var reg=/^[a-zA-Z]{3,}$/;
    var regemail=/^[a-zA-Z0-9.]+@[a-zA-Z0-9.-]+.[a-z]{2,3}$/;
    // let regexphone=/^[(]{1}[0-9]{3}[)]{1}[0-9]{10}$/;
    // inpute=name
    if ( Name==""  ) {
       spname.innerHTML="Fill the Name ";
        spname.style.color="red";
        return false;
    }
    if ( Name.length<2 ) {
       spname.innerHTML="Name length must be atleast 2 characters";
        spname.style.color="Magenta";
        return false;
    }
    if (!reg.test(Name) ) {
        spname.innerHTML="the Name should contain only letters !!! ";
         spname.style.color="blue";
         return false;
    }
    else{
        spname.innerHTML="Name is valide  ";
        spname.style.color="green";
    }
     // inpute=email
    if (Email==""  ) {
         spemail.innerHTML="Fill the Email !!";
         spemail.style.color="red";
        return false;
    }
    if (!regemail.test(Email) ) {
         spemail.innerHTML="the Email non valide!!! ";
         spemail.style.color="blue";
         return false;
    }
    else{
        spemail.innerHTML=" Email is valide";
        spemail.style.color="green"; 
    }
    // input =phone
    if (Phone=="" ) {
         spphone.innerHTML="Fill the confirm phone !!";
         spphone.style.color="red";
        return false;
    }
    if (Phone.length<12) {
         spphone.innerHTML="confirm phone length must be atleast 12 characters !!";
         spphone.style.color="Magenta";
        return false;
    }
    // if (!regexphone.test(Phone)) {
    //      spphone.innerHTML="format phone incorect  !!";
    //      spphone.style.color="Magenta";
    //     return false;
    // }
    else{
        spphone.innerHTML="confirm phone is valide";
        spphone.style.color="green";
    }
    // input= address
    if (Address.length>255) {
         spaddres.innerHTML="confirm Address length must be atleast characters !!";
         spaddres.style.color="Magenta";
        return false;
    }
    else{
        spaddres.innerHTML="confirm Address is valide";
        spaddres.style.color="green";
    }
  

}