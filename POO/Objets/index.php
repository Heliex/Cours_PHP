<?php

require_once '../Classes/Utilisateur.php';

$utilisateur1 = new Utilisateur();
$utilisateur2 = new Utilisateur();

$utilisateur1->nom = "Dupont";
$utilisateur1->prenom = "Pierre";
$utilisateur1->email = "pierre.dupont@example.com";
$utilisateur1->mot_de_passe = "pierre123";

$utilisateur2->nom = "Durand";
$utilisateur2->prenom = "Marie";
$utilisateur2->email = "marie.durand@example.com";
$utilisateur2->mot_de_passe = "marie123";

echo "USER 1 : " . $utilisateur1->nom . PHP_EOL;
echo "USER 2 : " . $utilisateur2->nom . PHP_EOL;