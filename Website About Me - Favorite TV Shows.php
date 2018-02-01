<?php
	// get the data from the request
	$favorite_tv_show_1 = $_GET['Ultimate Spider-Man (2012 TV series)'];
	$favorite_tv_show_2 = $_GET['Teenage Mutant Ninja Turtles (2012 TV series)'];
	$favorite_tv_show_3 = $_GET['Yo-Kai Watch (TV series)'];
	$favorite_tv_show_4 = $_GET['Marvel\'s Avengers Assemble'];
	$favorite_tv_show_5 = $_GET['Voltron: Legendary Defender'];
	$favorite_tv_show_6 = $_GET['Power Rangers: Dino Charge'];
	$favorite_tv_show_7 = $_GET['The Simpsons'];
	$favorite_tv_show_8 = $_GET['Family Guy'];
	$favorite_tv_show_9 = $_GET['How I Met Your Mother (TV series)'];
	$favorite_tv_show_10 = $_GET['Teen Titans Go'];
	$favorite_tv_show_11 = $_GET['Justice League Action'];
	$favorite_tv_show_12 = $_GET['American Dad'];
	$favorite_tv_show_13 = $_GET['The Big Bang Theory (TV series)'];
	$favorite_tv_show_14 = $_GET['Guardians of the Galaxy (TV series)'];
	$favorite_tv_show_15 = $_GET['Marvel\'s Spider-Man (2017 TV series)'];
	$favorite_tv_show_16 = $_GET['Power Rangers: Ninja Steel'];
	$favorite_tv_show_17 = $_GET['Sonic Boom (2014 TV series'];
	$favorite_tv_show_18 = $_GET['Last Man Standing (2011 TV series)'];
?>
<?php include 'Website About Me - Favorite TV Shows - header.php'; ?>
  <div class = "content">
    <p>Here Are My Favorite TV Shows</p>
    <div>
      <ul>
        <li><?php echo $favorite_tv_show_1; ?></li>
					<li><?php echo $favorite_tv_show_2; ?></li>
					<li><?php echo $favorite_tv_show_3; ?></li>
					<li><?php echo $favorite_tv_show_4; ?></li>
					<li><?php echo $favorite_tv_show_5; ?></li>
					<li><?php echo $favorite_tv_show_6; ?></li>
					<li><?php echo $favorite_tv_show_7; ?></li>
					<li><?php echo $favorite_tv_show_8; ?></li>
					<li><?php echo $favorite_tv_show_9; ?></li>
					<li><?php echo $favorite_tv_show_10; ?></li>
					<li><?php echo $favorite_tv_show_11; ?></li>
					<li><?php echo $favorite_tv_show_12; ?></li>
					<li><?php echo $favorite_tv_show_13; ?></li>
					<li><?php echo $favorite_tv_show_14; ?></li>
					<li><?php echo $favorite_tv_show_15; ?></li>
					<li><?php echo $favorite_tv_show_16; ?></li>
					<li><?php echo $favorite_tv_show_17; ?></li>
					<li><?php echo $favorite_tv_show_18; ?></li>
      </ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
