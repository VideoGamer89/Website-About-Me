<?php
  // get the data from the schools
  $school_1 = $_GET['North Branch Area Primary School'];
  $school_2 = $_GET['North Branch Area Main Street School'];
  $school_3 = $_GET['North Branch Area Middle School'];
  $school_4 = $_GET['North Branch Area Senior High School'];
  $school_5 = $_GET['North Branch Area STEP (Student Transition and Employability Program)'];
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
<?php include 'Website About Me - Education - header.php'; ?>
  <div class = "content">
    <p>I graduated from the following institutions:</p>
    <div>
      <ul>
        <li><?php echo $school_6; ?>: 2011 - 2015, Area of Study: <?php echo $area_of_study_3; ?>, Location: <?php echo $location_2; ?>, Number of Years: <?php echo $number_of_years_3; ?></li>
				<li><?php echo $school_5; ?>: 2008 - 2011, Area of Study: <?php echo $area_of_study_2; ?>, Location: <?php echo $location_1; ?>, Number of Years: <?php echo $number_of_years_2; ?></li>
				<li><?php echo $school_4; ?>: 2004 - 2008, Area of Study: <?php echo $area_of_study_1; ?>, Location: <?php echo $location_1; ?>, Number of Years: <?php echo $number_of_years_3; ?></li>
				<li><?php echo $school_3; ?>: 2000 - 2004, Area of Study: <?php echo $area_of_study_1; ?>, Location: <?php echo $location_1; ?>, Number of Years: <?php echo $number_of_years_3; ?></li>
				<li><?php echo $school_2; ?>: 1999 - 2000, Area of Study: <?php echo $area_of_study_1; ?>, Location: <?php echo $location_1; ?>, Number of Years: <?php echo $number_of_years_1; ?></li>
				<li><?php echo $school_1; ?>: 1992 - 1999, Area of Study: <?php echo $area_of_study_1; ?>, Location: <?php echo $location_1; ?>, Number of Years: <?php echo $number_of_years_4; ?></li>
      </ul>
    </div>
  </div>
<?php include 'footer.php'; ?>
