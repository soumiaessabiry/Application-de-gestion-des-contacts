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
    <!-- modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color:#9692e8ad;">Add new contact</h5>
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
                            <input type="number" placeholder="Entre phone" id="phone" name="phonee" ><br>
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
    <!--  -->
    <div class=" d-flex mb-3">
    <div class="me-auto p-3"><button type="button" class="btn btn-primary btn-lg">contacts liste</button></div>
    <div class="p-3 "><button type="button" class="btn btn-warning  btn-lg fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add new contact</button></div>
    </div> 
    <section class="bg-light p-5">
    <div class="table-responsive" >
        <table class=" table bg-white table-bordered border-dark ">
        <thead class="bg-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th data-tile="Name" scope="row">1</th>
                <td data-tile="Email"  >Mark</td>
                <td data-tile="Phone" >Otto</td>
                <td data-tile="Address"  >@mdo</td>
                <td data-tile="Option" >
                <button type="button" class="btn btn-danger">Delet</button>
                <button type="button" class="btn btn-success">edit</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacknn!df kkggnsfklvklnkdn!lvnglkfnob</td>
                <td>Thorntonacknn!df kkggnsfklvklnkdn!lvnglkfnob</td>
                <td>@fat</td>
                <td>
                <button type="button" class="btn btn-danger">Delet</button>
                <button type="button" class="btn btn-success">edit</button>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    </section>














    <?php 
        include("../HTML/cdn.php");
    ?>
    </body>
    </html>