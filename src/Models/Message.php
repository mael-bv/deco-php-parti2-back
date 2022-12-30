<?php
require_once('src/dataBase.php');
require_once('src/Models/Checkout.php');

class Message {

    public function printMessage(){
        $bdd = getPdo();
/* 
        if(!isset($_SESSION['mail']) && !isset($_SESSION['mdp']) && empty($_SESSION['mail']) && empty($_SESSION['mdp'])){
            header("Location: recrutement.php");
        } */
        $check = mdpAndMail("recrutement");
        $pdoStat = $bdd->prepare('SELECT * FROM messag ORDER BY `messag`.`id` DESC');
        $executeIsOk = $pdoStat->execute();
        
        $message = $pdoStat->fetchAll();
        return $message;
    }


}