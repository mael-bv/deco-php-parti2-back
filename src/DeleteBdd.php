<?php

 class DeleteBdd extends ActionBdd {

public function __construct(){
    
}

public function deleteMessage(){
    $pdoStat = $bdd->prepare('DELETE FROM messag WHERE id=:numbe LIMIT 1');
    $pdoStat->bindValue(':numbe', $_GET['numCont'], PDO::PARAM_INT);
    $executeIsOk = $pdoStat->execute();
    return $executeIsOk;
}

}