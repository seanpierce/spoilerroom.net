var videoOverlay = document.getElementById('video-overlay');
var overlay = document.getElementById('overlay');

videoOverlay.style.display = 'none';
overlay.style.display = 'none';

$("#info-button").click(function() {
  $('#overlay').load('info.txt');
  $('#overlay').show();
});

function openEpisode(number) {
	var settings = {
		"url": "api/episode?number=" + number,
		"method": "GET",
		"headers": {
		  "Content-Type": "application/json"
		}
	}
	  
	$.ajax(settings).done(res => {
		var episode = res.data;

		if (episode.youtube) {
			showYoutube(episode)
		} else {
			showFile(episode)
		}
	});
}

function showYoutube(episode) {
	var url = "https://www.youtube.com/embed/" + episode.id + "?autoplay=1&showinfo=0&controls=1";
	var player = document.getElementById('video-frame');
	var overlay = document.getElementById('video-overlay');
	player.src = url;
	overlay.style.display = 'inherit';
}

function showFile(episode) {
	var player = document.createElement('video');
	player.id = 'video-file-player'
	player.classList = 'video-player, modal'
	player.controls = true;
	player.autoplay = true;
	player.src = 'mov/mp4/' + episode.file;

	var overlay = document.getElementById('video-overlay');
	overlay.appendChild(player);

	overlay.style.display = 'inherit';
}

function closeModals() {
	var overlay = document.getElementById('video-overlay');
	var player = document.getElementById('video-frame');

	overlay.style.display = 'none';
	player.src = '';

	var videoFilePlayer = document.getElementById('video-file-player');
	if (videoFilePlayer)
		videoFilePlayer.parentNode.removeChild(videoFilePlayer);
}

