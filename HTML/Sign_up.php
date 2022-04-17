<?php
include('../PHP/connexion.php');
      if (isset($_SESSION["id"])) {
        header("location:../HTML/login.php");
    }
     $User=new user();
     $result=0;
    //  $error1="password incorect";
    //  $error2='';
    if(isset($_POST['submit'])){
        if ($_POST["pasword"]==$_POST["pwdverf"]) {
           if($User->creatUser($_POST["usrname"],$_POST["pasword"])){
              header("location:../HTML/login.php");
            }else{
                $error2='<h3 class="alert alert-danger"><strong>username is aredy exist !!!!!</strong></h3> ';
            }
        }else{
            $error1='<h3 class="alert alert-danger"><strong>password incorect !!!!!</strong></h3> ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../JS/validation.js"></script>
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Sign_in</title>
</head>
<body>
<?php 
include("../HTML/navbar.php");
?>
    <!-- form -->
    <div class="container ">
            <form  method="POST"  id="formsing" autocomplete="oof" onsubmit="return ValidateFormSign(); ">
            <?php 
                if (!empty($error1)) {
                    echo $error1;
                }
                if (!empty($error2)) {
                    echo $error2;
                }
            ?>
                <h1 class="authent text-center fw-bold ">Sign up</h1>
                <label><b>Username</b></label><br>
                <input type="text" placeholder="Username" name="usrname" id="usernm" ><br>
                    <span  style="color: red; font-weight:bold;" id="user"></span><br>
                <label><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="pasword" id="psswrd"><br>
                   <span style="color: red; font-weight:bold;" id="pwd"></span><br>
                <label><b>password Verify</b></label><br>
                <input type="password" placeholder="password Verify" name="pwdverf" id="verfpwd" ><br>
                    <span style="color: red; font-weight:bold;" id="vepwd"></span><br>
                <input type="submit" name="submit" id='submite'value='LOGIN'  >
                <p class="text-center fw-bold ">Already have an account?<a href="../HTML/login.php" class="acard"> Login</a> here.</p>
            </form>
    </div>
    
   
    <?php 
        include("../HTML/cdn.php");
    ?>
  
</body>
</html>
