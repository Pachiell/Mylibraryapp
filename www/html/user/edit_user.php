<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/User.php';

$userName = $_SESSION["name"];
$id = $_SESSION["user_id"];
$email = $_SESSION["email"];


$user = new User();
if ($_POST["usecase"] === "edit") {
    $count = $user->updateUser($_POST["name"], $id, $_POST["email"]);
    if ($count = 1) {
        $_SESSION["email"] = $_POST["email"];
        header("Location: /index.php");
    } else {
        return null;
    }
} else {
    $userData = $user->getUser($email);
}

include_once "../../view/user/edit_user_view.php";
