<?php require_once '../../header.php';?>

<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body style="background-color: cadetblue">
           <a href="http://localhost/GestionImmobiliere/accueil.php">Gestion Immobiliere</a>
        <div  id="app1">
          <fieldset>
              <legend style="color: #20B2AA"> Ajout Appartement </legend>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                   <table>
                       <tr><td> <label>Reference</label></td>
                           <td><input type="text" name="ref"  > </td>
                       <tr><td><label>proprietaire :</label></td>
                           <td><input type="text" name="prop" > </td>
                       <tr><td><label>localite : </label></td>
                           <td><input type="text" name="local" ></td>
                       <tr><td><label>Surface : </label></td>
                           <td><input type="text" name="surf" ></td>
                       <tr><td><label>Domaine Usage : </label></td>
                           <td><select name="Du">
                                <option value="Bureau">Bureau</option>
                                <option value="Domicile">Domicile</option>
                                <option value="commerciale">Commerciale</option>
                              </select> </td>


                    <tr><td><label>Nombre Pieces : </label></td>
                    <td><input type="text" name="nbpiece"></td>
                    </tr>
                <tr><td><label>Espace Commun : </label></td>
                    <td><input type="text" name="EspaceCommaun"></td>
                </tr>

                <tr><td><label>images : </label></td>
                    <td><input type="file" name="photo" id="photo"></td>
                </tr>



                <tr>
                    <td><input type="submit" name="ajout" value="ajouter"> </td>
                    <td><input type="reset" value="Efacer" name="rst"> </td>
                </tr>
                   </table>
               </form>
          </fieldset>


        </div>


    </body>
</html>
