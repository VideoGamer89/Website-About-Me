function FavoriteBeveragesProcess()
{
	// Create HTML code
	var string;
	string = "<table border = " + "3" + ">"
		+ "<caption>Favorite Beverages</caption>"
			+ "<tr>"
				+ "<td>Name</td>"
				+ "<td>Type(s)</td>"
				+ "<td>Manufacturer(s)</td>"
				+ "<td>Country(ies) of Origin</td>"
				+ "<td>Introduced</td>"
				+ "<td>Reformulated</td>"
				+ "<td>Variant(s)</td>"
				+ "<td>Resource Number</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Diet Pepsi</td>"
				+ "<td>Diet Cola</td>"
				+ "<td>PepsiCo</td>"
				+ "<td>United States</td>"
				+ "<td>1964</td>"
				+ "<td>2013</td>"
				+ "<td>Caffeine Free Diet Pepsi, Diet Pepsi Lime, Diet Pepsi Vanilla, Diet Pepsi Wild Cherry</td>"
				+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">1</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Snapple</td>"
				+ "<td>Iced Tea, Juice Drink, Lemonade, Water</td>"
				+ "<td>Dr. Pepper Snapple Group</td>"
				+ "<td>United States</td>"
				+ "<td>1972</td>"
				+ "<td>None</td>"
				+ "<td>Diet Snapple Half Lemonade and Half Iced Tea</td>"
				+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">2</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Diet Coke</td>"
				+ "<td>Diet Cola</td>"
				+ "<td>The Coca-Cola Company</td>"
				+ "<td>United States</td>"
				+ "<td>1982</td>"
				+ "<td>None</td>"
				+ "<td>Caffeine Free Diet Coke, Diet Coke Cherry, Diet Coke with Lime, Diet Coke Sweetened with Splenda, Diet Coke with Citrus Zest</td>"
				+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">3</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Sprite Zero</td>"
				+ "<td>Sugar-Free Lemon-Lime</td>"
				+ "<td>The Coca-Cola Company</td>"
				+ "<td>United States</td>"
				+ "<td>1974</td>"
				+ "<td>None</td>"
				+ "<td>None</td>"
				+ "<td><a href=" + "Website About Me - Works Cited - mobile.html" + ">4</a></td>"
			+ "</tr>"
		+ "</table>"
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteBeveragesElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}
