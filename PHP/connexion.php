<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="application de gestion des contacts";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!-- php 
// class conxdb{

//   protected $servaname;
//   protected $username;
//   protected $password;
//   protected $database;
//   public $connx=null;
//   public  function __construct()
//     {
//     $this->connx=mysqli_connect(
//         $this->servaname,
//         $this->database,
//         $this->password,
//         $this->database,
//       );
//       if ($this->connx->connect_error) {
//         echo "error de connexion".$this->connx->connect_error;
//       }
//       echo"connecxion successful !!";
//     }
// }
?> -->

<!--  $this->servaname="localhost";
    $this->username="root";
    $this->password="";
    $this->database="application de gestion des contacts";
    $conn= new mysqli(
      $this->servaname,
      $this->database,
      $this->password,
      $this->database

    );
    return $conn;

  } -->