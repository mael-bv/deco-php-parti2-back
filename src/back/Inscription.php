<?php
require_once("src/ActionBdd.php"); 
class Inscription extends ActionBdd {

    public function __construct(){
        parent::__construct();
    }

    function inscriptionBdd($mail,$mdp){
        $req = $this->bdd->prepare("INSERT INTO admin (mail,motdepasse) VALUES (?,?)");
        $req->execute(array($mail,$mdp));
        $req->closeCursor();
    }
}

?>