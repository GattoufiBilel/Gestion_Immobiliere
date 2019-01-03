<?php

    require_once '../../config.php';
    require_once '../../Model/Crud_Appartement.php';
    require_once '../../View/Appartement/modif_appart.php';
    require_once '../../View/Appartement/liste.php';
    //require_once '../../View/Appartement/modif_appart.php' ;

   if (isset($_GET['id']))
   {
     $ref =$_GET['id'];



    $obj=new CRUD_Appartement($ref);
    $res = $obj->recupere_appart($ref);


   }
