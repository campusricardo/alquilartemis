<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["register"])){
    require_once("../../models/users.php");

    $user = new User();
    $user->setusername($_POST['username']);
    $user->setgmail($_POST['gmail']);
    $user->setid_empleado($_POST['empleado']);
    $user->setpassword($_POST['password']);
     if ($user->checkUser($_POST['username'])) {
    echo "<script> alert('El usuario o gmail ya existe Porfavor intente nuevamente'); document.location = '../../../'</script>";
    

     } else {
    $user-> AddData();
    echo "<script> alert('El usuario se registro correctamente'); document.location = '../../../' </script>";
     }

}

?>