<?php 
require_once("../connect.php");


class User extends Connect {
    
    private $id_user;
    private $username;
    private $gmail;
    private $id_empleado;
    private $password;

    public function __construct($id_user = "", $username = "", $gmail = "", $id_empleado = "", $password = "", $dbCnx= ""){

        $this->id_user = $id_user;
        $this->username = $username;
        $this->gmail = $gmail;
        $this->id_empleado = $id_empleado;
        $this->password = $password;
        parent::__construct($dbCnx);
    }


    public function getid_user(){
        return $this->id_user;
    }
////
    public function setid_user($id_user){
        $this->id_user = $id_user;
    }

    public function getusername(){
        return $this->username;
    }
////
    public function setusername($username){
        $this->username = $username;
    }
    
    public function getgmail(){
        return $this->gmail;
    }
////
    public function setgmail($gmail){
        $this->gmail = $gmail;
    }

    public function getid_empleado(){
        return $this->id_empleado;
    }
////
    public function setid_empleado($id_empleado){
        $this->id_empleado = $id_empleado;
    }

    public function getpassword(){
        return $this->password;
    }
////
    public function setpassword($password){
        $this->password = $password;
    }

    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO users(username, gmail, id_empleado, password ) VALUES (?,?,?,?)");
         $stm->execute([$this->username, $this->gmail, $this->id_empleado, md5($this->password)]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM users");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
     


     public function checkUser($username){

        try {
           $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE username = '$username' OR  gmail = '$gmail' ");
           $stm -> execute();
           if ($stm->fetchColumn()){
            echo "<script> alert('El usuario ya existe'); </script>";
               return true;
           } else {
               return false;
           }
           } catch (Exception $e){
               return $e->getMessage();
           }
       
       }


}
?>