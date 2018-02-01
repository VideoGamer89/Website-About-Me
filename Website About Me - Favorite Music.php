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
<?php include 'Website About Me - Favorite Music - header.php'; ?>
  <div class = "content">
    <p>Here Are My Favorite Music Genres</p>
    <div>
      <ol>
        <li><?php echo $favorite_music_genre_1; ?></li>
				<li><?php echo $favorite_music_genre_2; ?></li>
				<li><?php echo $favorite_music_genre_3; ?></li>
				<li><?php echo $favorite_music_genre_4; ?></li>
				<li><?php echo $favorite_music_genre_5; ?></li>
				<li><?php echo $favorite_music_genre_6; ?></li>
				<li><?php echo $favorite_music_genre_7; ?></li>
      </ol>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
