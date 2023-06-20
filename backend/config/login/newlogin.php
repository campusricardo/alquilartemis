<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['log'])) {

    require_once('../../models/log.php');

    $credenciales = new LoginUser();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $credenciales-> setusername($_POST["username"]);
    $credenciales-> setpassword($_POST["password"]);

    $login = $credenciales->login();

    if ($login){
        echo "<script> alert('Bienvenido {$username} '); document.location='../../../login'  </script>";

    } else {
        echo "<script> alert('Password o email invalidos'); document.location='../../../login';</script>";


    }
}

?>