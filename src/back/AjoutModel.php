<?php
require_once("src/ActionBdd.php"); 

class AjoutBdd extends ActionBdd {

    public function __construct(){
        parent::__construct();
    }

    public function addArticle($titre,$description,$date,$image,$bdd){
        $req = $this->bdd->prepare("INSERT INTO $bdd (titre,description,dating,image) VALUES (?,?,?,?)") ;
        $req->execute(array($titre,$description,$date,$image));
        $req->closeCursor();
    }
    
    public function addMessage($nom,$mail,$num,$mess,$date,$bdd){
        $req = $this->bdd->prepare("INSERT INTO $bdd (nom,mail,numero,message,datee) VALUES (?,?,?,?,?)");
        $req->execute(array($nom,$mail,$num,$mess,$date));
        $req->closeCursor();
    }

    public function addImages($name,$img,$bdd){
        $req = $this->bdd->prepare("INSERT INTO $bdd (name,url) VALUES (?,?)");
        $req->execute(array($name,$img));
        $req->closeCursor();

    }
  

    public function addCard($titre,$description,$date,$image,$bdd){
        $req = $this->bdd->prepare("INSERT INTO $bdd (titre,description,date,image) VALUES (?,?,?,?)");
        $req->execute(array($titre,$description,$date,$image));
        $req->closeCursor();
    }
}

?>