<?php
include '../model/connect.php';
include '../model/auth.php';


$err = null;
if (isset($_POST['email']) && isset($_POST['password'])) {
  $auth = new Auth();
  $err = $auth->login($_POST['email'], $_POST['password']);
}

include_once "../view/login_view.php";
