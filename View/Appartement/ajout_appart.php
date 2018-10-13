<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
    </head>
    <body style="background-color: greenyellow">
        <div  id="app1">
          <fieldset> 
              <legend> Ajout Appartement </legend>
               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
                   <table>               
                       <tr><td> <label for="ref">Reference</label></td>
                           <td><input type="text" name="ref" > </td>
                       <tr><td><label for="prop">proprietaire :</label></td>
                           <td><input type="text" name="prop" > </td>
                       <tr><td><label for="local">localite : </label></td>
                           <td><input type="text" name="local" ></td> 
                       <tr><td><label for="surf">Surface : </label></td>
                           <td><input type="text" name="surf" ></td>
                       <tr><td><label for="local">Domaine Usage : </label></td>
                <tr><td><select name="Du"form="domaine_usage"> 
                    <option value="Bureau">Bureau</option>
                    <option value="Domicile">Domicile</option>
                    <option value="commerciale">Commerciale</option>
                </select>
                    </td>
                     <tr><td><label for="nombrep">Nombre Pieces : </label></td>
                    <td><input type="text" name="nbpiece"></td>
                    </tr>
                <tr><td><label for="Espace_Commun">Espace Commun : </label></td>
                    <td><input type="text" name="EspaceCommaun"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="ajouter" name="ajout"> </td>
                    <td><input type="reset" value="Efacer" name="rst"> </td>
                </tr>
                   </table>
               </form>     
          </fieldset>
         
        
    </div>
    </body>
</html>