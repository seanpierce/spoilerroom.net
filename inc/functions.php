<?php

function buildEpisode($episode) {
	$ep_number_as_string = (string)$episode['number'];
	$ep_id = $episode['id'];
	$ep_number = $episode['number'];
	$ep_title = $episode['title'];

	$html = 
	"<li>
		<img 
			id='ep$ep_number_as_string' 
			src='https://img.youtube.com/vi/$ep_id/0.jpg' 
			alt='$ep_id'
			onclick='openEpisode($ep_number_as_string)'>
		<br>
		<figcaption>Ep $ep_number: $ep_title</figcaption>
	</li>";

	return $html;
}

function buildEpisodes($episodes, $buildAll) {
	$maxArr = max(array_keys($episodes));
	$highestIndex = $episodes[$maxArr]["number"];

	$html;
	$i = 0;

	foreach ($episodes as $episode) {
		if ($i++ > 9 && !$buildAll) break;
		if ($episode['number'] == $highestIndex) continue;

		$html .= buildEpisode($episode);
	}

	return $html;
}