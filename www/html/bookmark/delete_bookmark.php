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
$bookmark = new Bookmark();
$bookmark->updateBookmark($fetchData["id"]);

echo json_encode($fetchData);