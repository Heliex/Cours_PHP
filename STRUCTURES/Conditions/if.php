<?php
// Bloc de condition "if"

/**
 * Teste si une condition est vraie et exécute un bloc de code si elle l’est.
 * Utilisez la condition if pour exécuter un bloc de code seulement si une condition spécifique est vraie.
 * C'est la structure de contrôle la plus simple et la plus couramment utilisée pour effectuer des tests conditionnels.
 * Cas d'utilisation : Vérifier si un utilisateur a assez de fonds pour effectuer un achat.
 */

$user_balance = 10;
$purchase_amount = 9;

if ($user_balance >= $purchase_amount) { // Si la balance du compte de l'utilisateur est supérieure (ou égale) au montant de l'achat
    echo "BUYING IS GRANTED\n";
}

?>