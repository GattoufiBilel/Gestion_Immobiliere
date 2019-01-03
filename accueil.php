<?php 
    session_start();
    require_once 'header.php'; 
?> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="../../css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.3.1.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery.js" ></script>
         
    </head>
    <body>
        
        <?php 
            if ( empty($_SESSION['user'] ) ) 
                {
                echo '<a href="http://localhost/GestionImmobiliere/View/Inscription/Seconnecter.php"> Connexion | </a>';  
                echo '<a href="http://localhost/GestionImmobiliere/View/Inscription/inscription.php"> Inscription | </h3>
                </a>';
                }
            else { 
              echo '<h3 style="color:brown" align="right"> welcome to my site  '.$_SESSION['user'].' </h3>'; 
                 
                }
                
         ?>
  
  
    
    <nav id='menu_nav'>  
        
      <div class="menu" >      
        <h2> <a href="http://localhost/GestionImmobiliere/index.php"> ACCUEIL </h2>  </a>

        <h2> <a href="Controller/Appartement/liste.php"> Liste des appartements</h2>  </a>

        <h2> <a href="Controller/Appartement/ajout_appart.php"> ajouter un apartement</h2>  </a>
         
         
        <h2> <a href="Controller/Villa/liste.php"> liste des villa </h2>  </a>
 
             
        <h2> <a href="Controller/Villa/ajout_villa.php"> ajouter un villa</h2>  </a>
        </div>
       
   </nav>

   
        <?php
        require_once "footer.php" ; 
        ?>

</body>


    
</html>





