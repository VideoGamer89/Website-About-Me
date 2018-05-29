<?php
	// get the data from the consoles
	$favorite_gaming_console_1 = $_GET['Nintendo Switch'];
	$favorite_gaming_console_2 = $_GET['Wii U'];
	$favorite_gaming_console_3 = $_GET['Nintendo 3DS'];
	$favorite_gaming_console_4 = $_GET['Nintendo DS'];
	$favorite_gaming_console_5 = $_GET['Xbox One'];
	$favorite_gaming_console_6 = $_GET['Xbox 360'];
	$favorite_gaming_console_7 = $_GET['PlayStation 4 (PS4)'];
	$favorite_gaming_console_8 = $_GET['GameCube'];
	$favorite_gaming_console_9 = $_GET['Wii'];
	$favorite_gaming_console_10 = $_GET['Nintendo 64'];
	$favorite_gaming_console_11 = $_GET['Super Nintendo Entertainment System (SNES)'];
	$favorite_gaming_console_12 = $_GET['Game Boy Advance (GBA)'];
	$favorite_gaming_console_13 = $_GET['PlayStation (PS)'];
	$favorite_gaming_console_14 = $_GET['PlayStation 2 (PS2)'];
	$favorite_gaming_console_15 = $_GET['Sega Genesis'];
	// get the data from the best selling games
	$favorite_gaming_console_best_selling_game_1 = $_GET['Super Mario Odyssey'];
	$favorite_gaming_console_best_selling_game_2 = $_GET['Mario Kart 8'];
	$favorite_gaming_console_best_selling_game_3 = $_GET['Pok&eacute;mon X and Y'];
	$favorite_gaming_console_best_selling_game_4 = $_GET['New Super Mario Bros.'];
	$favorite_gaming_console_best_selling_game_5 = $_GET['Halo 5: Guardians'];
	$favorite_gaming_console_best_selling_game_6 = $_GET['Kinect Adventures!'];
	$favorite_gaming_console_best_selling_game_7 = $_GET['Uncharted 4: A Thief\'s End'];
	$favorite_gaming_console_best_selling_game_8 = $_GET['Super Smash Bros. Melee'];
	$favorite_gaming_console_best_selling_game_9 = $_GET['Wii Sports'];
	$favorite_gaming_console_best_selling_game_10 = $_GET['Mario Kart Wii'];
	$favorite_gaming_console_best_selling_game_11 = $_GET['Super Mario 64'];
	$favorite_gaming_console_best_selling_game_12 = $_GET['Super Mario World'];
	$favorite_gaming_console_best_selling_game_13 = $_GET['Donkey Kong Country'];
	$favorite_gaming_console_best_selling_game_14 = $_GET['Super Mario Kart'];
	$favorite_gaming_console_best_selling_game_15 = $_GET['Street Fighter II: The World Warrior'];
	$favorite_gaming_console_best_selling_game_16 = $_GET['Pok&eacute;mon Ruby and Sapphire'];
	$favorite_gaming_console_best_selling_game_17 = $_GET['Gran Turismo'];
	$favorite_gaming_console_best_selling_game_18 = $_GET['Grand Theft Auto: San Andreas'];
	$favorite_gaming_console_best_selling_game_19 = $_GET['Sonic the Hedgehog'];
	// get the data from the developers
	$favorite_gaming_console_developer_1 = $_GET['Nintendo'];
	$favorite_gaming_console_developer_2 = $_GET['Nintendo Integrated Research & Development (IRD)'];
	$favorite_gaming_console_developer_3 = $_GET['Nintendo Technology Development (NTD)'];
	$favorite_gaming_console_developer_4 = $_GET['Nintendo RED (Research & Engineering Department)'];
	$favorite_gaming_console_developer_5 = $_GET['Microsoft'];
	$favorite_gaming_console_developer_6 = $_GET['Sony Interactive Entertainment'];
	$favorite_gaming_console_developer_7 = $_GET['Sony Computer Entertainment'];
	$favorite_gaming_console_developer_8 = $_GET['Sega'];
	// get the data from the generations
	$favorite_gaming_console_generation_1 = $_GET['Eighth'];
	$favorite_gaming_console_generation_2 = $_GET['Seventh'];
	$favorite_gaming_console_generation_3 = $_GET['Sixth'];
	$favorite_gaming_console_generation_4 = $_GET['Fifth'];
	$favorite_gaming_console_generation_5 = $_GET['Fourth'];
	// get the data from the manufacturers
	$favorite_gaming_console_manufacturer_1 = $_GET['Nintendo Platform Technology Development (PTD)'];
	$favorite_gaming_console_manufacturer_2 = $_GET['Foxconn'];
	$favorite_gaming_console_manufacturer_3 = $_GET['Hosiden'];
	$favorite_gaming_console_manufacturer_4 = $_GET['Mitsumi'];
	$favorite_gaming_console_manufacturer_5 = $_GET['Flextronics'];
	$favorite_gaming_console_manufacturer_6 = $_GET['Wistron'];
	$favorite_gaming_console_manufacturer_7 = $_GET['Celestica'];
	$favorite_gaming_console_manufacturer_8 = $_GET['Sony'];
	$favorite_gaming_console_manufacturer_9 = $_GET['Nintendo'];
	$favorite_gaming_console_manufacturer_10 = $_GET['Sega'];
	// get the data from the types
	$favorite_gaming_console_type_1 = $_GET['Hybrid Video Game Console'];
	$favorite_gaming_console_type_2 = $_GET['Home Video Game Console'];
	$favorite_gaming_console_type_3 = $_GET['Handheld Game Console'];
