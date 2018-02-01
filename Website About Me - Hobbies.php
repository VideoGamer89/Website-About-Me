<?php
  // get the data from the request
  $hobby_1 = $_GET['Play Video Games'];
	$hobby_2 = $_GET['Watching TV'];
	$hobby_3 = $_GET['Listening To Music'];
	$hobby_4 = $_GET['Watching Movies'];
	$hobby_5 = $_GET['Bowling'];
	$hobby_6a = $_GET['Going to the '];
	$hobby_6b = $_GET['Wisconsin Dells'];
?>
<?php include 'Website About Me - Hobbies - header.php'; ?>
  <div class = "content">
    <p>Here Are My Hobbies.</p>
    <p>My hobbies include the following</p>
    <div>
      <ul>
				<li><? echo $hobby_1; ?></li>
				<li><? echo $hobby_2; ?></li>
				<li><? echo $hobby_3; ?></li>
				<li><? echo $hobby_4; ?></li>
				<li><? echo $hobby_5; ?></li>
				<li><? echo $hobby_6a; ?><a href="http://www.wisdells.com/wisconsin-dell.htm"><?php echo $hobby_6b; ?></a></li>
			</ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
