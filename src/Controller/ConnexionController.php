<?php
require_once("src/ActionBdd.php"); 
class mailAndMdp extends Actionbdd {

    function __construct(){

        parent::__construct();
    }

    public function isConnected($mail,$mdp){

        
        $requser = $this->bdd->prepare("SELECT * FROM admin WHERE mail = ? AND motdepasse = ?");
        $result=$requser->execute(array($mail, $mdp));
        $userexist = $requser->rowCount();
        if($userexist == 1){
        $admin= $requser->fetch(PDO::FETCH_ASSOC);
            if($admin){
                $_SESSION['admin']=$admin;
            }else{
                die('nope');
                header("Location: identification.php");
            }
        }else{
            die('first nope');
            $erreur = 'mail ou mdp inccorect';
            var_dump("mail ou mdp faux");
            return $erreur;
        }
        }
    }

    

?>