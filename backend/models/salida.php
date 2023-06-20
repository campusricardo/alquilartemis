<?php 
include_once "./backend/config/connect.php";

include_once "../connect.php";


class Salida extends Connect {
    
    private $salida_id;
    private $id_constructora;
    private $id_empleado;
    private $id_obra;
    private $id_inventario;//
    private $fecha_salida;
    private $subtotalPeso;
    private $placatransporte;
    private $observaciones;
    private $cantidad_salida;
    private $valorUnitario;
    private $fecha_standBye;
    private $estado;
    private $valorTotal;

    public function __construct($salida_id = "", $id_constructora = "", $id_empleado = "", $id_obra = "", $id_inventario = "", $fecha_salida ="", $subtotalPeso = 0, $placatransporte = "", $observaciones = "", $cantidad_salida = 0, $valorUnitario = 0, $fecha_standBye = "", $estado = 0, $valorTotal = 0, $dbCnx= ""){

        $this->salida_id = $salida_id;
        $this->id_constructora = $id_constructora;
        $this->id_empleado = $id_empleado;
        $this->id_obra = $id_obra;
        $this->id_inventario = $id_inventario;
        $this->fecha_salida = $fecha_salida;
        $this->subtotalPeso = $subtotalPeso;
        $this->placatransporte = $placatransporte;
        $this->observaciones = $observaciones;
        $this->cantidad_salida = $cantidad_salida;
        $this->valorUnitario = $valorUnitario;
        $this->fecha_standBye = $fecha_standBye;
        $this->estado = $estado;
        $this->valorTotal = $valorTotal;
        parent::__construct($dbCnx);
    }


    public function getsalida_id(){
        return $this->salida_id;
    }
////
    public function setsalida_id($salida_id){
        $this->salida_id = $salida_id;
    }

    public function getid_constructora(){
        return $this->id_constructora;
    }
////
    public function setid_constructora($id_constructora){
        $this->id_constructora = $id_constructora;
    }
    
    public function getid_empleado(){
        return $this->id_empleado;
    }
////
    public function setid_empleado($id_empleado){
        $this->id_empleado = $id_empleado;
    }

    public function getid_obra(){
        return $this->id_obra;
    }
////
    public function setid_obra($id_obra){
        $this->id_obra = $id_obra;
    }

    public function getid_inventario(){
        return $this->id_inventario;
    }
////
    public function setid_inventario($id_inventario){
        $this->id_inventario = $id_inventario;
    }


    public function getfecha_salida(){
        return $this->fecha_salida;
    }
////
    public function setfecha_salida($fecha_salida){
        $this->fecha_salida = $fecha_salida;
    }


    public function getsubtotalPesoa(){
        return $this->subtotalPeso;
    }
////
    public function setsubtotalPeso($subtotalPeso){
        $this->subtotalPeso = $subtotalPeso;
    }


    public function getplacatransporte(){
        return $this->placatransporte;
    }
////
    public function setplacatransporte($placatransporte){
        $this->placatransporte = $placatransporte;
    }



    public function getobservaciones(){
        return $this->observaciones;
    }
////
    public function setobservaciones($observaciones){
        $this->observaciones = $observaciones;
    }



    public function getcantidad_salida(){
        return $this->cantidad_salida;
    }
////
    public function setcantidad_salida($cantidad_salida){
        $this->cantidad_salida = $cantidad_salida;
    }



    public function getvalorUnitario(){
        return $this->valorUnitario;
    }
////
    public function setvalorUnitario($valorUnitario){
        $this->valorUnitario = $valorUnitario;
    }



    public function getfecha_standBye(){
        return $this->fecha_standBye;
    }
////
    public function setfecha_standBye($fecha_standBye){
        $this->fecha_standBye = $fecha_standBye;
    }



    public function getestado(){
        return $this->estado;
    }
////
    public function setestado($estado){
        $this->estado = $estado;
    }


    public function getvalorTotal(){
        return $this->valorTotal;
    }
////
    public function setvalorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
    }



    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO salida(id_constructora, id_empleado, id_obra, id_inventario, fecha_salida, subtotalPeso, placatransporte, observaciones , cantidad_salida, valorUnitario, estado , valorTotal ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
         $stm->execute([$this->id_constructora, $this->id_empleado, $this->id_obra,$this->id_inventario, $this->fecha_salida, $this->subtotalPeso, $this->placatransporte, $this->observaciones, $this->cantidad_salida, $this->valorUnitario, $this->estado, $this->valorTotal]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }

 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM salida");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
     
}
?>