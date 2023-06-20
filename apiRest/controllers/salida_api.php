<?php 
header('Content-Type: application/json');

require_once("../../backend/config/connect.php");
require_once("../../backend/models/salida.php");

$salida = new Salida();

$body = json_decode(file_get_contents("php://input"),true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos=$salida->obtainData();
        echo json_encode($datos);
        break;
    
    default:
        break;
}
?>