<?php

class Reptile extends Animal {
    public function __construct(string $nom, int $age) {
        parent::__construct($nom, $age, 'reptile');
    }

    public function faireDuBruit(): string {
        return "Le reptile siffle.";
    }
}