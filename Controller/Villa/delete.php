<?php  
        require_once '../../config.php' ; 
        require_once '../../Model/villa.php'; 
        require_once '../../Model/Crud_Villa.php' ; 


        if (isset($_GET['id'])) 
        {
            $com = 2 ; 
            $ref = $_GET['id'] ; 

            $crud_villa = new Crud_Villa() ;
            $crud_villa->delete_villa($ref) ; 


            header('location: ../../View/Villa/liste.php'); 

        }

?> 
