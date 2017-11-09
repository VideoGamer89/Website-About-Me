function FavoriteStoresProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li><a href=" + "http://www.gamestop.com/" + ">GameStop</a>, Type: Public, Industry: Retail, Founded: 1984, Headquarters: Grapevine, Texas</li>"
			+ "<li><a href=" + "https://www.walmart.com/" + ">Walmart</a>, Type: Public, Industry: Retail, Founded: 1962, Headquarters: Bentonville, Arkansas</li>"
			+ "<li><a href=" + "https://www.target.com/" + ">Target</a>, Type: Public, Industry: Retail, Founded: 1902, Headquarters: Minneapolis, Minnesota</li>"
			+ "<li><a href=" + "http://www.bestbuy.com/" + ">Best Buy</a>, Type: Public, Industry: Retail, Founded: 1966, Headquarters: Richfield, Minnesota</li>"
			+ "<li><a href=" + "https://www.kohls.com/" + ">Kohl's</a>, Type: Public, Industry: Retail, Founded: 1962, Headquarters: Menomonee Falls, Wisconsin</li>"
			+ "<li><a href=" + "http://www.shopko.com/" + ">Shopko</a>, Type: Private, Industry: Retail, Founded: 1962, Headquarters: Green Bay, Wisconsin</li>"
			+ "<li><a href=" + "https://www.cub.com/" + ">Cub Foods</a>, Type: Subsidiary, Industries: Retail, Grocery, Founded: 1968, Headquarters: Stillwater, Minnesota</li>"
		+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivFavoriteStoresElement");
  // add content to the <div> element
  myDiv.innerHTML = string;
}
