var videoOverlay = document.getElementById('video-overlay');
var overlay = document.getElementById('overlay');

videoOverlay.style.display = 'none';
overlay.style.display = 'none';

function openSpoilerInfo() {
	var overlay = document.getElementById('overlay');
	var client = new XMLHttpRequest();
	client.open('GET', 'info.txt');
	client.onreadystatechange = event => {
		if ((event.target.readyState = 4)) {
			var info = document.createElement('div');
			info.innerHTML = client.responseText;
			overlay.appendChild(info);
			overlay.style.display = 'inherit';
		}
	};
	client.send();
}

function closeInfo() {
	var overlay = document.getElementById('overlay');
	overlay.innerHTML = '';
	overlay.style.display = 'none';
}

function setFilePlayerWidth(pixels) {
	var videoFilePlayer = document.getElementById('video-file-player');
	if (videoFilePlayer) videoFilePlayer.width = pixels;
}

function openEpisode(number) {
	var settings = {
		url: 'api/episode?number=' + number,
		method: 'GET',
		headers: {
			'Content-Type': 'application/json'
		}
	};

	$.ajax(settings).done(res => {
		var episode = res.data;

		if (episode.youtube) {
			showYoutube(episode);
		} else {
			showFile(episode);
		}
	});
}

function showYoutube(episode) {
	var url =
		'https://www.youtube.com/embed/' +
		episode.id +
		'?autoplay=1&showinfo=0&controls=1';
	var player = document.getElementById('video-frame');
	var overlay = document.getElementById('video-overlay');
	player.src = url;
	overlay.style.display = 'inherit';
}

function showFile(episode) {
	var player = document.createElement('video');
	player.id = 'video-file-player';
	player.classList = 'video-player, modal';
	player.controls = true;
	player.autoplay = true;
	player.src = 'mov/mp4/' + episode.file;

	var overlay = document.getElementById('video-overlay');
	overlay.appendChild(player);

	overlay.style.display = 'inherit';

	if (document.body.clientWidth < 720) setFilePlayerWidth(400);

	if (document.body.clientWidth < 470) setFilePlayerWidth(300);
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

window.addEventListener('resize', () => {
	if (document.body.clientWidth < 720) setFilePlayerWidth(400);

	if (document.body.clientWidth < 470) setFilePlayerWidth(300);

	if (document.body.clientWidth > 720) setFilePlayerWidth(640);
});

function directLinkToEpisode() {
	var url = new URL(window.location.href);
	var episode = url.searchParams.get('ep');
	if (episode !== null) {
		openEpisode(episode);
	}
}

directLinkToEpisode();
