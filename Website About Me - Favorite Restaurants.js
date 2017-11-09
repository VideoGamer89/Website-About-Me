function FavoriteRestaurantsProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
		+ "<li><a href=" + "https://www.wendys.com/" + ">Wendy's</a></li>"
		+ "<li><a href=" + "https://www.mcdonalds.com/" + ">McDonalds</a></li>"
		+ "<li><a href=" + "http://www.goldencorral.com/" + ">Golden Corral</a></li>"
		+ "<li><a href=" + "https://www.pizzhut.com/" + ">Pizza Hut</a></li>"
		+ "<li><a href=" + "http://www.perkinsrestaurants.com/" + ">Perkins</a></li>"
		+ "<li><a href=" + "https://www.pizzaranch.com/" + ">Pizza Ranch</a></li>"
		+ "<li><a href=" + "https://www.whitecastle.com/" + ">White Castle</a></li>"
		+ "<li><a href=" + "https://www.kfc.com/" + "> KFC (Kentucky Fried Chicken)</a></li>"
		+ "<li><a href=" + "http://www.subway.com/en-us" + ">Subway</a></li>"
		+ "<li><a href=" + "https://www.dennys.com/" + ">Denny's</a></li>"
		+ "<li><a href=" + "http://www.oldcountrybuffet.com/" + ">Old Country Buffet</a></li>"
		+ "<li><a href=" + "http://www.starbucks.com/" + ">Starbucks</a></li>"
		+ "<li><a href=" + "https://www.dairyqueen.com/us-en/?localechange=1&" + ">Dairy Queen</a></li>"
	+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivFavoriteRestaurantsElement");
  // add content to the <div> element
  myDiv.innerHTML = string;
}
