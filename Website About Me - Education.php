<?php
	// get the data from the schools
	$school_1 = $_GET['North Branch Area Primary School (Now North Branch Area Education Center)'];
	$school_2 = $_GET['North Branch Area Main Street School (RIP)'];
	$school_3 = $_GET['North Branch Area Middle School'];
	$school_4 = $_GET['North Branch Area Senior High School'];
	$school_5 = $_GET['Chisago County Shools\' Life Work Center (Formerly North Branch Area STEP (Student Transition and Employability Program))'];
	$school_6 = $_GET['Pine Technical and Community College'];
	// get the data from the areas of study
	$area_of_study_1 = $_GET['General'];
	$area_of_study_2 = $_GET['Life Skills'];
	$area_of_study_3 = $_GET['Computer Programming'];
	// get the data from the locations
	$location_1 = $_GET['North Branch, MN'];
	$location_2 = $_GET['Pine City, MN'];
	// get the data from the number of years
	$number_of_years_1 = $_GET['1'];
	$number_of_years_2 = $_GET['3'];
	$number_of_years_3 = $_GET['4'];
	$number_of_years_4 = $_GET['7'];
?>
<?php include '../view/header/Website About Me - Education - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>I graduated from the following institutions:</p>
		<div id = "myEducationDivElement">
			<table border = "3">
			<caption>Education</caption>
				<tr>
					<th>Name</th>
					<th>Year Started</th>
					<th>Year Ended</th>
					<th>Area of Study</th>
					<th>Location</th>
					<th>Street Address</th>
					<th>County</th>
					<th>Zip Code</th>
					<th>Number of Years</th>
				</tr>
				<tr>
					<td><?php echo $school_6; ?></td>
					<td>2011</td>
					<td>2015</td>
					<td><?php echo $area_of_study_2; ?></td>
					<td><?php echo $location_1; ?></td>
					<td>900 4th St. SE</td>
					<td>Pine</td>
					<td>55063</td>
					<td><?php echo $number_of_years_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $school_5; ?></td>
					<td>2008</td>
					<td>2011</td>
					<td><?php echo $area_of_study_3; ?></td>
					<td><?php echo $location_2; ?></td>
					<td>38423 Lincoln Trail</td>
					<td>Chisago</td>
					<td>55056</td>
					<td><?php echo $number_of_years_2; ?></td>
				</tr>
				<tr>
					<td><?php echo $school_4; ?></td>
					<td>2004</td>
					<td>2008</td>
					<td><?php echo $area_of_study_1; ?></td>
					<td><?php echo $location_2; ?></td>
					<td>38175 Grand Ave.</td>
					<td>Chisago</td>
					<td>55056</td>
					<td><?php echo $number_of_years_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $school_3; ?></td>
					<td>2000</td>
					<td>2004</td>
					<td><?php echo $area_of_study_1; ?></td>
					<td><?php echo $location_2; ?></td>
					<td>38431 Lincoln Trail</td>
					<td>Chisago</td>
					<td>55056</td>
					<td><?php echo $number_of_years_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $school_2; ?></td>
					<td>1999</td>
					<td>2000</td>
					<td><?php echo $area_of_study_1; ?></td>
					<td><?php echo $location_2; ?></td>
					<td>N/A</td>
					<td>Chisago</td>
					<td>55056</td>
					<td><?php echo $number_of_years_1; ?></td>
				</tr>
				<tr>
					<td><?php echo $school_1; ?></td>
					<td>1992</td>
					<td>1999</td>
					<td><?php echo $area_of_study_1; ?></td>
					<td><?php echo $location_2; ?></td>
					<td>38705 Grand Ave.</td>
					<td>Chisago</td>
					<td>55056</td>
					<td><?php echo $number_of_years_4; ?></td>
				</tr>
			</table>
		</div><!-- end myEducationDivElement -->
	</div><!-- end content -->
<?php include '../view/footer.php'; ?>	
