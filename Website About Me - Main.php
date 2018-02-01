<?php
  // get the data from the request
  $first_name = $_GET['Jeff'];
  $last_name = $_GET['Vogel'];
?>
<?php include 'Website About Me - header.php'; ?>
  <div class = "content">
    <p>Hello, My Name is <?php echo $first_name; ?> <?php echo $last_name; ?>. I have high achieving autism.</p>
  </div>
<?php include "Website About Me - footer.php'; ?>
