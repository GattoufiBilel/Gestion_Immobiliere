<?php
    
    require_once    '../../config.php';
    require_once    '../../Model/Crud_Appartement.php';
    require_once    '../../Model/appartement.php';
    require_once    '../../Model/immobiliere.php';
    
    
    $crud_appart = new CRUD_Appartement();
    $lesapparts = $crud_appart->liste_appartement(); 
    
   require_once '../../View/Appartement/liste.php';  
