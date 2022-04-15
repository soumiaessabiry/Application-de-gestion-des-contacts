<?php
include('../PHP/connexion.php');
    $selectuser = new select();
    if (isset($_SESSION["id"])) {
        $user=$selectuser->slectUser($_SESSION["id"]);
    }else{
        header("location:../HTML/index.php");
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
    <title>profil</title>
</head>
<body>
<?php 
include("../HTML/navbar2.php");
?>
<div>
    <div class="card container-fluid" style="width:95%;height:400px">
        <div class="card-body">
            <h1 class="card-title text-center fw-bold" >Welcome: <?php echo $user["username"];?> </h1>
            <h2 class="card-subtitle mb-5 ps-3 fw-bold ">Your Profile : </h2>
            <h3 class="card-subtitle mb-5 ps-5 ">Username : <?php echo $user["username"];  ?> </h3>
            <h3 class="card-subtitle mb-5 ps-5">Signup date : <?php echo $user["signup_date"]; ?> </h3>
            <h3 class="card-subtitle mb-5 ps-5">Last login : </h3>
           
        </div>
    </div>
</div>






<?php 
        include("../HTML/cdn.php");
?>
  
</body>
</html>