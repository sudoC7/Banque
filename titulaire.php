<?php
/*
UN TITULAIRE :
	un nom
	un prénom
	une date de naissance 
	une ville 
	l'ensemble de ses comptes bancaires.

    Afficher toutes les informations d'un titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui-ci.

*/

    class Titulaire{
        private string $_nom;
        private string $_prenom;
        private DateTime $_date_naissance;
        private string $_ville;
        private array $_comptesBancaire = [];


        public function __construct($nom, $prenom, $dateNaissance, $ville) { 
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_date_naissance = new DateTime($dateNaissance); 
            $this->_ville = $ville;
            $this->_comptesBancaire = [];
        }

        //------------------FONCTIONS PERSONNALISÉES--------------
        

        public function __toString() {
            return "M.".$this->_nom." ".$this->_prenom;
        }
        
        // Fonction AJOUT DE COMPTE BANCAIRE

        public function addBanque(Banque $comptesBancaire) {
            $this->_comptesBancaire[] = $comptesBancaire;
        }

        // Fonction AFFICHE INFO TITUALIRE
        
        public function afficherInfoTitulaire() {
            $result = "<h2><u>Titulaire</u></h2> Nom et Prenom : $this<br> Age : 
            ".$this->_date_naissance->diff($to = new DateTime('today'))->y." ans <br> Comptes Bancaire :<br> ";

            foreach ($this->_comptesBancaire as $comptesBancaire) {
                $result .= "<b>".$comptesBancaire->getLibelle()."</b><br>";
            }

            return $result;
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
        //-------------------------------------------------

    }


?>