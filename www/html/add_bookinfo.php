<?php
include '../model/secure.php';
include '../model/connect.php';
include '../model/archive.php';

// 1. POSTされた生のデータを受け取る
$request_raw_data = file_get_contents('php://input');

// 2. JSON形式のデータをデコードする
// => データをPHP上で処理できるような形にする。
$data = json_decode($request_raw_data, true);
$userId = $_SESSION["user_id"];

$archive = new Archive();
$archive->createArchive($userId, $data);

echo json_encode($data);
