function FavoriteRestaurantsProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li><a href=" + "https://www.wendys.com/" + ">Wendy's</a>, Type: Subsidiary, Industry: Restaurant, Founded: 1969, Headquarters: Dublin, Ohio, Genre: Fast Food</li>"
			+ "<li><a href=" + "https://www.mcdonalds.com/" + ">McDonald's</a>, Type: Public, Industry: Restaurant, Founded: 1940, Headquarters: Oak Brook, Illinois, Genre: Fast Food</li>"
			+ "<li><a href=" + "http://www.goldencorral.com/" + ">Golden Corral</a>, Type: Private, Industry: Restaurant, Founded: 1973, Headquarters: Raleigh, North Carolina, Genre: Buffet</li>"
			+ "<li><a href=" + "https://www.pizzahut.com/" + ">Pizza Hut</a>, Type: Wholly owned subsidiary, Industry: Restaurant, Founded: 1958, Headquarters: Plano, Texas, Genre(s): Fast Food, Buffet</li>"
			+ "<li><a href=" + "http://www.perkinsrestaurants.com/" + ">Perkins</a>, Type: Private, Industries: Restaurant, Bakery, Founded: 1958, Headquarters: Memphis, Tennessee, Genre(s): Dining, Bakery</li>"
			+ "<li><a href=" + "https://pizzaranch.com/" + ">Pizza Ranch</a>, Type: Private, Industry: Restaurant, Founded: 1981, Headquarters: Orange City, Iowa, Genre(s): Buffet, Fast Food</li>"
			+ "<li><a href=" + "https://www.whitecastle.com/" + ">White Castle</a>, Type: Private, Industries: Fast Food Restaurant, Founded: 1921, Headquarters: Columbus, Ohio, Genre: Fast Food</li>"
			+ "<li><a href=" + "https://www.kfc.com/" + ">KFC (Kentucky Fried Chicken)</a>, Type: Subsidiary, Industry: Restaurant, Founded: 1930, Headquarters: Louisville, Kentucky, Genre(s): Fast Food, Buffet</li>"
			+ "<li><a href=" + "http://www.subway.com/en-us" + ">Subway</a>, Type: Private, Industry: Restaurant, Founded: 1965, Headquarters: Milford, Connecticut, Genre: Fast Food</li>"
			+ "<li><a href=" + "https://www.dennys.com/" + ">Denny's</a>, Type: Public, Industry: Restaurant, Founded: 1953, Headquarters: Spartanburg, South Carolina, Genre: Dining</li>"
			+ "<li><a href=" + "http://www.oldcountrybuffet.com/" + ">Old Country Buffet</a>, Type: Private, Industry: Restaurant, Founded: 1983, Headquarters: Hollywood Park, Texas, Genre: Buffet</li>"
			+ "<li><a href=" + "http://www.starbucks.com/" + ">Starbucks</a>, Type: Public, Industry: Coffee Shop, Founded: 1971, Headquarters: Seattle, Washington, Genre: Coffee Shop</li>"
			+ "<li><a href=" + "https://www.dairyqueen.com/us-en/?localechange=1&" + ">Dairy Queen (DQ)</a>, Type: Subsidiary, Industry: Restaurant, Founded: 1940, Headquarters: Edina, Minnesota, Genre: Fast Food</li>"
			+ "<li><a href=" + "https://www.tacobell.com/" + ">Taco Bell</a>, Type: Subsidiary, Industry: Restaurant, Founded: 1962, Headquarters: Irvine, California, Genre: Fast Food</li>"
		+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivFavoriteRestaurantsElement");
  // add content to the <div> element
  myDiv.innerHTML = string;
}
