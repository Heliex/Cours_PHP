<?php

/**
 * Voici ci-dessous la déclaration d'un type objet, c'est une classe qui représente quelque-chose, on rentrera dans le détail de ce type de données plus tard dans le cours.
 */
class Testing {

    // L'objet contient une propriété ID de type INT
    private int $id; // Le scope de la propriété est "privée"

    // L'objet contient une propriété TYPE de type STRING
    private string $type; // Le scope de la propriété est "privée"

    // L'objet contient une propriété FLOATING de type FLOAT
    private float $floating; // Le scope de la propriété est "privée"

    /**
     * Les valeurs sont déterminées lorsque l'objet est créé, elles sont appliquées au proprité de l'objet
     */
    public function __construct()
    {
        $this->id = 1;
        $this->type = 'TEST';
        $this->floating = 10.40;
    }

    /**
     * Cette fonction renvoie la propriété ID de l'objet TESTING
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Cette fonction renvoie la propriété TYPE de l'objet TESTING
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Cette fonction renvoie la propriété FLOATING de l'objet TESTING
     */
    public function getFloating(): float {
        return $this->floating;
    }
}

// Ici, on va stocker dans une variable l'objet, on appelle cela une INSTANCE d'un objet
$testingObject = new Testing(); // Cet appel, execute la fonction __construct() de notre objet

// On peut maintenant accéder aux propriétés de l'objet via les fonctions déclarées précédemment
// ID
echo $testingObject->getId()."\n";

// TYPE
echo $testingObject->getType()."\n";

// FLOATING
echo $testingObject->getFloating()."\n";

?>