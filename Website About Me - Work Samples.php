<?php
  // get the data from the request
  $work_sample_1 = $_GET['My Version of The Mentoring Page'];
	$work_sample_2 = $_GET['Podcast Interview Page With The Banners Containing the Business Form'];
	$work_sample_3 = $_GET['Updated Main Member Home Page'];
?>
<?php include 'Website About Me - Work Samples - header.php'; ?>
  <div class = "content">
    <div>
      <ul>
        <li><a href="http://members.bestbusinesscoach.ca/jeff-job/"><?php echo $work_sample_1; ?></a></li>
				<li><a href="http://members.bestbusinesscoach.ca/podcast-interviews"><?php echo $work_sample_2; ?></a></li>
				<li><a href="http://members.bestbusinesscoach.ca/main-member-home"><?php echo $work_sample_3; ?></a></li>
      </ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
