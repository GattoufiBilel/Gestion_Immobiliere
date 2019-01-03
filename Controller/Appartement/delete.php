<?php
    require_once '../../config.php';
    require_once '../../Model/appartement.php';
    require_once '../../Model/Crud_Appartement.php';
    
    
    if ( isset($_GET['id'])) 
    {
        $com = 2 ; 
        $ref = $_GET['id'] ;
        
        $crud_app = new CRUD_Appartement();  
        $crud_app->delete_appart($ref) ; 
        
         header('Location: ../../info.php');
        
        
        
    }
