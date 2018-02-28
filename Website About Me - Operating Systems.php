<?php
	// get the data from the operating systems
	$operating_system_1 = $_GET['Microsoft Windows 7'];
	$operating_system_2 = $_GET['Microsoft Windows 8'];
	$operating_system_3 = $_GET['Microsoft Windows 8.1'];
	$operating_system_4 = $_GET['Microsoft Windows 10'];
	$operating_system_5 = $_GET['Android'];
	// get the data from the operating system developers
	$operating_system_developer_1 = $_GET['Microsoft'];
	$operating_system_developer_2 = $_GET['Google'];
	$operating_system_developer_3 = $_GET['Open Handset'];
	$operating_system_developer_4 = $_GET['Open Handset Alliance'];
	// get the data from the operating system types
	$operating_system_kernel_type_1 = $_GET['Hybrid'];
	$operating_system_kernel_type_2 = $_GET['Windows NT'];
	$operating_system_kernel_type_3 = $_GET['Monolithic'];
	// get the data from the operating system source model
	$operating_system_source_model_1 = $_GET['Closed source'];
	$operating_system_source_model_2 = $_GET['Shared source'];
	$operating_system_source_model_3 = $_GET['None'];
	$operating_system_source_model_4 = $_GET['Windows Driver Framework'];
	$operating_system_source_model_5 = $_GET['Open source'];
	// get the data from the update method
	$operating_system_update_method_1 = $_GET['Windows Update'];
	$operating_system_update_method_2 = $_GET['Windows Store'];
	$operating_system_update_method_3 = $_GET['Windows Server Update Services'];
	$operating_system_update_method_4 = $_GET['None'];
?>
<?php include '../view/header/Website About Me - Operating Systems - header.php'; ?>
	<!-- the content section -->
	<div class = "content">
	<p>Here are the operating systems that I have used.</p>
		<div id = "myOperatingSystemsDivElement">
			<table>
				<tr>
					<th>Name</th>
					<th>Developer(s)</th>
					<th>Date of Release</th>
					<th>Date of Availablity</th>
					<th>Source Model(s)</th>
					<th>Kernel type</th>
					<th>Update Method(s)</th>
				</tr>
				<tr>
					<td><?php echo $operating_system_1; ?></td>
					<td><?php echo $operating_system_developer_1; ?></td>
					<td>July 22, 2009</td>
					<td>October 22, 2009</td>
					<td><?php echo $operating_system_source_model_1; ?> and <?php $operating_system_source_model_2; ?></td>
					<td><?php echo $operating_system_kernel_type_1; ?></td>
					<td><?php echo $operating_system_update_method_1; ?></td>
				</tr>
				<tr>
					<td><?php echo $operating_system_2; ?></td>
					<td><?php echo $operating_system_developer_1; ?></td>
					<td>August 1, 2012</td>
					<td>October 26, 2012</td>
					<td><?php echo $operating_system_source_model_1; ?> and <?php $operating_system_source_model_2; ?></td>
					<td><?php echo $operating_system_kernel_type_1; ?></td>
					<td><?php echo $operating_system_update_method_1; ?>, <?php echo $operating_system_update_2; ?>, <?php echo $operating_system_update_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $operating_system_3; ?></td>
					<td><?php echo $operating_system_developer_1; ?></td>
					<td>August 27, 2013</td>
					<td>October 17, 2013</td>
					<td><?php echo $operating_system_source_model_3; ?> </td>
					<td><?php echo $operating_system_kernel_type_1; ?> (<?php echo $operating_system_kernel_type_2?>)</td>
					<td><?php echo $operating_system_update_method_1; ?>, <?php echo $operating_system_update_2; ?>, <?php echo $operating_system_update_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $operating_system_4; ?></td>
					<td><?php echo $operating_system_developer_1; ?></td>
					<td>July 15, 2015</td>
					<td>July 29, 2015</td>
					<td><?php echo $operating_system_source_model_1; ?> and <?php $operating_system_source_model_2; ?> (<?php echo $operating_system_source_model_4; ?> is now <?php $operating_system_source_model_5)?>)</td>
					<td><?php echo $operating_system_kernel_type_1; ?> (<?php echo $operating_system_kernel_type_2?>)</td>
					<td><?php echo $operating_system_update_method_1; ?>, <?php echo $operating_system_update_2; ?>, <?php echo $operating_system_update_3; ?></td>
				</tr>
				<tr>
					<td><?php echo $operating_system_5; ?></td>
					<td><?php echo $operating_system_developer_2; ?>, <?php echo $operating_system_developer_3; ?>, <?php echo $operating_system_developer_4; ?></td>
					<td>September 23, 2008</td>
					<td>September 23, 2008</td>
					<td><?php echo $operating_system_source_model_5; ?> and and in most devices with proprietary components</td>
					<td><?php echo $operating_system_kernel_type_3; ?></td>
					<td><?php echo $operating_system_update_method_4; ?></td>
				</tr>
			</table>
		</div><!-- end myOperatingSystemsDivElement -->
	</div><!-- end content -->
<?php include '../view/Website About Me - footer.php'; ?>
