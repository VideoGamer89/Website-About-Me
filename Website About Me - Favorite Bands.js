function FavoriteBandsProcess()
{
  // Create HTML code
  var string;
  string = "<table>"
			+ "<tr>"
				+ "<td>Hip Hop</td>"
				+ "<td>Punk</td>"
				+ "<td>Rock</td>"
				+ "<td>Alternative</td>"
				+ "<td>Pop</td>"
				+ "<td>Christian</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Trip Lee</td>"
				+ "<td>The Offspring</td>"
				+ "<td>Decifer Down</td>"
				+ "<td>Kutless</td>"
				+ "<td>Motion City Soundtrack</td>"
				+ "<td>Haste The Day</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Grits</td>"
				+ "<td>Hawk Nelson</td>"
				+ "<td>Red</td>"
				+ "<td>Skillet</td>"
				+ "<td>My Chemical Romance</td>"
				+ "<td>Demon Hunter</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Group One Crew</td>"
				+ "<td>Bad Religion</td>"
				+ "<td>Fall Out Boy</td>"
				+ "<td>Foo Fighters</td>"
				+ "<td>State Champs</td>"
				+ "<td>For Today</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Manafest</td>"
				+ "<td>The Ramones</td>"
				+ "<td>Seventh Day Slumber</td>"
				+ "<td>Fighting Instinct</td>"
				+ "<td>Newsboys</td>"
				+ "<td>War of Ages</td>"
			+ "</tr>"
		+ "</table>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivFavoriteBandsElement);
    // add content to the <div> element
    myDiv.innerHTML = string;
}
