<?php 
include_once "./backend/config/connect.php";

include_once "../connect.php";


class Inventario extends Connect {
    
    private $id_inventario;
    private $nombre_inventario;
    private $cantidad;

    public function __construct($id_inventario = "", $nombre_inventario = "", $cantidad = "", $dbCnx= ""){

        $this->id_inventario = $id_inventario;
        $this->nombre_inventario = $nombre_inventario;
        $this->cantidad = $cantidad;
        parent::__construct($dbCnx);
    }


    public function getid_inventario(){
        return $this->id_inventario;
    }
////
    public function setid_inventario($id_inventario){
        $this->id_inventario = $id_inventario;
    }

    public function getnombre_inventario(){
        return $this->nombre_inventario;
    }
////
    public function setnombre_inventario($nombre_inventario){
        $this->nombre_inventario = $nombre_inventario;
    }
    
    public function getcantidad(){
        return $this->cantidad;
    }
////
    public function setcantidad($cantidad){
        $this->cantidad = $cantidad;
    }


    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO inventario(nombre_inventario, cantidad ) VALUES (?,?)");
         $stm->execute([$this->nombre_inventario, $this->cantidad]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM inventario");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
 
     
     public function selectOne(){
         try {
             $stm = $this->dbCnx->prepare("SELECT * FROM inventario WHERE id_inventario=?");
             $stm-> execute([$this-> id_inventario]);
             return $stm-> fetchAll();
         } catch (Exception $e) {
             return $e-> getMessage();
         }
     }

}

?>