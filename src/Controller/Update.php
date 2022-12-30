<?php
require_once("src/ActionBdd.php");
require_once("src/back/UpdateModel.php");
 class Update extends ActionBdd{
    public function __construct(){
        parent::__construct();
    }

    public function updateArticle($submit,$titre,$decr,$date,$image,$id)
    {

        $update = new UpdateModel();
        if(isset($submit)){
            if(isset($titre) AND isset($decr) AND isset($date)){
                if(!empty($titre) AND !empty($decr) AND !empty($date)){
                    $title = htmlspecialchars($titre);
                    $description = htmlspecialchars($decr);
                    $dat = htmlspecialchars($date);
                    $img_nom = $image['name'];
                    if($img_nom == null){
                        $update->updateDataWithoutImgArticle("article",$title,$description,$dat,$id);
                        header("Location: ajout.php");
                    }else {
                        $tmp_nom = $image['tmp_name'];
                        $time = time();
                        $nouveau_nom = $time.$img_nom;
                        $deplace_img = move_uploaded_file($tmp_nom,"img_article/".$nouveau_nom);
                        if($deplace_img){
                            $update->updateDataArticle("article",$title,$description,$dat,$nouveau_nom,$id);
                            header("Location: ajout.php");
                        }
                    }
                }
            }
        }
    }


    
    public function updateCard($submit,$titre,$decr,$image,$id)
    {
        $update = new UpdateModel();
        if(isset($submit)){
            if(isset($titre) AND isset($decr)){
                if(!empty($titre) AND !empty($decr)){
                    $title = htmlspecialchars($titre);
                    $description = htmlspecialchars($decr);
                    $img_nom = $image['name'];
                    if($img_nom == null){
                        $update->updateDataWithoutImgCard("cards",$title,$description,$id);
                        header("Location: ajoutCard.php");
                    }else {
                        $tmp_nom = $image['tmp_name'];
                        $time = time();
                        $nouveau_nom = $time.$img_nom;
                        $deplace_img = move_uploaded_file($tmp_nom,"img_card_bdd/".$nouveau_nom);
                        if($deplace_img){
                            $update->updateDataCard("cards",$title,$description,$nouveau_nom,$id);
                            header("Location: ajoutCard.php");
                        }
                    }
                }
            }
        }
    }
}

?>