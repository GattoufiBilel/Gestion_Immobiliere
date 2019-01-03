<?php

    require_once '../../config.php';
    require_once '../../Model/Villa.php';
    require_once '../../Model/Crud_Villa.php';
    require_once '../../View/Villa/modif_villa.php';



    if (isset($_POST['modif']))
    {
        $ref = $_POST['ref'] ;
        $prop = $_POST['prop'];
        $local = $_POST['local'] ;
        $surf = $_POST['surf'] ;
        $Du = $_POST['Du'] ;
        $nbpiece = $_POST['nbpiece'];
        $nbEtages = $_POST['nbEtages'] ;



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

           echo "photo bien place".$photoModif ;

           $vill = new villa($ref , $prop, $local, $surf, $Du, $nbpiece, $nbEtages,$photoModif) ;
           $crud_villa = new CRUD_Villa() ;
           $crud_villa->update_villa($vill);
        //  require_once '../../View/villa/liste.php';
        header('Location: ../../View/Villa/liste.php');
    }
