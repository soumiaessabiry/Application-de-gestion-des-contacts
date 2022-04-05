<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/accueil.css">
    <title>page d'accueil</title>
</head>
<body>
    <!-- navbar -->
    <?php 
        include("../HTML/navbar.php");
    ?>
    <!-- hello -->
    <div class="row"  style="width:100vw;";>
        <div class="card  container-fluid p-5"">
            <div class="card-body" >
                <h5 class="card-title  fw-bold "  style="font-size: 100px;">Hello !</h5>
                <p class="card-text text-bold "  style="font-size: 35px;">
                <a href="../HTML/Sign_up.php" class="acard">Sign up</a> to start creating your contacts list.<br>
                Already have an account?<a href="../HTML/login.php" class="acard">Login here.</a>      
            </div>
        </div>   
    </div>
    <!-- image hello -->
    <div class="row"  style="width:100vw;">
        <img src="../image/hellomg.png" class="img-fluid" style="height:60vh;">
    </div>
    <?php 
        include("../HTML/cdn.php");
    ?>
</body>
</html>
