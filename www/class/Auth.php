<?php
class Auth extends Connect
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($password, $result['password'])) {
            session_start();
            $_SESSION['email'] = $result['email'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['user_id'] = $result['id'];
            header('Location: index.php');
        } else {
            return "ログインできませんでした。";
        }
        return null;
    }
}