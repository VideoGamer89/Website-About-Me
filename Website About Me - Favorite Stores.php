<?php
	// get the data from the stores
	$favorite_store_1 = $_GET['GameStop'];
	$favorite_store_2 = $_GET['Walmart'];
	$favorite_store_3 = $_GET['Target'];
	$favorite_store_4 = $_GET['Best Buy'];
	$favorite_store_5 = $_GET['Kohl\'s'];
	$favorite_store_6 = $_GET['Shopko'];
	$favorite_store_7 = $_GET['Cub Foods'];
	$favorite_store_8 = $_GET['Dollar General'];
	$favorite_store_9 = $_GET['OfficeMax'];
	$favorite_store_10 = $_GET['Barnes & Noble'];
	$favorite_store_11 = $_GET['Half Price Books'];
	// get the data from the founders
	$favorite_store_founder_1 = $_GET['James McCurry'];
	$favorite_store_founder_2 = $_GET['Gary M. Kusin'];
	$favorite_store_founder_3 = $_GET['Sam Walton'];
	$favorite_store_founder_4 = $_GET['George Dayton'];
	$favorite_store_founder_5 = $_GET['Richard M. Schulze'];
	$favorite_store_founder_6 = $_GET['Maxwell Kohl'];
	$favorite_store_founder_7 = $_GET['James Ruben'];
	$favorite_store_founder_8 = $_GET['Charles Hooley'];
	$favorite_store_founder_9 = $_GET['Jack Hooley'];
	$favorite_store_founder_10 = $_GET['Robert Thueson'];
	$favorite_store_founder_11 = $_GET['Culver Davis Jr.'];
	$favorite_store_founder_12 = $_GET['J.L. Turner'];
	$favorite_store_founder_13 = $_GET['Cal Turner'];
	$favorite_store_founder_14 = $_GET['Bob Hurwitz'];
	$favorite_store_founder_15 = $_GET['Michael Feuer'];
	$favorite_store_founder_16 = $_GET['Charles M. Barnes'];
	$favorite_store_founder_17 = $_GET['William Barnes'];
	$favorite_store_founder_18 = $_GET['G. Clifford Noble'];
	$favorite_store_founder_19 = $_GET['Leonard Riggio'];
	$favorite_store_founder_20 = $_GET['Ken Gjemre'];
	$favorite_store_founder_21 = $_GET['Pat Anderson'];
	// get the data from the industries
	$favorite_store_industry_1 = $_GET['Retail'];
	$favorite_store_industry_2 = $_GET['Grocery'];
	$favorite_store_industry_3 = $_GET['Discount Retailer'];
	$favorite_store_industry_4 = $_GET['Specialty'];
	// get the data from the products
	$favorite_store_product_1 = $_GET['Video Games'];
	$favorite_store_product_2 = $_GET['Consoles'];
	$favorite_store_product_3 = $_GET['Accessories'];
	$favorite_store_product_4 = $_GET['Electronics'];
	$favorite_store_product_5 = $_GET['Movies'];
	$favorite_store_product_6 = $_GET['Music'];
	$favorite_store_product_7 = $_GET['Home'];
	$favorite_store_product_8 = $_GET['Furniture'];
	$favorite_store_product_9 = $_GET['Home Improvement'];
	$favorite_store_product_10 = $_GET['Clothing'];
	$favorite_store_product_11 = $_GET['Footwear'];
	$favorite_store_product_12 = $_GET['Jewelry'];
	$favorite_store_product_13 = $_GET['Toys/Games'];
	$favorite_store_product_14 = $_GET['Health Products / Aids'];
	$favorite_store_product_15 = $_GET['Beauty Products / Aids'];
	$favorite_store_product_16 = $_GET['Pet Supplies'];
	$favorite_store_product_17 = $_GET['Sporting Goods'];
	$favorite_store_product_18 = $_GET['Fitness'];
	$favorite_store_product_19 = $_GET['Auto'];
	$favorite_store_product_20 = $_GET['Photo Finishing'];
	$favorite_store_product_21 = $_GET['Craft Supplies'];
	$favorite_store_product_22 = $_GET['Party Supplies'];
	$favorite_store_product_23 = $_GET['Grocery'];
	$favorite_store_product_24 = $_GET['Bedding'];
	$favorite_store_product_25 = $_GET['Food'];
	$favorite_store_product_26 = $_GET['Gardening Supplies'];
	$favorite_store_product_27 = $_GET['Small Appliances'];
	$favorite_store_product_28 = $_GET['Office Supplies'];
	$favorite_store_product_29 = $_GET['Books'];
	$favorite_store_product_30 = $_GET['Consumer Electronics'];
	$favorite_store_product_31 = $_GET['Housewares'];
	$favorite_store_product_32 = $_GET['Market'];
	$favorite_store_product_33 = $_GET['Contact Lenses'];
	$favorite_store_product_34 = $_GET['Bakery'];
	$favorite_store_product_35 = $_GET['Dairy'];
	$favorite_store_product_36 = $_GET['Deli'];
	$favorite_store_product_37 = $_GET['Frozen Foods'];
	$favorite_store_product_38 = $_GET['Meat'];
	$favorite_store_product_39 = $_GET['Pharmacy'];
	$favorite_store_product_40 = $_GET['Produce'];
	$favorite_store_product_41 = $_GET['Seafood'];
	$favorite_store_product_42 = $_GET['Snacks'];
	$favorite_store_product_43 = $_GET['Liquor'];
	$favorite_store_product_44 = $_GET['Cleaning Supplies'];
	$favorite_store_product_45 = $_GET['Home Decor'];
	$favorite_store_product_46 = $_GET['Seasonal Items'];
	$favorite_store_product_47 = $_GET['Nook'];
	$favorite_store_product_48 = $_GET['SparkNotes'];
	$favorite_store_product_49 = $_GET['Records'];
	$favorite_store_product_50 = $_GET['CDs'];
	$favorite_store_product_51 = $_GET['DVDs'];
	$favorite_store_product_52 = $_GET['Magazines'];
	$favorite_store_product_53 = $_GET['Shoes'];
	// get the data from the types
	$favorite_store_type_1 = $_GET['Public'];
	$favorite_store_type_2 = $_GET['Private'];
	$favorite_store_type_3 = $_GET['Subsidiary'];
	$favorite_store_type_4 = $_GET['Brand'];
