<?php
	// get the data from the software
	$software_a = $_GET['Word'];
	$software_b = $_GET['Excel'];
	$software_c = $_GET['PowerPoint'];
	$software_d = $_GET['Access'];
	$software_1 = $_GET['Microsoft Office 2010'];
	$software_2 = $_GET['Microsoft Office 2013'];
	$software_3 = $_GET['Microsoft Office 2016'];
	$software_4 = $_GET['Notepad'];
	$software_5 = $_GET['Notepad++'];
	$software_6 = $_GET['Internet Explorer'];
	$software_7 = $_GET['Microsoft Edge'];
	$software_8 = $_GET['Mozilla Firefox'];
	$software_9 = $_GET['Google Chrome'];
	$software_10 = $_GET['Microsoft Visual Studio 2010 Profesional'];
	$software_11 = $_GET['Microsoft Visual Studio 2015 Community'];
	$software_12 = $_GET['Eclipse'];
	$software_13 = $_GET['Android Studio'];
	$software_14 = $_GET['WAMPServer'];
	// get the data from the developers
	$software_developer_1 = $_GET['Microsoft'];
	$software_developer_2 = $_GET['Don Ho'];
	$software_developer_3 = $_GET['Mozilla Foundation'];
	$software_developer_4 = $_GET['Mozilla Corporation'];
	$software_developer_5 = $_GET['Google Inc.'];
	$software_developer_6 = $_GET['Eclipse Foundation'];
	$software_developer_7 = $_GET['Romain Bourdon'];
	// get the data from the licenses
	$software_license_1 = $_GET['Trialware'];
	$software_license_2 = $_GET['None'];
	$software_license_3 = $_GET['GNU General Public License'];
	$software_license_4 = $_GET['Proprietary Software'];
	$software_license_5 = $_GET['MPL 2.0'];
	$software_license_6 = $_GET['Freeware'];
	$software_license_7 = $_GET['Fremium'];
	$software_license_8 = $_GET['Eclipse Public'];
	$software_license_9 = $_GET['Source Code'];
	$software_license_10 = $_GET['GNU GPL'];
	// get the data from the types
	$software_type_1 = $_GET['Office Suite'];
	$software_type_2 = $_GET['Text Editor'];
	$software_type_3 = $_GET['Source Code Editor'];
	$software_type_4 = $_GET['Web Browser'];
	$software_type_5 = $_GET['Feed Reader'];
	$software_type_6 = $_GET['Mobile Web Browser'];
	$software_type_7 = $_GET['Mobile Browser'];
	$software_type_8 = $_GET['Integrated Development Environment (IDE)'];
	$software_type_9 = $_GET['Programming Tool'];
	$software_type_10 = $_GET['Web Server Stack Package'];
