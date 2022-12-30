<?php


/**
 * Retourne une connexion a la base de donnée
 * @return PDO
 */
 
function getPdo() : PDO{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=xnbienparticle', 'root' ,'root');
    return $bdd;
}

