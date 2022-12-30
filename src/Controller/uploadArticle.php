<?php
require_once("src/back/AjoutModel.php");
class UploadArticle{

    public function uploadArticle($submit,$titre,$description,$date,$image){
        $addBdd = new AjoutBdd();
            if(isset($submit)){
                if(isset($titre) && isset($description) && isset($date) && isset($image)){
                    if(!empty($titre) && !empty($description) && !empty($date) && !empty($image)){
                       $img_nom = $image['name'];
                       $tmp_nom = $image['tmp_name'];
                       $time = time();
                       $nouveau_nom = $time.$img_nom;
                       $deplace_img = move_uploaded_file($tmp_nom,"img_article/".$nouveau_nom);
                       if($deplace_img){
                        $desc = htmlspecialchars($description);
                        $title = htmlspecialchars($titre);
                        $datee = htmlspecialchars($date);
                        $addBdd->addArticle($title,$desc,$datee,$nouveau_nom,"article");
                        header("Location: ajout.php");
                       }else{


                       }

                    }
                }
            }
    }
}


?>