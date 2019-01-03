<?php

require_once '../../config.php';
require_once '../../Model/Crud_Insciption.php';
require_once '../../View/Inscription/Seconnect.php';

   
        $username = $_POST['user'] ; 
        $password = $_POST['mp'] ;
    
       $CRUD_compte = new Crud_Insciption(); 
       $res = $CRUD_compte->chercher_user($username);
    
    //require_once 'modifier.php' ;  
   // header("location:../view/liste.php");
 
    


