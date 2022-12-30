<?php
require_once("src/back/Affichage.php");

class Recherche{

    public function recherche($submit,$rech){
        $value = new Affichage();
        //$value->afficheCard('cards');
        if(isset($submit)){
            if(isset($rech)){
                if(!empty($rech)){
                    $recherche = htmlspecialchars($rech);
                    $data = $value->afficheCardWithSearch($recherche);
                    return $data;
                }else{
                    $data = $value->afficheCard("cards");
                    return $data;
                }
            }
            
        }

    }


}

?>