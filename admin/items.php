<?php

set_include_path(dirname(__DIR__));
require_once('admin/database/connection.php');
$db = new Database();

session_start();

include 'templates/partials/header.php';

if (isset($_SESSION['user'])) {
	include 'templates/items.php';
} else {
	include 'templates/login.php';
}

include 'templates/partials/footer.php';