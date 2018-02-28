<?php
	// get the data from the request
	$work_sample_1 = $_GET['My Version of The Mentoring Page'];
	$work_sample_2 = $_GET['Podcast Interview Page With The Banners Containing the Business Form'];
	$work_sample_3 = $_GET['Updated Main Member Home Page'];
?>
<?php include '../view/header/Website About Me - Work Samples - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<div id = "myDivWorkSamplesElement">
			<ul>
				<li><a href="http://members.bestbusinesscoach.ca/jeff-job/"><?php echo $work_sample_1; ?></a>. I added a blue background to each of the headers.</li>
				<li><a href="http://members.bestbusinesscoach.ca/podcast-interviews"><?php echo $work_sample_2; ?></a>. I implemented a survey on the top banner and side banner and inserted new testimonials.</li>
				<li><a href="http://members.bestbusinesscoach.ca/main-member-home"><?php echo $work_sample_3; ?></a>. I made some tweaks based on sales letters from other websites.</li>
			</ul>
			<p>I transcribed podcast interviews and tested the Basic Business Course, ensuring absences of errors involving webpages and / or broken links.</p>
		</div><!-- end myDivWorkSamplesElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
