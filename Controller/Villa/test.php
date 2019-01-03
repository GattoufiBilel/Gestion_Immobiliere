<?php

    require_once '../../config.php';
    require_once '../../Model/Crud_Villa.php';
    require_once '../../View/Villa/modif_villa.php';
    require_once '../../View/Villa/liste.php';


   if (isset($_GET['id']))
   {
     $ref =$_GET['id'];



    $obj=new CRUD_Villa($ref);
    $res = $obj->recupere_villa($ref);


   }
