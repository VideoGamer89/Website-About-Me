function FavoriteMoviesProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Deadpool (Film)</li>"
			+ "<li>The Amazing Spider-Man (2012 Film)</li>"
			+ "<li>Ratchet and Clank (2016 Film) (Computer 3D Animated)</li>"
			+ "<li>Batman V. Superman: Dawn of Justice</li>"
			+ "<li>Batman: The Killing Joke (Animated)</li>"
			+ "<li>The Angry Birds Movie (Computer 3D Animated)</li>"
			+ "<li>Teenage Mutant Ninja Turtles (2014)</li>"
			+ "<li>Teenage Mutant Ninja Turtles: Out of the Shadows</li>"
			+ "<li>Warcraft (2016)</li>"
			+ "<li>Terminator: Genisys</li>"
			+ "<li>Independence Day: Resurgence</li>"
			+ "<li>Assassin's Creed (Film)</li>"
			+ "<li>Ant Man (Film)</li>"
			+ "<li>Ghost in the Shell (2017 Film)</li>"
			+ "<li>Power Rangers (2017 Film)</li>"
			+ "<li>Spider-Man: Homecoming</li>"
			+ "<li>Star Wars: The Force Awakens</li>"
			+ "<li>Rogue One: A Star Wars Story</li>"
			+ "<li>Sing (2016 Film) (Computer 3D Animated)</li>"
			+ "<li>Wonder Woman (2017 Film)</li>"
			+ "<li>The Passion of the Christ (2004 Film)</li>"
			+ "<li>The Amazing Spider-Man 2 (2014 Film)</li>"
			+ "<li>Wreck-It Ralph (Computer 3D Animated)</li>"
			+ "<li>Guardians of the Galaxy (2014 Film)</li>"
			+ "<li>Guardians of the Galaxy Vol. 2 (2017 Film)</li>"
			+ "<li>Captain America: Civil War (2016 Film)</li>"
			+ "<li>Captain America: The Winter Soldier (2014 Film)</li>"
			+ "<li>Jurassic World</li>"
			+ "<li>Batman and Harley Quinn (2017 Film) (Animated)</li>"
			+ "<li>Suicide Squid (2016 Film)</li>"
			+ "<li>Max Steel (2016 Film)</li>"
			+ "<li>Doctor Strange (2017 Film)</li>"
			+ "<li>The Wolverine (2013 Film)</li>"
			+ "<li>Star Wars Episode IV: A New Hope</li>"
			+ "<li>Logan (2017 Film)</li>"
			+ "<li>X-Men: Apocalypse</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivFavoriteMoviesElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
