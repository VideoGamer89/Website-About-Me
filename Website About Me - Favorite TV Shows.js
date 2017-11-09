function FavoriteTVShowsProcess()
{
  // Create HTML code
  var string;
  string = "<ul>"
			+ "<li>Ultimate Spider-Man (2012 TV Series)</li>"
			+ "<li>Teenage Mutant Ninja Turtles (2012 TV Series)</li>"
			+ "<li>Yo-Kai Watch</li>"
			+ "<li>Marvel's Avengers Assemble</li>"
			+ "<li>Pokemon (TV Series)</li>"
			+ "<li>Voltron: Legendary Defender</li>"
			+ "<li>Power Rangers: Dino Charge</li>"
			+ "<li>The Simpsons</li>"
			+ "<li>Family Guy</li>"
			+ "<li>How I Met Your Mother (TV series)</li>"
			+ "<li>Teen Titans Go!</li>"
			+ "<li>Justice League Action</li>"
			+ "<li>American Dad (2005 TV Series)</li>"
			+ "<li>The Big Bang Theory (TV Series)</li>"
			+ "<li>Guardians of the Galaxy(TV Series)</li>"
			+ "<li>Marvel's Spider-Man (2017 TV Series)</li>"
			+ "<li>Power Rangers: Ninja Steel</li>"
			+ "<li>Sonic Boom (2014 TV Series)</li>"
			+ "<li>Last Man Standing (2011 TV Series)</li>"
		+ "</ul>";
    // obtain a reference to the <div>
    myDiv = document.getElementById("myDivFavoriteTVShowsElement");
    // add content to the <div> element
    myDiv.innerHTML = string;
}
