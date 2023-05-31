<?php
class User extends connect
{
    private $userInfo;

    public function __construct()
    {
        parent::__construct();
    }

    public function setUserInfo(UserInfo $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    public function save()
    {
        $email = $this->userInfo->getEmail();
        $name = $this->userInfo->getName();
        $password = $this->userInfo->getPassword();

        //todo::変更しているEメールアドレスが既に存在しないかをチェックする　ある場合は当人のアドレスであるかを確認 セッションID（宿題）
        $stmt = $this->dbh->prepare("UPDATE users SET name=:name, password=:password, email=:email WHERE email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function CreateUser($name, $password, $email)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->dbh->prepare("INSERT INTO users (name, email, password) 
        VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function SerchUser($email)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
class UserInfo extends connect
{
    private $name = null;
    private $password = null;
    private $email = null;

    public function save()
    {
        $user = new User();
        $user->setUserInfo($this);
        $user->save();
    }

    public function getLoginUserInfo($email)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPassword($password)
    {
        $this->name = $password;
    }
}
