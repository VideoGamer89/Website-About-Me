<?php
  // get the data from the beverages
  $favorite_beverage_1 = $_GET['Diet Pepsi'];
  $favorite_beverage_2 = $_GET['Snapple'];
  $favorite_beverage_3 = $_GET['Diet Coke'];
  $favorite_beverage_4 = $_GET['Sprite Zero'];
  // get the data from the manufacturers
  $favorite_beverage_manufacturer_1 = $_GET['PepsiCo'];
  $favorite_beverage_manufacturer_2 = $_GET['Dr. Pepper Snapplle Group'];
  $favorite_beverage_manufacturer_3 = $_GET['The Coca-Cola Company'];
  // get the data from the types
  $favorite_beverage_type_1 = $_GET['Diet Cola'];
  $favorite_beverage_type_2 = $_GET['Iced Tea'];
  $favorite_beverage_type_3 = $_GET['Juice Drink'];
  $favorite_beverage_type_4 = $_GET['Lemonade'];
  $favorite_beverage_type_5 = $_GET['Water'];
  $favorite_beverage_type_6 = $_GET['Sugar Free Lemon-Lime'];
  // get the data from the variants
  $favorite_beverage_variant_1 = $_GET['Caffeine Free Diet Pepsi'];
  $favorite_beverage_variant_2 = $_GET['Diet Pepsi Lime'];
  $favorite_beverage_variant_3 = $_GET['Diet Pepsi Vanilla'];
  $favorite_beverage_variant_4 = $_GET['Diet Pepsi Wild Cherry'];
  $favorite_beverage_variant_5 = $_GET['Diet Snapple Half Lemonad and Half Iced Tea'];
  $favorite_beverage_variant_6 = $_GET['Caffeine Free Diet Coke'];
  $favorite_beverage_variant_7 = $_GET['Diet Coke Cherry'];
  $favorite_beverage_variant_8 = $_GET['Diet Coke with Lime'];
  $favorite_beverage_variant_9 = $_GET['Diet Coke Sweetend'];
  $favorite_beverage_variant_10 = $_GET['Diet Coke with Citrus Zest'];
  $favorite_beverage_variant_11 = $_GET['None'];
?>
<?php include '../view/header/Website About Me - Favorite Beverages - header.php'; ?>
  <!-- the content section -->
  <div class = "content">
    <p>Here are my favorite beverages</p>
    <div id = "myFavoriteBeveragesDivElement">
      <table border = "3">
      <caption>Favorite Beverages</caption>
        <tr>
          <th>Name</th>
          <th>Type(s)</th>
          <th>Manufacturer(s)</th>
          <th>Country(ies) of Origin</th>
          <th>Introduced</th>
          <th>Reformulated</th>
          <th>Variant(s)</th>
          <th>Resource Name</th>
        </tr>
        <tr>
          <td><?php echo $favorite_beverage_1; ?></td>
					<td><?php echo $favorite_beverage_type_1; ?></td>
					<td><?php echo $favorite_beverage_manufacturer_1; ?></td>
					<td>United States</td>
					<td>1964</td>
					<td>2013</td>
					<td><?php echo $favorite_beverage_variant_1; ?>, <?php echo $favorite_beverage_variant_2; ?>, <?php echo $favorite_beverage_variant_3; ?>, <?php echo $favorite_beverage_variant_4; ?></td>
					<td><a href="Website About Me - Works Cited.php">1</a></td>
        </tr>
        <tr>
          <td><?php echo $favorite_beverage_2; ?></td>
					<td><?php echo $favorite_beverage_type_2; ?>, <?php echo $favorite_beverage_type_3; ?>, <?php echo $favorite_beverage_type_4; ?>, <?php echo $favorite_beverage_type_5; ?></td>
					<td><?php echo $favorite_beverage_manufacturer_2; ?></td>
					<td>United States</td>
					<td>1972</td>
					<td>None</td>
					<td><?php echo $favorite_beverage_variant_5; ?></td>
					<td><a href="Website About Me - Works Cited.php">2</a></td>
        </tr>
        <tr>
          <td><?php echo $favorite_beverage_3; ?></td>
					<td><?php echo $favorite_beverage_type_1; ?></td>
					<td><?php echo $favorite_beverage_manufacturer_3; ?></td>
					<td>United States</td>
					<td>1982</td>
					<td>None</td>
					<td><?php echo $favorite_beverage_variant_6; ?>, <?php echo $favorite_beverage_variant_7; ?>, D<?php echo $favorite_beverage_variant_8; ?>, <?php echo $favorite_beverage_variant_9; ?>, <?php echo $favorite_beverage_variant_10; ?></td>
					<td><a href="Website About Me - Works Cited.php">3</a></td>
        </tr>
        <tr>
          <td><?php echo $favorite_beverage_4; ?></td>
					<td><?php echo $favorite_beverage_type_6; ?></td>
					<td><?php echo $favorite_beverage_manufacturer_3; ?></td>
					<td>United States</td>
					<td>1974</td>
					<td>None</td>
					<td><?php echo $favorite_beverage_variant_11; ?></td>
					<td><a href="Website About Me - Works Cited.php">4</a></td>
        </tr>
      </table>
    </div><!-- end myFavoriteBeveragesDivElement -->
  </div><!-- end content -->
<?php include '../view/footer.php'; ?>
