<?php
/*
COMPTE BANCAIRE :
	un libellé (compte courant, livret A...)
	un solde initial
	une devise monétaire
	un titulaire unique

    Afficher toutes les informations d'un compte bancaire, notamment le nom / prenom du titulaire du compte

SUR UN COMPTE BANCAIRE, on doit pouvoir : 
	créditer le compte de X euros
	débiter le compte de X euros
	effectuer un virement d'un compte à l'autre

*/

    class Banque {
       
        private string $_libelle;
        private string $_solde;
        private string $_devise;
        private Titulaire $_client; // Objet Titulaire //




        public function __construct($libelle, $solde, $devise, Titulaire $client) {
            
            $this->_libelle = $libelle; 
            $this->_solde = $solde; 
            $this->_devise = $devise;
            $this->_client = $client; // Objet Titulaire 
            $this->_client->addBanque($this); // Objet Titulaire $this --> représente l'objet Banque, cad a chaque fois que je vais crée un objet banque il va se rajouter dans la fonction 'addBanque()' avec '$this'
            
        }
        
        //------------------FONCTIONS PERSONNALISÉES--------------

    
        public function infoCompte() {
            echo $this." au solde : ".$this->_solde." ".$this->_devise."<br><br>";
        }

        public function __toString() {
            return "Compte '<b>".$this->_libelle."</b>' du client ".$this->_client->__toString();
        }
         
        // Fonction CREDITEUR et DEBITEUR 

        public function soldeCrediteur($crediteur) {
            $this->_solde += $crediteur;
        }
        
        public function soldeDebiteur($debiteur) {
            $this->_solde -= $debiteur;
        }


        // Fonction de VIREMENT 

        public function virement($send, $money) {
           
            $this->_solde -= $money;
            $send->solde($money);
            
        }

        public function solde($receive) {
            $this->_solde += $receive;
        }
        
        
        //--------------------------------------------------------

        //GET & SET 

        public function getLibelle() {
            
            return $this->_libelle;
        }
        public function setLibelle($libelle) {
            
            $this->_libelle = $libelle;

            return $this;
        }



        public function getSolde() {
           
            return $this->_solde;
        }
        public function setSolde($solde) {
            
            $this->_solde = $solde;

            return $this;
        }



        public function getDevise() {
            
            return $this->_devise;
        }
        public function setDevise($devise) {
            
            $this->_devise = $devise;

            return $this;
        }

        

        public function getClient() : Titulaire {
            
            return $this->_client;
        }
        public function setClient(Titulaire $client) {
            
            $this->_client = $client;

            return $this;
        }


    }

?>