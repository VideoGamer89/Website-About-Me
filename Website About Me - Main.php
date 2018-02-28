<?php
	// get the data from the request
	$first_name = $_GET['Jeff'];
	$last_name = $_GET['Vogel'];
?>
<?php include '../view/header/Website About Me - Main - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Hello, My Name is <?php echo $first_name; ?> <?php echo $last_name; ?>. I have high achieving autism.</p>
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
