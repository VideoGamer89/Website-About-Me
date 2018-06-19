function FavoriteFoodsProcess()
{
	// Create HTML code
	var string;
	string = "<table border = " + "3" + ">"
				+"<caption>Favorite Foods</caption>"
				+ "<tr>"
					+ "<th>Name</th>"
					+ "<th>Type</th>"
					+ "<th>Place of origin</th>"
					+ "<th>Main ingredients</th>"
					+ "<th>Course</th>"
					+ "<th>Resource Number</th>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Pizza</td>"
					+ "<td>Flatbread</td>"
					+ "<td>Naples, Campania, Southern Italy</td>"
					+ "<td>Dough, tomato sauce, cheese</td>"
					+ "<td>Lunch or Dinner</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">1</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Chicken</td>"
					+ "<td>Poultry</td>"
					+ "<td>Babylon, Iraq</td>"
					+ "<td>None</td>"
					+ "<td>Starter, Main Meal, Side Dish</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">2</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Chicken Quesadilla</td>"
					+ "<td>Flatbread, tortilla, taco</td>"
					+ "<td>Mexico</td>"
					+ "<td>Tortillas, cheese, meat, salsa, mushroom, refried beans, avocado, other vegetables</td>"
					+ "<td>Lunch or Dinner</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">3</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Cheeseburger(s)</td>"
					+ "<td>Sandwich</td>"
					+ "<td>United States</td>"
					+ "<td>Ground beef patty, cheese, bread buns</td>"
					+ "<td>Main Course</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">4</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Macaroni and Cheese</td>"
					+ "<td>Pasta</td>"
					+ "<td>England</td>"
					+ "<td>Macaroni, cheddar sauce, milk, butter, flour</td>"
					+ "<td>Main or Side Dish</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">5</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Oranges (fruit)</td>"
					+ "<td>Citrus</td>"
					+ "<td>China</td>"
					+ "<td>None</td>"
					+ "<td>Side Dish, Snack</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">6</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Apples</td>"
					+ "<td>Fruit</td>"
					+ "<td>Malus, Turkey</td>"
					+ "<td>None</td>"
					+ "<td>Side Dish, Snack</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">7</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Raisins</td>"
					+ "<td>Dried fruit</td>"
					+ "<td>France</td>"
					+ "<td>None</td>"
					+ "<td>Side Dish, Snack</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">8</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Apple Sauce</td>"
					+ "<td>Sauce</td>"
					+ "<td>United States</td>"
					+ "<td>Apples, Cinnamon, Sugar</td>"
					+ "<td>Side Dish, Snack</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">9</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Banana(s)</td>"
					+ "<td>Fruit</td>"
					+ "<td>Southeast Asia</td>"
					+ "<td>None</td>"
					+ "<td>Side Dish, Snack</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">10</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Potato Chips</td>"
					+ "<td>Chips</td>"
					+ "<td>England</td>"
					+ "<td>Potatoes, salt, herbs, spices, cheese, cooking oil</td>"
					+ "<td>Snack, Side Dish</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">11</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Blooming Onion</td>"
					+ "<td>None</td>"
					+ "<td>United States</td>"
					+ "<td>Onion, Batter</td>"
					+ "<td>Hors D'Oeuvre</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">12</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Gnocchi</td>"
					+ "<td>Dumpling</td>"
					+ "<td>Italy</td>"
					+ "<td>Potatoes, Semolina, Wheat Flour, Breadcrumbs, Eggs, Cheese</td>"
					+ "<td>Entr&eacute;e</td>"
					+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">13</a></td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Rice-A-Roni</td>"
					+ "<td>Flavored Rice, Pasta Mixes</td>"
					+ "<td>United States</td>"
					+ "<td>Rice, Vermicelli Pasta, Seasonings</td>"
					+ "<td>Lunch, Snack, and Dinner</td>"
					+ "<a href=" + "Website About Me - Works Cited - mobile.html" + ">14</a></td>"
				+ "</tr>"
			+ "</table>"
			+ "<p>Subway's Oven Roasted Chicken Breast Sub</p>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteFoodsElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}
