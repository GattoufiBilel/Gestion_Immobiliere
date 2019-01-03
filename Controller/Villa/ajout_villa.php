<?php

    require_once '../../config.php';
    require_once '../../Model/villa.php';
    require_once '../../Model/Crud_Villa.php';
    require_once '../../View/Villa/ajout_villa.php';


  if ( isset($_POST['ajoutt']))
    {
        $ref = $_POST['ref'];
        $prop = $_POST['prop'];
        $local = $_POST['local'] ;
        $surf = $_POST['surf'] ;
        $Du = $_POST['Du'] ;
        $nbpiece = $_POST['nbpiece'];
        $nbEtages = $_POST['nbEtages'] ;


    //tester le fichier
        if (isset($_FILES['photo']) and $_FILES['photo']['error'] == 0 )
          {
         // tester la taille de fichier
              if ($_FILES['photo']['size'] <= 10000000 )
                {
             // recupperer l'extension et tester
                    $infosfichier = pathinfo($_FILES['photo']['name']) ;
                    $extension_upload = $infosfichier['extension'] ;
                    $tab_extension = array('jpg','jpeg','gif','png') ;

                    if (in_array($extension_upload,$tab_extension))
                        {
                     // valide le fichier et le stocker
                            move_uploaded_file ( $_FILES['photo']['tmp_name'] , '../../uploads/'.basename($_FILES['photo']['name']) );
                     //echo "<script> alert ('fichier bien recue') ; " ;
                            echo " extension correcte ! fichier enregistre   " ;
                        }
                        else
                            {echo " extension non autorisee"; }

                }
                else
                    {echo " taille fichier non accepter" ;}

            }

            elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE)
                {
                    echo 'fichier inexistant';
                }
                elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_PARTIAL)
                {
                    echo 'fichier uploadé que partiellement';
                }
                elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_INI_SIZE)
                {
                    echo 'fichier trop gros';
                }
                elseif (isset($_FILES['photo']) AND $_FILES['photo']['error'] == UPLOAD_ERR_FORM_SIZE)
                {
                    echo 'fichier trop gros';
                }
                elseif (!isset($_FILES['photo']))
                {
                    echo 'pas de variable';
                }
                else
                {
                    echo 'probleme a l\'envoi';
                }


             $photo = ($_FILES['photo']['name'])  ;

          // echo "<br> $photo <br>" ;


         $vill = new villa($ref, $prop, $local, $surf, $Du, $nbpiece, $nbEtages,$photo) ;
         $crud_villa = new CRUD_Villa() ;
         $crud_villa->ajout_villa($vill);

        require_once '../../View/Villa/liste.php';
        //    header('Location: ../../info.php');


}
