<?php
include '../auth/secure.php';
include '../../class/Connect.php';
include '../../model/User.php';

$user = new User();
$loginUserInfo = $user->getUser($_SESSION['email']);

include_once "../../view/user/get_user_view.php";