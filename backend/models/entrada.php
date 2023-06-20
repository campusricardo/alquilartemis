
<?php 
include_once "./backend/config/connect.php";

include_once "../connect.php";



class Entrada extends Connect {
    private $entrada_id;
    private $id_empleado;
    private $id_constructora;
    private $id_inventario;
    private $id_obra;
    private $entrada_cantidad;
    private $fecha_entreda;
    private $observaciones;

    public function __construct($entrada_id = 0 ,  $id_empleado = "", $id_constructora = 0, $id_inventario = 0, $id_obra = 0, $entrada_cantidad = 0,  $fecha_entreda = "", $observaciones = "", $dbCnx= ""){
        $this->entrada_id = $entrada_id;
        $this->id_empleado = $id_empleado;
        $this->id_constructora = $id_constructora;
        $this->id_inventario = $id_inventario;
        $this->id_obra = $id_obra;
        $this->entrada_cantidad = $entrada_cantidad;
        $this->fecha_entreda = $fecha_entreda;
        $this->observaciones = $observaciones;
        parent::__construct($dbCnx);
    }

    public function getIdEntrada(){
        return $this->entrada_id;
    }
////
    public function setIdEntrada($entrada_id){
        $this->entrada_id = $entrada_id;
    }
////
    public function getIdEmpleado(){
        return $this->id_empleado;
    }

    public function setIdEmpleado($id_empleado){
        $this->id_empleado = $id_empleado;
    }
////
    public function getIdConstructora(){
        return $this->id_constructora;
    }

    public function setIdConstructora($id_constructora){
        $this->id_constructora = $id_constructora;
    }
///////////////////////////////////////////////////////////////


    public function getid_inventario(){
        return $this->id_inventario;
    }

    public function setid_inventario($id_inventario){
        $this->id_inventario = $id_inventario;
    }
    ////

    ///////////////////////////////////////////////////////////////


    public function getid_obra(){
        return $this->id_obra;
    }

    public function setid_obra($id_obra){
        $this->id_obra = $id_obra;
    }
    ////
    
    ///////////////////////////////////////////////////////////////


    public function getentrada_cantidad(){
        return $this->entrada_cantidad;
    }

    public function setentrada_cantidad($entrada_cantidad){
        $this->entrada_cantidad = $entrada_cantidad;
    }
    ////


    public function getFechaDeEntrega(){
        return $this->fecha_entreda;
    }

    public function setFechaDeEntrega($fecha_entreda){
        $this->$fecha_entreda = $fecha_entreda;
    }
////
    public function getobservaciones(){
        return $this->observaciones;
    }

    public function setobservaciones($observaciones){
        $this->observaciones = $observaciones;
    }



    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO entrada(id_empleado, id_constructora, id_inventario, id_obra, entrada_cantidad, fecha_entreda, observaciones ) VALUES (?,?,?,?,?,?,?)");
         $stm->execute([$this->id_empleado, $this->id_constructora, $this->id_inventario, $this->id_obra, $this->entrada_cantidad, $this->fecha_entreda, $this->observaciones]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM entrada");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
 
     
     public function selectOne(){
         try {
             $stm = $this->dbCnx->prepare("SELECT * FROM entrada WHERE entrada_id=?");
             $stm-> execute([$this-> entrada_id]);
             return $stm-> fetchAll();
         } catch (Exception $e) {
             return $e-> getMessage();
         }
     }

}
?>