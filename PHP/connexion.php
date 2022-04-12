
<?php
 session_start();
  // class connexiondb
class connexiondb{
  protected $servaname ="localhost";
  protected $username="root";
  protected $password="";
  protected $databasename="application de gestion des contacts";
  public function connection(){
      $connx=mysqli_connect($this->servaname,$this->username, $this->password, $this->databasename);
      return $connx;
      if ($connx->connect_error) {
          echo"eroor";
      }
      echo " connection succssfuly";
  }
}
// classe compte
  class user extends connexiondb{
      public function creatUser($usernm, $passwrd){
        $result=$this->connection()->query("SELECT * FROM comptes WHERE username='$usernm' AND password='$passwrd'");
        if (mysqli_num_rows($result)> 0) {
            return 10;
            // username is aredy exist
        }else{
               $query="INSERT INTO comptes(`username`, `password`, `signup_date`) VALUES ('$usernm','$passwrd',sysdate())";
               $result=$this->connection()->query($query);
               return 20;
               //creat compte is successfuly

            
        }
      }



}








?>