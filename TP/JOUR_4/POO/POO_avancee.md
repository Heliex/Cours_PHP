# TP : POO, encapsulation, héritage et polymorphisme en PHP

## Objectif

Dans ce TP, nous allons explorer les concepts de programmation orientée objet (POO), d'encapsulation, d'héritage et de polymorphisme en PHP. Nous créerons un système simple de gestion d'animaux dans un zoo pour illustrer ces concepts.

## Prérequis

- Un environnement de développement PHP configuré
- Connaissances de base en PHP et en POO

## Étape 1 : Création de la classe de base Animal

1. Créez une classe Animal avec les attributs suivants (tous privés) :
    - `$_nom` : le nom de l'animal
    - `$_age` : l'âge de l'animal
    - `$_type` : le type d'animal (par exemple, mammifère, oiseau, reptile)
2. Créez les méthodes d'accès (getters et setters) pour les attributs.
3. Ajoutez une méthode `__toString()` qui retourne une chaîne de caractères décrivant l'animal (nom, âge et type).

## Étape 2 : Encapsulation

1. Dans la classe Animal, utilisez l'encapsulation pour vous assurer que :
    - L'âge de l'animal ne peut pas être négatif (définir une valeur par défaut si nécessaire).
    - Le type de l'animal doit faire partie d'une liste prédéfinie (par exemple, mammifère, oiseau, reptile).
2. Testez la classe Animal en créant quelques objets et en vérifiant que l'encapsulation fonctionne correctement.

## Étape 3 : Héritage

1. Créez des classes spécifiques pour différents types d'animaux en héritant de la classe Animal. Par exemple :
    - `class Mammifere extends Animal`
    - `class Oiseau extends Animal`
    - `class Reptile extends Animal`
2. Ajoutez des attributs et des méthodes spécifiques à chaque type d'animal (par exemple, un attribut `$_plumage` pour les oiseaux et une méthode `voler()` pour les oiseaux qui volent).
3. Assurez-vous que les classes dérivées utilisent les méthodes d'accès de la classe de base Animal pour définir les attributs communs.

## Étape 4 : Polymorphisme

1. Ajoutez une méthode `faireDuBruit()` dans la classe Animal. Cette méthode devrait retourner une chaîne de caractères générique comme "L'animal fait du bruit."
2. Surchargez la méthode `faireDuBruit()` dans les classes dérivées pour retourner un message spécifique à chaque type d'animal. Par exemple :
    - Pour les mammifères : "Le mammifère rugit."
    - Pour les oiseaux : "L'oiseau gazouille."
    - Pour les reptiles : "Le reptile siffle."
3. Créez des objets de différents types d'animaux et appelez la méthode `faireDuBruit()` sur chacun d'eux. Observez comment la méthode surchargée est appelée pour chaque type d'animal.

## Conclusion

En suivant ce TP, vous avez exploré les concepts de programmation orientée objet, d'encapsulation, dhéritage et de polymorphisme en PHP. Vous avez également appliqué ces concepts pour créer un système simple de gestion d'animaux dans un zoo. Continuez à explorer et à pratiquer ces concepts pour améliorer vos compétences en programmation orientée objet avec PHP.