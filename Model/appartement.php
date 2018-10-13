<?php
   require_once 'immobiliere.php';   
    
    class appartement extends immobiliere {
        public $surfaceespacecommun ;
        
        public function __construct($ref, $prop, $localite, $surface, $domaineusage ,$nbpiece,$surfaceespacecommun)
        {
            parent::__construct($ref, $prop, $localite, $surface, $domaineusage, $nbpiece );
            $this->surfaceespacecommun=$surfaceespacecommun; 
        }
   
        
        public function getSurfaceespacecommun() {
            return $this->surfaceespacecommun;
        }
        
        function setSurfaceespacecommun($surfaceespacecommun) {
            $this->surfaceespacecommun = $surfaceespacecommun;
        }


    }
   