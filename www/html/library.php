<?php

include '../model/connect.php';
include '../model/user.php';
include '../model/secure.php';
include '../model/archive.php';


$userName = $_SESSION["name"];
$userId = $_SESSION["user_id"];

$archive= new Archive();
$archives=$archive->find($userId);

include_once "../view/library_view.php";
