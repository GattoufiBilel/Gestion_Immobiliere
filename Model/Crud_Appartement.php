<?php
require_once '../../config.php';
require_once 'appartement.php';
    
    class CRUD_Appartement {
            private $connect;
            
            public function __construct() {
                $obj = new config() ; 
                $this->connect=$obj->getConnexion() ;
               
            }
      public function liste_appartement() 
      {
          $sql = "select * from appartement" ; 
          $resultat = $this->connect->query($sql) ; 
          return ($resultat->fetchAll()) ;
      }
      
      public function ajout_appart(appartement $appart)
      {
          $ref = $appart->getRef(); 
          $prop = $appart->getProp(); 
          $localite = $appart->getLocalite();
          $surface = $appart->getSurface(); 
          $Dusage = $appart->getDomaineusage(); 
          $nbp = $appart->getNbpiece() ; 
          $SurfaceEspacecommun = $appart->getSurfaceespacecommun(); 
          
          
          $sql = " insert into appartement values ($ref,'$prop','$localite',$surface,'$Dusage',$nbp,$SurfaceEspacecommun)" ; 
          $resultat = $this->connect->exec($sql);
          return $resultat ;
          
      }
      
      
      public function delete_appart($ref) 
      {
          $sql = " delete from appartement where reference =".$ref ; 
          $resultat = $this->connect->exec($sql) ;
          
          return $resultat ; 
      }
              
     
      
      
    }