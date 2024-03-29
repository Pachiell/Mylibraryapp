<?php

class Bookmark extends Connect
{
    public $bookmarkSchema;
    public $bookmarkColumns;

    public function __construct()
    {
        parent::__construct();

        $this->bookmarkSchema = [
            "table" => "bookmarks",
            "columns" => [
                "id" => ["pdo_type" => PDO::PARAM_INT],
                "archive_id" => ["pdo_type" => PDO::PARAM_INT],
                "review" => ["pdo_type" => PDO::PARAM_STR],
                "title" => ["pdo_type" => PDO::PARAM_STR],
                "authors" => ["pdo_type" => PDO::PARAM_STR],
                "publisher" => ["pdo_type" => PDO::PARAM_STR],
                "issue_date" => ["pdo_type" => PDO::PARAM_STR],
                "category" => ["pdo_type" => PDO::PARAM_STR],
                "image_url" => ["pdo_type" => PDO::PARAM_STR],
                "book_id" => ["pdo_type" => PDO::PARAM_STR],
                "user_id" => ["pdo_type" => PDO::PARAM_INT],
                "purchase_url" => ["pdo_type" => PDO::PARAM_STR],
                "is_delete" => ["pdo_type" => PDO::PARAM_INT],
                "comment" => ["pdo_type" => PDO::PARAM_STR],
            ],
        ];
        $this->bookmarkColumns = $this->bookmarkSchema["columns"];
    }

    public function createBookmark($queryData)
    {
        $this->insertQuery($queryData, $this->bookmarkSchema);
    }

    public function updateBookmark($archiveId)
    {
        $stmt = $this->dbh->prepare("UPDATE bookmarks SET is_delete = 1 WHERE archive_id=:archive_id");
        $stmt->bindParam(":archive_id", $archiveId, $this->bookmarkColumns["archive_id"]["pdo_type"]);
        $stmt->execute();
    }

    public function getbookmarks($userId)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM bookmarks  WHERE bookmarks.user_id=:user_id AND is_delete = 0");
        $stmt->bindParam(":user_id", $userId, $this->bookmarkColumns["user_id"]["pdo_type"]);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }

    public function getBookmark($archiveId)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM bookmarks  WHERE archive_id=:archive_id");
        $stmt->bindParam(":archive_id", $archiveId, $this->bookmarkColumns["archive_id"]["pdo_type"]);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }
    public function reviewBookmark($queryData)
    {
        $stmt = $this->dbh->prepare("UPDATE bookmarks SET review=:review,comment=:comment WHERE archive_id=:archive_id");
        $stmt->bindParam(":archive_id", $queryData["archive_id"], $this->bookmarkColumns["archive_id"]["pdo_type"]);
        $stmt->bindParam(":review", $queryData["review"], $this->bookmarkColumns["review"]["pdo_type"]);
        $stmt->bindParam(":comment", $queryData["comment"], $this->bookmarkColumns["comment"]["pdo_type"]);
        $stmt->execute();
    }
}
