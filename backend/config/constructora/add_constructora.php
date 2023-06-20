<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    if (isset($_POST['constructora'])){

        require_once('../../models/constructoras.php');
        $config = new Constructora;
        $config -> setnombre_constructora($_POST['nombre_constructora']);
        $config -> settelefono_constructora($_POST['telefono_constructora']);
        $config -> AddData();
        echo "<script>alert('datos guardados');document.location='../../../login' </script>";
    }

?>