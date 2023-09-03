<?php
include '../../class/Connect.php';
include '../../model/User.php';

$errMsg = [];

if (!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $user = new User();
  $dupEmailUser = $user->getUser($email);
  if (!$dupEmailUser) {
    $user->createUser($name, $password, $email);
    header('Location: index.php');
  } else {
    $errMsg["dupEmailUser"] = "このメールアドレスは使用されています。";
  }
} else if (!empty($_POST)) {
  if (!empty($_POST['name'])) {
    $title = $_POST['name'];
    unset($errMsg["RequiredUserName"]);
  } else {
    $errMsg["RequiredUserName"]  = "ユーザー名を入力してください。";
  }

  if (!empty($_POST['password'])) {
    $body = $_POST['password'];
    unset($errMsg["RequiredUserPassword"]);
  } else {
    $errMsg["RequiredUserPassword"] = "パスワードを入力してください。";
  }

  if (!empty($_POST['email'])) {
    $body = $_POST['email'];
    unset($errMsg["RequiredUserEmail"]);
  } else {
    $errMsg["RequiredUserEmail"] = "メールアドレスを入力してください。";
  }
}

include_once "../../view/user/add_user_view.php";