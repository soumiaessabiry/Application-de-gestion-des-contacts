// element.addEventListener("onkeydown",validationForm );
// function validationForm(){
//    user=form=formsing.username.value;
//    rejex=/^[a-zA-Z]{3,}$/;
//    if (rejex.test(user)==false) {
//        alert("attention !!!");
// return false;
//    }
// }
// //  if (document.formsing.username.value=="" ) {
//     document.getElementById("user").innerHTML="Ce champt ne peut pas etre vide";
//     return false;
// }
// if (document.formsing.password.value=="" ) {
//   document.getElementById("pwd").innerHTML="Ce champt ne peut pas etre vide";
//   return false;  
// }


//   if (document.formsing.pwdverf.value =="" ) {
//   document.getElementById("vpwd").innerHTML="Ce champt ne peut pas etre vide";
// return false;       
// }
// Le nom d'utilisateur doit comporter au moins trois caractères et être uniquement alphanumérique. Le mot de passe doit comporter au moins six caractères et doit être vérifié par un deuxième mot de passe lors de l'inscription. Toute erreur de formulaire doit être affichée sous l'entrée d'où proviennent les données, par exemple :
// document.getElementById("myBtn").disabled = true;
// document.getElementById("submite").disabled = true;

function validateform(){

    let form=document.getElementById("formsinge");
    let user=document.formsing.username.value;
    let pswd=document.formsing.password.value;
    let vpswd=document.formsing.pwdverf.value;

    if ((user=="")) {
        document.getElementById("user").innerHTML="Ce champt ne peut pas etre vide";
        return false;
       
    }
    if (pswd=="") {
        document.getElementById("pwd").innerHTML="Ce champt ne peut pas etre vide";
        return false;
    }
    if (vpswd=="") {
        document.getElementById("vepwd").innerHTML="Ce champt ne peut pas etre vide";
        return false;
    }
  else{
    return true;

  }
    
}
// return false;
// if (user.match(rejexname)) {
//     form.classList.add("valid");  
//     form.classList.remove("invalid");  
// }else
// form.classList.add("invalid");  
//     form.classList.remove("valid");
// ||pswd==""||vps:wd==""
// const rejexname=/^[a-zA-Z]{3,}$/;
