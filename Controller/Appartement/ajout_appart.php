<?php

    require_once '../../config.php';
    require_once '../../Model/appartement.php';
    require_once '../../Model/Crud_Appartement.php';
    require_once '../../View/Appartement/ajout_appart.php';


    if ( isset($_POST['ajout']))
    {

        $ref = $_POST['ref'];
        $prop = $_POST['prop'];
        $local = $_POST['local'] ;
        $surf = $_POST['surf'] ;
        $Du = $_POST['Du'] ;
        $nbpiece = $_POST['nbpiece'];
        $EspaceCommaun = $_POST['EspaceCommaun'] ;


        //tester fichier
        if (isset($_FILES['photo']) and  $_FILES['photo']['error']==0 )
          {
            //tester la taille de fichier
              if($_FILES['photo']['size']<= 10000000)
              {
                //tester lextension de fichier
                  $infosfichier = pathinfo($_FILES['photo']['name']) ;
                  $extension_upload = $infosfichier['extension'] ;
                  $tab_extension = array ('jpg','jpeg','png','gif') ;
                  //tester la presence de extension
                  if (in_array($extension_upload,$tab_extension))
                  {
                    move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/'.basename($_FILES['photo']['name']) )  ;
                    echo "extension valide " ;
                  }
                  else {echo "extension non valide " ; }
              }
              else {echo "fichier gros "; }
          }

                  $photo = $_FILES['photo']['name'] ;

                   $appart = new appartement($ref,$prop,$local,$surf,$Du,$nbpiece,$EspaceCommaun,$photo);
                   $crud_app = new CRUD_Appartement();
                   $crud_app->ajout_appart($appart);
                   require_once '../../View/Appartement/liste.php';
                   //header('location: ../../View/Appartement/liste.php') ;
                   //header('Location: ../../info.php');
                 }
