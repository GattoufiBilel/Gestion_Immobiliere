<?php

    require_once '../../config.php';
    require_once '../../Model/appartement.php';
    require_once '../../Model/Crud_Appartement.php';
    require_once '../../View/Appartement/modif_appart.php';



    if (isset($_POST['modif']))
    {
        $ref = $_POST['ref'] ;
        $prop = $_POST['prop'];
        $local = $_POST['local'] ;
        $surf = $_POST['surf'] ;
        $Du = $_POST['Du'] ;
        $nbpiece = $_POST['nbpiece'];
        $EspaceCommaun = $_POST['EspaceCommaun'] ;



        //tester fichier update
        if (isset($_FILES['photoModif']) and  $_FILES['photoModif']['error']==0 )
          {
            //tester la taille de fichier
              if($_FILES['photoModif']['size']<= 10000000)
              {
                //tester lextension de fichier
                  $infosfichier = pathinfo($_FILES['photoModif']['name']) ;
                  $extension_upload = $infosfichier['extension'] ;
                  $tab_extension = array ('jpg','jpeg','png','gif') ;
                  //tester la presence de extension
                  if (in_array($extension_upload,$tab_extension))
                  {
                    move_uploaded_file($_FILES['photoModif']['tmp_name'], '../../uploads/'.basename($_FILES['photoModif']['name']) )  ;
                    echo "extension valide " ;
                  }
                  else {echo "extension non valide " ; }

              }
              else {echo "fichier gros "; }

          }



          elseif (isset($_FILES['photoModif']) AND $_FILES['photoModif']['error'] == UPLOAD_ERR_NO_FILE)
              {
                  echo 'fichier inexistant';
              }
              elseif (isset($_FILES['photoModif']) AND $_FILES['photoModif']['error'] == UPLOAD_ERR_PARTIAL)
              {
                  echo 'fichier uploadé que partiellement';
              }
              elseif (isset($_FILES['photoModif']) AND $_FILES['photoModif']['error'] == UPLOAD_ERR_INI_SIZE)
              {
                  echo 'fichier trop gros';
              }
              elseif (isset($_FILES['photoModif']) AND $_FILES['photoModif']['error'] == UPLOAD_ERR_FORM_SIZE)
              {
                  echo 'fichier trop gros';
              }
              elseif (!isset($_FILES['photoModif']))
              {
                  echo 'pas de variable';
              }
              else
              {
                  echo 'probleme a l\'envoi';
              }


           $photoModif = ($_FILES['photoModif']['name'])  ;




        $appart = new appartement($ref,$prop,$local,$surf,$Du,$nbpiece,$EspaceCommaun,$photoModif);
        $Crud_appart = new CRUD_Appartement();
        $Crud_appart->update_appart($appart)  ;
        //require_once '../../View/Appartement/liste.php';
        header('Location: ../../View/Appartement/liste.php');
    }
