<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    if (isset($_POST['devolver'])){

        require_once('../../models/entrada.php');
        $config = new Entrada();

        $config -> setIdEmpleado($_POST['empleado']);
        $config -> setIdConstructora($_POST['constructora']);
        $config -> setid_inventario($_POST['inventario']);
        $config -> setid_obra($_POST['obra']);
        $config -> setentrada_cantidad($_POST['entrada_cantidad']);
        $config -> setFechaDeEntrega($_POST['fecha_entreda']);
        $config -> setobservaciones($_POST['observaciones']);
        $config -> AddData();
        echo "<script>alert('datos guardados');document.location='../../../login' </script>";
    }

?>