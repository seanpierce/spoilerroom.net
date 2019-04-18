<!DOCTYPE html>
<html>
	<head>
		<title>Admin | Spoiler Room</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="public/app.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="public/app.js"></script>
	</head>
	<body>

		<?php if ($_SESSION['user']) {
			include 'templates/partials/nav.php';
		} ?>

		<div class="container">