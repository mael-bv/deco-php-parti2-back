<?php
require_once("src/ActionBdd.php"); 
class UpdateModel extends ActionBdd
{
    public function __construct(){
        parent::__construct();
    }

    public function updateDataArticle($table,$titre,$description,$date,$img,$id){
        var_dump("commencement");
        $req = $this->bdd->prepare("UPDATE  $table SET titre = ?, description = ?, dating = ?, image = ? WHERE id = ? ") ;
      $req->execute(array($titre,$description,$date,$img,$id));
      var_dump("commencement");
      $req->closeCursor();
    }

    public function updateDataWithoutImgArticle($table,$titre,$description,$date,$id){
        var_dump("commencement");
        $req = $this->bdd->prepare("UPDATE  $table SET titre = ?, description = ?, dating = ? WHERE id = ? ") ;
      $req->execute(array($titre,$description,$date,$id));
      var_dump("commencement");
      $req->closeCursor();
    }

    public function updateDataCard($table,$titre,$description,$img,$id){
      var_dump("commencement");
      $req = $this->bdd->prepare("UPDATE  $table SET titre = ?, description = ?, image = ? WHERE id = ? ") ;
    $req->execute(array($titre,$description,$img,$id));
    var_dump("commencement");
    $req->closeCursor();
  }

  public function updateDataWithoutImgCard($table,$titre,$description,$id){
    var_dump("commencement");
    $req = $this->bdd->prepare("UPDATE  $table SET titre = ?, description = ? WHERE id = ? ") ;
    $req->execute(array($titre,$description,$id));
    var_dump("commencement");
  $req->closeCursor();
}
}
 
?>