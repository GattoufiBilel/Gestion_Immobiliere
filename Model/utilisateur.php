<?php

    class utilisateur {
        private  $id_session, $nom , $prenom , $login , $password ; 
        static   $cpt = 100 ; 
        public function __construct($nom , $prenom , $login, $password) {
            
            
            $this->nom = $nom  ; 
            $this->prenom = $prenom ; 
            $this->login = $login ;
            $this->password = $password; 
      
        }
        
        function getId_session() {
            return $this->id_session;
        }

        function setId_session($id_session) {
            $this->id_session = $id_session;
        }

        
                        
        function getNom() {
            return $this->nom;
        }

        function getPrenom() {
            return $this->prenom;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

                
        function getLogin() {
            return $this->login;
        }

        function getPassword() {
            return $this->password;
        }

        function setLogin($login) {
            $this->login = $login;
        }

        function setPassword($password) {
            $this->password = $password;
        }


    }