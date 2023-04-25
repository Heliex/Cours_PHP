<?php

class Oiseau extends Animal {
    private string $_plumage;

    public function __construct(string $nom, int $age, string $plumage) {
        parent::__construct($nom, $age, 'oiseau');
        $this->setPlumage($plumage);
    }

    public function getPlumage(): string {
        return $this->_plumage;
    }

    public function setPlumage(string $plumage): void {
        $this->_plumage = $plumage;
    }

    public function voler(): string {
        return "L'oiseau vole.";
    }

    public function faireDuBruit(): string {
        return "L'oiseau gazouille.";
    }
}