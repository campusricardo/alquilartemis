<?php 
include_once "./backend/config/connect.php";

include_once "../connect.php";




class Constructora extends Connect {
    
    private $id_constructora;
    private $nombre_constructora;
    private $telefono_constructora;

    public function __construct($id_constructora = "", $nombre_constructora = "", $telefono_constructora = "", $dbCnx= ""){

        $this->id_constructora = $id_constructora;
        $this->nombre_constructora = $nombre_constructora;
        $this->telefono_constructora = $telefono_constructora;
        parent::__construct($dbCnx);
    }


    public function getid_constructora(){
        return $this->id_constructora;
    }
////
    public function setid_constructora($id_constructora){
        $this->id_constructora = $id_constructora;
    }

    public function getnombre_constructora(){
        return $this->nombre_constructora;
    }
////
    public function setnombre_constructora($nombre_constructora){
        $this->nombre_constructora = $nombre_constructora;
    }
    
    public function gettelefono_constructora(){
        return $this->telefono_constructora;
    }
////
    public function settelefono_constructora($telefono_constructora){
        $this->telefono_constructora = $telefono_constructora;
    }


    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO constructoras(nombre_constructora, telefono_constructora ) VALUES (?,?)");
         $stm->execute([$this->nombre_constructora, $this->telefono_constructora]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM constructoras");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
 
     
     public function selectOne(){
         try {
             $stm = $this->dbCnx->prepare("SELECT * FROM constructoras WHERE id_constructora=?");
             $stm-> execute([$this-> id_constructora]);
             return $stm-> fetchAll();
         } catch (Exception $e) {
             return $e-> getMessage();
         }
     }

}
?>