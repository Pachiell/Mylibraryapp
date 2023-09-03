<?php
class Connect
{
  const DB_NAME = "library";
  const HOST = "mysql";
  const USER = "testuser";
  const PASS = "password";

  protected $dbh;

  public function __construct()
  {
    $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME . ";charset=utf8mb4";
    try {
      $this->dbh = new PDO($dsn, self::USER, self::PASS);
    } catch (Exception $e) {
      exit($e->getMessage());
    }
    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
  
  /** join等行わず単体のテーブルにレコードを追加する場合に使用可能
	 * @param
	 * $queryData = [columnName => data, ...]
	 * $schema = 該当モデルで定義しているスキーマ
	 */
	public function insertQuery($queryData, $schema)
	{
		$stmt = $this->dbh->prepare("INSERT INTO " . $schema["table"] . "(" . join(",", array_keys($queryData)) . ") VALUES (:" . join(",:", array_keys($queryData)) . ")");
		foreach ($queryData as $key => $value) {
			$stmt->bindValue(":" . $key, $value, $schema["columns"][$key]["pdo_type"]);
		}
		$stmt->execute();
	}
}