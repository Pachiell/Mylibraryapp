<?php

include './auth/secure.php';
include '../class/Connect.php';
include '../model/user.php';


$userName = $_SESSION["name"];

include_once "../view/update_view.php";