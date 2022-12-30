<?php
require_once("src/ActionBdd.php"); 
class GetDataModel extends ActionBdd{
    public function __construct(){
        parent::__construct();
    }

    public function getData($table,$id){
        $req = $this->bdd->prepare("SELECT * FROM $table WHERE id = ? ") ;
        $req->execute(array($id));
        //Si le produit existe 
        if($req->rowCount()==1){
          $data = $req->fetchAll(PDO::FETCH_OBJ);
          return $data;
        }else {
          return false;
        }
        $req->closeCursor();
    }
}

?>