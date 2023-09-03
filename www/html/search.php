<?php
include './auth/secure.php';

$userId = $_SESSION['user_id'];

include_once "../view/search_view.php";