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
				+ "<th>Running Time(s)</th>"
				+ "<th>Original Network(s) in the USA</th>"
				+ "<th>Composer(s)</th>"
				+ "<th>Creator(s)</th>"
				+ "<th>Resource Number</th>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Ultimate Spider-Man (2012 Animated TV Series)</td>"
				+ "<td>April 1, 2012</td>"
				+ "<td>January 7, 2017</td>" 
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero fiction, Action, Comedy-drama</td>"
				+ "<td>4</td>"
				+ "<td>104</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Kevin Menthei</td>"
				+ "<td>Marvel Animation</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">1</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Teenage Mutant Ninja Turtles (2012 3D Animated TV Series)</td>"
				+ "<td>September 29, 2012</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Comedy, Drama</td>"
				+ "<td>5</td>"
				+ "<td>124</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Nickelodeon</td>"
				+ "<td>Sebastian Evans II, Stanley Martinez</td>"
				+ "<td>Ciro Nieli, Joshua Sternin, J. R. Ventimilia</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">2</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Yo-kai Watch (Animated TV Series)</td>"
				+ "<td>January 18, 2014</td>"
				+ "<td>TBD</td>"
				+ "<td>Japan</td>"
				+ "<td>Japanese (Japan), English Dubbing (United States)</td>"
				+ "<td>Action, Comedy, Supernatural</td>"
				+ "<td>2</td>"
				+ "<td>150</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Kenichiro Saigo</td>"
				+ "<td>Level-5</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">3</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Marvel's Avengers Assemble (Animated TV Series)</td>"
				+ "<td>May 26, 2013</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero, Acton, Adventure</td>"
				+ "<td>4</td>"
				+ "<td>92</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Michael McCuistion, Lolita Ritmanis, Kristopher Carter</td>"
				+ "<td>Marvel Animation, Man of Action</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">4</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Pok&eacute;mon (Animated TV series)</td>"
				+ "<td>April 1, 1997</td>"
				+ "<td>TBD</td>"
				+ "<td>Japan</td>"
				+ "<td>Japanese (Japan), English Dubbing (United States)</td>"
				+ "<td>Action, Adventure, Fantasy</td>"
				+ "<td>20</td>"
				+ "<td>994</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>First Run Syndication, The WB (Kids' WB), Cartoon Network, Boomerang, Disney XD, UniMas</td>"
				+ "<td>Shinji Miyazaki, Hirokazu Tanaka, Manny Corallo, John Loeffler</td>"
				+ "<td>Nintendo, The Pok&eacute;mon Company</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">5</a></td>"
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
				+ "<td>69 Minutes (First Episode), 23 Minutes (All Other Episodes)</td>"
				+ "<td>Netflix</td>"
				+ "<td>Brad Breeck</td>"
				+ "<td>DreamWorks Animation, Mir</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">6</a></td>"
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
				+ "<td>23 Minutes</td>"
				+ "<td>Nickelodeon</td>"
				+ "<td>Ron Wasserman (Rearranged by Noam Kaniel)</td>"
				+ "<td>Haim Saban, Toei Company</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">7</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>The Simpsons (Animated)</td>"
				+ "<td>December 17, 1989</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Animated Sitcom</td>"
				+ "<td>29</td>"
				+ "<td>627</td>"
				+ "<td>21 to 24 Minutes</td>"
				+ "<td>Fox</td>"
				+ "<td>Danny Elfman (Theme Music), Richard Gibbs, Arthur B. Rubinstein, Alf Clausen, Bleeding Fingers Music</td>"
				+ "<td>Matt Groening</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">8</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Family Guy (Animated)</td>"
				+ "<td>January 31, 1999</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Animated Sitcom</td>"
				+ "<td>16</td>"
				+ "<td>298</td>"
				+ "<td>20 to 23 Minutes, 45 Minutes (Select Episodes)</td>"
				+ "<td>Fox</td>"
				+ "<td>Ron Jones, Walt Murphy</td>"
				+ "<td>Seth MacFarlane</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">9</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>How I Met Your Mother (TV Series)</td>"
				+ "<td>September 19, 2005</td>"
				+ "<td>March 31, 2014</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom, Romantic Comedy</td>"
				+ "<td>9</td>"
				+ "<td>208</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>CBS</td>"
				+ "<td>John Swihart</td>"
				+ "<td>Carter Bays, Craig Thomas</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">10</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Teen Titans Go! (Animated)</td>"
				+ "<td>April 23, 2013</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Comedy, Adventure, Science Fiction</td>"
				+ "<td>4</td>"
				+ "<td>203</td>"
				+ "<td>11 Minutes</td>"
				+ "<td>Cartoon Network</td>" 
				+ "<td>Andy Sturmer (Remixed by Mix Master Mike) (Theme Music), Armen Chakmakian, Jason Brandt</td>"
				+ "<td>Aaron Horvath, Michael Jelenic</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">11</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Justice League Action (Animated)</td>"
				+ "<td>December 16, 2016</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Superhero, Comedy</td>"
				+ "<td>1</td>"
				+ "<td>46</td>"
				+ "<td>15 Minutes</td>"
				+ "<td>Cartoon Network</td>"
				+ "<td>Kevin Reipl</td>"
				+ "<td>DC Entertainment</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">12</a></td>"
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
				+ "<td>22 to 24 Minutes</td>"
				+ "<td>Fox, TBS</td>"
				+ "<td>Walter Murphy, Joel McNeely, Ron Jones</td>"
				+ "<td>Seth MacFarlane, Mike Barker, Matt Weitzman</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">13</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>The Big Bang Theory (TV Series)</td>"
				+ "<td>September 24, 2007</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom</td>"
				+ "<td>11</td>"
				+ "<td>238</td>"
				+ "<td>18 to 22 Minutes</td>"
				+ "<td>CBS</td>"
				+ "<td>None, Barenaked Ladies (Theme Music Composer)</td>"
				+ "<td>Chuck Lorre, Bill Prady</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">14</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Guardians of the Galaxy (Animated TV Series)</td>"
				+ "<td>August 1, 2015</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Comedy, Science fiction, Superhero</td>"
				+ "<td>2</td>"
				+ "<td>50</td>"
				+ "<td>21 to 22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Michael Tavera</td>"
				+ "<td>Marty Isenberg</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">15</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Marvel's Spider-Man (2017 Animated TV Series)</td>"
				+ "<td>August 19, 2017</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Superhero fiction</td>"
				+ "<td>1</td>"
				+ "<td>14</td>"
				+ "<td>21 to 22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Kevin Manthei</td>"
				+ "<td>Kevin Shinick</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">16</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Power Rangers: Ninja Steel</td>"
				+ "<td>January 21, 2017</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action, Adventure, Science Fiction, Superhero</td>"
				+ "<td>1</td>"
				+ "<td>21</td>"
				+ "<td>23 Minutes</td>"
				+ "<td>Nickelodeon</td>"
				+ "<td>Noam Kaniel</td>"
				+ "<td>Hain Saban, Toei Company</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">17</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Sonic Boom (2014 3D Animated TV Series)</td>"
				+ "<td>November 8, 2014</td>"
				+ "<td>TBD</td>"
				+ "<td>United States, France</td>"
				+ "<td>English</td>"
				+ "<td>Comedy, Action/Adventure, Fantasy</td>"
				+ "<td>2</td>"
				+ "<td>104</td>"
				+ "<td>11 Minutes</td>"
				+ "<td>Cartoon Network, Boomerang</td>"
				+ "<td>Michael Richard Plowman</td>"
				+ "<td>Evan Bailey, Donna Friedman Meir, Sandrine Nguyen</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">18</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Last Man Standing (2011 U.S. TV Series)</td>"
				+ "<td>October 11, 2011</td>"
				+ "<td>March 31, 2017</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom</td>"
				+ "<td>6</td>"
				+ "<td>130</td>"
				+ "<td>21 Minutes</td>"
				+ "<td>ABC</td>"
				+ "<td>Monte Montgomery, Carl Theil</td>"
				+ "<td>Jack Burditt</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">19</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Skylanders Academy (Animated)</td>"
				+ "<td>October 28, 2016</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Action-Adventure, Comedy, Fantasy</td>"
				+ "<td>2</td>"
				+ "<td>25</td>"
				+ "<td>44 Minutes (Episode 1), 24 - 25 Minutes</td>"
				+ "<td>Netflix</td>"
				+ "<td>Conrad Wedde, Samuel Scott, Lukasz Buda</td>"
				+ "<td>Eric Rogers</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">20</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Baby Daddy</td>"
				+ "<td>June 20, 2012</td>"
				+ "<td>May 22, 2017</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Sitcom</td>"
				+ "<td>6</td>"
				+ "<td>100</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Freeform</td>"
				+ "<td>Doug DeAngelis</td>"
				+ "<td>Dan Berendsen</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">21</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Milo Murphy's Law</td>"
				+ "<td>October 3, 2016</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Comedy</td>"
				+ "<td>1</td>"
				+ "<td>20</td>"
				+ "<td>22 Minutes</td>"
				+ "<td>Disney XD</td>"
				+ "<td>Danny Jacob</td>"
				+ "<td>Dan Povenmire, Jeff " + "Swampy" + " Marsh</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">22</a></td>"
			+ "</tr>"
			+ "<tr>"
				+ "<td>Adventure Time</td>"
				+ "<td>April 5, 2010</td>"
				+ "<td>TBD</td>"
				+ "<td>United States</td>"
				+ "<td>English</td>"
				+ "<td>Comedy, Fantasy, Adventure, Science Fiction</td>"
				+ "<td>10</td>"
				+ "<td>274</td>"
				+ "<td>11 Minutes, 6 Minutes (pilot only)</td>"
				+ "<td>Cartoon Network</td>"
				+ "<td>Casey James Basichis, Tim Kiefer</td>"
				+ "<td>Pendleton Ward</td>"
				+ "<td><a href=" + "Website About Me - Works Cited.html" + ">23</a></td>"
			+ "</tr>"
		+ "</table>";
	// obtain a reference to the <div>
	myDiv = document.getElementById("myDivFavoriteTVShowsElement");
	// add content to the <div> element
	myDiv.innerHTML = string;
}
