<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Sign_in</title>
</head>
<body>
<?php 
include("../HTML/navbar.php");
?>
    <!-- form -->
    <div class="container ">
            <form action="#" method="POST">
                <h1 class="text-center fw-bold text-warning">Authenticate</h1>
                <label><b>Username</b></label><br>
                <input type="text" placeholder="Username" name="username" required><br>
                <label><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="password" required><br>
                <label><b>password Verify</b></label><br>
                <input type="password" placeholder="password Verify" name="pwdverf" required><br><br>

                <input type="submit" id='submit' value='LOGIN' >
                <p class="text-center fw-bold ">Already have an account?<a href="../HTML/login.php" class="acard"> Login</a> here.</p>
            </form>
    </div>
   
   

    <?php 
        include("../HTML/cdn.php");
    ?>
</body>
</html>