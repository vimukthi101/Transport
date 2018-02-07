<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
include_once('../ssi/db.php');
include_once('../ssi/includes-inside-2.php');
?>
<link rel="stylesheet" href="../CSS/bootstrap.min.css" />
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
	include_once('../ssi/navbar.php');
?>
<div class="header">
<h4><u>Vehicle Details</u></h4>
</div>
<div class="container-fluid" style="height:500px;">
<div class="col-md-12">
<?php
$get= "SELECT * FROM vehicle";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$vImage = $row['image'];
		$vName = $row['vehicle_name'];
		$vNo = $row['vehicle_no'];
		$fuel = $row['fuel_type'];
		$rs = $row['rs/km'];
		$type = $row['vehicle_type'];
		$insurer = $row['insurer_name'];
		$company = $row['company name'];
		$date = $row['insurance_date'];
		$exp = $row['expiry_date'];
		$driver = $row['driver_name'];
		$getDriver = "SELECT * FROM driver WHERE licence_no='".$driver."'";
		$resultDriver= mysqli_query($con, $getDriver);
		if(mysqli_num_rows($resultDriver)!=0){
			while($rowDriver= mysqli_fetch_array($resultDriver)){
				$dName = $rowDriver['frist_name'].' '.$rowDriver['last_name'];
			}
		} else {
			$dName = $driver;	
		}
		echo '<div class="col-md-3" style="border:#D22929 solid 2px;padding:10px;margin:10px;">
		<div align="center"><img src="data:image/jpeg;base64,'.base64_encode($vImage).'" style="height:150px;width:150px;"></img></div>
		<div>Vehicle Name : '.$vName.'</div>
		<div>Vehicle No : '.$vNo.'</div>
		<div>Fuel Type : '.$fuel.'</div>
		<div>RS/Km : '.$rs.'</div>
		<div>Vehicle Type : '.$type.'</div>
		<div>Insurer Name : '.$insurer.'</div>
		<div>Insurance Company : '.$company.'</div>
		<div>Insurance Date : '.$date.'</div>
		<div>Expiry Date : '.$exp.'</div>
		<div>Driver Name : '.$dName.'</div>
        </div>';	
	}
} else {
	echo "No complains to display.";	
}
?>	
    </div>
</div>
<div>
<?php
		include_once('../ssi/footer.php');
	?>
</div>
</body>
</html>