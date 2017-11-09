function FavoriteGamingConsolesProcess()
{
  // Create HTML code
  var string;
  string = "<ul>" 
					+ "<li>Nintendo Switch, Developer: Nintendo, Manufacturer: Nintendo Platform Technology Development (PTD), Type: Hybrid video game console, Date of Release: March 3, 2017, Best Selling Game: The Legend of Zelda: Breath of the Wild</li>"
					+ "<li>Nintendo Wii U, Developer(s): Nintendo Integrated Research and Development (IRD), Nintendo Technology Development (NTD), Manufacturer(s): Nintendo, Foxconn, Mitsumi, Type: Home video game console, Date of Release: November 18, 2012, Best Selling Game: Mario Kart 8</li>"
					+ "<li>Nintendo 3DS, Developer: Nintendo RED (Research & Engineering Department), Manufacturer(s): Nintendo, Foxconn, Type: Handheld game console, Date of Release: August 19, 2012 (3DS XL), Best Selling Game: Pokemon X and Y</li>"
					+ "<li>Nintendo DS, Developer: Nintendo, Manufacturer: Foxconn, Type: Handheld game console, Date of Release: November 21, 2004, Best Selling Game: New Super Mario Bros. </li>"
					+ "<li>Microsoft XBox One, Developer: Microsoft, Manufacturer(s): Flextronics, Foxconn, Type: Home video game console, Date of Release: November 22, 2013, Best Selling Game: Halo 5 Guardians</li>"
					+ "<li>Microsoft XBox 360, Developer: Microsoft, Manufacturer(s): Flextronics, Wistron, Celestica, Foxconn, Type: Home video game console, Date of Release: November 22, 2005, Best Selling Game: Kinect Adventures!</li>"
					+ "<li>Sony PlayStation 4 (PS4), Developer: Sony Interactive Entertainment, Manufacturer(s): Sony, Foxconn, Type: Home video game console, Date of Release: November 15, 2013, Best Selling Game: Uncharted 4: A Theif's End</li>"
					+ "<li>Nintendo GameCube, Developer: Nintendo, Manufacturer(s): Nintendo, Foxconn, Type: Home video game console, Date of Release: November 18, 2001, Best Selling Game: Super Smash Bros. Melee</li>"
					+ "<li>Nintendo Wii, Developer: Nintendo, Manufacturer: Foxconn, Type: Home video game console, Date of Release: November 19, 2006, Best Selling Game(s): Wii Sports, Mario Kart Wii</li>"
					+ "<li>Nintendo 64, Developer: Nintendo Integrated Research & Development (IRD), Manufacturer: Nintendo, Type: Home video game console, Date of Release: September 29, 1996, Best Selling Game: Super Mario 64</li>"
				+ "</ul>";
  // obtain a reference to the <div>
  myDiv = document.getElementById("myDivFavoriteGamingConsolesElement");
  // add content to the <div> elementFromPoint
  myDiv.innerHTML = string;
}
