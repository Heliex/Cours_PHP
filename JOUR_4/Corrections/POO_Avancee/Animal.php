<?php

class Animal {
    private string $_nom;
    private int $_age;
    private string $_type;

    public function __construct(string $nom, int $age, string $type) {
        $this->setNom($nom);
        $this->setAge($age);
        $this->setType($type);
    }

    public function getNom(): string {
        return $this->_nom;
    }

    public function setNom(string $nom): void {
        $this->_nom = $nom;
    }

    public function getAge(): int {
        return $this->_age;
    }

    public function setAge(int $age): void {
        $this->_age = $age >= 0 ? $age : 0;
    }

    public function getType(): string {
        return $this->_type;
    }

    public function setType(string $type): void {
        $allowedTypes = ['mammifère', 'oiseau', 'reptile'];
        if (in_array($type, $allowedTypes)) {
            $this->_type = $type;
        } else {
            throw new InvalidArgumentException("Type d'animal non autorisé.");
        }
    }

    public function __toString(): string {
        return "Nom : {$this->getNom()}, Âge : {$this->getAge()}, Type : {$this->getType()}";
    }

    public function faireDuBruit(): string {
        return "L'animal fait du bruit.";
    }
}