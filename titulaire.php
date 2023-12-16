<?php

/*

UN TITULAIRE :
	un nom
	un prénom
	une date de naissance 
	une ville 
	l'ensemble de ses comptes bancaires.

*/

    class Titulaire{
        private string $_nom;
        private string $_prenom;
        private DateTime $_date_naissance; // tout ce qui concerne la date definir comme type "DateTime" !
        private string $_ville;
        private array $_comptesBancaire = [];


        public function __construct($nom, $prenom, $dateNaissance, $ville) { 
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_date_naissance = $dateNaissance;
            $this->_ville = $ville;
        }

        //--------------------------------------------------------

        public function __toString() {
            return $this->_nom." ".$this->_prenom." ".$this->
        }

        //--------------------------------------------------------



        //GET & SET
        public function getNom() {
            return $this->_nom;
        }
        public function setNom($nom) {
            return $this->_nom = $nom;
        }


        public function getPrenom() {
            return $this->_prenom;
        }
        public function setPrenom($prenom) {
            return $this->_prenom = $prenom;
        }


        public function getDateNaissance() {
            return $this->_date_naissance;
        }
        public function setDateNaissance($dateNaissance) {
            return $this->_date_naissance = $dateNaissance;
        }


        public function getVille() {
            return $this->_ville;
        }
        public function setVille($ville) {
            return $this->_ville = $ville;
        }


        public function getComptesBancaire() {
            return $this->_comptesBancaire;
        }
        public function setComptesBancaire($comptesBancaire) {
            return $this->_comptesBancaire = $comptesBancaire;
        }
        //------------------------------------------------------






































    }


?>