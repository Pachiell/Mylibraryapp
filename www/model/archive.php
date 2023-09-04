<?php
class Archive extends Connect
{
    public $archiveSchema;
    public $archiveColumns;

    public function __construct()
    {
        parent::__construct();

        $this->archiveSchema =  [
            "table" => "archives",
            "columns" => [
                "id" => ["pdo_type" => PDO::PARAM_INT],
                "title" => ["pdo_type" => PDO::PARAM_STR],
                "authors" => ["pdo_type" => PDO::PARAM_STR],
                "publisher" => ["pdo_type" => PDO::PARAM_STR],
                "issue_date" => ["pdo_type" => PDO::PARAM_STR],
                "category" => ["pdo_type" => PDO::PARAM_STR],
                "image_url" => ["pdo_type" => PDO::PARAM_STR],
                "book_id" => ["pdo_type" => PDO::PARAM_STR],
                "user_id" => ["pdo_type" => PDO::PARAM_INT],
                "purchase_url" => ["pdo_type" => PDO::PARAM_STR],
            ],
        ];

        $this->archiveColumns = $this->archiveSchema["columns"];
    }

    public function createArchive($queryData)
    {
        $this->insertQuery($queryData, $this->archiveSchema);
    }

    public function getArchives($userId)
    {
        $stmt = $this->dbh->prepare("SELECT archives.id,archives.title,archives.authors,archives.publisher,archives.issue_date,archives.category,archives.image_url,archives.book_id,archives.user_id,archives.purchase_url,archives.is_delete,bookmarks.archive_id FROM archives LEFT JOIN bookmarks ON archives.id = bookmarks.archive_id AND bookmarks.is_delete = 0 WHERE archives.user_id=:user_id AND archives.is_delete = 0");
        $stmt->bindParam(":user_id", $userId, $this->archiveColumns["user_id"]["pdo_type"]);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }

    public function getArchive($id)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM archives WHERE id=:id");
        $stmt->bindParam(":id", $id, $this->archiveColumns["id"]["pdo_type"]);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        }
        return null;
    }
    public function updateArchive($queryData)
    {
        $stmt = $this->dbh->prepare("UPDATE archives SET title=:title,authors=:authors,publisher=:publisher,issue_date=:issue_date,image_url=:image_url,category=:category WHERE id=:id");
        $stmt->bindParam(":id", $queryData["id"], $this->archiveColumns["id"]["pdo_type"]);
        $stmt->bindParam(":title", $queryData["title"], $this->archiveColumns["title"]["pdo_type"]);
        $stmt->bindParam(":authors", $queryData["authors"], $this->archiveColumns["authors"]["pdo_type"]);
        $stmt->bindParam(":publisher", $queryData["publisher"], $this->archiveColumns["publisher"]["pdo_type"]);
        $stmt->bindParam(":issue_date", $queryData["issue_date"], $this->archiveColumns["issue_date"]["pdo_type"]);
        $stmt->bindParam(":image_url", $queryData["image_url"], $this->archiveColumns["image_url"]["pdo_type"]);
        $stmt->bindParam(":category", $queryData["category"], $this->archiveColumns["category"]["pdo_type"]);
        $stmt->execute();
    }
    public function deleteArchive($queryData)
    {
        $stmt = $this->dbh->prepare("UPDATE archives SET is_delete = 1 WHERE id=:id");
        $stmt->bindParam(':id', $queryData["id"], $this->archiveColumns["id"]["pdo_type"]);
        $stmt->execute();
    }
}
