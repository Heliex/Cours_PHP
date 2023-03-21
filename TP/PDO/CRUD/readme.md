## Stockage et récupération de données dans une base de données avec PHP

### Objectif
Dans cette section, nous apprendrons à stocker et récupérer des données d'une base de données MySQL en utilisant PHP et l'extension PDO (PHP Data Objects).

### Prérequis
- Un environnement de développement PHP configuré
- Une base de données MySQL avec des informations de connexion
- Connaissance de base des requêtes SQL

### Contenu
### Connexion à la base de données
Avant de pouvoir interagir avec la base de données, vous devez établir une connexion en utilisant PDO.

Créez une classe Database avec une méthode `connect()` pour établir la connexion, comme expliqué dans le TP précédent.

### Préparation des requêtes SQL
Pour préparer des requêtes SQL, vous utiliserez des requêtes préparées. 

Les requêtes préparées permettent d'éviter les injections SQL et d'améliorer les performances lors de l'exécution de requêtes similaires à plusieurs reprises.

### Insérer des données
Pour insérer des données dans la base de données, préparez une requête SQL INSERT en utilisant la méthode `prepare()` de PDO. 
Puis, liez les valeurs des paramètres en utilisant la méthode `bindParam()` ou `bindValue()` avant d'exécuter la requête avec la méthode `execute()`.

Exemple :

```php
$sql = "INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':first_name', $first_name);
$stmt->bindValue(':last_name', $last_name);
$stmt->bindValue(':email', $email);
$stmt->execute();
```

### Récupérer des données
Pour récupérer des données, préparez une requête SQL SELECT en utilisant la méthode `prepare()` de PDO. 
Puis, exécutez la requête avec la méthode `execute()` et récupérez les données en utilisant la méthode `fetch()` ou `fetchAll()`.

Exemple :

```php
$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
echo $user['first_name'] . ' ' . $user['last_name'] . ' - ' . $user['email'] . '<br>';
}
```

### Mettre à jour des données
Pour mettre à jour des données, préparez une requête SQL UPDATE en utilisant la méthode `prepare()` de PDO. 
Puis, liez les valeurs des paramètres en utilisant la méthode `bindParam()` ou `bindValue()` avant d'exécuter la requête avec la méthode `execute()`.

Exemple :

```php
$sql = "UPDATE users SET email = :email WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $new_email);
$stmt->bindValue(':id', $user_id);
$stmt->execute();
```

### Supprimer des données
Pour supprimer des données, préparez une requête SQL DELETE en utilisant la méthode `prepare()` de PDO. 
Puis, liez les valeurs des paramètres en utilisant la méthode `bindParam()` ou `bindValue()` avant d'exécuter la requête avec la méthode `execute()`.

Exemple :

```php
$sql = "DELETE FROM users WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $user_id);
$stmt->execute();
```
## Exercices pratiques
   
Maintenant que vous avez appris à insérer, récupérer, mettre à jour et supprimer des données en utilisant PHP et PDO, voici quelques exercices pratiques pour consolider vos connaissances, y compris la gestion des sessions et des cookies :

1) Créez une classe `User` avec les attributs `id`, `first_name`, `last_name` et `email`.
2) Implémentez des méthodes pour créer, récupérer, mettre à jour et supprimer des utilisateurs dans la base de données.
3) Créez un formulaire HTML pour ajouter un nouvel utilisateur. Utilisez la méthode `POST` pour soumettre le formulaire et insérer les données du formulaire dans la base de données en utilisant la classe `User`.
4) Affichez la liste des utilisateurs sur une page en récupérant les données de la base de données à l'aide de la classe `User`. 
5) Ajoutez des liens ou des boutons pour mettre à jour ou supprimer des utilisateurs dans la liste des utilisateurs. Lorsqu'un utilisateur est mis à jour ou supprimé, mettez à jour les données dans la base de données en utilisant la classe `User`. 
6) Implémentez la gestion des sessions pour permettre aux utilisateurs de se connecter et de se déconnecter. Vous pouvez stocker les informations de l'utilisateur connecté dans la session. 
7) Créez un formulaire de connexion et vérifiez les informations d'identification de l'utilisateur en utilisant la classe User. Si les informations d'identification sont correctes, stockez les informations de l'utilisateur dans la session et redirigez l'utilisateur vers la liste des utilisateurs. 
8) Ajoutez un bouton "Se déconnecter" qui détruira la session et redirigera l'utilisateur vers la page de connexion. 
9) Utilisez des cookies pour stocker certaines préférences de l'utilisateur, comme le choix de la langue ou le nombre d'utilisateurs à afficher par page.
10) (Optionnel) Ajouter la notion de mot de passe dans la classe `User` et la logique associée dans les fichiers PHP.
11) (Optionnel) Implémentez la pagination pour afficher un nombre limité d'utilisateurs par page, en utilisant les préférences stockées dans les cookies.

En suivant ces étapes et en complétant les exercices pratiques, vous aurez une meilleure compréhension de la manière d'interagir avec une base de données MySQL en utilisant PHP et PDO, ainsi que de gérer les sessions et les cookies. 

### Pour réaliser les exercices pratiques

Vous aurez besoin d'une base de données MySQL et d'une table pour stocker les informations des utilisateurs. 

Voici le modèle SQL pour créer la table users :

```sql
CREATE DATABASE IF NOT EXISTS myapp;

USE myapp;

CREATE TABLE IF NOT EXISTS users (
id INT AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL
);
```

Copiez et collez ce code SQL dans l'interface de phpMyAdmin ou dans la console MySQL pour créer la base de données `myapp` et la table `users`. 

Assurez-vous de disposer des informations de connexion à la base de données (hôte, nom d'utilisateur, mot de passe et nom de la base de données) pour configurer la connexion PDO dans votre application PHP.

Une fois la table `users` créée, vous pouvez commencer à développer les fonctionnalités décrites dans les exercices pratiques en utilisant la classe `User` et en interagissant avec la table users à l'aide de requêtes SQL.

---
Vous serez également en mesure de créer des applications Web plus complexes qui stockent et récupèrent des données de manière efficace et sécurisée, tout en offrant une expérience personnalisée aux utilisateurs.
