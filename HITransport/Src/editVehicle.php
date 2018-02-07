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
<div style="height:500px;">
<div class="header">
<h4><u>Vehicle Details</u></h4>
</div>
<div>
            	<?php
				  if(isset($_GET['message'])){
					  $massege = $_GET['message'];
					  if ($massege=="1") {
						  echo 'User Successfuly Updated Vehicle';
					  }
					  else if ($massege=="2") {
						  echo 'Vehicle faild, TRY Again';
					  }
					
					  else if ($massege=="4") {
						  echo 'Submit the Form';
					  }
					  else if ($massege=="5") {
						  echo 'Vehicle Not Exsist';
					  }
				  }
				  ?>
</div>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
  <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Image </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle No. </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Fuel Type </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Rs / K.m. </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Insurer Name </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Company Name </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Date Of. Insurance</span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Date of Expiry</span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Driver Name</span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Update</span></th></tr>
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
		echo '<tr style="height:30px; padding:4px;">
				<td><div align="center"><img src="data:image/jpeg;base64,'.base64_encode($vImage).'" style="height:150px;width:150px;"></img></div></td>
				<td><div align="center">'.$vName.'</div></td>
				<td><div align="center">'.$vNo.'</div></td>
				<td><div align="center">'.$fuel.'</div></td>
				<td><div align="center">'.$rs.'</div></td>
				<td><div align="center">'.$type.'</div></td>
				<td><div align="center">'.$insurer.'</div></td>
				<td><div align="center">'.$company.'</div></td>
				<td><div align="center">'.$date.'</div></td>
				<td><div align="center">'.$exp.'</div></td>
				<td><div align="center">'.$driver.'</div></td>
				<form action="editVehicleView.php" method="post">
				<div align="center"><input hidden type="text" name="id" id="id" value="'.$vNo.'"/></div>
				<td><div align="center"><input type="submit" id="submit" value="Update"/></div></td>
				</form>
			</tr>';	
	}
} else {
	echo "No complains to display.";	
}
?>	
</table>
</div>
<div>
<?php
		include_once('../ssi/footer.php');
	?>
</div>
</body>