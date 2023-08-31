<?php
class Bookmark extends connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function saveBookmark($result)
    {
        $stmt = $this->dbh->prepare("INSERT INTO bookmark (id,title,authors,publisher,issue,image,book_id,user_id,site,is_delete) 
    VALUES (:id,:title,:authors,:publisher,:issue,:image,:book_id,:user_id,:site,0)");
        $stmt->bindParam(':id', $result["id"], PDO::PARAM_INT);
        $stmt->bindParam(':title', $result["title"], PDO::PARAM_STR);
        $stmt->bindParam(':authors', $result["authors"], PDO::PARAM_STR);
        $stmt->bindParam(':publisher', $result["publisher"], PDO::PARAM_STR);
        $stmt->bindParam(':issue', $result["issue"], PDO::PARAM_STR);
        $stmt->bindParam(':image', $result["image"], PDO::PARAM_STR);
        $stmt->bindParam(':book_id', $result["book_id"], PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $result["user_id"], PDO::PARAM_INT);
        $stmt->bindParam(':site', $result["site"], PDO::PARAM_STR);

        $stmt->execute();

        // $stmt = $this->dbh->prepare("UPDATE bookmark SET is_delete=:is_delete WHERE is_delete=NULL");
        // $stmt->bindParam(':is_delete', "delete", PDO::PARAM_STR);
        // $stmt->execute();
    }

    public function updateBookmark($result)
    {
        $stmt = $this->dbh->prepare("UPDATE bookmark SET is_delete=1 WHERE id=:id");
        $stmt->bindParam(':id', $result["id"], PDO::PARAM_INT);

        $stmt->execute();
    }
}
