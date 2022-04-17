<?php
require_once('../PHP/connexion.php');
    $selectuser = new select();
    if (isset($_SESSION["id"])) {
        $user=$selectuser->slectUser($_SESSION["id"]);
    }else{
        header("location:../HTML/index.php");
    }
     $contact=new contacts();
    if(isset($_POST['submit'])){
       $resulte=$contact->creatContact($_POST["namee"],$_POST["emaile"],$_POST["phonee"],$_POST["addresse"],$_SESSION["id"]);
       if ($resulte) {
           $success='<script>alert("Successfully inserted contact")</script>';
        // '<h3 class="alert alert-success"><strong>Successfully inserted contact</strong></h3> ';
        }
    }
    // delet contact 
    if (isset($_GET['delid']) && !empty($_GET['delid'])) {
        $deletcontact=$_GET['delid'];
        $contact->deletContct($deletcontact);
    }
    
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <link rel="stylesheet" href="../CSS/contacts.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/addcont.css">
        <title>list contacte</title>
    </head>
    <body>
    <!-- navbar2 -->
    <?php 
    include("../HTML/navbar2.php");
    ?>
     <?php 
        if (!empty($success)) {
            echo $success;
        }
    ?>
    <!-- modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="staticBackdropLabel" style="color: #9792E8;">Add new contact</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  method="POST"  name="formsing" onsubmit="return ValidateAddNeContc();">
                            <label><b>Name</b></label><br>
                            <input type="text" placeholder="Entre name" id="name" name="namee"  ><br>
                                <span  style="color: red; font-weight:bold;" id="nm"></span><br>
                            <label><b>Email</b></label><br>
                            <input type="email" placeholder="Entre email" id="email" name="emaile" ><br>
                            <span style="color: red; font-weight:bold;" id="eml"></span><br>
                            <label><b>Phone</b></label><br>
                            <input type="text" placeholder="Entre phone" id="phone" name="phonee" ><br>
                                <span style="color: red; font-weight:bold;" id="phne"></span><br>
                            <label><b>Address</b></label><br>
                            <input type="text" placeholder="Entre address" id="address" name="addresse"><br>
                                <span style="color: red; font-weight:bold;" id="add"></span><br>   
                             <input type="submit" class="btn  btn-lg" style="background: #9692e8ad;" name="submit" id='submite' value="save"></input>
                             <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>

                        </form>
                        <script src="../JS/validecontact.js"></script>

                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
    <!-- table des contacts -->
    <div class=" d-flex mb-3">
    <div class="me-auto p-3"><button type="button" class="btn btn-lg pe-5 fw-bold bg-secondary bg-gradient"><?php echo $user["username"];?></button></div>
    <div class="p-3 "><button type="button" class="btn btn-warning  btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add new contact</button></div>
    </div> 
    <section class="bg-light p-5">
    <div class="table-responsive" >
        <table class=" table bg-white table-bordered border-dark ">
        <thead class="bg-danger fw-bold">
            <tr class="fw-bold">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
           <?php 
               $contactes=$contact->afficheContact($_SESSION["id"]);
                foreach($contactes as $contacte){
              ?> 
                 <tr class="fw-bold">
                <th data-tile="id"><?php echo $contacte['id']?></th>
                <td data-tile="Name"><?php echo $contacte['name']?></td>
                <td data-tile="Email"><?php echo $contacte['email']?></td>
                <td data-tile="Phone"><?php echo $contacte['phone']?></td>
                <td data-tile="Address"><?php echo $contacte['address']?></td>
                <td data-tile="Option" >
                <button type="button" class="btn btn-danger"><a href="../HTML/contacts.php?delid=<?php echo $contacte["id"] ?>" class="text-decoration-none text-light fw-bold">Delet</a></button>
                <button type="button" class="btn btn-success"><a href="../HTML/edite.php?editid=<?php echo $contacte["id"]?>" class="text-decoration-none text-light fw-bold">edit</a></button>
                </td>
            </tr>
              
              <?php } ?>
        </tbody>
        </table>
    </div>
    </section>














    <?php 
        include("../HTML/cdn.php");
    ?>
    </body>
    </html>