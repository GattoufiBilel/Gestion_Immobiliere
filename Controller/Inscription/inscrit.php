<?php

    require_once '../../config.php';
    require_once '../../Model/utilisateur.php';
    require_once '../../Model/Crud_Insciption.php';
    require_once '../../View/Inscription/inscription.php';
    
    
    if (isset($_POST['enrg'])) 
    {   
        $nom      =   htmlspecialchars($_POST['nom']) ; 
        $prenom   =   htmlspecialchars($_POST['prenom']); 
        $user     =   htmlspecialchars($_POST['mail']) ; 
        $password =   htmlspecialchars($_POST['password']) ; 
        
        
        $compte = new utilisateur($nom,$prenom ,$user ,$password) ; 
        $crud_compte = new Crud_Insciption();
        $crud_compte->ajouter_user($compte); 
        
        echo " Inscription bien Enregistre " ; 
        echo "<script> alert('Binevenue inscription validé') ; </script> " ; 
	    header('Refresh:2; http://localhost/GestionImmobiliere/View/Inscription/Seconnecter.php') ;

    }
    
        