?>
<?php include '../view/header/Website About Me - Favorite Stores - header.php'; ?>
	<!-- the content section -->
	<div class = "content">		
		<p>Here is a list of my favorite places to shop.</p>
		<div id = "myFavoriteStoresDivElement">
			<table border = "3">
			<caption>Favorite Stores</caption>
				<tr>
					<th>Name</th>
					<th>Type</th>
					<th>Industry(ies)</th>
					<th>Founded</th>
					<th>Headquarters</th>
					<th>Number of Locations</th>
					<th>Product(s)</th>
					<th>Division(s)</th>
					<th>Number of Employees</th>
					<th>Founder(s)</th>
					<th>Revenue</th>
					<th>Resource Number</th>
				</tr>
				<tr>
					<td><a href="http://www.gamestop.com/"><?php echo $favorite_store_1; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1984</td>
					<td>Grapevine, Texas</td>
					<td>7,117</td>
					<td><?php echo $favorite_store_product_1; ?>, <?php echo $favorite_store_product_2; ?>, <?php echo $favorite_store_product_3; ?></td>
					<td>Video Game Brands, Technology Brands</td>
					<td>20,000</td>
					<td><?php echo $favorite_store_founder_1; ?>, <?php echo $favorite_store_founder_2; ?></td>
					<td>$9 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">1</a></td>
				</tr>
				<tr>
					<td><a href="https://www.walmart.com/"><?php echo $favorite_store_2; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1962</td>
					<td>Bentonville, Arkansas</td>
					<td>11,695</td>
					<td><?php echo $favorite_store_product_4; ?>, <?php echo $favorite_store_product_5; ?> and <?php echo $favorite_store_product_6; ?>, <?php echo $favorite_store_product_7; ?> and <?php echo $favorite_store_product_8; ?>, <?php echo $favorite_store_product_9; ?>, <?php echo $favorite_store_product_10; ?>, <?php echo $favorite_store_product_11; ?>, <?php echo $favorite_store_product_12; ?>, <?php echo $favorite_store_product_13; ?>, <?php echo $favorite_store_product_14; ?> and <?php echo $favorite_store_product_15; ?>, <?php echo $favorite_store_product_16; ?>, <?php echo $favorite_store_product_17; ?> and <?php echo $favorite_store_product_18; ?>, <?php echo $favorite_store_product_19; ?>, <?php echo $favorite_store_product_20; ?>, <?php echo $favorite_store_product_21; ?>, <?php echo $favorite_store_product_22; ?>, <?php echo $favorite_store_product_23; ?></td>
					<td>Walmart U.S. Walmart International, Sam's Club, Global eCommerce</td>
					<td>2.3 Million</td>
					<td><?php echo $favorite_store_founder_3; ?></td>
					<td>485.87 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">2</a></td>
				</tr>
				<tr>
					<td><a href="https://www.target.com/"><?php echo $favorite_store_3; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1902</td>
					<td>Minneapolis, Minnesota</td>
					<td>1,816</td>
					<td><?php echo $favorite_store_product_15; ?> and <?php echo $favorite_store_product_14; ?>, <?php echo $favorite_store_product_24; ?>, <?php echo $favorite_store_product_10; ?> and <?php echo $favorite_store_product_3; ?>, <?php echo $favorite_store_product_4; ?>, <?php echo $favorite_store_product_25; ?>, <?php echo $favorite_store_product_8; ?>, <?php echo $favorite_store_product_31; ?>, <?php echo $favorite_store_product_12; ?>, <?php echo $favorite_store_product_26; ?>, <?php echo $favorite_store_product_16; ?>, <?php echo $favorite_store_product_53; ?>, <?php echo $favorite_store_product_17; ?>, <?php echo $favorite_store_product_13; ?>, <?php echo $favorite_store_product_27; ?>, <?php echo $favorite_store_product_28; ?>, <?php echo $favorite_store_product_29; ?>, <?php echo $favorite_store_product_5; ?>, <?php echo $favorite_store_product_6; ?></td>
					<td>Financial and Retail Services, Target Sourcing Services</td>
					<td>341,000</td>
					<td><?php echo $favorite_store_founder_4; ?></td>
					<td>$69.495 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">3</a></td>
				</tr>
				<tr>
					<td><a href="http://www.bestbuy.com/"><?php echo $favorite_store_4; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1966</td>
					<td>Richfield, Minnesota</td>
					<td>1,026</td>
					<td><?php echo $favorite_store_product_30; ?></td>
					<td>Geek Squad, Magnolia, Pacific Sales</td>
					<td>125,000</td>
					<td><?php echo $favorite_store_founder_5; ?></td>
					<td>$44.092 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">4</a></td>
				</tr>
				<tr>
					<td><a href="https://www.kohls.com/"><?php echo $favorite_store_5; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1962</td>
					<td>Menomonee Falls, Wisconsin</td>
					<td>1,155</td>
					<td><?php echo $favorite_store_product_10; ?>, <?php echo $favorite_store_product_11; ?>, <?php echo $favorite_store_product_24; ?>, <?php echo $favorite_store_product_8; ?>, <?php echo $favorite_store_product_12; ?>, <?php echo $favorite_store_product_15; ?>, <?php echo $favorite_store_product_4; ?>, <?php echo $favorite_store_product_31; ?></td>
					<td>None</td>
					<td>138,000</td>
					<td><?php echo $favorite_store_founder_6; ?></td>
					<td>$18.686 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">5</a></td>
				</tr>
				<tr>
					<td><a href="http://www.shopko.com/"><?php echo $favorite_store_6; ?></a></td>
					<td><?php echo $favorite_store_type_2; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1962</td>
					<td>Green Bay, Wisconsin</td>
					<td>357</td>
					<td><?php echo $favorite_store_product_10; ?>, <?php echo $favorite_store_product_11; ?>, <?php echo $favorite_store_product_24; ?>, <?php echo $favorite_store_product_8; ?>, <?php echo $favorite_store_product_12; ?>, <?php echo $favorite_store_product_15; ?>, <?php echo $favorite_store_product_4; ?>, <?php echo $favorite_store_product_32; ?>, <?php echo $favorite_store_product_31; ?>, <?php echo $favorite_store_product_33; ?></td>
					<td>None</td>
					<td>16,900</td>
					<td><?php echo $favorite_store_founder_7; ?></td>
					<td>$3.25 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">6</a></td>
				</tr>
				<tr>
					<td><a href="https://www.cub.com/"><?php echo $favorite_store_7; ?></a></td>
					<td><?php echo $favorite_store_type_3; ?></td>
					<td><?php echo $favorite_store_industry_1; ?>, <?php echo $favorite_store_product_23; ?></td>
					<td>1968</td>
					<td>Stillwater, Minnesota</td>
					<td>81</td>
					<td><?php echo $favorite_store_product_34; ?>, <?php echo $favorite_store_product_35; ?>, <?php echo $favorite_store_product_36; ?>, <?php echo $favorite_store_product_37; ?>, <?php echo $favorite_store_product_23; ?>, <?php echo $favorite_store_product_38; ?>, <?php echo $favorite_store_product_39; ?>, <?php echo $favorite_store_product_40; ?>, <?php echo $favorite_store_product_41; ?>, <?php echo $favorite_store_product_42; ?>, <?php echo $favorite_store_product_43; ?></td>
					<td>None</td>
					<td>100+</td>
					<td><?php echo $favorite_store_founder_8; ?>, <?php echo $favorite_store_founder_9; ?>, <?php echo $favorite_store_founder_10; ?>, <?php echo $favorite_store_founder_11; ?></td>
					<td>None</td>
					<td><a href="Website About Me - Resources.html">7</a></td>
				</tr>
				<tr>
					<td><a href="http://www.dollargeneral.com/"><?php echo $favorite_store_8; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_3; ?></td>
					<td>1939 (J.L. Turner and Son), 1968 (Dollar General Corporation)</td>
					<td>Goodlettsville, Tennessee</td>
					<td>14,000</td>
					<td><?php echo $favorite_store_product_10; ?>, <?php echo $favorite_store_product_44; ?>, <?php echo $favorite_store_product_45; ?>, <?php echo $favorite_store_product_14; ?> & <?php echo $favorite_store_product_15; ?>, <?php echo $favorite_store_product_16; ?>, <?php echo $favorite_store_product_13; ?>, <?php echo $favorite_store_product_46; ?>, <?php echo $favorite_store_product_23; ?></td>
					<td>Dollar General Market</td>
					<td>100+</td>
					<td><?php echo $favorite_store_founder_12; ?>, <?php echo $favorite_store_founder_13; ?></td>
					<td>$20.369 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">8</a></td>
				</tr>
				<tr>
					<td><a href="https://www.officedepot.com/"><?php echo $favorite_store_9; ?></a></td>
					<td><?php echo $favorite_store_type_3; ?>, <?php echo $favorite_store_type_4; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1988</td>
					<td>Boca Raton, Florida</td>
					<td>941</td>
					<td><?php echo $favorite_store_product_28; ?></td>
					<td>None</td>
					<td>100+</td>
					<td><?php echo $favorite_store_founder_14; ?>, <?php echo $favorite_store_founder_15; ?></td>
					<td>None</td>
					<td><a href="Website About Me - Resources.html">9</a></td>
				</tr>
				<tr>
					<td><a href="https://www.barnesandnoble.com/"><?php echo $favorite_store_10; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?></td>
					<td>1886</td>
					<td>New York City, New York</td>
					<td>781</td>
					<td><?php echo $favorite_store_product_47; ?>, <?php echo $favorite_store_product_48; ?></td>
					<td>None</td>
					<td>26,000</td>
					<td><?php echo $favorite_store_founder_16; ?>, <?php echo $favorite_store_founder_17; ?>, <?php echo $favorite_store_founder_18; ?>, <?php echo $favorite_store_founder_19; ?></td>
					<td>$4.164 Billion (US)</td>
					<td><a href="Website About Me - Resources.html">10</a></td>
				</tr>
				<tr>
					<td><a href="https://www.hpb.com/home"><?php echo $favorite_store_11; ?></a></td>
					<td><?php echo $favorite_store_type_1; ?></td>
					<td><?php echo $favorite_store_industry_1; ?> (<?php echo $favorite_store_industry_4; ?>)</td>
					<td>1972</td>
					<td>Dallas, Texas</td>
					<td>127</td>
					<td><?php echo $favorite_store_product_29; ?>, <?php echo $favorite_store_product_49; ?>, <?php echo $favorite_store_product_50; ?>, <?php echo $favorite_store_product_51; ?>, <?php echo $favorite_store_product_52; ?>, <?php echo $favorite_store_product_1; ?></td>
					<td>None</td>
					<td>100+</td>
					<td><?php echo $favorite_store_founder_20; ?>, <?php echo $favorite_store_founder_21; ?></td>
					<td>None</td>
					<td><a href="Website About Me - Resources.html">11</a></td>
				</tr>
			</table>
		</div><!-- end myFavoriteStoresDivElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
