<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/Archive.php';
include '../../model/Bookmark.php';

// 1. POSTされた生のデータを受け取る
$request_raw_data = file_get_contents('php://input');

// 2. JSON形式のデータをデコードする
// => データをPHP上で処理できるような形にする。
$fetchData = json_decode($request_raw_data, true);

$archive = new Archive();
$archiveData = $archive->getArchive($fetchData["id"]);

$bookmark = new Bookmark();
$queryData = [
	"archive_id" => $archiveData["id"],
	"title" => $dataarchiveData["title"],
	"authors" => $archiveData["authors"],
	"publisher" => $archiveData["publisher"],
	"issue_date" => $dataarchiveData["issue_date"],
	"image_url" => $archiveData["image_url"],
	"book_id" => $archiveData["book_id"],
	"user_id" => $archiveData["user_id"],
	"purchase_url" => $archiveData["purchase_url"],
];
$bookmark->createBookmark($queryData);

echo json_encode($fetchData);