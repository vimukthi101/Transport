<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../ssi/db.php');
?>
<div>
<div class="header">View All Staff Booking Requests </div><br/>

<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    
    <th bgcolor="#D22929" scope="col"><span class="style10">Booking Number</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Duration </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Destination</span></th>
    <th bgcolor="#D22929" scope="col">Reason</th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type </span></th>
    <th bgcolor="#D22929" scope="col">Approve</th>
    <th bgcolor="#D22929" scope="col">Reject</th>
 
<?php
$get= "SELECT * FROM staff_transport WHERE status='0' AND department='".$_SESSION['department']."'";
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
		$approved_by = $row['approved_by'];
		$getPosition = "SELECT name FROM designation WHERE id='".$approved_by."'";
		$resultGet = mysqli_query($con, $getPosition);
		if(mysqli_num_rows($result)!=0){
			while($po = mysqli_fetch_array($resultGet)){
				$designation = $po['name'];
			}
		}
		if($designation==$_SESSION['position']){
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$date.'</div></td>
					<td><div align="center">'.$duration.'</div></td>
					<td><div align="center">'.$destination.'</div></td>
					<td><div align="center">'.$reason.'</div></td>
					<td><div align="center">'.$type.'</div></td>
					<td><div align="center"><a href="Controller/approveStaff.php?id='.$id.'">Approve</a></div></td>
					<td><div align="center"><a href="Controller/rejectStaff.php?id='.$id.'">Reject</a></div></td>
				</tr>';	
		} else {
			
		}
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
<div>
<div>
<div class="header">View All Plant Visit Requests </div><br/>

<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    
    <th bgcolor="#D22929" scope="col"><span class="style10">Booking Number</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Duration </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Destination</span></th>
    <th bgcolor="#D22929" scope="col">Reason</th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type </span></th>
    <th bgcolor="#D22929" scope="col">Approve</th>
    <th bgcolor="#D22929" scope="col">Reject</th>
 
<?php
$get= "SELECT * FROM booking WHERE status='0' AND department='".$_SESSION['department']."'";
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
		$approved_by = $row['approved_by'];
		$getPosition = "SELECT name FROM designation WHERE id='".$approved_by."'";
		$resultGet = mysqli_query($con, $getPosition);
		if(mysqli_num_rows($result)!=0){
			while($po = mysqli_fetch_array($resultGet)){
				$designation = $po['name'];
			}
		}
		if($designation==$_SESSION['position']){
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$date.'</div></td>
					<td><div align="center">'.$duration.'</div></td>
					<td><div align="center">'.$destination.'</div></td>
					<td><div align="center">'.$reason.'</div></td>
					<td><div align="center">'.$type.'</div></td>
					<td><div align="center"><a href="Controller/approvePlant.php?id='.$id.'">Approve</a></div></td>
					<td><div align="center"><a href="Controller/rejectPlant.php?id='.$id.'">Reject</a></div></td>
				</tr>';	
		} else {
			
		}
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
<div>
<div>
<div class="header">View All Goods/Sample Delivery Requests </div><br/>

<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    
    <th bgcolor="#D22929" scope="col"><span class="style10">Booking Number</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Duration </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Destination</span></th>
    <th bgcolor="#D22929" scope="col">Reason</th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type </span></th>
    <th bgcolor="#D22929" scope="col">Approve</th>
    <th bgcolor="#D22929" scope="col">Reject</th>
 
<?php
$get= "SELECT * FROM goods_delivery WHERE status='0' AND dapartment='".$_SESSION['department']."'";
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
		$approved_by = $row['approved_by'];
		$getPosition = "SELECT name FROM designation WHERE id='".$approved_by."'";
		$resultGet = mysqli_query($con, $getPosition);
		if(mysqli_num_rows($result)!=0){
			while($po = mysqli_fetch_array($resultGet)){
				$designation = $po['name'];
			}
		}
		if($designation==$_SESSION['position']){
			echo '<tr style="height:30px; padding:4px;">
					<td><div align="center">'.$epf.'</div></td>
					<td><div align="center">'.$userName.'</div></td>
					<td><div align="center">'.$mobile.'</div></td>
					<td><div align="center">'.$email.'</div></td>
					<td><div align="center">'.$date.'</div></td>
					<td><div align="center">'.$duration.'</div></td>
					<td><div align="center">'.$destination.'</div></td>
					<td><div align="center">'.$reason.'</div></td>
					<td><div align="center">'.$type.'</div></td>
					<td><div align="center"><a href="Controller/approve.php?id='.$id.'">Approve</a></div></td>
					<td><div align="center"><a href="Controller/reject.php?id='.$id.'">Reject</a></div></td>
				</tr>';	
		} else {
			
		}
	}
} else {
	echo "No pending approval details to display.";	
}

?>	
</table>
<div>
<?php
  if(isset($_GET['error'])){
	  $massege = $_GET['error'];
	  if ($massege=="1") {
		  echo 'Successfully approved.';
	  }
	  else if ($massege=="2") {
		  echo 'Successfully rejeted.';
	  }
  }
?>
