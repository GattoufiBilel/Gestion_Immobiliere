<?php
require_once '../../config.php';
require_once 'villa.php';

    class CRUD_Villa {
            private $connect;

            public function __construct() {
                $obj = new config() ;
                $this->connect=$obj->getConnexion() ;

            }
      public function liste_villa()
      {
          $sql = "select * from villa order by reference asc" ;
          $resultat = $this->connect->query($sql) ;
          return ($resultat->fetchAll()) ;
      }

      public function ajout_villa(villa $vill)
      {
          try {
          $ref = $vill->getRef();
          $prop = $vill->getProp();
          $localite = $vill->getLocalite();
          $surface = $vill->getSurface();
          $Dusage = $vill->getDomaineusage();
          $nbp = $vill->getNbpiece() ;
          $nbretage= $vill->getNbetages();
          $photo = $vill->getPhoto() ;


          $sql = " insert into villa values ($ref,'$prop','$localite',$surface, '$Dusage', $nbp, $nbretage ,'$photo') " ;
          $resultat = $this->connect->exec($sql);
          } catch (Exception $e)
          {
              echo " erreur  ".$e->getMessage();
          }
          return $resultat ;

      }



      public function update_villa(villa $vill)
      {
     
        $ref = $vill->getRef();
        $prop = $vill->getProp();
        $localite = $vill->getLocalite();
        $surface = $vill->getSurface();
        $Dusage = $vill->getDomaineusage();
        $nbp = $vill->getNbpiece() ;
        $nbretage= $vill->getNbetages();
        $photo = $vill->getPhoto() ;

        $sql = ' update villa SET proprietaire = "'.$prop.
                    '", localite = "'.$localite.'" , surface = "'.$surface.'" ,'
                  . 'domaineUsage = "'.$Dusage.'" , nbPieces = "'.$nbp.'" ,'
                  . 'nbEtages = "'.$nbretage.'"
                  , image_ville = "'.$photo.'"  where reference = "'.$ref.'"  ' ;

        $resultat = $this->connect->exec($sql) ;

        return $resultat ;

      }


      public function recupere_villa($ref)
      {
        $sql = " select * from villa where reference =" .$ref ;
        $resultat = $this->connect->query($sql) ;
        $res = $resultat->fetchAll();
        return ($res) ;
      }

      public function delete_villa($ref) 
      {
          $sql =" delete from villa where reference = ".$ref ; 
          $resultat = $this->connect->exec($sql) ; 
          return $resultat ; 
      }


    }
