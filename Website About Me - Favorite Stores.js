function FavoriteStoresProcess
{
	// Create HTML code
	var string;
	string = "<table>"
			+ "<tr>"
				+ "<th>Name</th>"
				+ "<th>Type</th>"
				+ "<th>Industry(ies)</th>"
				+ "<th>Founded</th>"
				+ "<th>Headquarters</th>"
				+ "<th>Number of Locations</th>"
				+ "<th>Product(s)</th>"
				+ "<th>Division(s)</th>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "http://www.gamestop.com/" + ">GameStop</a></td>"
				+ "<td>Public</td>"
				+ "<td>Retail</td>"
				+ "<td>1984</td>"
				+ "<td>Grapevine, Texas</td>"
				+ "<td>7,117</td>"
				+ "<td>Video Games, Consoles, Accessories</td>"
				+ "<td>Video Game Brands, Technology Brands</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "https://www.walmart.com/" + ">Walmart</a></td>"
				+ "<td>Public</td>"
				+ "<td>Retail</td>"
				+ "<td>1962</td>"
				+ "<td>Bentonville, Arkansas</td>"
				+ "<td>11,695</td>"
				+ "<td>Electronics, Movies and music, Home and furniture, Home improvement, Clothing, Footwear, Jewelry, Toys, Health and beauty, Pet supplies, Sporting goods and fitness, Auto, Photo finishing, craft supplies, party supplies, grocery</td>"
				+ "<td>Walmart U.S. Walmart International, Sam's Club, Global eCommerce</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "https://www.target.com/" + ">Target</a></td>"
				+ "<td>Public</td>"
				+ "<td>Retail</td>"
				+ "<td>1902</td>"
				+ "<td>Minneapolis, Minnesota</td>"
				+ "<td>1,816</td>"
				+ "<td>Beauty and health products, bedding, clothing and accessories, electronics, food, furniture, housewares, jewelry, gardening supplies, pet supplies, shoes, sporting goods, toys/games, small appliances, office supplies, books, movies, music</td>"
				+ "<td>Financial and Retail Services, Target Sourcing Services</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "http://www.bestbuy.com/" + ">Best Buy</a></td>"
				+ "<td>Public</td>"
				+ "<td>Retail</td>"
				+ "<td>1966</td>"
				+ "<td>Richfield, Minnesota</td>"
				+ "<td>1,026</td>"
				+ "<td>Consumer Electronics</td>"
				+ "<td>Geek Squad, Magnolia, Pacific Sales</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "https://www.kohls.com/" + ">Kohl's</a></td>"
				+ "<td>Public</td>"
				+ "<td>Retail</td>"
				+ "<td>1962</td>"
				+ "<td>Menomonee Falls, Wisconsin</td>"
				+ "<td>1,155</td>"
				+ "<td>Clothing, footwear, bedding, furniture, jewelry, beauty products, electronics, housewares</td>"
				+ "<td>None</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "http://www.shopko.com/" + ">Shopko</a></td>"
				+ "<td>Private</td>"
				+ "<td>Retail</td>"
				+ "<td>1962</td>"
				+ "<td>Green Bay, Wisconsin</td>"
				+ "<td>357</td>"
				+ "<td>Clothing, footwear, bedding, furniture, jewelry, beauty products, electronics, market, housewares, contact lenses</td>"
				+ "<td>None</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td><a href=" + "https://www.cub.com/" + ">Cub Foods</a></td>"
				+ "<td>Subsidiary</td>"
				+ "<td>Retail, Grocery</td>"
				+ "<td>1968</td>"
				+ "<td>Stillwater, Minnesota</td>"
				+ "<td>81</td>"
				+ "<td>Bakery, dairy, deli, frozen foods, grocery, meat, pharmacy, produce, seafood, snacks, liquor</td>"
				+ "<td>None</td>"
			+ "</tr>
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteStoresElement");
	// add content to the <div> elementFromPoint
	myDiv.innerHTML = string;
}
