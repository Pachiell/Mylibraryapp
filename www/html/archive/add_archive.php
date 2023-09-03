<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/Archive.php';

// 1. POSTされた生のデータを受け取る
$request_raw_data = file_get_contents('php://input');

// 2. JSON形式のデータをデコードする
// => データをPHP上で処理できるような形にする。
$fetchData = json_decode($request_raw_data, true);
$userId = $_SESSION["user_id"];

$archive = new Archive();
$queryData = [
	"title" => $fetchData["title"],
	"authors" => $fetchData["authors"],
	"publisher" => $fetchData["publisher"],
	"issue_date" => $fetchData["issue_date"],
	"image_url" => $fetchData["image_url"],
	"id" =>  $fetchData["id"],
	"user_id" => $userId,
	"purchase_url" =>  $fetchData["purchase_url"]
];
$archive->createArchive($userId, $queryData);

echo json_encode($fetchData);