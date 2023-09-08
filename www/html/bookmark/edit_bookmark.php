<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/Archive.php';
include '../../model/Bookmark.php';


$bookmark = new Bookmark();

if ($_POST["usecase"] === "delete") {
    $bookmark->updateBookmark($_POST["archive_id"]);
    header('Location: get_bookmark.php');
} elseif ($_POST["usecase"] === "edit") {
    $bookmark->reviewBookmark($_POST);
    header('Location: get_bookmark.php');
} else {
    $bookmarkData = $bookmark->getBookmark($_GET["archive_id"]);
}


include_once "../../view/bookmark/edit_bookmark_view.php";
