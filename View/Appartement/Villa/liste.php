<?php
      require_once '../../header.php';
      require_once '../../Model/villa.php';
      require_once '../../Model/immobiliere.php';
      require_once '../../Controller/Villa/liste.php';
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            lISTE DES Villa
        </TITLE>
    </head>
    <body bgcolor="#F0E68C">
        <a href="http://localhost/GestionImmobiliere/accueil.php">Gestion Immobiliere</a>
        <h3 style="color: #20B2AA" >  Liste des villa  </h3> <hr>

        <table border="1">
            <tr>
                <th>reference</th><th>proprietaire</th><th>localite</th><th>surface</th><th>Domaine Usage</th><th>Nombre pieces</th><th>Nombre Etage</th>
                <th>Photos</th>
                <th colspan="2">ACTION</th>
            </tr>


            <?php
                 echo "<tr>";

            foreach($lesvilla as $ligne)
              {
                        echo"<td>".$ligne['reference']."</td>";
                        echo"<td>".$ligne['proprietaire']."</td>";
                        echo"<td>".$ligne['localite']."</td>";
                        echo"<td>".$ligne['surface']."</td>";
                        echo"<td>".$ligne['domaineUsage']."</td>";
                        echo"<td>".$ligne['nbPieces']."</td>";
                        echo"<td>".$ligne['nbEtages']."</td>";
                        echo"<td> <img src ='../../uploads/".$ligne['image_ville']." ' height='200' width='200'> </td>";
                        
                        echo"<td><a href=../../View/Villa/modif_villa.php?id=$ligne[reference]>  UPDATE</a></td>";
                        echo"<td><a href=../../Controller/Villa/delete.php?id=$ligne[0]> DELETE </a></td>";

                echo "</tr>";

               }

        ?>
        </table>
        <footer>

        </footer>
    </body>
</html>
