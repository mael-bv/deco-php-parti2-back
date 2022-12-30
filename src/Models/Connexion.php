<?php
require_once("src/dataBase.php");
 require_once("src/ActionBdd.php"); 
 require_once("src/Controller/ConnexionController.php"); 
 
 class Connexion extends ActionBdd {
    
    

public function __construct(){
    parent::__construct();
}
    public function connexionAdmin($email,$motdepasse){
        $isconnect = new mailAndMdp();
            if(!empty($email) AND !empty($motdepasse)){
            $mail = htmlspecialchars($email);
            $mdp = sha1($motdepasse);
                $isconnect->isConnected($mail,$mdp);
                if($isconnect){
                    header("Location: centreControle.php");
                }else{
                    die("nope");
                    header("Location: identification.php");
                }
            }else{
                $erreur = "Veuillez remplir tous les champs !";
                return $erreur;
            }
    }
    
}
?>