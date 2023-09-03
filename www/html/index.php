<?php
include './auth/secure.php';
include '../class/Connect.php';
include '../model/User.php';


$userName = $_SESSION["name"];

include_once "../view/index_view.php";