<?php
require_once("src/ActionBdd.php");
require_once("src/back/DeleteModel.php");
class Delete extends ActionBdd{

    public function __construct(){
        parent::__construct();
    }

    public function delete($submit,$id){
        $supprimer = new DeleteModel();
        if(isset($submit)){
            if(isset($id)){
                if(!empty($id)){
                    $identi = htmlspecialchars($id);
                    var_dump("construction");
                    $supprimer->deleteBdd("article", $identi);
                    header("Location: delete.php");
                }
            }
        }
    }

}

?>