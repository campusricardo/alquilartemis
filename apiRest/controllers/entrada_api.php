<?php 
header('Content-Type: application/json');

require_once("../../backend/config/connect.php");
require_once("../../backend/models/entrada.php");

$entrada = new Entrada();

$body = json_decode(file_get_contents("php://input"),true);

switch ($_GET['op']) {
    case 'GetAll':
        $datos=$entrada->obtainData();
        echo json_encode($datos);
        break;
    
    default:
        break;
}
?>