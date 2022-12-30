<?php
require_once("src/ActionBdd.php"); 

class DeleteModel extends ActionBdd {
  
    public function __construct(){
        parent::__construct();
    }

    public function deleteBdd($table,$id){
        $req = $this->bdd->prepare("DELETE  FROM $table WHERE id = ?") ;
        $req->execute(array($id));
        var_dump("supprimer");
    }

    public function deleteFile($table,$url){
        $req = $this->bdd->prepare("DELETE  FROM $table WHERE url = ?") ;
        $req->execute(array($url));
        header("Location: ajoutImage.php");
    }

    public function deleteMess($id,$table){
        $req = $this->bdd->prepare("DELETE  FROM $table WHERE id = ?") ;
        $req->execute(array($id));
        header("Location: messagerie.php");
    }

}


?>