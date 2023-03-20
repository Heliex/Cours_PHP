# 4.4. Exercice pratique : Création d'un formulaire d'inscription

## Objectif
Concevoir un formulaire d'inscription avec des champs pour le nom d'utilisateur, l'email, le mot de passe, et la confirmation du mot de passe. Soumettre le formulaire à un fichier PHP pour le traitement des données. Ajouter des validations côté serveur pour vérifier que les mots de passe correspondent. Gérer les erreurs et conserver les données du formulaire en cas d'erreur.

## Consignes

### 1. Créez un nouveau fichier HTML pour le formulaire d'inscription
Ajoutez les éléments suivants :
- Un champ de type "text" pour le nom d'utilisateur, avec un label associé
- Un champ de type "email" pour l'adresse e-mail, avec un label associé
- Un champ de type "password" pour le mot de passe, avec un label associé
- Un champ de type "password" pour la confirmation du mot de passe, avec un label associé
- Un bouton de type "submit" pour soumettre le formulaire

### 2. Configurez l'élément `<form>`
Ajoutez l'attribut `method` avec la valeur "POST" et l'attribut `action` avec le nom du fichier PHP qui traitera les données du formulaire, par exemple "register.php".

### 3. Créez un fichier PHP pour récupérer et traiter les données soumises
- Utilisez les superglobales `$_POST` pour récupérer les données du formulaire
- Vérifiez si les mots de passe correspondent ; si ce n'est pas le cas, stockez un message d'erreur dans une variable
- Si le message d'erreur est défini, réaffichez le formulaire avec les données précédemment saisies (à l'exception du mot de passe et de la confirmation) et affichez le message d'erreur
- Si les mots de passe correspondent et qu'aucune erreur n'est présente, affichez un message de succès

### 4. Testez le formulaire d'inscription
Soumettez des données et vérifiez le traitement des erreurs et la conservation des données du formulaire en cas d'erreur.

Après avoir terminé cet exercice, vous devriez avoir une meilleure compréhension de la création d'un formulaire d'inscription en HTML, de la soumission des données à un fichier PHP pour traitement, et de la gestion des erreurs et de la conservation des données du formulaire en cas d'erreur.
