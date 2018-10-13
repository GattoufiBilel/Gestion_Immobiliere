<?php

    require_once '../../config.php';
    require_once '../../Model/appartement.php';
    require_once '../../Model/Crud_Appartement.php';
   
    
    if ( isset($_post['ajout'])) 
    {
        $ref = $_post['ref'];
        $prop = $_post['prop']; 
        $local = $_post['local'] ; 
        $surf = $_post['surf'] ; 
        $Du = $_post['Du'] ; 
        $nbpiece = $_post['nbpiece']; 
        $EspaceCommaun = $_post['EspaceCommaun'] ; 
          
        $appart = new appartement($ref,$prop,$local,$surf,$Du,$nbpiecen,$EspaceCommaun);  
        $crud_app = new CRUD_Appartement(); 
        $crud_app->ajout_appart($appart);
        
        header('Location: index.php');
                
    }
    
   