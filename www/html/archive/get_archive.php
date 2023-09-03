<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/User.php';
include '../../model/Archive.php';

$userName = $_SESSION["name"];
$userId = $_SESSION["user_id"];

$archive = new Archive();
$archives = $archive->getArchives($userId);

include_once "../../view/archive/get_archive_view.php";