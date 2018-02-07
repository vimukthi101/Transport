<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
include_once('../ssi/db.php');
include_once('../ssi/includes-inside-2.php');
?>
<body>
<div>
<?php
	include_once('../ssi/navbar.php');
?>
</div>
<div>
<div class="header">View all approved staff transport details </div><br/>

<table width="100%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Destination</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Reason </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type</span></th>
  </tr>
<?php
$get= "SELECT * FROM staff_transport WHERE status='1'";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$epf = $row['epf_no'];
		$userName = $row['user_name'];
		$mobile = $row['mobile_no'];
		$email = $row['email'];
		$destination = $row['destination'];
		$reason = $row['reason'];
		$type = $row['vehicle_type'];
		$id = $row['id'];
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$destination.'</div></td>
					<td><div align="center">'.$reason.'</div></td>
					<td><div align="center">'.$type.'</div></td>
				</tr>';	
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
</div>
<div>
<div class="header">View all approved plant visit details </div><br/>

<table width="100%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Booking Date</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type</span></th>
  </tr>
<?php
$get= "SELECT * FROM booking WHERE status='1'";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$epf = $row['epf_no'];
		$userName = $row['user_name'];
		$mobile = $row['mobile_no'];
		$email = $row['email'];
		$date = $row['booking_date'];
		$duration = $row['duration'];
		$destination = $row['destination'];
		$reason = $row['reason'];
		$type = $row['vehicle_type'];
		$id = $row['id'];
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$date.'</div></td>
					<td><div align="center">'.$type.'</div></td>
				</tr>';	
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
</div>
<div>
<div class="header">View all approved goods/ sample details </div><br/>

<table width="100%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Booking Date</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Reason </span></th>
  </tr>
<?php
$get= "SELECT * FROM goods_delivery WHERE status='1'";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$epf = $row['epf_no'];
		$userName = $row['user_name'];
		$mobile = $row['mobile_no'];
		$email = $row['email'];
		$date = $row['booking_date'];
		$reason = $row['reason'];
		$id = $row['id'];
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$date.'</div></td>
					<td><div align="center">'.$reason.'</div></td>
				</tr>';	
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
</div>
</div>
<div>
<?php
		include_once('../ssi/footer.php');
	?>
</div>
</body>