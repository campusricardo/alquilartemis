<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    if (isset($_POST['obra'])){

        require_once('../../models/obras.php');
        $config = new Obra;
        $config -> setnombre_obra($_POST['nombre_obra']);
        $config -> setlugar_obra($_POST['lugar_obra']);
        $config -> AddData();
        echo "<script>alert('datos guardados');document.location='../../../login' </script>";
    }

?>