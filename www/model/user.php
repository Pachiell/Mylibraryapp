<?php
class User extends Connect
{
    public $userSchema;
    public $userColumns;

    public function __construct()
    {
        parent::__construct();

        $this->userSchema = [
            "table" => "users",
            "columns" => [
                "id" => ["pdo_type" => PDO::PARAM_INT],
                "name" => ["pdo_type" => PDO::PARAM_STR],
                "password" => ["pdo_type" => PDO::PARAM_STR],
                "email" => ["pdo_type" => PDO::PARAM_STR],
            ],
        ];

        $this->userColumns = $this->userSchema["columns"];
    }

    public function updateUser($userName, $id, $email)
    {

        $stmt = $this->dbh->prepare("UPDATE users SET name=:name, email=:email WHERE id=:id");
        $stmt->bindParam(':id', $id, $this->userColumns["id"]["pdo_type"]);
        $stmt->bindParam(':name', $userName, $this->userColumns["name"]["pdo_type"]);
        $stmt->bindParam(':email', $email, $this->userColumns["email"]["pdo_type"]);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function createUser($name, $password, $email)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->dbh->prepare("INSERT INTO users (name, email, password) 
        VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $name, $this->userColumns["name"]["pdo_type"]);
        $stmt->bindParam(':email', $email, $this->userColumns["email"]["pdo_type"]);
        $stmt->bindParam(':password', $passwordHash, $this->userColumns["password"]["pdo_type"]);
        $stmt->execute();
    }

    public function getUser($email)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email, $this->userColumns["email"]["pdo_type"]);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
