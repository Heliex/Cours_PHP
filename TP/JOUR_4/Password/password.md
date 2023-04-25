# TP : Stockage sécurisé des mots de passe avec PHP

## Objectif

Dans ce TP, nous allons enrichir le TP sur stockage et la récupération de données pour sécuriser les mots de passe des utilisateurs en utilisant les fonctions de hachage fournies par PHP. Nous allons apprendre à hacher les mots de passe lors de leur enregistrement et à vérifier les mots de passe hachés lors de la connexion d'un utilisateur.

## Prérequis

- Avoir suivi le TP sur le stockage et la récupération de données dans une base de données avec PHP
- Connaissance de base de PHP et des requêtes SQL

## Instructions

1. Ajoutez un attribut `password` à la classe `User`.

2. Modifiez la méthode d'insertion de l'utilisateur pour hacher le mot de passe avant de l'insérer dans la base de données :
    - Utilisez la fonction `password_hash()` pour hacher le mot de passe.
    - Enregistrez le mot de passe haché dans la base de données.

3. Modifiez le formulaire d'inscription pour inclure un champ de mot de passe.

4. Créez une méthode `verifyPassword()` dans la classe `User` qui prend en paramètre un mot de passe en clair et un mot de passe haché, et retourne `true` si le mot de passe en clair correspond au mot de passe haché, sinon `false`.
    - Utilisez la fonction `password_verify()` pour vérifier le mot de passe.

5. Modifiez le formulaire de connexion pour inclure un champ de mot de passe.

6. Lors de la vérification des informations d'identification de l'utilisateur, utilisez la méthode `verifyPassword()` pour vérifier si le mot de passe saisi correspond au mot de passe haché stocké dans la base de données.

## Conclusion

En suivant ce TP, vous avez appris à sécuriser les mots de passe des utilisateurs en utilisant les fonctions de hachage fournies par PHP. Cela permet de protéger les données sensibles et de prévenir les accès non autorisés en cas de compromission de la base de données.
