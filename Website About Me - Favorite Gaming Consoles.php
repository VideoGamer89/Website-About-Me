<?php
  $favorite_gaming_console_1 = $_GET['Nintendo Switch'];
	$favorite_gaming_console_2 = $_GET['Wii U'];
	$favorite_gaming_console_3 = $_GET['Nintendo 3DS'];
	$favorite_gaming_console_4 = $_GET['Nintendo DS'];
	$favorite_gaming_console_5 = $_GET['Xbox One'];
	$favorite_gaming_console_6 = $_GET['Xbox 360'];
	$favorite_gaming_console_7a = $_GET['PlayStation 4'];
	$favorite_gaming_console_7b = $_GET['PS4'];
	$favorite_gaming_console_8 = $_GET['GameCube'];
	$favorite_gaming_console_9 = $_GET['Wii'];
	$favorite_gaming_console_10 = $_GET['Nintendo 64'];
?>
<?php include 'Website About Me - Favorite Gaming Consoles - header.php'; ?>
  <div class = "content">
    <p>Here are some of the gaming consoles that I'vs played so far.</p>
    <div>
      <ul>
				<li><?php echo $favorite_gaming_console_1; ?></li>
				<li><?php echo $favorite_gaming_console_2; ?></li>
				<li><?php echo $favorite_gaming_console_3; ?></li>
				<li><?php echo $favorite_gaming_console_4; ?></li>
				<li><?php echo $favorite_gaming_console_5; ?></li>
				<li><?php echo $favorite_gaming_console_6; ?></li>
				<li><?php echo $favorite_gaming_console_7a; ?> (<?php echo $favorite_gaming_console_7b; ?>)</li>
				<li><?php echo $favorite_gaming_console_8; ?></li>
				<li><?php echo $favorite_gaming_console_9; ?></li>
				<li><?php echo $favorite_gaming_console_10; ?></li>
			</ul>
    </div>
  </div>
<?php include 'footer.php'; ?>
