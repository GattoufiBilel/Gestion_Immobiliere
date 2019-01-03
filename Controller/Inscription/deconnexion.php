<?php
session_start(); 


    session_destroy(); 
        echo " votre session a  expire " ; 
        echo "<script> alert ('deconnexion en cours ') ; </script> ";  
	    header('Refresh:2; http://localhost/GestionImmobiliere/View/Inscription/Seconnecter.php') ; 

    
   ?>

