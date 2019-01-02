<?php
include 'data.php';
include 'inc/functions.php';
include 'inc/header.php';
?>

<div id="container">

	<?php include 'inc/columns.php'; ?>

	<div id="content">

		<?php include 'inc/logo.php'; ?>

		<p class="full-width, centered">
			<img class="full-width" src="img/barbedwire.png"/><br><br>
			All Episodes
		</p>

		<!-- episodes -->
		<ul id="episodes">
			<?php
				echo buildEpisodes($episodes, true);
			?>
		</ul>

		<?php include 'inc/footer.php'; ?>
