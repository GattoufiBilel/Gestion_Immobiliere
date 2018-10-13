<?php
    
    class immobiliere {
        public $ref,$prop,$localite,$surface,$domaineusage,$nbpiece ; 
        
        function __construct($ref, $prop, $localite, $surface, $domaineusage, $nbpiece) {
            $this->ref = $ref;
            $this->prop = $prop;
            $this->localite = $localite;
            $this->surface = $surface;
            $this->domaineusage = $domaineusage;
            $this->nbpiece = $nbpiece;
            
        }
        
        function getRef() {
            return $this->ref;
        }

        function getProp() {
            return $this->prop;
        }

        function getLocalite() {
            return $this->localite;
        }

        function getSurface() {
            return $this->surface;
        }

        function getNbpiece() {
            return $this->nbpiece;
        }

        function getDomaineusage() {
            return $this->domaineusage;
        }

        function setRef($ref) {
            $this->ref = $ref;
        }

        function setProp($prop) {
            $this->prop = $prop;
        }

        function setLocalite($localite) {
            $this->localite = $localite;
        }

        function setSurface($surface) {
            $this->surface = $surface;
        }

        function setNbpiece($nbpiece) {
            $this->nbpiece = $nbpiece;
        }

        function setDomaineusage($domaineusage) {
            $this->domaineusage = $domaineusage;
        }



            
        
    }