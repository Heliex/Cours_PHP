### 1. Créez un fichier nommé shopping_list.php pour y inclure à la fois du code HTML et PHP.

### 2. Ajoutez le code HTML de base et incluez du code PHP en utilisant les balises PHP appropriées :

```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
</head>
<body>
    <h1>My Shopping List</h1>
    <ul>
        <?php
        // Le code php rentre ici
        ?>
    </ul>
</body>
</html>
```

### 3. À l'intérieur des balises PHP, créez un tableau contenant les éléments de votre liste de courses :

```php
$shopping_list = ["Milk", "Bread", "Eggs", "Butter", "Cheese"];
```

### 4. Utilisez une boucle foreach pour parcourir chaque élément de la liste de courses et affichez-le à l'intérieur d'une balise HTML LI"
```php
foreach ($shopping_list as $item) {
    echo "<li>" . $item . "</li>";
}
```
