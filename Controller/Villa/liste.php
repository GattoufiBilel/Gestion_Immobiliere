<?php
    
    require_once    '../../config.php';
    require_once    '../../Model/villa.php';
    require_once    '../../Model/immobiliere.php';
    require_once    '../../Model/Crud_Villa.php';
    
    
    $crud_vll = new CRUD_Villa() ; 
    $lesvilla = $crud_vll->liste_villa() ; 
    
            
    
   require_once '../../View/Villa/liste.php';  
