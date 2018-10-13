<?php

    class villa extends immobiliere {
        public  $nbetages ;
        
        
        public function __construct($ref, $prop, $localite, $surface, $nbpiece, $domaineusage,$nbetages) {
            parent::__construct($ref, $prop, $localite, $surface, $nbpiece, $domaineusage);
            $this->nbetages=$nbetages; 
        }
        
        
        function getNbetages() {
            return $this->nbetages;
        }

        function setNbetages($nbetages) {
            $this->nbetages = $nbetages;
        }


    }
