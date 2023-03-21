## TP : Créer une base de données MySQL et obtenir les informations de connexion

### Étape 1 : Installer WampServer
- Téléchargez WampServer depuis le site officiel : https://www.wampserver.com/en/#download-wrapper
- Installez WampServer en suivant les instructions de l'assistant d'installation.

Une fois l'installation terminée, lancez WampServer.

### Étape 2 : Accéder à phpMyAdmin
- Avec WampServer en cours d'exécution, cliquez sur l'icône WampServer dans la barre des tâches (zone de notification) et sélectionnez `phpMyAdmin` dans le menu.
- Une nouvelle fenêtre de navigateur s'ouvrira et vous serez redirigé vers `phpMyAdmin`. Les identifiants par défaut sont `root` pour l'utilisateur et un mot de passe vide.

### Étape 3 : Créer une base de données
Dans `phpMyAdmin`, cliquez sur l'onglet "Bases de données" situé en haut de la page.

Entrez le nom de votre nouvelle base de données dans le champ `Créer une base de données` et sélectionnez l'interclassement approprié (généralement `utf8_general_ci` ou `utf8mb4_general_ci`). 

Cliquez sur le bouton "Créer".

### Étape 4 : Créer un utilisateur MySQL
- Cliquez sur l'onglet `Comptes d'utilisateurs` situé en haut de la page.
- Cliquez sur `Ajouter un nouvel utilisateur` et remplissez les champs :
  - **_Nom d'utilisateur_** : choisissez un nom d'utilisateur pour la nouvelle base de données.
  - **_Hôte_** : sélectionnez "Local" pour utiliser cet utilisateur uniquement sur votre système local.
  - **_Mot de passe_** : entrez un mot de passe sécurisé pour cet utilisateur.
  - Dans la section "Privilèges globaux", cochez les cases appropriées pour accorder les privilèges nécessaires à cet utilisateur (par exemple, sélectionnez "Données" et "Structure").

Faites défiler vers le bas et cliquez sur le bouton "Exécuter".

### Étape 5 : Obtenir les informations de connexion
Notez les informations suivantes pour vous connecter à la base de données à l'aide de PDO :

- Hôte : localhost (puisque vous utilisez WampServer en local)
- Nom de la base de données : le nom que vous avez choisi à l'étape 3
- Nom d'utilisateur : le nom d'utilisateur que vous avez créé à l'étape 4
- Mot de passe : le mot de passe que vous avez défini à l'étape 4

Vous pouvez maintenant utiliser ces informations de connexion pour vous connecter à votre base de données MySQL avec PDO dans vos projets PHP.