?>
<?php include '../view/header/Website About Me - Favorite Gaming Consoles - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Here are some of the gaming consoles that I've played so far.</p>
		<div id = "myFavoriteGamingConsoleDivElement">
			<table border = "3">
			<caption>Favorite Gaming Consoles</caption>
				<tr>
					<th>Name</th>
					<th>Developer(s)</th>
					<th>Manufacturer(s)</th>
					<th>Type</th>
					<th>Date(s) of Release</th>
					<th>Date of Discontinuation</th>
					<th>Best Selling Game(s)</th>
					<th>Units Sold</th>
					<th>Introductory Price(s)</th>
					<th>Predecessor</th>
					<th>Successor</th>
					<th>Generation</th>
					<th>Controller Input(s)</th>
					<th>Media</th>
					<th>Storage</th>
					<th>Operating System</th>
					<th>Resource Number</th>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_1; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_1; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?>, <?php echo $favorite_gaming_console_manufacturer_3; ?></td>
					<td><?php echo $favorite_gaming_console_type_1; ?></td>
					<td>March 3, 2017</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_1; ?> (9.07 Million)</td>
					<td>14.86 Million</td>
					<td>$299.99</td>
					<td>Wii U</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_generation_1; ?></td>
					<td>Joy-Con, Pro Controller</td>
					<td>Game Card, Digital Distribution (Nintendo eShop)</td>
					<td>32 GB Internal Flash Memory</td>
					<td>Nintendo Switch System Software</td>
					<td><a href="Website About Me - Works Cited.php">1</a>, <a href="Website About Me - Works Cited.php">2</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_2; ?></td>
					<td><?php echo $favorite_gaming_console_developer_2; ?>, <?php echo $favorite_gaming_console_developer_3; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?>, <?php echo $favorite_gaming_console_manufacturer_4; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 18, 2012</td>
					<td>January 31, 2017</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_2; ?> (8.26 Million)</td>
					<td>13.56 Million</td>
					<td>$299(Basic), $349(Deluxe and Premium)</td>
					<td>Wii</td>
					<td>Nintendo Switch</td>
					<td><?php echo $favorite_gaming_console_generation_1; ?></td>
					<td>Wii U GamePad, Wii U Pro Controller, Wii Remote (Plus)</td>
					<td>Wii U Optical Disc, Wii Optical Disc, Digital Distribution (Nintendo eShop)</td>
					<td>8 or 32 GB Internal Flash Memory, SD/SDHC Card, USB Storage Device</td>
					<td>Wii U System Software</td>
					<td><a href="Website About Me - Works Cited.php">3</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_3; ?></td>
					<td><?php echo $favorite_gaming_console_developer_4; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_3; ?></td>
					<td>March 27, 2011 (3DS), August 19, 2012 (3DS XL)</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_3; ?> (16.15 Million)</td>
					<td>68.98 Million</td>
					<td>$249 (3DS), $199 (3DS XL)</td>
					<td>Nintendo DS</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_generation_1; ?></td>
					<td>None</td>
					<td>Nintendo 3DS Game Card, Nintendo DS Game Card, Digital Distribution (Nintendo eShop), SD/SDHC card</td>
					<td>1 GB Internal Flash Memory</td>
					<td>Nintendo 3DS System Software</td>
					<td><a href="Website About Me - Works Cited.php">4</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_4; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_3; ?></td>
					<td>November 21, 2004 (DS), June 11, 2006(DS Lite), April 5, 2009 (DSi)</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_4; ?> (30.80 Million)</td>
					<td>154.02 Million (DS), 93.86 Million (DS Lite), 27.11 Million (DSi)</td>
					<td>$149.99 (DS), $129.99 (DS Lite), $149 (DSi)</td>
					<td>Game Boy Advance (GBA)</td>
					<td>Nintendo 3DS</td>
					<td><?php echo $favorite_gaming_console_generation_2; ?></td>
					<td>None</td>
					<td>Nintendo Game Card, ROM cartridge</td>
					<td>Cartridge save 256 KB flash memory</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">5</a>, <a href="Website About Me - Works Cited.php">6</a>, <a href="Website About Me - Works Cited.php">7</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_5; ?></td>
					<td><?php echo $favorite_gaming_console_developer_5; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_5; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 22, 2013</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_5; ?> (5 Million)</td>
					<td>19 Million</td>
					<td>$499</td>
					<td>Xbox 360</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_generation_1; ?></td>
					<td>Xbox One Controller, Kinect for Xbox One, Xbox App, Xbox One Media Remote</td>
					<td>UHD Blu-Ray (S and X Models), Blu-Ray, DVD, CD (All Models)</td>
					<td>500 GB, 1 or 2 TB Internal Hard Drive, USB 3.0 Storage Device 256 GB or Greater</td>
					<td>Xbox One System Software</td>
					<td><a href="Website About Me - Works Cited.php">8</a>, <a href="Website About Me - Works Cited.php">9</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_6; ?></td>
					<td><?php echo $favorite_gaming_console_developer_5; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_5; ?>, <?php echo $favorite_gaming_console_manufacturer_6; ?>, <?php echo $favorite_gaming_console_manufacturer_7; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 22, 2005</td>
					<td>April 20, 2016</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_6; ?> (18 Million)</td>
					<td>84 Million</td>
					<td>$299.99 (System), $299.99 (Core System)</td>
					<td>Xbox</td>
					<td>Xbox One</td>
					<td><?php echo $favorite_gaming_console_generation_2; ?></td>
					<td>Xbox 360 Controller, Xbox 360 Wireless Racing Wheel, Rhythm game controllers, Big Button Pads, Xbox 360 Arcade Sticks, Ace Combat 6 Flight Stick, Kinect</td>
					<td>DVD, CD, Digital Distribution, HD DVD (discontinued)</td>
					<td>20, 60, 120, or 250 GB (Older Models) or 250 or 320 GB Detachable Hard Drives (Xbox 360 S Models), 64, 256, or 512 GB Removable Memory Cards (Original Design Only), 256 or 512 MB for Arcade Consoles (Later Models), 4 GB for Budget Level "Xbox 360 S" Consoles, 1 or 32 GB USB Storage Device (requires System Software Update), 2 GB Cloud Storage (requires Xbox LIVE Gold Membership)</td>
					<td>Xbox 360 System Software</td>
					<td><a href="Website About Me - Works Cited.php">10</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_7; ?></td>
					<td><?php echo $favorite_gaming_console_developer_6; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_8; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 15, 2013</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_7; ?> (8.7 Million)</td>
					<td>70.6 Million</td>
					<td>399.99</td>
					<td>PlayStation 3</td>
					<td>TBD</td>
					<td><?php echo $favorite_gaming_console_generation_1; ?></td>
					<td>DualShock 4, PlayStation Move, PlayStation Vita</td>
					<td>Blu-Ray Disc, DVD</td>
					<td>500 GB, or 1 TB Hard Drive</td>
					<td>PlayStation 4 System Software</td>
					<td><a href="Website About Me - Works Cited.php">11</a>, <a href="Website About Me - Works Cited.php">12</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_8; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?>, <?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 18, 2001</td>
					<td>February 22, 2007</td> 
					<td><?php echo $favorite_gaming_console_best_selling_game_8; ?> (7.09 Million)</td>
					<td>21.74 Million</td>
					<td>$199</td>
					<td>Nintendo 64</td>
					<td>Wii</td>
					<td><?php echo $favorite_gaming_console_generation_3; ?></td>
					<td>GameCube Controller, WaveBird, Game Boy Advance, various other input devices</td>
					<td>Nintendo GameCube Game Disc, Game Pak (Game Boy Player required)</td>
					<td>None, 16 GB Nintendo GameCube Memory Card</td>
					<td>Dolphin OS</td>
					<td><a href="Website About Me - Works Cited.php">13</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_9; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_2; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>November 19, 2006</td>
					<td>TBD, October 1, 2011 (Original Model)</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_9; ?> (82.78 Million), <?php echo $favorite_gaming_console_best_selling_game_10; ?> (36.75 Million)</td>
					<td>101.63 Million</td>
					<td>$249</td>
					<td>GameCube</td>
					<td>Wii U</td>
					<td><?php echo $favorite_gaming_console_generation_2; ?></td>
					<td>Wii Remote (Plus), Wii Balance Board, Nintendo GameCube Controller, Nintendo DS</td>
					<td>Wii Optical Disc, GameCube Controller, Digital Distribution (Wii Shop Channel)</td>
					<td>512 MB Internal Flash Memory</td>
					<td>Wii System Software</td>
					<td><a href="Website About Me - Works Cited.php">14</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_10; ?></td>
					<td><?php echo $favorite_gaming_developer_2; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>September 29, 1996</td>
					<td>November 30, 2003</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_11; ?> (11.62 Million)</td>
					<td>32.93 Million</td>
					<td>$199</td>
					<td>Super Nintendo Entertainment System (SNES)</td>
					<td>GameCube</td>
					<td><?php echo $favorite_gaming_generation_4; ?></td>
					<td>Nintendo 64 Controller</td>
					<td>Nintendo 64 Game Pak, Magnetic Disc (64DD)</td>
					<td>64 MB Game Pak</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">15</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_11; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>August 23, 1991</td>
					<td>September 11, 1999</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_12; ?> (20.60 Million), <?php echo $favorite_gaming_console_best_selling_game_13; ?> (9 Million), <?php echo $favorite_gaming_console_best_selling_game_14; ?> (8 Million), <?php echo $favorite_gaming_console_best_selling_game_15; ?> (6.3 Million)</td>
					<td>49.10 Million</td>
					<td>$199</td>
					<td>Nintendo Entertainment System (NES)</td>
					<td>Nintendo 64</td>
					<td><?php echo $favorite_gaming_console_generation_5; ?></td>
					<td>SNES Controller</td>
					<td>ROM Cartridge</td>
					<td>None</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">16</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_12; ?></td>
					<td><?php echo $favorite_gaming_console_developer_1; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_9; ?></td>
					<td><?php echo $favorite_gaming_console_type_3; ?></td>
					<td>June 11, 2001</td>
					<td>May 15, 2010</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_16; ?> (16 Million)</td>
					<td>81.51 Million</td>
					<td>$99.99</td>
					<td>Game Boy Color (GBC)</td>
					<td>Nintendo DS</td>
					<td><?php echo $favorite_gaming_console_generation_3; ?></td>
					<td>None</td>
					<td>ROM cartridge</td>
					<td>None</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">17</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_13; ?></td>
					<td><?php echo $favorite_gaming_console_developer_7; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_8; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>September 9, 1995 (original), September 19, 2000 (PS one)</td>
					<td>March 23, 2006</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_17; ?> (10.85 Million)</td>
					<td>102.49 Million</td>
					<td>$299</td>
					<td>None</td>
					<td>PlayStation 2</td>
					<td><?php echo $favorite_gaming_console_generation_4; ?></td>
					<td>PlayStation Controller, Dual Analog Controller, DualShock</td>
					<td>CD-ROM</td>
					<td>Memory Card</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">18</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_14; ?></td>
					<td><?php echo $favorite_gaming_console_developer_7; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_8; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>October 26, 2000 (original), November 25, 2004 (Slimline)</td>
					<td>January 4, 2013</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_18; ?> (17.33 Million)</td>
					<td>155 Million</td>
					<td>$299</td>
					<td>PlayStation</td>
					<td>PlayStation 3</td>
					<td><?php echo $favorite_gaming_console_generation_3; ?></td>
					<td>DualShock 2, DualShock, EyeToy</td>
					<td>DVD, CD</td>
					<td>40 GB Hard Drive, 8 MB PlayStation 2 Memory Card, 128 KB PlayStation Memory Card</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">19</a>, <a href="Website About Me - Works Cited.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $favorite_gaming_console_15; ?></td>
					<td><?php echo $favorite_gaming_console_developer_8; ?></td>
					<td><?php echo $favorite_gaming_console_manufacturer_10; ?></td>
					<td><?php echo $favorite_gaming_console_type_2; ?></td>
					<td>August 14, 1989</td>
					<td>January 1, 1997</td>
					<td><?php echo $favorite_gaming_console_best_selling_game_19; ?> (15 Million)</td>
					<td>30.75 Million</td>
					<td>$189</td>
					<td>Master System</td>
					<td>Sega Saturn</td>
					<td><?php echo $favorite_gaming_console_generation_5; ?></td>
					<td>Sega Genesis Controller</td>
					<td>ROM cartridge</td>
					<td>None</td>
					<td>None</td>
					<td><a href="Website About Me - Works Cited.php">20</a>, <a href="Website About Me - Works Cited.php">6</a>
				</tr>
			</table>
		</div><!-- end myFavoriteGamingConsoleDivElement -->
	</div><!-- end content -->
<?php include '../view/footer.php'; ?>
