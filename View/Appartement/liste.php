<?php
  
      require_once '../../Model/appartement.php';
      require_once '../../Controller/Appartement/liste.php';
      require_once '../../Model/immobiliere.php';
?>

<!Doctype html>
<html>
    <head>  
        <meta charset="utf-8">
        <title>  
            lISTE DES APPARTEMENST 
        </TITLE>
    </head>
    <body bgcolor="#b3b3ff">
        <h3 style="color: blue" >  Liste des appartements </h3> <hr> 
        <hr>
        <table border="1">
            <tr> 
                <th>reference</th><th>proprietaire</th><th>localite</th><th>surface</th><th>Domaine Usage</th><th>Nombre pieces</th><th>EspaceCommun</th>
                <th colspan="2">ACTION</th>
            </tr>
            
      
            <?php
                 echo "<tr>";
             
            foreach($lesapparts as $ligne)
              {          
                        echo"<td>".$ligne['reference']."</td>"; 
                        echo"<td>".$ligne['proprietaire']."</td>"; 
                        echo"<td>".$ligne['localite']."</td>";  
                        echo"<td>".$ligne['surface']."</td>";  
                        echo"<td>".$ligne['domaineUsage']."</td>";  
                        echo"<td>".$ligne['nbPieces']."</td>";  
                        echo"<td>".$ligne['EspaceCommun']."</td>"; 
                        
                        echo"<td><a href=../../View/modifier.php?id=$ligne[reference]>  UPDATE</a></td>";
                        echo"<td><a href=../../Controller/Appartement/delete.php?id=$ligne[0]> DELETE </a></td>";
                       
                echo"</tr>";
                
               }
                          
        ?>
            
            
        </table>
        
    </body> 
</html>
