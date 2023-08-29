<?php
class Archive extends connect
{
    public function __construct()
    {
        parent::__construct();
    }
    public function createArchive($userId,$data)
    {
        $stmt = $this->dbh->prepare("INSERT INTO archive (title,authors,publisher,issue,image,book_id,user_id,site) 
    VALUES (:title,:authors,:publisher,:issue,:image,:book_id,:user_id,:site)");
        $stmt->bindParam(':title', $data["title"], PDO::PARAM_STR);
        $stmt->bindParam(':authors', $data["authors"], PDO::PARAM_STR);
        $stmt->bindParam(':publisher', $data["publisher"], PDO::PARAM_STR);
        $stmt->bindParam(':issue', $data["publishedDate"], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data["image"], PDO::PARAM_STR);
        $stmt->bindParam(':book_id', $data["id"], PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':site', $data["site"], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function find($userId)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM archive WHERE user_id=:user_id");
        $stmt->bindParam(":user_id", $userId, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }
}