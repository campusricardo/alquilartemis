<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["alquilar"])){
    require_once("../../models/salida.php");

    $salida = new Salida();
    $salida->setid_constructora($_POST['constructora']);
    $salida->setid_empleado($_POST['empleado']);
    $salida->setid_obra($_POST['obra']);
    $salida->setid_inventario($_POST['inventario']);
    $salida->setfecha_salida($_POST['fecha_salida']);
    $salida->setsubtotalPeso($_POST['subtotalPeso']);
    $salida->setplacatransporte($_POST['placatransporte']);
    $salida->setobservaciones($_POST['observaciones']);
    $salida->setcantidad_salida($_POST['cantidad_salida']);
    $salida->setvalorUnitario($_POST['valorUnitario']);
    $salida->setestado($_POST['estado']);
    $salida->setvalorTotal($_POST['valorTotal']);

    $salida-> AddData();

    echo "<script> alert('Los datos se guardaron correctamente'); document.location='../../../login'</script>";

}
?>