<?php
include('../PHP/connexion.php');
$_SESSION=[];
session_unset();
session_destroy();
header("location:../HTML/index.php");

?>  
   
