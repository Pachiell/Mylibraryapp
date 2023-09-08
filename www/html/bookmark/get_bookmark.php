<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/Archive.php';
include '../../model/Bookmark.php';

$userId = $_SESSION["user_id"];

$bookmark = new Bookmark();
$bookmarks = $bookmark->getbookmarks($userId);


include_once "../../view/bookmark/get_bookmark_view.php";