function FavoriteMoviesProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Deadpool (Film), Rating: R, Genre: Superhero, Date of Release: February 12, 2016</li>"
			+ "<li>The Amazing Spider-Man (2012 Film), Rating: PG-13, Genre: Superhero, Date of Release: July 3, 2012</li>"
			+ "<li>Ratchet and Clank (2016 Film) (Computer 3D Animated), Rating: PG, Genre(s): Science Fiction, Comedy, Date of Release: April 29, 2016</li>"
			+ "<li>Batman V. Superman: Dawn of Justice, Rating: PG-13, Genre: Superhero, Date of Release: March 25, 2016</li>"
			+ "<li>Batman: The Killing Joke (2016 Film) (Animated), Rating: R, Genre: Superhero, Date of Release: July 25, 2016</li>"
			+ "<li>The Angry Birds Movie (Computer 3D Animated), Rating: PG, Genre: Comedy, Date of Release: May 20, 2016</li>"
			+ "<li>Teenage Mutant Ninja Turtles (2014 Film), Rating: PG-13, Genre: Superhero, Date of Release: August 8, 2014</li>"
			+ "<li>Teenage Mutant Ninja Turtles: Out of the Shadows, Rating: PG-13, Genre(s): Action, Adventure, Date of Release: June 3, 2016</li>"
			+ "<li>Warcraft (2016 Film), Rating: PG-13, Genre(s): Action, Fantasy, Date of Release: June 10, 2016</li>"
			+ "<li>Terminator: Genisys, Rating: PG-13, Genre: Science Fiction, Date of Release: July 1, 2015</li>"
			+ "<li>Independence Day: Resurgence, Rating: PG-13, Genre: Science Fiction, Date of Release: June 24, 2016</li>"
			+ "<li>Assassin's Creed (Film), Rating: PG-13, Genre(s): Science Fiction, Action, Adventure, Date of Release: December 21, 2016</li>"
			+ "<li>Ant Man (Film), Rating: PG-13, Genre: Superhero, Date of Release: July 17, 2015</li>"
			+ "<li>Ghost in the Shell (2017 Film), Rating: PG-13, Genre(s): Science Fiction, Action, Date of Release: March 31, 2017</li>"
			+ "<li>Power Rangers (2017 Film), Rating: PG-13, Genre: Superhero, Date of Release: March 24, 2017</li>"
			+ "<li>Spider-Man: Homecoming, Rating: PG-13, Genre: Superhero, Date of Release: July 7, 2017</li>"
			+ "<li>Star Wars: The Force Awakens (Epic film), Rating: PG-13, Genre: Space Opera, Date of Release: December 18, 2015</li>"
			+ "<li>Rogue One: A Star Wars Story (Epic film), Rating: PG-13, Genre: Space Opera, Date of Release: December 16, 2016</li>"
			+ "<li>Sing (2016 Film) (Computer 3D Animated), Rating: PG, Genre: Musical, Date of Release: December 21, 2016</li>"
			+ "<li>Wonder Woman (2017 Film), Rating: PG-13, Genre: Superhero, Date of Release: June 2, 2017</li>"
			+ "<li>The Passion of the Christ (2004 Biblical Film), Rating: R, Genre: Drama, Date of Release: February 25, 2004</li>"
			+ "<li>The Amazing Spider-Man 2 (2014 Film), Rating: PG-13, Genre: Superhero, Date of Release: May 2, 2014</li>"
			+ "<li>Wreck-It Ralph (Computer 3D Animated), Rating: PG, Genre: Fantasy, Comedy, Date of Release: November 2, 2012</li>"
			+ "<li>Guardians of the Galaxy (2014 Film), Rating: PG-13, Genre: Superhero, Date of Release: August 1, 2014</li>"
			+ "<li>Guardians of the Galaxy Vol. 2 (2017 Film), Rating: PG-13, Genre: Superhero, Date of Release: May 5, 2017</li>"
			+ "<li>Marvel's The Avengers (2012 Film), Rating: PG-13, Genre: Superhero, Date of Release: May 4, 2012</li>"
			+ "<li>Marvel's Avengers: Age of Ultron, Rating: PG-13, Genre: Superhero, Date of Release: May 1, 2015</li>"
			+ "<li>Captain America: Civil War (2016 Film), Rating: PG-13, Genre: Superhero, Date of Release: May 6, 2016</li>"
			+ "<li>Captain America: The Winter Soldier (2014 Film), Rating: PG-13, Genre: Superhero, Date of Release: April 4, 2014</li>"
			+ "<li>Jurassic World, Rating: PG-13, Genre(s): Science Fiction, Adventure, Date of Release: June 12, 2015</li>"
			+ "<li>Batman And Harley Quinn (2017 Film) (Animated), Rating: PG-13, Genre: Superhero, Date of Release: August 14, 2017</li>"
			+ "<li>Suicide Squad (2016 Film), Rating: PG-13, Genre: Superhero, Date of Release: August 5, 2016</li>"
			+ "<li>Max Steel (2016 Film), Rating: PG-13, Genre(s): Superhero, Science Fiction, Action, Date of Release: October 14, 2016</li>"
			+ "<li>Doctor Strange (2017 Film), Rating: PG-13, Genre: Superhero, Date of Release: November 4, 2016</li>"
			+ "<li>The Wolverine (2013 Film), Rating: PG-13, Genre: Superhero, Date of Release: July 26, 2013</li>"
			+ "<li>Star Wars Episode IV: A New Hope (Epic Film), Rating: PG, Genre: Space Opera, Date of Release: May 25, 1977</li>"
			+ "<li>Logan (2017 Film), Rating: R, Genre: Superhero, Date of Release: March 3, 2017</li>"
			+ "<li>X-Men: Apocalypse, Rating: PG-13, Genre: Superhero, Date of Release, May 27, 2016</li>"
			+ "<li>Real Steel, Rating: PG-13, Genre(s): Science Fiction, Sports, Date of Release: October 7, 2011</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivFavoriteMoviesElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
