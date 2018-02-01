<?php
  // get the data from the request
  $favorite_restaurant_1 = $_GET['Wendy\'s'];
	$favorite_restaurant_2 = $_GET['McDonalds'];
	$favorite_restaurant_3 = $_GET['Golden Corral'];
	$favorite_restaurant_4 = $_GET['Pizza Hut'];
	$favorite_restaurant_5 = $_GET['Pizza Ranch'];
	$favorite_restaurant_6 = $_GET['White Castle'];
	$favorite_restaurant_7 = $_GET['KFC (Kentucky Fried Chicken)'];
	$favorite_restaurant_8 = $_GET['Subway'];
	$favorite_restuarant_9 = $_GET['Denny\'s'];
	$favorite_restuarant_10 = $_GET['Old Country Buffet'];
	$favorite_restuarant_11 = $_GET['Starbucks'];
?>
<?php include 'Website About Me - Favorite Restaurants - header.php'; ?>
  <div class = "content">
    <p>Here are my favorite restaurants</p>
    <div>
      <ul>
        <li><a href="https://www.wendys.com/"><?php echo $favorite_restaurant_1; ?></a></li>
				<li><a href="https://www.mcdonalds/com/"><?php echo $favorite_restaurant_2; ?></a></li>
				<li><a href="http://www.goldencorral.com/"><?php echo $favorite_restaurant_3; ?></a></li>
				<li><a href="https://www.pizzahut.com/"><?php echo $favorite_restaurant_4; ?></a></li>
				<li><a href="http://perkinsrestaurants.com/"><?php echo $favorite_restaurant_5; ?></a></li>
				<li><a href="https://pizzaranch.com/"><?php echo $favorite_restaurant_6; ?></a></li>
				<li><a href="https://www.whitecastle.com/"><?php echo $favorite_restaurant_7; ?></a></li>
				<li><a href="https://www.kfc.com/"><?php echo $favorite_restaurant_8; ?></a></li>
				<li><a href="http://www.subway.com/en-us"><?php echo $favorite_restaurant_9; ?></a></li>
				<li><a href="https://www.dennys.com/"><?php echo $favorite_restaurant_10; ?></a></li>
				<li><a href="http://www.oldcountrybuffet.com/"><?php echo $favorite_restaurant_11; ?></a></li>
				<li><a href="http://www.starbucks.com/"><?php echo $favorite_restaurant_12; ?></a></li>
      </ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
