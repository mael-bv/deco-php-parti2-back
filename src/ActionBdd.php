<?php

class ActionBdd
{
protected $bdd;
public function __construct()
    {
    $this->bdd =  new PDO('mysql:host=127.0.0.1;dbname=xnbienparticle', 'root' ,'');
    }


    public function is_admin(){
 if(isset($_SESSION['admin'])){
    return true;
 }

}
}



?>