# Exemple concret : Validation des données d'un formulaire d'inscription

Pour cet exercice pratique, vous allez créer un formulaire d'inscription simple et valider les données soumises. Suivez les consignes ci-dessous :

## 1. Vérification des champs obligatoires

- Créez un formulaire HTML avec les champs suivants : nom d'utilisateur, adresse e-mail, mot de passe et confirmation du mot de passe.
- Dans le script PHP de traitement des données, vérifiez si tous les champs obligatoires sont remplis en utilisant la fonction `empty()`. Si un champ est vide, retournez un message d'erreur approprié à l'utilisateur.

## 2. Vérification de l'adresse e-mail

- Utilisez la fonction `filter_var()` avec le filtre `FILTER_VALIDATE_EMAIL` pour valider l'adresse e-mail soumise. Si la validation échoue, retournez un message d'erreur indiquant que l'adresse e-mail est invalide.

## 3. Vérification de la correspondance des mots de passe

- Comparez les valeurs des champs mot de passe et confirmation du mot de passe. Si elles ne correspondent pas, retournez un message d'erreur indiquant que les mots de passe ne correspondent pas.

N'oubliez pas de tester votre formulaire d'inscription en soumettant des données valides et invalides pour vérifier que les validations fonctionnent correctement et que les messages d'erreur sont appropriés.
