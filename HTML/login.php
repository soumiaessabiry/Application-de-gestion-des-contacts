<?php
include('../PHP/connexion.php');
   $errpwd="password incorrect";
   $erraucrep="";
    if (isset($_SESSION["id"])) {
        header("location:../HTML/login.php");
    }
   $loguser=new login();
   if (isset($_POST['submite'])) {
       if($loguser->loginUser($_POST['usernamelog'],$_POST['pwdlog'])=="trouveresultat"){
          $_SESSION["user"]=true;
          $_SESSION["id"]=$loguser->idUser();
          header("location:../HTML/profiluser.php");
       }
     else{
          $error='<h3 class="alert alert-danger"><strong>user not existe !!!!!</strong></h3> ';
       }
      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="../JS/validationligin.js"></script>
    <title>login</title>
</head>
<body>

<?php 
include("../HTML/navbar.php");
?>
    <!-- form -->
    <div class="container ">
        <form action="#" method="POST" onsubmit="return validelogin();" >
            <?php 
                if (!empty($error)) {
                    echo $error;
                }
            ?>
            <h1 class="text-center fw-bold authent">Authenticate</h1>
            <label><b>Username</b></label><br>
            <input type="text" name="usernamelog" id="usernmlog" placeholder="Entrer le nom d'utilisateur" name="username" ><br>
            <span  style="color: red; font-weight:bold;" id="userlg"></span><br>

            <label><b>Password</b></label><br>
            <input type="password" name="pwdlog" id="pwdlogin" placeholder="Entrer le mot de passe" name="password" ><br><br>
            <span  style="color: red; font-weight:bold;" id="pswdlog"></span><br>
            <input type="submit" name="submite" id='submit' value='LOGIN' >
            <p class="text-center fw-bold ">Already have an account?<a href="../HTML/Sign_up.php" class="acard"> Sing up</a> here.</p>
        </form>
    </div>
    <?php 
        include("../HTML/cdn.php");
    ?>
</body>
</html>