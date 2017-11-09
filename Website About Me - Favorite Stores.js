function FavoriteStoresProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
		+ "<li><a href=" + "http://www.gamestop.com/" + ">GameStop</a></li>"
		+ "<li><a href=" + "https://www.walmart.com/" + ">Walmart</a></li>"
		+ "<li><a href=" + "https://www.target.com/" + ">Target</a></li>"
		+ "<li><a href=" + "http://www.bestbuy.com/" + ">Best Buy</a></li>"
		+ "<li><a href=" + "https://www.kohls.com/" + ">Kohls</a></li>"
		+ "<li><a href=" + "http://www.shopko.com/" + ">Shopko</a></li>"
		+ "<li><a href=" + "https://www.cub.com/" + ">Cub Foods</a></li>"
	+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivFavoriteStoresElement");
  // add content to the <div> element
  myDiv.innerHTML = string;
}
