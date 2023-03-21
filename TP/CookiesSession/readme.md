# TP: Système de connexion avec sessions et cookies en PHP sans BDD

## Objectif
Le but de cet exercice est de créer un système de connexion qui permet à un utilisateur de se connecter avec un nom d'utilisateur et un mot de passe. Lorsqu'un utilisateur est connecté, les informations de connexion seront stockées dans une session et un cookie.

## Étapes

1. **Créer un fichier `users.txt` avec les informations d'identification :**
    * Créez un fichier nommé `users.txt`.
    * Ajoutez les noms d'utilisateur et les mots de passe (séparés par une virgule) sur des lignes séparées, par exemple :
    ```
    admin,admin123
    user,user123
    ```

2. **Créer un fichier `index.php` pour le formulaire de connexion :**
    * Créez un fichier nommé `index.php`.
    * Ajoutez du code HTML pour afficher un formulaire de connexion avec les champs nom d'utilisateur et mot de passe, et un bouton de soumission.

3. **Créer un fichier `login.php` pour gérer la connexion et les sessions/cookies :**
    * Créez un fichier nommé `login.php`.
    * Ajoutez du code PHP pour démarrer une session, récupérer les données du formulaire de connexion, vérifier les informations d'identification et créer des sessions et des cookies en cas de succès.

4. **Créer un fichier `welcome.php` pour afficher la page de bienvenue :**
    * Créez un fichier nommé `welcome.php`.
    * Ajoutez du code PHP pour vérifier si l'utilisateur est connecté (en vérifiant les sessions et les cookies) et rediriger vers la page de connexion si nécessaire.
    * Ajoutez du code HTML pour afficher un message de bienvenue et un lien de déconnexion.

5. **Créer un fichier `logout.php` pour gérer la déconnexion :**
    * Créez un fichier nommé `logout.php`.
    * Ajoutez du code PHP pour détruire la session, supprimer le cookie, et rediriger l'utilisateur vers la page de connexion.
