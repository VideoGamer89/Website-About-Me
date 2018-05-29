<?php
	// get the data from the foods
	$favorite_food_1 = $_GET['Pizza'];
	$favorite_food_2 = $_GET['Chicken (food)'];
	$favorite_food_3 = $_GET['Chicken Quesadilla'];
	$favorite_food_4 = $_GET['Cheesburger(s)'];
	$favorite_food_5 = $_GET['Macaroni and Cheese'];
	$favorite_food_6 = $_GET['Oranges (fruit)'];
	$favorite_food_7 = $_GET['Apples (fruit)'];
	$favorite_food_8 = $_GET['Raisins'];
	$favorite_food_9 = $_GET['Apple Sauce'];
	$favorite_food_10 = $_GET['Banana(s)'];
	$favorite_food_11 = $_GET['Potato Chips'];
	$favorite_food_12 = $_GET['Blooming Onion'];
	$favorite_food_13 = $_GET['Gnocchi'];
	$favorite_food_14 = $_GET['Rice-A-Roni'];
	$favorite_food_15 = $_GET['Subway\'s Oven Roasted Chicken Breast Sub'];
	// get the data from the courses
	$favorite_food_course_1 = $_GET['Lunch'];
	$favorite_food_course_2 = $_GET['Dinner'];
	$favorite_food_course_3 = $_GET['Starter'];
	$favorite_food_course_4 = $_GET['Main Meal / Course'];
	$favorite_food_course_5 = $_GET['Side Dish'];
	$favorite_food_course_6 = $_GET['Snack'];
	$favorite_food_course_7 = $_GET['Hors D\'Oeuvre'];
	$favorite_food_course_8 = $_GET['Entr&eacute;e'];
	// get the data from the ingredients
	$favorite_food_ingredient_1 = $_GET['Dough'];
	$favorite_food_ingredient_2 = $_GET['Tomato Sauce'];
	$favorite_food_ingredient_3 = $_GET['Cheese'];
	$favorite_food_ingredient_4 = $_GET['None'];
	$favorite_food_ingredient_5 = $_GET['Tortillas'];
	$favorite_food_ingredient_6 = $_GET['Meat'];
	$favorite_food_ingredient_7 = $_GET['Salsa'];
	$favorite_food_ingredient_8 = $_GET['Mushroom'];
	$favorite_food_ingredient_9 = $_GET['Refried Beans'];
	$favorite_food_ingredient_10 = $_GET['Avocado'];
	$favorite_food_ingredient_11 = $_GET['Other Vegetables'];
	$favorite_food_ingredient_12 = $_GET['Ground Beef Patty'];
	$favorite_food_ingredient_13 = $_GET['Bread Buns'];
	$favorite_food_ingredient_14 = $_GET['Macaroni'];
	$favorite_food_ingredient_15 = $_GET['Cheddar Sauce'];
	$favorite_food_ingredient_16 = $_GET['Milk'];
	$favorite_food_ingredient_17 = $_GET['Butter'];
	$favorite_food_ingredient_18 = $_GET['Flour'];
	$favorite_food_ingredient_19 = $_GET['Apples'];
	$favorite_food_ingredient_20 = $_GET['Cinnamon'];
	$favorite_food_ingredient_21 = $_GET['Sugar'];
	$favorite_food_ingredient_22 = $_GET['Potatoes'];
	$favorite_food_ingredient_23 = $_GET['Salt'];
	$favorite_food_ingredient_24 = $_GET['Herbs'];
	$favorite_food_ingredient_25 = $_GET['Spices'];
	$favorite_food_ingredient_26 = $_GET['Cooking Oil'];
	$favorite_food_ingredient_27 = $_GET['Onion'];
	$favorite_food_ingredient_28 = $_GET['Batter'];
	$favorite_food_ingredient_29 = $_GET['Semolina'];
	$favorite_food_ingredient_30 = $_GET['Wheat Flour'];
	$favorite_food_ingredient_31 = $_GET['Breadcrumbs'];
	$favorite_food_ingredient_32 = $_GET['Eggs'];
	$favorite_food_ingredient_33 = $_GET['Rice'];
	$favorite_food_ingredient_34 = $_GET['Vermicelli Pasta'];
	$favorite_food_ingredient_35 = $_GET['Seasonings'];
	// get the data from the types
	$favorite_food_type_1 = $_GET['Flatbread'];
	$favorite_food_type_2 = $_GET['Poultry'];
	$favorite_food_type_3 = $_GET['Tortilla'];
	$favorite_food_type_4 = $_GET['Sandwich'];
	$favorite_food_type_5 = $_GET['Pasta'];
	$favorite_food_type_6 = $_GET['Citrus'];
	$favorite_food_type_7 = $_GET['Fruit'];
	$favorite_food_type_8 = $_GET['Dried Fruit'];
	$favorite_food_type_9 = $_GET['Sauce'];
	$favorite_food_type_10 = $_GET['Chips'];
	$favorite_food_type_11 = $_GET['Onion'];
	$favorite_food_type_12 = $_GET['Dumpling'];
	$favorite_food_type_13 = $_GET['Flavored Rice'];
	$favorite_food_type_14 = $_GET['Pasta Mixes'];
