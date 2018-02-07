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
<h4><u>Driver Details</u></h4>
</div>
<div class="container-fluid" style="height:500px;">
<div class="col-md-12">
<?php
$get= "SELECT * FROM driver";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$vImage = $row['image'];
		$fName = $row['frist_name'];
		$lName = $row['last_name'];
		$address = $row['address'];
		$mNo = $row['mobile_no'];
		$lNo = $row['licence_no'];
		$eDate = $row['expiry_date'];
		$exp = $row['experience'];
		echo '<div class="col-md-3" style="border:#D22929 solid 2px;padding:10px;margin:10px;">
		<div align="center"><img src="data:image/jpeg;base64,'.base64_encode($vImage).'" style="height:150px;width:150px;"></img></div>
		<div>First Name : '.$fName.'</div>
		<div>Last Name : '.$lName.'</div>
		<div>Address : '.$address.'</div>
		<div>Mobile Number : '.$mNo.'</div>
		<div>License Number : '.$lNo.'</div>
		<div>Expiry Date : '.$eDate.'</div>
		<div>Experience : '.$exp.'</div>
        </div>';	
	}
} else {
	echo "No drivers to display.";	
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