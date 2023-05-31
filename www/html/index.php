<?php

include '../model/connect.php';
include '../model/user.php';
include '../model/secure.php';


$userName = $_SESSION["name"];

include_once "../view/index_view.php";
