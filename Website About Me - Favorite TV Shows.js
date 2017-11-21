function FavoriteTVShowsProcess()
{
	// Create HTML code
	var string;
	string = "<table>"
			+ "<tr>"
				+ "<th>Name</th>"
				+ "<th>Date of Release</th>"
				+ "<th>Date of Cancellation</th>"
				+ "<th>Country(ies) of Origin</th>"
				+ "<th>Language(s)</th>"
				+ "<th>Genre(s)</th>"
				+ "<th>Number of Seasons</th>"
				+ "<th>Number of Episodes</th>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Ultimate Spider-Man (2012 Animated TV series)</td>"
				+ "<td>April 1, 2012</td>"
				+ "<td>January 7, 2017</td>" 
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero fiction, Action, Comedy-drama</td>"
				+ "<td>4</td>"
				+ "<td>104</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Teenage Mutant Ninja Turtles (2012 3D Animated TV series)</td>"
				+ "<td>September 29, 2012</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Comedy, Drama</td>"
				+ "<td>5</td>"
				+ "<td>124</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Yo-Kai Watch (Animated TV Series)</td>"
				+ "<td>January 18, 2014</td>"
				+ "<td>TBD</td>"
				+ "<td>Japan</td>"
				+ "<td>Japanese(Japan), English Dubbing (United States)</td>"
				+ "<td>Action, Comedy, Supernatural</td>"
				+ "<td>2</td>"
				+ "<td>150</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Marvel's Avengers Assemble (Animated TV Series)</td>"
				+ "<td>May 26, 2013</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero, Acton, Adventure</td>"
				+ "<td>4</td>"
				+ "<td>91</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Pokemon (Animated TV series)</td>"
				+ "<td>April 1, 1997</td>"
				+ "<td>TBD</td>"
				+ "<td>Japan</td>"
				+ "<td>Japanese (Japan), English Dubbing (United States)</td>"
				+ "<td>Action, Adventure, Fantasy</td>"
				+ "<td>20</td>"
				+ "<td>992</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Voltron: Legendary Defender (Animated)</td>"
				+ "<td>June 10, 2016</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action-adventure, Science Fantasy, Mecha</td>"
				+ "<td>4</td>"
				+ "<td>39</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Power Rangers: Dino Charge</td>"
				+ "<td>February 7, 2015</td>"
				+ "<td>December 10, 2016</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Science Fantasy, Superhero fiction</td>"
				+ "<td>2</td>"
				+ "<td>44</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>The Simpsons (Animated)</td>"
				+ "<td>December 17, 1989</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Animated Sitcom</td>"
				+ "<td>29</td>"
				+ "<td>624</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Family Guy (Animated)</td>"
				+ "<td>January 31, 1999</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Animated Sitcom</td>"
				+ "<td>16</td>"
				+ "<td>295</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>How I Met Your Mother (TV series)</td>"
				+ "<td>September 19, 2005</td>"
				+ "<td>March 31, 2014</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom, Romantic Comedy</td>"
				+ "<td>9</td>"
				+ "<td>208</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Teen Titans Go! (Animated)</td>"
				+ "<td>April 23, 2013</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Comedy, Adventure, Science Fiction</td>"
				+ "<td>4</td>"
				+ "<td>200</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Justice League Action (Animated)</td>"
				+ "<td>December 16, 2016</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Superhero, Comedy</td>"
				+ "<td>1</td>"
				+ "<td>44</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>American Dad! (2005 Animated TV Series)</td>"
				+ "<td>February 6, 2005</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Animated Sitcom</td>"
				+ "<td>14</td>"
				+ "<td>234</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>The Big Bang Theory (TV series)</td>"
				+ "<td>September 24, 2007</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom</td>"
				+ "<td>11</td>"
				+ "<td>238</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Guardians of the Galaxy (Animated TV series)</td>"
				+ "<td>August 1, 2015</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Comedy, Science fiction, Superhero</td>"
				+ "<td>2</td>"
				+ "<td>50</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Marvel's Spider-Man (2017 Animated TV series)</td>"
				+ "<td>August 19, 2017</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero fiction</td>"
				+ "<td>1</td>"
				+ "<td>14</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Power Rangers: Ninja Steel</td>"
				+ "<td>January 21, 2017</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Science Fiction, Superhero</td>"
				+ "<td>1</td>"
				+ "<td>20</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Sonic Boom (2014 3D Animated TV series)</td>"
				+ "<td>November 8, 2014</td>"
				+ "<td>TBD</td>"
				+ "<td>United States, France</td>"
				+ "<td>English</td>"
				+ "<td>Comedy, Action/Adventure, Fantasy</td>"
				+ "<td>2</td>"
				+ "<td>104</td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Last Man Standing (2011 TV series)</td>"
				+ "<td>October 11, 2011</td>"
				+ "<td>March 31, 2017</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom</td>"
				+ "<td>6</td>"
				+ "<td>130</td>"
			+ "</tr>"
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteTVShowsElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}