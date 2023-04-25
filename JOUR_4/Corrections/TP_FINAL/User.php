<?php

class User
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // Créer un utilisateur
    public function createUser(string $first_name, string $last_name, string $email, string $password): bool
    {
        $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);

        // Hachage sécurisé du mot de passe
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hash);

        return $stmt->execute();
    }

    // Récupérer tous les utilisateurs
    public function getAllUsers()
    {
        $sql = "SELECT * FROM user";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mettre à jour un utilisateur
    public function updateUser(
        int $id,
        string $first_name,
        string $last_name,
        string $email,
        string $password = null
    ): bool {
        $sql = "UPDATE user SET first_name = :first_name, last_name = :last_name, email = :email";

        // Si le mot de passe est fourni, l'inclure dans la mise à jour
        if ($password) {
            $sql .= ", password = :password";
        }

        $sql .= " WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);

        if ($password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt->bindParam(':password', $hash);
        }

        return $stmt->execute();
    }

    // Supprimer un utilisateur
    public function deleteUser(int $id): bool
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Vérifier les informations d'identification de l'utilisateur
    public function checkCredentials(string $email, string $password): bool {
        $user = $this->getUserByEmail($email);

        if ($user) {
            return password_verify($password, $user['password']);
        }

        return false;
    }

    // Récupérer un utilisateur par son email
    public function getUserByEmail(string $email) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Récupérer un utilisateur par son ID
    public function getUserById(int $id) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}