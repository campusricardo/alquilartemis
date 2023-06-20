<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    if (isset($_POST['inventario'])){

        require_once('../../models/inventario.php');
        $config = new Inventario;
        $config -> setnombre_inventario($_POST['nombre_inventario']);
        $config -> setcantidad($_POST['cantidad']);
        $config -> AddData();
        echo "<script>alert('datos guardados');document.location='../../../login' </script>";
    }

?>