<!DOCTYPE html><?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SKIT Attendence Calculator </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">SKIT Attendence Calculator</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV file of your attendance from ERP </legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-success button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table class="table table-bordered">
			<thead>
				  	<tr>
					  <th>srno</th>
                      <th>Subject Code</th>
                      <th>Subject</th>
                      <th>Subject Type</th>
                      <th>Present</th>
                      <th>OD</th>
                      <th>Absent</th>
                      <th>Percentage</th>
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM csvstudenttable ";
				$result_set =  mysqli_query($conn, $SQLSELECT);
				$tpresent=0;
		        $tabsent=0;
		        $tod=0;
				while($row = mysqli_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['Subject_Code']; ?></td>
						<td><?php echo $row['Subject']; ?></td>
						<td><?php echo $row['Subject_Type']; ?></td>
						<td><?php echo $row['Present']; ?></td>
						<td><?php echo $row['OD']; ?></td>
						<td><?php echo $row['Absent']; ?></td>
						<td><?php echo $row['Percentage']; ?></td>
					</tr>
					<?php
					$tod+=$row['OD'];
                    $tabsent+=$row['Absent'];
					$tpresent+=$row['Present'];
					?>
				<?php
				}
			?>
			<?php	
			 $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

			 if($pageWasRefreshed ) {
					$query = "TRUNCATE table csvstudenttable ";
				mysqli_query($conn,$query);
				}
				else {
					echo 3*$tabsent-$tpresent-$tod."hrs more to reach 75% of attendance";	
				  }
				?>
				
		</table>
	</div>

	</div>

	</body>
</div>


</body>
</html>