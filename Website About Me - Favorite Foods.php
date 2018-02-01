<?php
  // get the data from the request
  $favorite_food_1 = $_GET['Pizza'];
  $favorite_food_2 = $_GET['Chicken'];
  $favorite_food_3 = $_GET['Chicken Quesadilla'];
	$favorite_food_4 = $_GET['Subway\'s Oven Roasted Chicken Breast Sub'];
	$favorite_food_5 = $_GET['Cheesburgers'];
	$favorite_food_6 = $_GET['Macaroni and Cheese'];
	$favorite_food_7 = $_GET['Oranges'];
	$favorite_food_8 = $_GET['Apples'];
	$favorite_food_9 = $_GET['Raisins'];
	$favorite_food_10 = $_GET['Apple Sauce'];
	$favorite_food_11 = $_GET['Bananas'];
	$favorite_food_12 = $_GET['Potato Chips'];
?>
<?php include 'Website About Me - Favorite Foods - header.php'; ?>
  <div class = "content">
    <p>Here Are My Favorite Foods</p>
    <div>
      <ul>
				<li><?php echo $favorite_food_1; ?><li>
				<li><?php echo $favorite_food_2; ?><li>
				<li><?php echo $favorite_food_3; ?><li>
				<li><?php echo $favorite_food_4; ?><li>
				<li><?php echo $favorite_food_5; ?><li>
				<li><?php echo $favorite_food_6; ?><li>
				<li><?php echo $favorite_food_7; ?><li>
				<li><?php echo $favorite_food_8; ?><li>
				<li><?php echo $favorite_food_9; ?><li>
				<li><?php echo $favorite_food_10; ?><li>
				<li><?php echo $favorite_food_11; ?><li>
				<li><?php echo $favorite_food_12; ?><li>
			</ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?> 
