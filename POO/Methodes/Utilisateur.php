<?php

class Utilisateur {

    public string $nom;
    public string $prenom;
    public string $email;
    public string $motDePasse;

    public function register(): void {
        // Code pour s'inscrire
    }

    public function connect(): void {
        echo "Connexion de {$this->prenom} {$this->nom} ({$this->email})\n";
    }

    public function modify(string $email): void {
        $ancien_email = $this->email;
        $this->email = $email;
        echo "Modification de l'email de {$this->prenom} {$this->nom} : {$ancien_email} => {$email}\n";

    }

    public function delete(): void {
        // Code pour supprimer le compte
    }
}