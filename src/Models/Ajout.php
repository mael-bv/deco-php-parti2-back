<?php
require_once("src/ActionBdd.php"); 
require_once("src/back/AjoutModel.php"); 

class Ajout extends ActionBdd {


    public function __construct(){
        parent::__construct();
    }

    public function addBdd($titre,$description,$date,$image){
        $ajout = new AjoutBdd();
            if(isset($titre) AND isset($description) AND isset($date)  AND isset($image)){
                if(!empty($titre) AND !empty($description)  AND !empty($date) AND !empty($image)){
                    $title = htmlspecialchars($titre);
                    $desc = htmlspecialchars($description);
                    $dat = htmlspecialchars($date);
                    $img = htmlspecialchars($image);
                    var_dump("avant traitement");
                    $ajout->addForm($title,$desc,$dat,$img);
                }else {
                    $erreur ="Veuillez remplir tout les champs";
                    echo $erreur;
                }

            }else {
                $erreur = "Veuillez renseigner tout les champs";
                echo $erreur;
            }
        }
    }

?>