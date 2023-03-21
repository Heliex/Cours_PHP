## TP:  Connexion à une base de données MySQL en PHP avec PDO

### Objectif
Dans ce tutoriel, vous allez apprendre comment vous connecter à une base de données MySQL en PHP en utilisant l'extension PDO.

### Prérequis
- Un environnement de développement PHP configuré
- Une base de données MySQL avec des informations de connexion

## Instructions

### Étape 1: Créer un fichier de configuration
Créez un fichier nommé `config.php` et ajoutez les informations de connexion à votre base de données MySQL :

```php
<?php

const DB_HOST = 'localhost';
const DB_NAME = 'your_database_name';
const DB_USER = 'your_database_user';
const DB_PASSWORD = 'your_database_password';
```

### Étape 2: Créer une classe pour gérer la connexion
Créez un fichier nommé `Database.php` et créez une classe `Database` avec une méthode `connect` pour établir la connexion à la base de données en utilisant PDO :

```php
<?php
require_once 'config.php';

class Database {
    public static function connect() {
        try {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
            return $pdo;
        } catch (PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }
}
```

### Étape 3: Utiliser la classe Database pour se connecter à la base de données
Dans un fichier PHP (par exemple, `index.php`), utilisez la classe `Database` pour établir la connexion à la base de données :

```php
<?php
require_once 'Database.php';

$db = Database::connect();
```

Vous pouvez maintenant utiliser l'objet `$db` pour interagir avec votre base de données en utilisant les méthodes PDO.

---
À la fin de ce tutoriel, vous devriez avoir une classe `Database` qui utilise PDO pour établir une connexion à une base de données MySQL. 
Vous pouvez maintenant utiliser cette classe pour interagir avec la base de données dans vos projets PHP.