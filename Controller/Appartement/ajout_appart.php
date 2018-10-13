<?php

    require_once '../../config.php';
    require_once '../../Model/appartement.php';
    require_once '../../Model/Crud_Appartement.php';
    require_once '../../View/Appartement/ajout_appart.php';
    
    
    if ( isset($_POST['ajout'])) 
    {
        $ref = $_POST['ref'];
        $prop = $_POST['prop']; 
        $local = $_POST['local'] ; 
        $surf = $_POST['surf'] ; 
        $Du = $_POST['Du'] ; 
        $nbpiece = $_POST['nbpiece']; 
        $EspaceCommaun = $_POST['EspaceCommaun'] ; 
          
        $appart = new appartement($ref,$prop,$local,$surf,$Du,$nbpiece,$EspaceCommaun);  
        $crud_app = new CRUD_Appartement(); 
        
        $crud_app->ajout_appart($appart);
        
         header('Location: ../../info.php');
        
       // require_once '../../View/Appartement/liste.php';
       // header("refresh:5;url=../../View/Appartement/liste.php ") ; 
       // echo " Insertion effectue avec succes " ;
    }
    
   