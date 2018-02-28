<?php
	// get the data from the navigation
	$navigation_1 = $_GET['Home'];
	$navigation_2 = $_GET['Hobbies'];
	$navigation_3 = $_GET['Favorite Music'];
	$navigation_4 = $_GET['Favorite Bands'];
	$navigation_5 = $_GET['Favorite Movies'];
	$navigation_6 = $_GET['Favorite Video Games'];
	$navigation_7 = $_GET['Favorite Gaming Consoles'];
	$navigation_8 = $_GET['Favorite Foods'];
	$navigation_9 = $_GET['Favorite Restaurants'];
	$navigation_10 = $_GET['Favorite Stores'];
	$navigation_11 = $_GET['Image Gallery'];
	$navigation_12 = $_GET['Work Samples'];
	$navigation_13 = $_GET['Education'];
	$navigation_14 = $_GET['Computer Programming Skills'];
	$navigation_15 = $_GET['Operating Systems'];
	$navigation_16 = $_GET['Software'];
	$navigation_17 = $_GET['Favorite Beverages'];
	$navigation_18 = $_GET['Resources'];
?>
<!DOCTYPE html>
<html>
	<!-- the head section -->
	<head>
		<title>Website About Me - Favorite TV Shows</title>
		<link rel="stylesheet" type="text/css" href="Website About Me - php.css" />
	</head><!-- end head -->
	<!-- the body section -->
	<body>
		<!-- the page section -->
		<div id = "page">
			<!-- the header section -->
			<div id = "header">
				<h1>Favorite TV Shows</h1>
			</div><!-- end header -->
			<!-- the nav section -->
			<div id = "nav">
				<ul>
					<li><a href="Website About Me - Main.php"><?php echo $navigation_1; ?></a></li>
					<li><a href="Website About Me - Hobbies.php"><?php echo $navigation_2; ?></a></li>
					<li><a href="Website About Me - Favorite Music.php"><?php echo $navigation_3; ?></a></li>
					<li><a href="Website About Me - Favorite Bands.php"><?php echo $navigation_4; ?></a></li>
					<li><a href="Website About Me - Favorite Movies.php"><?php echo $navigation_5; ?></a></li>
					<li><a href="Website About Me - Favorite Video Games.php"><?php echo $navigation_6; ?></a></li>
					<li><a href="Website About Me - Favorite Gaming Consoles.php"><?php echo $navigation_7; ?></a></li>
					<li><a href="Website About Me - Favorite Foods.php"><?php echo $navigation_8; ?></a></li>
					<li><a href="Website About Me - Favorite Restaurants.php"><?php echo $navigation_9; ?></a></li>
					<li><a href="Website About Me - Favorite Stores.php"><?php echo $navigation_10; ?></a></li>
					<li><a href="Website About Me - Image Gallery.php"><?php echo $navigation_11; ?></a></li>
					<li><a href="Website About Me - Work Samples.php"><?php echo $navigation_12; ?></a></li>
					<li><a href="Website About Me - Education.php"><?php echo $navigation_13; ?></a></li>
					<li><a href="Website About Me - Computer Programming Skills.php"><?php echo $navigation_14; ?></a></li>
					<li><a href="Website About Me - Operating Systems.php"><?php echo $navigation_15; ?></a></li>
					<li><a href="Website About Me - Software.php"><?php echo $navigation_16; ?></a></li>
					<li><a href="Website About Me - Favorite Beverages.php"><?php echo $navigation_17; ?></a></li>
					<li><a href="Website About Me - Resources.php"><?php echo $navigation_18; ?></a></li>
				</ul>
			</div><!-- end nav -->
