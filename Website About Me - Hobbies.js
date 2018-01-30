function HobbiesProcess()
{
	// Create HTML code
	var string;
	string = "<ul>"
			+ "<li>Playing Video Games</li>"
			+ "<li>Watching TV</li>"
			+ "<li>Listening To Music</li>"
			+ "<li>Watching Movies</li>"
			+ "<li>Bowling</li>"
			+ "<li>Going to the <a href=" + "http://www.wisdells.com/wisconsin-dells.htm" + ">Wisconsin Dells</a></li>"
		+ "</ul>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivHobbiesElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}
