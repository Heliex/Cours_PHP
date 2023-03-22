<?php

require_once 'Utilisateur.php';

$utilisateur1 = new Utilisateur();
$utilisateur2 = new Utilisateur();

$utilisateur1->nom = "Dupont";
$utilisateur1->prenom = "Pierre";
$utilisateur1->email = "pierre.dupont@example.com";
$utilisateur1->motDePasse = "pierre123";

$utilisateur2->nom = "Durand";
$utilisateur2->prenom = "Marie";
$utilisateur2->email = "marie.durand@example.com";
$utilisateur2->motDePasse = "marie123";

$utilisateur1->connect();
$utilisateur2->modify('nouvel@email.com');