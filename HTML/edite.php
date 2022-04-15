<?php
include('../PHP/connexion.php');

        $selectuser = new select();
        if (isset($_SESSION["id"])) {
            $user=$selectuser->slectUser($_SESSION["id"]);
        }else{
            header("location:../HTML/index.php");
        }
     $contact=new contacts();
    //***************affich data contact by id  contact
    if (isset($_GET['editid']) && !empty($_GET['editid'])) {
        $editContctById=$_GET['editid'];
        $contactedit=$contact->affichContacteById($editContctById);
    }
    //***************** edit contact and save modif******************* */
    if(isset($_POST['savemodif'])) {
        $contact->editContact($_POST["namee"],$_POST["emaile"],$_POST["phonee"],$_POST["addresse"]);
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
        <link rel="stylesheet" href="../CSS/edit.css">
        <title>editcontact</title>
    </head>
<body>
<?php 
include("../HTML/navbar2.php");
?>
    <!-- form -->
    <div class="container ">
        <!-- <span style="colo"><?php echo $error ;?></span> -->
        <form  method="POST"  name="formsing" onsubmit="return ValidateAddNeContc();">
            <label><b>Name</b></label><br>
            <input type="text" placeholder="Entre name" id="name" name="namee"   value="<?php echo $contactedit['name']?>" ><br>
            <span  style="color: red; font-weight:bold;" id="nm"></span><br>
            <label><b>Email</b></label><br>
            <input type="email" placeholder="Entre email" id="email" name="emaile"   value="<?php echo $contactedit['email']?>"><br>
            <span style="color: red; font-weight:bold;" id="eml"></span><br>
            <label><b>Phone</b></label><br>
            <input type="text" placeholder="Entre phone" id="phone" name="phonee"  value="<?php echo $contactedit['phone']?>" ><br>
            <span style="color: red; font-weight:bold;" id="phne"></span><br>
            <label><b>Address</b></label><br>
            <input type="text" placeholder="Entre address" id="address" name="addresse"  value="<?php echo $contactedit['address']?>"><br>
            <span style="color: red; font-weight:bold;" id="add"></span><br> 
            <input type="hidden" name="id" value="<?php echo $contactedit['id']; ?>">  
            <input type="submit" class="btn  btn-lg" style="background: #9692e8ad;" name="savemodif" id='submite' value="save"></input>

        </form>
    </div>
    
   
    <?php 
        include("../HTML/cdn.php");
    ?>
    
</body>
</html>