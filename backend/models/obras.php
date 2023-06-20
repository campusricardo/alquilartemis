<?php 
include_once "./backend/config/connect.php";

include_once "../connect.php";



class Obra extends Connect {
    
    private $id_obra;
    private $nombre_obra;
    private $lugar_obra;

    public function __construct($id_obra = "", $nombre_obra = "", $lugar_obra = "", $dbCnx= ""){

        $this->id_obra = $id_obra;
        $this->nombre_obra = $nombre_obra;
        $this->lugar_obra = $lugar_obra;
        parent::__construct($dbCnx);
    }


    public function getid_obra(){
        return $this->id_obra;
    }
////
    public function setid_obra($id_obra){
        $this->id_obra = $id_obra;
    }

    public function getnombre_obra(){
        return $this->nombre_obra;
    }
////
    public function setnombre_obra($nombre_obra){
        $this->nombre_obra = $nombre_obra;
    }
    
    public function getlugar_obra(){
        return $this->lugar_obra;
    }
////
    public function setlugar_obra($lugar_obra){
        $this->lugar_obra = $lugar_obra;
    }


    public function AddData() {
        try {
         $stm = $this->dbCnx->prepare("INSERT INTO obras(nombre_obra, lugar_obra ) VALUES (?,?)");
         $stm->execute([$this->nombre_obra, $this->lugar_obra]);
        } catch (Exception $e) {
         return $e->getMessage();
     }
     }
 
 
 
     public function obtainData(){
         try {
             $stm = $this -> dbCnx -> prepare("SELECT * FROM obras");
             $stm -> execute();
             return $stm -> fetchAll();
         } catch (Exception $e) {
             return $e->getMessage();
         }
     }
 
     
     public function selectOne(){
         try {
             $stm = $this->dbCnx->prepare("SELECT * FROM obras WHERE id_obra=?");
             $stm-> execute([$this-> id_obra]);
             return $stm-> fetchAll();
         } catch (Exception $e) {
             return $e-> getMessage();
         }
     }

}
?>