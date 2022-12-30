<?php
require_once("src/ActionBdd.php"); 

class Affichage extends ActionBdd
{

public function __construct(){
    parent::__construct();
}

public function affichageEvery($table){
    $req = $this->bdd->prepare("SELECT * FROM $table ORDER BY id DESC") ;
      $req->execute();
      $data = $req->fetchAll(PDO::FETCH_OBJ);
      return $data;
      $req->closeCursor();
}

public function affichageAllImage($chemin){
    
    $dos = $chemin;
    $dir = opendir($dos);
    while($file = readdir($dir)){
        
    }
}

public function AfficheFile($table){
  $req = $this->bdd->query("SELECT name,url FROM $table") ;
  return $req;
}



public function afficheCard($table){
  $req = $this->bdd->query("SELECT * FROM $table ORDER BY id DESC");
  return $req;
}

public function afficheCardWithSearch($recherche){
 $req = $this->bdd->query('SELECT titre,description,image FROM cards WHERE titre LIKE "%'.$recherche.'%" ORDER BY id DESC ');
 return $req;
}

public function afficheMessage($table){
  $req = $this->bdd->query("SELECT * FROM $table ORDER BY id DESC");
  return $req;
}
/* function lister_images($repertoire){  
    if(is_dir($repertoire)){  
      if($iteration = opendir($repertoire)){  
        while(($fichier = readdir($iteration)) !== false){  
          if($fichier != "." && $fichier != ".."){ 
             $fichier_info = finfo_open(FILEINFO_MIME_TYPE);
             $mime_type = finfo_file($fichier_info, $repertoire.$fichier);
              if(strpos($mime_type, 'upload/') === 0){
                echo '<img src="'.$repertoire.$fichier.'" alt="">';
              }
           }  
        }  
        closedir($iteration);  
      }  
    }  
   }  */

}


?>