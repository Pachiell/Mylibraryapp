<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../class/Auth.php';


$err = null;
if (isset($_POST['email']) && isset($_POST['password'])) {
  $auth = new Auth();
  $err = $auth->login($_POST['email'], $_POST['password']);
}

include_once "../../view/auth/login_view.php";