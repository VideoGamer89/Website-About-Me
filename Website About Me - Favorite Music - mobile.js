function FavoriteMusicProcess()
{
	// Create HTML code
	var string;
	string = "<ol>"
			+ "<li>Hip Hop</li>"
			+ "<li>Punk</li>"
			+ "<li>Rock</li>"
			+ "<li>Alternative</li>"
			+ "<li>Pop</li>"
			+ "<li>Christian Metal</li>"
			+ "<li>Contemporary Christian Music</li>"
		+ "</ol>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteMusicElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}
