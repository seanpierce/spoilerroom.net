<?php
include "data.php";
include "inc/functions.php";
include "inc/header.php";
?>

<div id="container">

	<?php include 'inc/columns.php'; ?>

	<div id="content">

		<?php include 'inc/logo.php'; ?>

		<!-- most recent episide image -->
		<p class="full-width" style="text-align: center;">> Watch EP <?php echo $highestIndex; ?>: <?php echo $episodes[$highestIndex]['title']; ?> <</p>
		<img id="current-img" class="full-width" src="https://img.youtube.com/vi/<?php echo $episodes[$highestIndex]['id']; ?>/0.jpg" alt="<?php echo $episodes[$highestIndex]['id'] ?>"/>


		<p class="full-width, centered">
			<img class="full-width" src="img/barbedwire.png"/><br><br>
			Episodes
		</p>

		<!-- episodes -->
		<ul id="episodes">
			<?php
				echo buildEpisodes($episodes, false);
			?>
		</ul>
		<p class="full-width, centered">
			<a href="archive">All Episodes</a>
		</p>

		<?php include "inc/footer.php"; ?>
