<?php
set_include_path(dirname(__DIR__));
require_once('admin/database/connection.php');
$db = new Database();

session_start();

if (isset($_POST['email']) && isset($_POST['password']))
{
	// verify password
	$verified = $db->verify_user($_POST['email'], $_POST['password']);
	if ($verified) {
		$_SESSION['user'] = $_POST['email'];
	} else {
		echo "
		<div class='alert alert-danger' role='alert'>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		";
	}
}

include 'templates/partials/header.php';

if (isset($_SESSION['user'])) {
	include 'templates/admin_portal.php';
} else {
	include 'templates/login.php';
}

include 'templates/partials/footer.php';
?>