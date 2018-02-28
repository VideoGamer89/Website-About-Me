<?php
	// get the data from request
	$favorite_music_genre_1 = $_GET['Hip Hop'];
	$favorite_music_genre_2 = $_GET['Punk'];
	$favorite_music_genre_3 = $_GET['Rock'];
	$favorite_music_genre_4 = $_GET['Alternative'];
	$favorite_music_genre_5 = $_GET['Pop'];
	$favorite_music_genre_6 = $_GET['Christian Metal'];
	$favorite_music_genre_7 = $_GET['Contemporary Christian Music'];
?>
<?php include '../view/header/Website About Me - Favorite Music - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Here Are My Favorite Music Genres</p>
		<div id = "myFavoriteMusicDivElement">
			<ol>
				<li><?php echo $favorite_music_genre_1; ?></li>
				<li><?php echo $favorite_music_genre_2; ?></li>
				<li><?php echo $favorite_music_genre_3; ?></li>
				<li><?php echo $favorite_music_genre_4; ?></li>
				<li><?php echo $favorite_music_genre_5; ?></li>
				<li><?php echo $favorite_music_genre_6; ?></li>
				<li><?php echo $favorite_music_genre_7; ?></li>
			<ol>
		</div><!-- end myFavoriteMusicDivElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php' ?>
