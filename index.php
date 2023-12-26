<?php

/*

COMPTE BANCAIRE :
	un libellé (compte courant, livret A...)
	un solde initial
	une devise monétaire
	un titulaire unique

UN TITULAIRE :
	un nom
	un prénom
	une date de naissance 
	une ville 
	l'ensemble de ses comptes bancaires.

SUR UN COMPTE BANCAIRE, on doit pouvoir : 
	créditer le compte de X euros
	débiter le compte de X euros
	effectuer un virement d'un compte à l'autre

ON DOIT POUVOIR : 
	afficher toutes les informations d'un titulaire (dont l'age) et l'ensemble des comptes appartenant à celui-ci.
	afficher toutes les informations d'un compte bancaire, notamment le nom / prenom du titulaire du compte.

*/

spl_autoload_register(function($class_name){
	require $class_name . '.php';
});

$client = new Titulaire('SMAIL', 'Stephane', '1987-11-05', 'Paris');

$creditAgricole = new Banque('Livret A', '567', '€', $client);
$creditMutuelle = new Banque('Compte Courant', '1700', '€', $client);
$societeEpargne = new Banque('Compte Epargne', '1 000 000', '€', $client);


/* 
	Je veux faire un virement de societeEpargne au CreditAgricole

	$societeEpargne->virement($creditAgricole->setSolde())

*/


//--
echo $creditAgricole->infoCompte();

$creditAgricole->soldeCrediteur(67);
echo $creditAgricole->infoCompte();
//--


echo $creditMutuelle->infoCompte();

echo $societeEpargne->infoCompte();

echo $client->afficherInfoTitulaire();


/*   je prend la date de naissance de   */
?>


