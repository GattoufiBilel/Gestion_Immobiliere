<?php
  require_once '../../Model/villa.php';
  require_once '../../Controller/Villa/update.php';
  require_once '../../Controller/Villa/test.php';
  require_once '../../Controller/Villa/liste.php' ;

  if ((isset($_GET['id'])))
      {
        $ref = $_GET['id'] ;
      }


?>

<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body style="background-color: #F0E68C">
        <a href="http://localhost/GestionImmobiliere/accueil.php">Gestion Immobiliere</a>
        <div  id="app1">
          <fieldset>
              <legend style="color: #20B2AA"> Ajouter Villa </legend>

                <?php foreach ($res as $var) {  ?>

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                   <table>
                       <tr><td> <label>Reference</label></td>
                           <td><input type="text" name="ref" value="<?php echo $ref ; ?>" > </td>
                       <tr><td><label>proprietaire :</label></td>
                           <td><input type="text" name="prop" value="<?php echo $var['proprietaire'] ; ?>" > </td>
                       <tr><td><label>localite : </label></td>
                           <td><input type="text" name="local" value="<?php echo $var['localite'] ; ?>"></td>
                       <tr><td><label>Surface : </label></td>
                           <td><input type="text" name="surf" value="<?php echo $var['surface'] ; ?>"></td></tr>

                       <tr><td><label>Domaine Usage : </label></td>
                           <td><select name="Du">
                                <option value="Bureau">Bureau</option>
                                <option value="Domicile">Domicile</option>
                                <option value="commerciale">Commerciale</option>
                               </select> </td></tr>

                        <tr><td><label>Nombre Pieces : </label></td>
                            <td><input type="text" name="nbpiece" value="<?php echo $var['nbPieces'] ; ?>"></td></tr>
                     <tr><td><label>Nombres Etages : </label></td>
                    <td><input type="text" name="nbEtages"></td>
                </tr>

                <tr><td><label>images : </label></td>
                    <td><input type="file" name="photoModif" id="photoModif" value="<?php echo $var['image_ville'] ; ?>"></td>
                </tr>


                <tr>
                    <td><input type="submit" name="modif" value="modifier"> </td>
                    <td><input type="reset" value="Efacer" name="rst"> </td>
                </tr>

                    <?php } ?>

                   </table>
               </form>
          </fieldset>


        </div>


    </body>
</html>
