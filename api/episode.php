<?php
include 'api.config.php';

if (empty($_GET['number'])) {
	$message = "Episode number not provided in request.";
	$episode = false;
} else {
	try {
		$message = "Episode {$_GET['number']} retrieved";
		$episode = $episodes[$_GET['number']];
		if ($episode == null) {
			throw new Exception("Episode does not exist in the data array.");
		}
	} catch (Exception $exception) {
		$message = "{$exception}";
		$episode = false;
	}
}

response($message, $episode);

