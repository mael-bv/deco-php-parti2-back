<?php

class Checkout {

    public function mdpAndMail($localisation){
        
        if(!isset($_SESSION['mail']) && !isset($_SESSION['mdp']) && empty($_SESSION['mail']) && empty($_SESSION['mdp'])){
            header("Location: {$localisation}.php");
        }
    
}
}