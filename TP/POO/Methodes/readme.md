## TP - Implémentation des méthodes de la classe Utilisateur en PHP

### Objectif
Dans ce TP, vous allez implémenter les méthodes de la classe `Utilisateur` en PHP et les utiliser pour effectuer des actions sur des instances de la classe.


### Prérequis
Vous devez avoir une classe `Utilisateur` avec des attributs et des méthodes non implémentées (comme indiqué dans le TP précédent).

## Instructions

### Étape 1: Implémenter les méthodes de la classe `Utilisateur`
1) Ouvrez le fichier `Utilisateur.php` et implémentez les méthodes `connect()` et `modify(string $email)` :

```php
class Utilisateur {
// ...

    public function connect(): void {
        echo "Connexion de {$this->prenom} {$this->nom} ({$this->email})\n";
    }

    public function modify(string $email): void {
        $ancien_email = $this->email;
        $this->email = $email;
        echo "Modification de l'email de {$this->prenom} {$this->nom} : {$ancien_email} => {$email}\n";
    }

    // ...
}
```

2) Étape 2: Utiliser les méthodes implémentées sur des objets `Utilisateur`

- Ouvrez le fichier `index.php` et utilisez les méthodes implémentées sur les objets `Utilisateur` :

```php
$utilisateur1->connect();
$utilisateur2->modify('nouvel@email.com');
```
----

À la fin de ce TP, vous devriez avoir implémenté les méthodes de la classe `Utilisateur` et utilisé ces méthodes sur des instances de la classe. 

Lorsque vous exécutez votre script `index.php`, vous devriez voir les messages suivants :

````php
Connexion de Pierre Dupont (pierre.dupont@example.com)
Modification de l'email de Marie Durand : marie.durand@example.com => nouvel@email.com

````
N'oubliez pas que cette implémentation est simple et à des fins pédagogiques. 

Vous pouvez ajouter des fonctionnalités supplémentaires, comme la validation des données et l'intégration avec une base de données, pour créer une application plus complète.