<?php
require_once("src/back/AjoutModel.php"); 

class Message {


    public function message($submit,$check,$nom,$mail,$num,$message){
        $addBdd = new AjoutBdd();
        if(isset($submit)){
            if(isset($check)){
                if(isset($nom) && isset($mail) && isset($num) && isset($message)){
                    if(!empty($nom) && !empty($mail) && !empty($message)){
                        $email = filter_var($mail,FILTER_VALIDATE_EMAIL);
                        if($email){
                            $name = htmlspecialchars($nom);
                            $numero = htmlspecialchars($num);
                            $mess = htmlspecialchars($message);
                            $date = date("d.m.y");
                            $addBdd->addMessage($name,$email,$numero,$mess,$date,"messagerie");
                        }else {
                            echo "email non valide";
                        }
                    }
                }

            }else{
                echo "Accepter conditions de generalite";
            }
        }

    }



}

?>