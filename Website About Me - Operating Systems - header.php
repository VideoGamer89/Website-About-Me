<?php
  // get the data from the navigation
  $navigation_1 = $_GET['Home'];
  $navigation_2 = $_GET['Hobbies'];
  $navigation_3 = $_GET['Favorite Music'];
  $navigation_4 = $_GET['Favorite Bands'];
  $navigation_5 = $_GET['Favorite Video Games'];
  $navigation_6 = $_GET['Favorite Gaming Consoles'];
  $navigation_7 = $_GET['Favorite Movies'];
  $navigation_8 = $_GET['Favorite TV Shows'];
  $navigation_9 = $_GET['Favorite Foods'];
  $navigation_10 = $_GET['Favorite Restaurants'];
  $navigation_11 = $_GET['Favorite Stores'];
  $navigation_12 = $_GET['Image Gallery'];
  $navigation_13 = $_GET['Education'];
  $navigation_14 = $_GET['Work Samples'];
  $navigation_15 = $_GET['Computer Programming Skills'];
  $navigation_16 = $_GET['Software'];
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="Website About Me - php.css" rel="stylesheet" />
  </head>
  <body>
    <div id = "page">
      <div id = "header">
        <h1>Operating Systems</h1>
      </div>
      <div id = "nav">
        <ul>
          <li><a href="Website About Me - Main.php"><?php $navigation_1; ?></a></li>
					<li><a href="Website About Me - Hobbies.php"><?php $navigation_2; ?></a></li>
					<li><a href="Website About Me - Favorite Music.php"><?php $navigation_3; ?></a></li>
					<li><a href="Website About Me - Favorite Bands.php"><?php $navigation_4; ?></a></li>
					<li><a href="Website About Me - Favorite Video Games.php"><?php $navigation_5; ?></a></li>
					<li><a href="Website About Me - Favorite Gaming Consoles.php"><?php $navigation_6; ?></a></li>
					<li><a href="Website About Me - Favorite Movies.php"><?php $navigation_7; ?></a></li>
					<li><a href="Website About Me - Favorite TV Shows.php"><?php $navigation_8; ?></a></li>
					<li><a href="Website About Me - Favorite Foods.php"><?php $navigation_9; ?></a></li>
					<li><a href="Website About Me - Favorite Restaurants.php"><?php $navigation_10; ?></a></li>
					<li><a href="Website About Me - Favorite Stores.php"><?php $navigation_11; ?></a></li>
					<li><a href="Website About Me - Image Gallery.php"><?php $navigation_12; ?></a></li>
					<li><a href="Website About Me - Education.php"><?php $navigation_13; ?></a></li>
					<li><a href="Website About Me - Work Samples.php"><?php $navigation_14; ?></a></li>
					<li><a href="Website About Me - Computer Programming Skills.php"><?php $navigation_15; ?></a></li>
					<li><a href="Website About Me - Software.php"><?php $navigation_16; ?></a></li>
        </ul>
      </div>
