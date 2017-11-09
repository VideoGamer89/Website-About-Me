function FavoriteTVShowsProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Ultimate Spider-Man (2012 Animated TV series), Date of Release: April 1, 2012, Date of Cancellation: January 7, 2017, Country of Origin: United States</li>"
			+ "<li>Teenage Mutant Ninja Turtles (2012 3D Animated TV series), Date of Release: September 29, 2012, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Yo-Kai Watch (Animated TV Series), Date of Release: January 18, 2014, Date of Cancellation: TBD, Country of Origin: Japan</li>"
			+ "<li>Marvel's Avengers Assemble (Animated TV Series), Date of Release: May 26, 2013, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Pokemon (Animated TV series), Date of Release: April 1, 1997, Date of Cancellation: TBD, Country of Origin: Japan</li>"
			+ "<li>Voltron: Legendary Defender (Animated), Date of Release: June 10, 2016, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Power Rangers: Dino Charge, Date of Release: February 7, 2015, Date of Cancellation: December 10, 2016, Country of Origin: United States</li>"
			+ "<li>The Simpsons (Animated), Date of Release: December 17, 1989, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Family Guy (Animated), Date of Release: January 31, 1999, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>How I Met Your Mother (TV series), Date of Release: September 19, 2005, Date of Cancellation: March 31, 2014, Country of Origin: United States</li>"
			+ "<li>Teen Titans Go! (Animated), Date of Release: April 23, 2013, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Justice League Action (Animated), Date of Release: December 16, 2016, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>American Dad! (2005 Animated TV Series), Date of Release: February 6, 2005, Date of Release: TBD, Country of Origin: United States</li>"
			+ "<li>The Big Bang Theory (TV series), Date of Release: September 24, 2007, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Guardians of the Galaxy (Animated TV series), Date of Release: August 1, 2015, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Marvel's Spider-Man (2017 Animated TV series), Date of Release: August 19, 2017, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Power Rangers: Ninja Steel, Date of Release: January 21, 2017, Date of Cancellation: TBD, Country of Origin: United States</li>"
			+ "<li>Sonic Boom (2014 3D Animated TV series), Date of Release: November 8, 2014, Date of Cancellation: TBD, Countries of Origin: United States, France</li>"
			+ "<li>Last Man Standing (2011 TV series), Date of Release: Ocober 11, 2011, Date of Cancellation: March 31, 2017, Country of Origin: United States</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivFavoriteTVShowsElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
