<?php
include("../PHP/connexion.php");
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
            <form  method="POST"  name="formsing" onsubmit="return validateform()">
                <h1 class="text-center fw-bold text-warning">Authenticate</h1>
                <label><b>Username</b></label><br>
                <input type="text" placeholder="Username" name="username"  onkeydown="validateform()"><br>
                    <span  style="color: red; font-weight:bold;" id="user"></span><br>
                <label><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="password" ><br>
                   <span style="color: red; font-weight:bold;" id="pwd"></span><br>
                <label><b>password Verify</b></label><br>
                <input type="password" placeholder="password Verify" name="pwdverf" ><br>
                    <span style="color: red; font-weight:bold;" id="vepwd"></span><br>
                <input type="submit" name="submit" id='submite'value='LOGIN'  >
                <p class="text-center fw-bold ">Already have an account?<a href="../HTML/login.php" class="acard"> Login</a> here.</p>
            </form>
    </div>
    
   <?php 
        //******************************** socker les valeur des input sur des variable***************************//  
      if (isset($_POST["submit"])) {
        $usernm=$_POST["username"];
        $pwd=$_POST["password"];
        $verpwd=$_POST["pwdverf"];
      //  Insérer des données
       $sql = "INSERT INTO comptes (username,password,confirme_pwd)
        VALUES ('$usernm','$pwd','$verpwd')";
        if (mysqli_query($conn, $sql)) {
            echo"<script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Le compte et bien Ajouter ',
                    showConfirmButton: false,
                    timer: 1500})
                    </script>";
        } else {
          echo "Error: ";
        }      }









      
    ?>
  






    <?php 
        include("../HTML/cdn.php");
    ?>
  
</body>
</html>
<!--  if (isset($_POST['submit'])) {
            $usernm=$_POST["username"];
            $pwd=$_POST["password"];
            $verpwd=$_POST["pwdverf"];
            if (empty($_POST["username"])||empty($_POST["password"])||empty($_POST["pwdverf"])) {
                echo"<script>
                Swal.fire({
                icon: 'error',
                title: 'veuillee remplire tous les champs  !!!',
                 })
                </script>";
            }else{
                //***************insertion des donnee via db**********************//é
                $sql = "INSERT INTO comptes (username,password,confirme_pwd) VALUES ('$usernm','$pwd','$verpwd')";
                if (mysqli_query($conn, $sql)) {
                    echo"<script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Le compte et bien Ajouter ',
                    showConfirmButton: false,
                    timer: 1500})
                    </script>";
                } 
                mysqli_close($conn);
            }

        } -->