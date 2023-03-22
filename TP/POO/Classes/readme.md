## Titre: TP - Création d'une classe Utilisateur en PHP

### Objectif
Dans ce TP, vous allez créer une classe "Utilisateur" en PHP qui contient des attributs et des méthodes pour gérer les utilisateurs d'un site web.

## Instructions

1) Ouvrez un éditeur de texte ou un IDE pour PHP (comme Visual Studio Code, PhpStorm, etc.).
2) Créez un nouveau fichier nommé  `Utilisateur.php`.

### Étape 1: Déclarer la classe Utilisateur
Dans le fichier `Utilisateur.php`, ajoutez le code suivant:

```php
class Utilisateur {

}
```

### Étape 2: Ajouter les attributs à la classe Utilisateur
Ajoutez les attributs suivants à la classe Utilisateur: 
 - nom(string)
 - prénom(string)
 - email(string)
 - mot de passe(string)

```php
class Utilisateur {

public string $nom;
public string $prenom;
public string $email;
public string $mot_de_passe;

}
```

### Étape 3: Créer les méthodes pour la classe Utilisateur
Ajoutez les méthodes suivantes à la classe Utilisateur : 
- s'inscrire (register)
- se connecter (connect)
- modifier le profil (modify)
- supprimer le compte (delete)

**_Note: Pour cet exercice, nous allons seulement créer les squelettes des méthodes sans implémenter la logique réelle._**

```php
class Utilisateur {

public string $nom;
public string $prenom;
public string $email;
public string $motDePasse;

    public function register(): string {
        // Code pour s'inscrire
    }

    public function connect(): string {
        // Code pour se connecter
    }

    public function modify(): string {
        // Code pour modifier le profil
    }

    public function delete(): string {
        // Code pour supprimer le compte
    }
}
```
Votre classe Utilisateur est maintenant prête à être utilisée. 

Vous pouvez créer des instances de cette classe et utiliser les méthodes pour gérer les utilisateurs de votre site web.