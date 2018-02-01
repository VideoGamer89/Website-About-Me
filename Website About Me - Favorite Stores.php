<?php
  // get the data from the request
  $favorite_store_1 = $_GET['GameStop'];
  $favorite_store_2 = $_GET['Walmart'];
  $favorite_store_3 = $_GET['Target'];
  $favorite_store_4 = $_GET['Best Buy'];
  $favorite_store_5 = $_GET['Kohls'];
  $favorite_store_6 = $_GET['Shopko'];
  $favorite_store_7 = $_GET['Cub Foods'];
?>
<?php include 'Website About Me - Favorite Stores - header.php'; ?>
  <div class = "content">
    <p>Here is a list of my favorite places to shop.</p>
    <div>
      <ul>
				<li><a href="http://www.gamestop.com/"><?php echo $favorite_store_1; ?></a></li>
				<li><a href="https://www.walmart.com/"><?php echo $favorite_store_2; ?></a></li>
				<li><a href="https://www.target.com/"><?php echo $favorite_store_3; ?></a></li>
				<li><a href="http://www.bestbuy.com/"><?php echo $favorite_store_4; ?></a></li>
				<li><a href="https://www.kohls.com/"><?php echo $favorite_store_5; ?></a></li>
				<li><a href="http://www.shopko.com/"><?php echo $favorite_store_6; ?></a></li>
				<li><a href="https://www.cubs.com/"><?php echo $favorite_store_7; ?></a></li>
			</ul>
    </div>
  </div>
<?php include 'Website About Me - footer.php'; ?>
