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
    // classe user or compte
    class user extends connexiondb{
        public function creatUser($usernm, $passwrd){
            $result=$this->connection()->query("SELECT * FROM comptes WHERE username='$usernm'");
            if (mysqli_num_rows($result)== 0) {
                // $pwdchifree=password_hash('$passwrd',PASSWORD_DEFAULT);
                $query="INSERT INTO comptes(`username`, `password`, `signup_date`) VALUES ('$usernm','$passwrd',sysdate())";
                $result=$this->connection()->query($query);
                return true;
            }
        }
    }
    class login extends connexiondb{
        public $id;
        public function loginUser($usernamelog,$pwdlog){
        $resultd=$this->connection()->query("SELECT * FROM comptes WHERE username='$usernamelog'");
            if (mysqli_num_rows($resultd)> 0) {
                $row=mysqli_fetch_assoc($resultd);
                if ($usernamelog==$row['username'] && $pwdlog==$row['password']) {
                    $this->id=$row['id'];
                    return "trouveresultat";
                }else{
                return"aucun result ";
                }
            }else{
                return"aucun result ";
            }
        }
        public function idUser(){
            return $this->id;
        }
    }
    class  select extends connexiondb{
        public function slectUser($id){
            $res=$this->connection()->query("SELECT * FROM comptes WHERE id='$id'");
            return mysqli_fetch_assoc($res);
        }

    }
    class contacts extends connexiondb{

        // ************************ function inserer contact in db************************
        public function creatContact($namecnt, $email, $phone, $address,$idcompte){
           $resulte=$this->connection()->query("INSERT INTO contact (`name`, `email`, `phone`, `address`,`id_compte`) VALUES ('$namecnt', '$email', '$phone', '$address',$idcompte)");
            if ($resulte) {
                return true;
            }else{
                return false;
            }
        
        }
        // *********************function afficher les donner*!!!*********************
        public function afficheContact($id){
            $sql="SELECT * FROM `contact` WHERE id_compte='$id';";
            $resul=$this->connection()->query($sql);
            if ($resul->num_rows>0) {
                $data=array();
                while ($row = $resul->fetch_assoc()) {
                    $data[] = $row;
            }
            return $data;
            }else{
            echo "No found records";
            }

            }
            //*********************** delet contact************************* */
            public function deletContct($id){
                $req="DELETE FROM contact WHERE id='$id'";
                $sql=$this->connection()->query($req);
                if ($sql==true) {
                    header("Location:../HTML/contacts.php");
                }else{
                    echo "contcat is not exist";
                    }
                }
                // *************************
                public function affichContacteById($id)
                {
                    $query = "SELECT * FROM contact WHERE id = '$id'";
                    $rsltafficontct = $this->connection()->query($query);
                if ($rsltafficontct->num_rows > 0) {
                    $row = $rsltafficontct->fetch_assoc();
                    return $row;
                    }else{
                    echo "Record not found";
                    }
                }
        // ******************************updat data*******************************
                public function editContact($idcontact){
                $namecnt = $this->connection()->real_escape_string($_POST['namee']);
                $emailcnt = $this->connection()->real_escape_string($_POST['emaile']);
                $phonecnt = $this->connection()->real_escape_string($_POST['phonee']);
                $addresscnt = $this->connection()->real_escape_string($_POST['addresse']);
                $id=$this->connection()->real_escape_string($_POST['id']);
                if (!empty($id) && !empty($idcontact)) {
                    $queryy="UPDATE contact SET name='$namecnt', email='$emailcnt', phone='$phonecnt', address='$addresscnt' WHERE id='$id'";
                    $sql=$this->connection()->query($queryy);
                    if ($sql==true) {
                            header("Location:../HTML/contacts.php");
                        }else{
                            echo "Registration updated failed try again!";
                        }
                }
                
                }

        }

        
            

    
?>
