<?php

include '../model/connect.php';
include '../model/user.php';
include '../model/secure.php';


$userInfo = new UserInfo();
$loginUserInfo = $userInfo->getLoginUserInfo($_SESSION['email']);



include_once "../view/user_info_view.php";
