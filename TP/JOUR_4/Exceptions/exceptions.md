# TP : Gestion des exceptions en PHP

## Objectif

Dans ce TP, nous allons explorer la gestion des exceptions en PHP. Nous créerons des exemples pour montrer comment utiliser les exceptions pour gérer les erreurs et les cas spécifiques dans une application.

## Prérequis

- Un environnement de développement PHP configuré
- Connaissances de base en PHP

## Étape 1 : Utilisation de `try` / `catch`

1. Créez un fichier PHP `exceptions.php`.

2. Dans ce fichier, créez une fonction `divide` qui prend deux arguments, `$a` et `$b`. Cette fonction devra diviser `$a` par `$b`.

3. Utilisez un bloc `try` / `catch` pour gérer le cas où `$b` est égal à zéro.

4. Dans le bloc `catch`, affichez un message d'erreur indiquant que la division par zéro n'est pas autorisée.

## Étape 2 : Création d'une exception personnalisée

1. Créez une classe `InvalidEmailException` qui hérite de la classe `Exception`.

2. Dans cette classe, ajoutez un constructeur qui prend un message d'erreur en paramètre et l'envoie au constructeur de la classe parent.

3. Créez une fonction `validateEmail` qui prend une chaîne de caractères en paramètre et vérifie si elle est un e-mail valide.

4. Si l'e-mail n'est pas valide, lancez une instance de `InvalidEmailException` avec un message d'erreur approprié.

5. Utilisez un bloc `try` / `catch` pour appeler la fonction `validateEmail` avec un e-mail invalide et affichez le message d'erreur dans le bloc `catch`.

## Étape 3 : Utilisation du bloc `finally`

1. Dans l'exemple précédent, ajoutez un bloc `finally` après le bloc `catch`.

2. Dans le bloc `finally`, affichez un message indiquant que la validation de l'e-mail est terminée.

## Étape 4 : Gérer les erreurs avec des exceptions

1. Utilisez la fonction `set_error_handler` pour définir une fonction de gestion des erreurs personnalisée qui convertit les erreurs en instances de `ErrorException`.

2. Dans la fonction de gestion des erreurs, lancez une instance de `ErrorException` avec les informations d'erreur fournies.

3. Utilisez un bloc `try` / `catch` pour exécuter un code qui génère une erreur, par exemple en essayant d'accéder à un fichier non existant.

4. Attrapez l'exception `ErrorException` dans le bloc `catch` et affichez les détails de l'erreur.

## Conclusion

En suivant ce TP, vous avez exploré les concepts de la gestion des exceptions en PHP, y compris l'utilisation de blocs `try` / `catch`, la création d'exceptions personnalisées et la gestion des erreurs avec des exceptions. Cette approche permet de gérer les erreurs de manière structurée et centralisée, améliorant la lisibilité et la maintenance du code.
