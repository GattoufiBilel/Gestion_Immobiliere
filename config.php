<?php
class config {
    function getConnexion()
    {
    $db="mysql:host=localhost;dbname=immo";
    $user="root";
    $pw="";
    $connexion=new PDO($db,$user,$pw);
    return $connexion;
    }

}


