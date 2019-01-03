<?php
    SESSION_start(); 
    require_once '../../config.php';
    require_once '../../Model/utilisateur.php';
    require_once '../../Model/Crud_Insciption.php';
    //require_once '../../View/Inscription/inscrit.php';


    if( isset($_POST['authentefier']))
    {
       if (!empty($_POST['user'])) 
          {
            $_SESSION['user'] = $_POST['user'] ; 
            $username =  htmlspecialchars($_POST['user']) ; 
            $password =  htmlspecialchars($_POST['mp']);
            $crud_compte = new Crud_Insciption() ; 
            $res = $crud_compte->chercher_user($username,$password) ; 
        
        
            if ($res == true )
                {
                    header('Location: ../../accueil.php') ; 
                    echo "<script> alert ('Bienenue') ; </script> " ; 
                }
            
            else 
                {  
                      require_once '../../View/Inscription/Seconnecter.php' ; 
                      echo "<h2> email ou password tapper incorect  </h2>" ;
                      echo "<script> alert ('email ou password tapper incorect ') ; </script> " ; 
                }
           }
         else 
          {
                echo "<h2> champs vide ! Re_essayer </h2>"; 
                require_once '../../View/Inscription/Seconnecter.php' ; 
                echo "<script> alert ('email ou password vider ') ; </script> " ; 
          }
       
        
    }