<?php
include 'api.config.php';

if (empty($_GET['number'])) {
	$message = "Episode number not provided in request.";
	$episode = false;
} else {
	try {
		$message = "Episode {$_GET['number']} retrieved";
		$episode = $episodes[$_GET['number']];
	} catch (Exception $exception) {
		$message = "Episode number {$_GET['number']} does not exist.";
		$episode = false;
	}
}

response($message, $episode);

