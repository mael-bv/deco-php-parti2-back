<?php
require_once('src/back/Inscription.php');

class InscriptionController {

function inscription($submit,$mail,$mdp){
    $insert = new Inscription();
    if(isset($submit)) {
        if(isset($mail) AND isset($mdp)){
            if(!empty($mail) AND !empty($mdp)){
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    $passwordSecurity = sha1($mdp);
                    $insert->inscriptionBdd($mail,$passwordSecurity);
                    header("Location: identification.php");
                } else{
                    echo "Mail non valide";
                }
            }
        }
    }
}

}
?>