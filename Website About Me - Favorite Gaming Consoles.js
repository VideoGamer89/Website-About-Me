function FavoriteGamingConsolesProcess()
{
	// Create HTML code
	var string;
	string = "<table>"
				+ "<tr>"
					+ "<th>Name</th>"
					+ "<th>Developer(s)</th>"
					+ "<th>Manufacturer(s)</th>"
					+ "<th>Type</th>"
					+ "<th>Date(s) of Release</th>"
					+ "<th>Best Selling Game(s)</th>"
					+ "<th>Units Sold</th>"
					+ "<th>Introductory Price(s)</th>"
					+ "<th>Predecessor</th>"
					+ "<th>Successor</th>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo Switch</td>"
					+ "<td>Nintendo</td>"
					+ "<td>Nintendo Platform Technology Development (PTD)</td>"
					+ "<td>Hybrid video game console</td>"
					+ "<td>March 3, 2017</td>"
					+ "<td>The Legend of Zelda: Breath of the Wild</td>"
					+ "<td>7.63 Million</td>"
					+ "<td>$299.99</td>"
					+ "<td>Wii U</td>"
					+ "<td>None</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo Wii U</td>"
					+ "<td>Nintendo Integrated Research and Development (IRD), Nintendo Technology Development (NTD)</td>"
					+ "<td>Nintendo, Foxconn, Mitsumi</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 18, 2012</td>"
					+ "<td>Mario Kart 8</td>"
					+ "<td>13.56 Million</td>"
					+ "<td>$299(Basic), $349(Deluxe and Premium)</td>"
					+ "<td>Wii</td>"
					+ "<td>Nintendo Switch</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo 3DS</td>"
					+ "<td>Nintendo RED (Research & Engineering Department)</td>"
					+ "<td>Nintendo, Foxconn</td>"
					+ "<td>Handheld game console</td>"
					+ "<td>March 27, 2011 (3DS), August 19, 2012 (3DS XL)</td>"
					+ "<td>Pokemon X and Y</td>"
					+ "<td>67 Million</td>"
					+ "<td>$249 (3DS), $199 (3DS XL)</td>"
					+ "<td>Nintendo DS</td>"
					+ "<td>None</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo DS</td>"
					+ "<td>Nintendo</td>"
					+ "<td>Foxconn</td>"
					+ "<td>Handheld game console</td>"
					+ "<td>November 21, 2004 (DS), June 11, 2006(DS Lite), April 5, 2009 (DSi)</td>"
					+ "<td>New Super Mario Bros.</td>"
					+ "<td>154.02 Million (DS), 93.86 Million (DS Lite), 27.11 Million (DSi)</td>"
					+ "<td>$149.99 (DS), $129.99 (DS Lite), $170 (DSi)</td>"
					+ "<td>Game Boy Advance</td>"
					+ "<td>Nintendo 3DS</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Microsoft Xbox One</td>"
					+ "<td>Microsoft</td>"
					+ "<td>Flextronics, Foxconn</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 22, 2013</td>"
					+ "<td>Halo 5 Guardians</td>"
					+ "<td>19 Million</td>"
					+ "<td>$499</td>"
					+ "<td>Xbox 360</td>"
					+ "<td>None</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Microsoft Xbox 360</td>"
					+ "<td>Microsoft</td>"
					+ "<td>Flextronics, Wistron, Celestica, Foxconn</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 22, 2005</td>"
					+ "<td>Kinect Adventures!</td>"
					+ "<td>84 Million</td>"
					+ "<td>$299.99 (System), $299.99 (Core System)</td>"
					+ "<td>Xbox</td>"
					+ "<td>Xbox One</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Sony PlayStation 4 (PS4)</td>"
					+ "<td>Sony Interactive Entertainment</td>"
					+ "<td>Sony, Foxconn</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 15, 2013</td>"
					+ "<td>Uncharted 4: A Theif's End</td>"
					+ "<td>60.4 Million</td>"
					+ "<td>399.99</td>"
					+ "<td>PlayStation 3</td>"
					+ "<td>None</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo GameCube</td>"
					+ "<td>Nintendo</td>"
					+ "<td>Nintendo, Foxconn</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 18, 2001</td>"
					+ "<td>Super Smash Bros. Melee</td>"
					+ "<td>21.74 Million</td>"
					+ "<td>$199</td>"
					+ "<td>Nintendo 64</td>"
					+ "<td>Wii</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo Wii</td>"
					+ "<td>Nintendo</td>"
					+ "<td>Foxconn</td>"
					+ "<td>Home video game console</td>"
					+ "<td>November 19, 2006</td>"
					+ "<td>Wii Sports, Mario Kart Wii</td>"
					+ "<td>101.63 Million</td>"
					+ "<td>$249</td>"
					+ "<td>GameCube</td>"
					+ "<td>Wii U</td>"
				+ "</tr>"
				+ "<tr>"
					+ "<td>Nintendo 64</td>"
					+ "<td>Nintendo Integrated Research & Development (IRD)</td>"
					+ "<td>Nintendo</td>"
					+ "<td>Home video game console</td>"
					+ "<td>September 29, 1996</td>"
					+ "<td>Super Mario 64</td>"
					+ "<td>32.93 Million</td>"
					+ "<td>$199</td>"
					+ "<td>Super Nintendo Entertainment System (NES)</td>"
					+ "<td>GameCube</td>"
				+ "</tr>"
			+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteGamingConsolesElement");
	// add content to the <div> elementFromPoint
	myDiv.innerHTML = string;
}