?>
<?php include '../view/header/Website About Me - Favorite Foods - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Here Are My Favorite Foods</p>
		<div id = "myFavoriteFoodsDivElement">
			<table border = "3">
			<caption>Favorite Foods</caption>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Place Of Origin</th>
					<th>Main Ingredients</th>
					<th>Course</th>
					<th>Resource Number</th>
				</tr>
				<tr>
					<td><?php echo $favorite_food_1; ?></td>
					<td><?php echo $favorite_food_type_1; ?></td>
					<td>Naples, Campania, Southern Italy</td>
					<td><?php echo $favorite_food_ingredient_1; ?>, <?php echo $favorite_food_ingredient_2; ?>, <?php echo $favorite_food_ingredient_3; ?></td>
					<td><?php echo $favorite_food_course_1; ?> or <?php echo $favorite_food_course_2; ?></td>
					<td><a href="Website About Me - Works Cited.php">1</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_2; ?></td>
					<td><?php echo $favorite_food_type_2; ?></td>
					<td>Babylon, Iraq</td>
					<td><?php echo $favorite_food_ingredient_4; ?></td>
					<td><?php echo $favorite_food_course_3; ?>, <?php echo $favorite_food_course_4; ?>, <?php echo $favorite_food_course_5; ?></td>
					<td><a href="Website About Me - Works Cited.php">2</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_3; ?></td>
					<td><?php echo $favorite_food_type_1; ?>, <?php echo $favorite_food_type_3; ?></td>
					<td>Mexico</td>
					<td><?php echo $favorite_food_ingredient_5; ?>, <?php echo $favorite_food_ingredient_3; ?>, <?php echo $favorite_food_ingredient_6; ?>, <?php echo $favorite_food_ingredient_7; ?>, <?php echo $favorite_food_ingredient_8; ?>, <?php echo $favorite_food_ingredient_9; ?>, <?php echo $favorite_food_ingredient_10; ?>, <?php echo $favorite_food_ingredient_11; ?></td>
					<td><?php echo $favorite_food_course_1; ?> or <?php echo $favorite_food_course_2; ?></td>
					<td><a href="Website About Me - Works Cited.php">3</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_4; ?></td>
					<td><?php echo $favorite_food_type_4; ?></td>
					<td>United States</td>
					<td><?php echo $favorite_food_ingredient_12; ?>, <?php echo $favorite_food_ingredient_3; ?>, <?php echo $favorite_food_ingredient_13; ?></td>
					<td><?php echo $favorite_food_course_4; ?></td>
					<td><a href="Website About Me - Works Cited.php">4</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_5; ?></td>
					<td><?php echo $favorite_food_type_5; ?></td>
					<td>England</td>
					<td><?php echo $favorite_food_ingredient_14; ?>, <?php echo $favorite_food_ingredient_15; ?>, <?php echo $favorite_food_ingredient_16; ?>, <?php echo $favorite_food_ingredient_17; ?>, <?php echo $favorite_food_ingredient_18; ?></td>
					<td><?php echo $favorite_food_course_4; ?> or <?php echo $favorite_food_course_5; ?></td>
					<td><a href="Website About Me - Works Cited.php">5</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_6; ?></td>
					<td><?php echo $favorite_food_type_6; ?></td>
					<td>Europe</td>
					<td><?php echo $favorite_food_ingredient_4; ?></td>
					<td><?php echo $favorite_food_course_5; ?>, <?php echo $favorite_food_course_6; ?></td>
					<td><a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_7; ?></td>
					<td><?php echo $favorite_food_type_7; ?></td>
					<td>Malus, Turkey</td>
					<td><?php echo $favorite_food_ingredient_4; ?></td>
					<td><?php echo $favorite_food_course_5; ?>, <?php echo $favorite_food_course_6; ?></td>
					<td><a href="Website About Me - Works Cited.php">7</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_8; ?></td>
					<td><?php echo $favorite_food_type_8; ?></td>
					<td>France</td>
					<td><?php echo $favorite_food_ingredient_4; ?></td>
					<td><?php echo $favorite_food_course_5; ?>, <?php echo $favorite_food_course_6; ?></td>
					<td><a href="Website About Me - Works Cited.php">8</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_9; ?></td>
					<td><?php echo $favorite_food_type_9; ?></td>
					<td>United States</td>
					<td><?php echo $favorite_food_ingredient_19; ?>, <?php echo $favorite_food_ingredient_20; ?>, <?php echo $favorite_food_ingredient_21; ?></td>
					<td><?php echo $favorite_food_course_5; ?>, <?php echo $favorite_food_course_6; ?></td>
					<td><a href="Website About Me - Works Cited.php">9</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_10; ?></td>
					<td><?php echo $favorite_food_type_7; ?></td>
					<td>Southeast Asia</td>
					<td><?php echo $favorite_food_ingredient_4; ?></td>
					<td><?php echo $favorite_food_course_5; ?>, <?php echo $favorite_food_course_6; ?></td>
					<td><a href="Website About Me - Works Cited.php">10</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_11; ?></td>
					<td><?php echo $favorite_food_type_10; ?></td>
					<td>England</td>
					<td><?php echo $favorite_food_ingredient_22; ?>, <?php echo $favorite_food_ingredient_23; ?>, <?php echo $favorite_food_ingredient_24; ?>, <?php echo $favorite_food_ingredient_25; ?>, <?php echo $favorite_food_ingredient_3; ?>, <?php echo $favorite_food_ingredient_26; ?></td>
					<td><?php echo $favorite_food_course_6; ?>, <?php echo $favorite_food_course_5; ?></td>
					<td><a href="Website About Me - Works Cited.php">11</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_12; ?></td>
					<td><?php echo $favorite_food_type_11; ?></td>
					<td>United States</td>
					<td><?php echo $favorite_food_type_ingredient_27; ?>, <?php echo $favorite_food_type_ingredient_28; ?></td>
					<td><?php echo $favorite_food_type_course_7; ?></td>
					<td><a href="Website About Me - Works Cited.php">12</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_13; ?></td>
					<td><?php echo $favorite_food_type_12; ?></td>
					<td>Italy</td>
					<td><?php echo $favorite_food_ingredient_22; ?>, <?php echo $favorite_food_ingredient_29; ?>, <?php echo $favorite_food_ingredient_30; ?>, <?php echo $favorite_food_ingredient_31; ?>, <?php echo $favorite_food_ingredient_32; ?>, <?php echo $favorite_food_ingredient_3; ?></td>
					<td><?php echo $favorite_food_course_8; ?></td>
					<td><a href="Website About Me - Works Cited.php">13</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_food_14; ?></td>
					<td><?php echo $favorite_food_type_13; ?>, <?php echo $favorite_food_type_14; ?></td>
					<td>United States</td>
					<td><?php echo $favorite_food_ingredient_33; ?>, <?php echo $favorite_food_ingredient_34; ?>, <?php echo $favorite_food_ingredient_35; ?></td>
					<td><?php echo $favorite_food_course_1; ?>, <?php echo $favorite_food_course_6; ?>, and <?php echo $favorite_food_course_2; ?></td>
					<td><a href="Website About Me - Works Cited.php">14</a></td> 
				</tr>
			</table>
			<p><?php echo $favorite_food_15; ?></p>
		</div><!-- end myFavoriteFoodsDivElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