?>
<?php include '../view/header/Website About Me - Software - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
		<p>Here are the computer software that I have used.</p>
		<div id="mySoftwareDivElement">
			<table>
				<tr>
					<th>Name</th>
					<th>Developer(s)</th>
					<th>Initial Release</th>
					<th>Type(s)</th>
					<th>License(s)</th>
					<th>Resource Number(s)</th>
				</tr>
				<tr>
					<tr><?php echo $software_1; ?> (<?php echo $software_a; ?>, <?php $software_b; ?>, <?php $software_c; ?>, <?php echo $software_d; ?>)</td>
					<td><?php echo $software_developer_1; ?></td>
					<td>June 15 2010</td>
					<td><?php echo $software_type_1; ?></td>
					<td><?php echo $software_license_1; ?></td>
					<td><a href="Website About Me - Resources.html">1</a></td>
				</tr>
				<tr>
					<td><?php echo $software_2; ?> (<?php echo $software_a; ?>, <?php $software_b; ?>, <?php $software_c; ?>)</td>
					<td><?php echo $software_developer_1; ?></td>
					<td>January 29, 2013</td>
					<td><td><?php echo $software_type_1; ?></td>
					<td><?php echo $software_license_1; ?></td>
					<td><a href="Website About Me - Resources.html">2</a></td>
				</tr>
				<tr>
					<td><?php echo $software_3; ?> (<?php echo $software_a; ?>, <?php $software_b; ?>, <?php $software_c; ?>)</td>
					<td><?php echo $software_developer_1; ?></td>
					<td>September 22, 2015</td>
					<td><td><?php echo $software_type_1; ?></td>
					<td><?php echo $software_license_1; ?></td>
					<td><a href="Website About Me - Resources.html">3</a></td>
				</tr>
				<tr>
					<td><?php echo $software_4; ?></td>
					<td><?php echo $software_developer_1; ?></td>
					<td>May 1, 1983</td>
					<td><?php echo $software_type_2; ?></td>
					<td><?php echo $software_license_2; ?></td>
					<td><a href="Website About Me - Resources.html">4</a></td>
				</tr>
				<tr>
					<td><?php echo $software_5; ?></td>
					<td><?php echo $software_developer_2; ?></td>
					<td>November 24, 2003</td>
					<td><?php echo $software_type_3; ?></td>
					<td><?php echo $software_license_3; ?></td>
					<td><a href="Website About Me - Resources.html">5</a></td>
				</tr>
				<tr>
					<td><?php echo $software_6; ?></td>
					<td><?php echo $software_developer_1; ?></td>
					<td>August 16, 1995</td>
					<td><?php echo $software_type_4; ?>, <?php echo $software_type_5; ?></td>
					<td><?php echo $software_license_4; ?>, requires a Windows license</td>
					<td><a href="Website About Me - Resources.html">6</a></td>
				</tr>
				<tr>
					<td><?php echo $software_7; ?></td>
					<td><?php echo $software_developer_1; ?></td>
					<td>July 29, 2015</td>
					<td><?php echo $software_type_4; ?>, <?php echo $software_type_5; ?></td>
					<td><?php echo $software_license_4; ?>, A Component of Windows 10</td>
					<td><a href="Website About Me - Resources.html">7</a></td>
				</tr>
				<tr>
					<td><?php echo $software_8; ?></td>
					<td><?php echo $software_developer_3; ?>, <?php $software_developer_4; ?></td>
					<td>September 23, 2002</td>
					<td><?php echo $software_type_4; ?>, <?php echo $software_type_5; ?>, <?php echo $software_type_6; ?></td>
					<td><?php echo $software_license_5; ?></td>
					<td><a href="Website About Me - Resources.html">8</a></td>
				</tr>
				<tr>
					<td><?php echo $software_9; ?></td>
					<td><?php echo $software_developer_5; ?></td>
					<td>September 2, 2008</td>
					<td><?php echo $software_type_4; ?>, <?php echo $software_type_7; ?></td>
					<td><?php echo $software_license_6; ?> Under Google Chrome Terms of Service</td>
					<td><a href="Website About Me - Resources.html">9</a></td>
				</tr>
				<tr>
					<td><?php echo $software_10; ?></td>
					<td><?php echo $software_developer_1; ?></td>
					<td>April 12, 2010</td>
					<td><?php echo $software_type_8; ?></td>
					<td><?php echo $software_license_7; ?></td>
					<td><a href="Website About Me - Resources.html">10</a></td>
				</tr>
				<tr>
					<td><?php echo $software_11; ?></td>
					<td><?php echo $software_developer_1; ?></td>
					<td>July 20, 2015</td>
					<td><?php echo $software_type_8; ?></td>
					<td><?php echo $software_license_7; ?></td>
					<td><a href="Website About Me - Resources.html">10</a></td>
				</tr>
				<tr>
					<td><?php echo $software_12; ?></td>
					<td><?php echo $software_developer_6; ?></td>
					<td>November 7, 2001</td>
					<td><?php echo $software_type_8; ?></td>
					<td><?php echo $software_license_8; ?></td>
					<td><a href="Website About Me - Resources.html">11</a></td>
				</tr>
				<tr>
					<td><?php echo $software_13; ?></td>
					<td><?php echo $software_developer_5; ?></td>
					<td>December 14, 2014</td>
					<td><?php echo $software_type_8; ?>, <?php echo $software_type_9; ?></td>
					<td><?php echo $software_license_6; ?>, <?php echo $software_license_9; ?></td>
					<td><a href="Website About Me - Resources.html">12</a></td>
				</tr>
				<tr>
					<td><?php echo $software_14; ?></td>
					<td><?php echo $software_developer_7; ?></td>
					<td>April 12, 2010</td>
					<td><?php echo $software_type_10; ?></td>
					<td><?php echo $software_license_10; ?></td>
					<td><a href="Website About Me - Resources.html">13</a>, <a href="Website About Me - Resources.html">14</a></td>
				</tr>
			</table>
		</div><!-- end mySoftwareDivElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
