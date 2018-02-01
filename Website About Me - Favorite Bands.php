<?php
	// get the data from the headers
	$table_header_genre_1 = $_GET['Hip Hop'];
	$table_header_genre_2 = $_GET['Punk'];
	$table_header_genre_3 = $_GET['Rock'];
	$table_header_genre_4 = $_GET['Alternative'];
	$table_header_genre_5 = $_GET['Pop'];
	$table_header_genre_6 = $_GET['Christian'];
	// get the data from the request
	$table_data_band_1 = $_GET['Trip Lee'];
	$table_data_band_2 = $_GET['The Offspring'];
	$table_data_band_3 = $_GET['Decifer Down'];
	$table_data_band_4 = $_GET['Kutless'];
	$table_data_band_5 = $_GET['Motion City Soundtrack'];
	$table_data_band_6 = $_GET['Haste the Day'];
	$table_data_band_7 = $_GET['Grits'];
	$table_data_band_8 = $_GET['Hawk Nelson'];
	$table_data_band_9 = $_GET['Red'];
	$table_data_band_10 = $_GET['Skillet'];
	$table_data_band_11 = $_GET['My Chemical Romance'];
	$table_data_band_12 = $_GET['Demon Hunter'];
	$table_data_band_13 = $_GET['Group One Crew'];
	$table_data_band_14 = $_GET['Bad Religion'];
	$table_data_band_15 = $_GET['Fall Out Boy'];
	$table_data_band_16 = $_GET['Foo Fighters'];
	$table_data_band_17 = $_GET['State Champs'];
	$table_data_band_18 = $_GET['For Today'];
	$table_data_band_19 = $_GET['Manafest'];
	$table_data_band_20 = $_GET['The Ramones'];
	$table_data_band_21 = $_GET['Seventh Day Slumber'];
	$table_data_band_22 = $_GET['Fighting Instinct'];
	$table_data_band_23 = $_GET['Newsboys'];
	$table_data_band_24 = $_GET['War of Ages'];
?>
<?php include 'Website About Me - Favorite Bands - header.php'; ?>
  <div class = "content">
    <p>Here Are My Favorite Bands</p>
    <p>My favorite bands are in a table</p>
    <div>
      <table>
				<tr>
					<th><? echo $table_header_genre_1; ?></th>
					<th><? echo $table_header_genre_2; ?></th>
					<th><? echo $table_header_genre_3; ?></th>
					<th><? echo $table_header_genre_4; ?></th>
					<th><? echo $table_header_genre_5; ?></th>
					<th><? echo $table_header_genre_6; ?></th>
				</tr>
				<tr>
					<td><?php $table_data_band_1; ?></td>
					<td><?php $table_data_band_2; ?></td>
					<td><?php $table_data_band_3; ?></td>
					<td><?php $table_data_band_4; ?></td>
					<td><?php $table_data_band_5; ?></td>
					<td><?php $table_data_band_6; ?></td>
				</tr>
				<tr>
					<td><?php $table_data_band_7; ?></td>
					<td><?php $table_data_band_8; ?></td>
					<td><?php $table_data_band_9; ?></td>
					<td><?php $table_data_band_10; ?></td>
					<td><?php $table_data_band_11; ?></td>
					<td><?php $table_data_band_12; ?></td>
				</tr>
				<tr>
					<td><?php $table_data_band_13; ?></td>
					<td><?php $table_data_band_14; ?></td>
					<td><?php $table_data_band_15; ?></td>
					<td><?php $table_data_band_16; ?></td>
					<td><?php $table_data_band_17; ?></td>
					<td><?php $table_data_band_18; ?></td>
				</tr>
				<tr>
					<td><?php $table_data_band_19; ?></td>
					<td><?php $table_data_band_20; ?></td>
					<td><?php $table_data_band_21; ?></td>
					<td><?php $table_data_band_22; ?></td>
					<td><?php $table_data_band_23; ?></td>
					<td><?php $table_data_band_24; ?></td>
				</tr>
			</table>
    </div>
  </div>
<?php include 'Website About Me - footer.php"; ?>
