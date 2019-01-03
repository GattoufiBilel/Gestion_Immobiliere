<?php
    
    require_once '../../config.php';
    require_once 'utilisateur.php';
    
    
    class Crud_Insciption {
    private $connect ; 
    
    function __construct() 
    {
        $obj = new config(); 
        $this->connect = $obj->getConnexion() ; 
    }
    
    
    public function ajouter_user(utilisateur $user) 
    {   
        $nom = $user->getNom(); 
        $prenom = $user->getPrenom(); 
        $login = $user->getLogin();
        $password = $user->getPassword(); 
        
        $sql = " INSERT INTO utilisateur (nom,prenom,login,password) VALUES ('$nom', '$prenom' , '$login' , '$password') " ; 
        $resultat = $this->connect->exec($sql) ; 
        return $resultat;
        
     }
     
     
     public function chercher_user($login,$password)  
     {
       $sql = ' select * from utilisateur where login="'.$login.'" and password="'.$password.'" ' ; 
       $res = $this->connect->query($sql); 
       return $res->fetchAll() ;  
     }
     
     
     
     public function tester($log , $mp) 
     {
         $rq = $this->chercher_user($login, $password) ; 
         if (  ($log == $rq['login']) and ($mp == $rq['mp'])  )
         {
             echo "user trouver" ; 
         }
         else {
             echo "user non trouver " ; 
         }
             
     }

}