<?php
	// get the data from the computer programming skills
	$computer_programming_skill_1 = $_GET['C++'];
	$computer_programming_skill_2 = $_GET['C#'];
	$computer_programming_skill_3 = $_GET['Java'];
	$computer_programming_skill_4 = $_GET['JavaScript'];
	$computer_programming_skill_5 = $_GET['HTML (HyperText Markup Language)'];
	$computer_programming_skill_6 = $_GET['CSS (Cascading Style Sheet)'];
	$computer_programming_skill_7 = $_GET['AJAX (Asynchronous JavaScript and XML)'];
	$computer_programming_skill_8 = $_GET['MySQL (Structured Query Language)'];
	$computer_programming_skill_9 = $_GET['PHP (PHP Hypertext Preprocessor)'];
	$computer_programming_skill_10 = $_GET['F#'];
	$computer_programming_skill_11 = $_GET['XML (eXtensible Markup Language)'];
	$computer_programming_skill_12 = $_GET['Visual BASIC (Beginner\'s All-Purpose Symbolic Instruction Code)'];
	$computer_programming_skill_13 = $_GET['VBScript (Microsoft Visual Basic Scripting Edition)'];
	$computer_programming_skill_14 = $_GET['Trello'];
	$computer_programming_skill_15 = $_GET['WordPress'];
	$computer_programming_skill_16 = $_GET['Typeform'];
	$computer_programming_skill_17 = $_GET['Google Analytics'];
	$computer_programming_skill_18 = $_GET['Google Tag Manager'];
	$computer_programming_skill_19 = $_GET['Gliffy'];
	$computer_programming_skill_20 = $_GET['Google Sheets'];
	$computer_programming_skill_21 = $_GET['Google Docs'];
	$computer_programming_skill_22 = $_GET['Google Slides'];
	$computer_programming_skill_23 = $_GET['Google Page Speed'];
	$computer_programming_skill_24 = $_GET['C'];
	$computer_programming_skill_25 = $_GET['Android Development'];
	$computer_programming_skill_26 = $_GET['Web Development'];
	$computer_programming_skill_27 = $_GET['Hot Jar'];
	$computer_programming_skill_28 = $_GET['LearnDash'];
	$computer_programming_skill_29 = $_GET['Tag Cloud'];
	$computer_programming_skill_30 = $_GET['Webpage Test'];
	$computer_programming_skill_31 = $_GET['Wikia'];
	$computer_programming_skill_32 = $_GET['Google Chrome Developer Tools'];
	$computer_programming_skill_33 = $_GET['Conversion Fly'];
	// get the data from the designers
	$computer_programming_skill_designer_1 = $_GET['Bjarne Stroustrup'];
	$computer_programming_skill_designer_2 = $_GET['Microsoft Research'];
	$computer_programming_skill_designer_3 = $_GET['James Gosling'];
	$computer_programming_skill_designer_4 = $_GET['Brendan Eich'];
	$computer_programming_skill_designer_5 = $_GET['Tim Berners-Lee'];
	$computer_programming_skill_designer_6 = $_GET['Hakon Wium Lie'];
	$computer_programming_skill_designer_7 = $_GET['None'];
	$computer_programming_skill_designer_8 = $_GET['David Axmark'];
	$computer_programming_skill_designer_9 = $_GET['Allan Larsson'];
	$computer_programming_skill_designer_10 = $_GET['Micheal \"Monty\" Widenius'];
	$computer_programming_skill_designer_11 = $_GET['Rasmus Lerdorf'];
	$computer_programming_skill_designer_12 = $_GET['Don Syme'];
	$computer_programming_skill_designer_13 = $_GET['Alan Cooper'];
	$computer_programming_skill_designer_14 = $_GET['Joel Spolsky'];
	$computer_programming_skill_designer_15 = $_GET['Matt Mullenweg'];
	$computer_programming_skill_designer_16 = $_GET['Mike Little'];
	$computer_programming_skill_designer_17 = $_GET['Robert Mu&ntilde;oz'];
	$computer_programming_skill_designer_18 = $_GET['David Okuniev'];
	$computer_programming_skill_designer_19 = $_GET['Google'];
	$computer_programming_skill_designer_20 = $_GET['Chris Kohlhardt'];
	$computer_programming_skill_designer_21 = $_GET['Clint Dickson'];
	$computer_programming_skill_designer_22 = $_GET['Dennis Ritchie'];
	// get the data from the paradigms
	$computer_programming_skill_paradigm_1 = $_GET['Multi-Paradigm'];
	$computer_programming_skill_paradigm_2 = $_GET['Procedural'];
	$computer_programming_skill_paradigm_3 = $_GET['Functional'];
	$computer_programming_skill_paradigm_4 = $_GET['Object-Oriented'];
	$computer_programming_skill_paradigm_5 = $_GET['Generic'];
	$computer_programming_skill_paradigm_6 = $_GET['Structured'];
	$computer_programming_skill_paradigm_7 = $_GET['Imperative'];
	$computer_programming_skill_paradigm_8 = $_GET['Event-Driven'];
	$computer_programming_skill_paradigm_9 = $_GET['Task-Driven'];
	$computer_programming_skill_paradigm_10 = $_GET['Reflective'];
	$computer_programming_skill_paradigm_11 = $_GET['Concurrent'];
	$computer_programming_skill_paradigm_12 = $_GET['Class-Based'];
	$computer_programming_skill_paradigm_13 = $_GET['Prototype-Based'];
	$computer_programming_skill_paradigm_14 = $_GET['Object-Based'];
	$computer_programming_skill_paradigm_15 = $_GET['None'];
	$computer_programming_skill_paradigm_16 = $_GET['Metaprogramming'];
	// get the data from the typing disciplines
	$computer_programming_skill_typing_discipline_1 = $_GET['Static'];
	$computer_programming_skill_typing_discipline_2 = $_GET['Nominative'];
	$computer_programming_skill_typing_discipline_3 = $_GET['Partially Inferred'];
	$computer_programming_skill_typing_discipline_4 = $_GET['Dynamic'];
	$computer_programming_skill_typing_discipline_5 = $_GET['Strong'];
	$computer_programming_skill_typing_discipline_6 = $_GET['Safe'];
	$computer_programming_skill_typing_discipline_7 = $_GET['Manifest'];
	$computer_programming_skill_typing_discipline_8 = $_GET['Duck'];
	$computer_programming_skill_typing_discipline_9 = $_GET['None'];
	$computer_programming_skill_typing_discipline_10 = $_GET['Weak'];
	$computer_programming_skill_typing_discipline_11 = $_GET['Gradual'];
	$computer_programming_skill_typing_discipline_12 = $_GET['Inferred'];
