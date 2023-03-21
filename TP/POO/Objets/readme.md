## TP - Création et manipulation d'objets Utilisateur en PHP

### Objectif
Dans ce TP, vous allez créer et manipuler des objets de la classe `Utilisateur` en PHP en les instanciant, initialisant et utilisant leurs attributs et méthodes.

### Prérequis
Vous devez avoir une classe `Utilisateur` avec des attributs et des méthodes (comme indiqué dans le TP précédent).

### Instructions

### Étape 1: Instancier des objets Utilisateur
Ouvrez un nouveau fichier nommé `index.php` et incluez la classe `Utilisateur` en ajoutant la ligne suivante en haut du fichier :

```php
require_once 'Utilisateur.php';
```

Dans le fichier `index.php`, instanciez deux objets `Utilisateur` :

```php
$utilisateur1 = new Utilisateur();
$utilisateur2 = new Utilisateur();
```

### Étape 2: Initialiser les attributs des objets Utilisateur
Affectez des valeurs aux attributs `nom`, `prenom`, `email` et `mot_de_passe` pour les deux objets `Utilisateur` :

```php
$utilisateur1->nom = "Dupont";
$utilisateur1->prenom = "Pierre";
$utilisateur1->email = "pierre.dupont@example.com";
$utilisateur1->mot_de_passe = "pierre123";

$utilisateur2->nom = "Durand";
$utilisateur2->prenom = "Marie";
$utilisateur2->email = "marie.durand@example.com";
$utilisateur2->mot_de_passe = "marie123";
```

### Étape 3: Utiliser les méthodes des objets Utilisateur
Utilisez les méthodes `register` et `modify` pour les objets `Utilisateur` :

```php
$utilisateur1->register();
$utilisateur2->modify();
```

### Bonus
Afficher les attributs de chaque utilisateur avec des `echo` (pour passer les lignes, utilisez la constante `PHP_EOL`)

----
À la fin de ce TP, vous devriez avoir un fichier `index.php` qui instancie deux objets `Utilisateur`, initialise leurs attributs et utilise leurs méthodes. 
Bien que les méthodes ne contiennent pas de logique réelle pour le moment, vous pouvez les implémenter ultérieurement pour ajouter des fonctionnalités à votre application.