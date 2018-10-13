<?php
class config {
    function getConnexion()
    {
    $db="mysql:host=localhost;dbname=gestion_imm";
    $user="root";
    $pw="";
    $connexion=new PDO($db,$user,$pw);
    return $connexion;
    }

}