?>
<?php include '../view/header/Website About Me - Computer Programming Skills - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Here are the computer programming skills that I've learned through college and my Internship with Best Business Coach.</p>
		<div id="myComputerProgrammingSkillsDivElement">
			<table border = "3">
			<caption>Computer Programming Skills</caption>
				<tr>
					<th>Name</th>
					<th>First Appeared</th>
					<th>Paradigm</th>
					<th>Typing Discipline</th>
					<th>Designed By</th>
					<th>Resource Number(s)</th>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_1; ?></td>
					<td>1983</td>
					<td><?php echo $computer_programming_skill_paradigm_1; ?>, <?php echo $computer_programming_skill_paradigm_2; ?>, <?php echo $computer_programming_skill_paradigm_3; ?>, <?php echo $computer_programming_skill_paradigm_4; ?>, <?php echo $computer_programming_skill_paradigm_5; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_2; ?>, <?php echo $computer_programming_skill_typing_discipline_3; ?></td>
					<td><?php echo $computer_programming_skill_designer_1; ?></td>
					<td><a href="Website About Me - Resources.php">1</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_2; ?></td>
					<td>2000</td>
					<td><?php echo $computer_programming_skill_paradigm_6; ?>, <?php echo $computer_programming_skill_paradigm_7; ?>, <?php echo $computer_programming_skill_paradigm_4; ?>, <?php echo $computer_programming_skill_paradigm_8; ?>, <?php echo $computer_programming_skill_paradigm_9; ?>, <?php echo $computer_programming_skill_paradigm_3; ?>, <?php echo $computer_programming_skill_paradigm_5; ?>, <?php echo $computer_programming_skill_paradigm_10; ?>, <?php echo $computer_programming_skill_paradigm_11; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_4; ?>, <?php echo $computer_programming_skill_typing_discipline_5; ?>, <?php echo $computer_programming_skill_typing_discipline_6; ?>, <?php echo $computer_programming_skill_typing_discipline_2; ?>, <?php echo $computer_programming_skill_typing_discipline_3; ?></td>
					<td><?php echo $computer_programming_skill_designer_2; ?></td>
					<td><a href="Website About Me - Resources.php">2</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_3; ?></td>
					<td>1995</td>
					<td><?php echo $computer_programming_skill_paradigm_1; ?>, <?php echo $computer_programming_skill_paradigm_4; ?> (<?php echo $computer_programming_skill_paradigm_12; ?>), <?php echo $computer_programming_skill_paradigm_6; ?>, <?php echo $computer_programming_skill_paradigm_7; ?>, <?php echo $computer_programming_skill_paradigm_5; ?>, <?php echo $computer_programming_skill_paradigm_10; ?>, <?php echo $computer_programming_skill_paradigm_11; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_5; ?>, <?php echo $computer_programming_skill_typing_discipline_6; ?>, <?php echo $computer_programming_skill_typing_discipline_2; ?>, <?php echo $computer_programming_skill_typing_discipline_7; ?></td>
					<td><?php echo $computer_programming_skill_designer_3; ?></td>
					<td><a href="Website About Me - Resources.php">3</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_4; ?></td>
					<td>1995</td>
					<td><?php echo $computer_programming_skill_paradigm_1; ?>, <?php echo $computer_programming_skill_paradigm_4; ?> (<?php echo $computer_programming_skill_paradigm_13; ?>), <?php echo $computer_programming_skill_paradigm_7; ?>, <?php echo $computer_programming_skill_paradigm_3; ?>, <?php echo $computer_programming_skill_paradigm_8; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_4; ?>, <?php echo $computer_programming_skill_typing_discipline_8; ?></td>
					<td><?php echo $computer_programming_skill_designer_4; ?></td>
					<td><a href="Website About Me - Resources.php">4</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_5; ?></td>
					<td>1993</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_5; ?></td>
					<td><a href="Website About Me - Resources.php">5</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_6; ?></td>
					<td>1996</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_6; ?></td>
					<td><a href="Website About Me - Resources.php">6</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_7; ?></td>
					<td>1996</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_designer_7; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><a href="Website About Me - Resources.php">7</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_8; ?></td>
					<td>1995</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_8; ?>, <?php echo $computer_programming_skill_designer_9; ?> and <?php echo $computer_programming_skill_designer_10; ?></td>
					<td><a href="Website About Me - Resources.php">8</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_9; ?></td>
					<td>1995</td>
					<td><?php echo $computer_programming_skill_typing_discipline_4; ?>, <?php echo $computer_programming_skill_typing_discipline_10; ?>, <?php echo $computer_programming_skill_typing_discipline_11; ?></td>
					<td><?php echo $computer_programming_skill_paradigm_7; ?>, <?php echo $computer_programming_skill_paradigm_4; ?>, <?php echo $computer_programming_skill_paradigm_2; ?>, <?php echo $computer_programming_skill_paradigm_10; ?></td>
					<td><?php echo $computer_programming_skill_typing_designer_11; ?></td>
					<td><a href="Website About Me - Resources.php">9</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_10; ?></td>
					<td>2005</td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_5; ?>, <?php echo $computer_programming_skill_typing_discipline_15; ?></td>
					<td><?php echo $computer_programming_skill_paradigm_1; ?>, <?php echo $computer_programming_skill_paradigm_3; ?>, <?php echo $computer_programming_skill_paradigm_7; ?>, <?php echo $computer_programming_skill_paradigm_4; ?>, <?php echo $computer_programming_skill_paradigm_16; ?>, <?php echo $computer_programming_skill_paradigm_10; ?>, <?php echo $computer_programming_skill_paradigm_11; ?></td>
					<td><?php echo $computer_programming_skill_desinger_12; ?>, <?php echo $computer_programming_skill_designer_2; ?></td>
					<td><a href="Website About Me - Resources.php">10</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_11; ?></td>
					<td>1996</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_7; ?></td>
					<td><a href="Website About Me - Resources.php">11</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_12; ?></td>
					<td>1991</td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_5; ?></td>
					<td><?php echo $computer_programming_skill_12; ?>, <?php echo $computer_programming_skill_paradigm_8; ?></td>
					<td><?php echo $computer_programming_skill_designer_13; ?></td>
					<td><a href="Website About Me - Resources.php">12</a>, <a href="Website About Me - Resources.php">13</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_13; ?></td>
					<td>1996</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_13; ?></td>
					<td><a href="Website About Me - Resources.php">14</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_14; ?></td>
					<td>2011</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_14; ?></td>
					<td><a href="Website About Me - Resources.php">15</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_15; ?></td>
					<td>2003</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_15; ?>, <?php echo $computer_programming_skill_designer_16; ?></td>
					<td><a href="Website About Me - Resources.php">16</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_16; ?></td>
					<td>2012</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_17; ?>, <?php echo $computer_programming_skill_designer_18; ?></td>
					<td><a href="Website About Me - Resources.php">17</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_17; ?></td>
					<td>2005</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">18</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_18; ?></td>
					<td>2012</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">19</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_19; ?></td>
					<td>2005</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_20; ?>, <?php echo $computer_programming_skill_designer_21; ?></td>
					<td><a href="Website About Me - Resources.php">20</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_20; ?></td>
					<td>2006</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">21</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_20; ?></td>
					<td>2006</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">21</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_20; ?></td>
					<td>2006</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">21</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_20; ?></td>
					<td>2010</td>
					<td><?php echo $computer_programming_skill_paradigm_15; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_9; ?></td>
					<td><?php echo $computer_programming_skill_designer_19; ?></td>
					<td><a href="Website About Me - Resources.php">22</a></td>
				</tr>
				<tr>
					<td><?php echo $computer_programming_skill_24; ?></td>
					<td>1972</td>
					<td><?php echo $computer_programming_skill_paradigm_7; ?> (<?php echo $computer_programming_skill_paradigm_2; ?>), <?php echo $computer_programming_skill_paradigm_6; ?></td>
					<td><?php echo $computer_programming_skill_typing_discipline_1; ?>, <?php echo $computer_programming_skill_typing_discipline_10; ?>, <?php echo $computer_programming_skill_typing_discipline_7; ?>, <?php echo $computer_programming_skill_typing_discipline_2; ?></td>
					<td><?php echo $computer_programming_skill_designer_22; ?></td>
					<td><a href="Website About Me - Resources.php">23</a></td>
				</tr>
			</table>
			<ul>
				<li><?php echo $computer_programming_skill_25; ?></li>
				<li><?php echo $computer_programming_skill_26; ?></li>
				<li><?php echo $computer_programming_skill_27; ?></li>
				<li><?php echo $computer_programming_skill_28; ?></li>
				<li><?php echo $computer_programming_skill_29; ?></li>
				<li><?php echo $computer_programming_skill_30; ?></li>
				<li><?php echo $computer_programming_skill_31; ?></li>
				<li><?php echo $computer_programming_skill_32; ?></li>
				<li><?php echo $computer_programming_skill_33; ?></li>
			</ul>
		</div><!-- end myComputerProgrammingSkillsDivElement -->
	</div><!-- end content -->
<?php include '../view/footer.php'; ?>
