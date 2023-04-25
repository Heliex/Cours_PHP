<?php

require_once './Animal.php';
require_once './Mammifere.php';
require_once './Oiseau.php';
require_once './Reptile.php';

// Test des classes
$mammifere = new Mammifere("Lion", 5);
echo $mammifere . "\n";
echo $mammifere->faireDuBruit() . "\n";
echo "<====================================> \n\n\n";

$oiseau = new Oiseau("Perroquet", 2, "coloré");
echo $oiseau . "\n";
echo $oiseau->faireDuBruit() . "\n";
echo $oiseau->voler() . "\n";
echo "<====================================> \n\n\n";

$reptile = new Reptile("Serpent", 3);
echo $reptile . "\n";
echo $reptile->faireDuBruit() . "\n";
echo "<====================================> \n\n\n";

try {
    $animalInvalide = new Animal("Animal Invalide", -5, "non-autorisé");
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . "\n";
    echo "<====================================> \n\n\n";
}

$animaux = [
    new Mammifere("Lion", 5),
    new Oiseau("Perroquet", 2, "coloré"),
    new Reptile("Serpent", 3),
];

echo "================ POLYMORPHISME ============ \n\n";

foreach ($animaux as $animal) { // Il faut voir le tableau d'animaux comme un tableau d'objets Animal.
    echo $animal . "\n";
    echo $animal->faireDuBruit() . "\n"; // Ce qu'on appelle polymorphisme est ici, la méthode va être appelée dynamiquement selon l'instance de la classe qui appelle la méthode.
    echo "<====================================> \n\n\n";

    if ($animal instanceof Oiseau) {
        echo "Le plumage de l'oiseau est : " . $animal->getPlumage() . "\n";
        echo $animal->voler() . "\n";
        echo "<====================================> \n\n\n";
    }
}