
# TP: Système de gestion d'utilisateurs

## Objectif

Créer un système de gestion d'utilisateurs qui permettra de :

- Inscrire un nouvel utilisateur
- Se connecter avec un compte utilisateur existant
- Afficher et modifier les informations de profil
- Gérer les rôles d'utilisateur (administrateur et utilisateur standard)
- Se déconnecter

## Prérequis

- Un environnement de développement PHP configuré
- Une base de données MySQL avec des informations de connexion
- Connaissance de base des requêtes SQL
- Compréhension des concepts de POO, MVC et gestion des exceptions

## Instructions

1. Créez une base de données MySQL pour stocker les informations des utilisateurs. La table `users` doit contenir les champs suivants :
    - id (int, auto-increment, primary key)
    - first_name (varchar)
    - last_name (varchar)
    - email (varchar)
    - password (varchar)
    - role (varchar, valeurs possibles: 'admin' ou 'user')
    - created_at (datetime)

2. Créez une classe `Database` pour établir la connexion à la base de données MySQL en utilisant PDO.

3. Créez une classe `User` pour gérer les opérations CRUD (Create, Read, Update, Delete) liées aux utilisateurs. Implémentez les méthodes suivantes :
    - createUser()
    - getUserByEmail()
    - getUserById()
    - updateUser()
    - deleteUser()

4. Implémentez les fonctionnalités d'inscription et de connexion en utilisant les classes `Database` et `User` :
    - Créez un formulaire d'inscription avec les champs first_name, last_name, email et password
    - Stockez les mots de passe de manière sécurisée en utilisant la fonction `password_hash()`
    - Vérifiez si un utilisateur existe déjà avec le même email lors de l'inscription
    - Créez un formulaire de connexion avec les champs email et password
    - Vérifiez les informations d'identification de l'utilisateur lors de la connexion et utilisez la fonction `password_verify()` pour comparer les mots de passe
    - Implémentez la gestion des sessions pour stocker les informations de l'utilisateur connecté

5. Créez une page de profil pour afficher et modifier les informations de l'utilisateur connecté. Utilisez les méthodes de la classe `User` pour récupérer et mettre à jour les informations de l'utilisateur.

6. Implémentez la gestion des rôles d'utilisateur :
    - Ajoutez un champ "role" à la table `users` et à la classe `User`
    - Lors de l'inscription, attribuez le rôle "user" par défaut
    - Créez une page d'administration accessible uniquement aux utilisateurs ayant le rôle "admin"
    - Sur la page d'administration, affichez la liste de tous les utilisateurs et permettez aux administrateurs de modifier ou supprimer les utilisateurs

7. Implémentez la fonctionnalité de déconnexion en détruisant la session et en redirigeant l'utilisateur vers la page de connexion.

8. (Optionnel) Ajoutez la gestion des exceptions pour gérer les erreurs liées à la base de données, aux requêtes SQL et aux problèmes de connexion.

## Ressources

- Documentation PHP : https://www.php.net/manual/en/
- PDO (PHP Data Objects) : https://www.php.net/manual/en/book.pdo.php
- PHP Sessions: https://www.php.net/manual/en/book.session.php
- PHP password hashing functions: https://www.php.net/manual/en/book.password.php
- PHP exception handling: https://www.php.net/manual/en/language.exceptions.php

## Conseils

- Pensez à bien structurer votre code en utilisant les principes de la POO et en séparant les différentes responsabilités (connexion à la base de données, gestion des utilisateurs, etc.).
- Assurez-vous que votre code est sécurisé et bien protégé contre les attaques courantes (injections SQL, cross-site scripting, etc.).
- Testez régulièrement les fonctionnalités implémentées pour vous assurer qu'elles fonctionnent correctement et qu'il n'y a pas de problèmes ou d'erreurs.
- N'hésitez pas à consulter la documentation PHP et les ressources en ligne pour obtenir de l'aide et des exemples de code.

## Evaluation

Le TP sera évalué sur les critères suivants :

- Respect des consignes et des fonctionnalités demandées
- Qualité du code (lisibilité, modularité, POO, gestion des exceptions)
- Sécurité du code (protection contre les injections SQL, hachage sécurisé des mots de passe, etc.)
- Fonctionnement correct et sans erreurs des différentes fonctionnalités implémentées

