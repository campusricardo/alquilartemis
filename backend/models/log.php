<?php 
require_once("../connect.php");


class LoginUser extends Connect{

    private $id_user;
    private $username;
    private $password;

public function __construct($id_user=0,$username="",$password="",$dbCnx=""){
    $this->id_user = $id_user;
    $this->username = $username;
    $this->password = $password;
    parent:: __construct($dbCnx);
}

public function setid_user_user($id_user)
{
    $this->id_user = $id_user;
}

public function getid_user_user()
{
    return $this-> id_user;
}

///
public function setusername($username)
{
    $this->username = $username;
}

public function getusername()
{
    return $this-> username;
}
///


public function setpassword($password)
{
    $this->password = $password;
}

public function getpassword()
{
    return $this-> password;
}

public function obtainAll() {
    try {
    $stm = $this->dbCnx->prepare("SELECT * FROM users");
    $stm->execute();
    return $stm -> fetchAll();

    } catch (Exception $e) {
        
        return $e->getMessage();
    }
}


public function login() {
     try { 
        $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stm -> execute([$this->username, md5($this->password)]);
        $user = $stm->fetchAll();
        if (count($user)> 0 ){
            session_start();
            $_SESSION['id_user'] = $user[0]['id_user'];
            $_SESSION['username'] = $user[0]['username'];
            $_SESSION['password'] = $user[0]['password'];
            $_SESSION['logIn'] = 1;
            return true;
        } else { 
             false;
        }
        
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

}


?>