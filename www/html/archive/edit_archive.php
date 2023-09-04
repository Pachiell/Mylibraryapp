<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/Archive.php';
include '../../model/User.php';

$userName = $_SESSION["name"];
$userId = $_SESSION["user_id"];

$archive = new Archive();
if ($_POST["usecase"] === "edit") {
    $archive->updateArchive($_POST);
    header('Location: get_archive.php');
} elseif ($_POST["usecase"] === "delete") {
    $archive->deleteArchive($_POST);
    header('Location: get_archive.php');
}

$archiveData = $archive->getArchive($_GET["id"]);

include_once "../../view/archive/edit_archive_view.php";
