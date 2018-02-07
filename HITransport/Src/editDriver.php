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
<?php
echo '<div class="header">
Driver Details
</div>
<table width="100%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">Full Name</span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Address</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Mobile</span></th> 
	<th bgcolor="#D22929" scope="col"><span class="style10">Licence</span></th> 
	<th bgcolor="#D22929" scope="col"><span class="style10">Expiry Date</span></th>
	<th bgcolor="#D22929" scope="col"><span class="style10">Experiecne</span></th>
	<th bgcolor="#D22929" scope="col"><span class="style10">Update</span></th></tr>';
$get= "SELECT * FROM driver";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$fName = $row['frist_name'];
		$lName = $row['last_name'];
		$address = $row['address'];
		$mNo = $row['mobile_no'];
		$lNo = $row['licence_no'];
		$eDate = $row['expiry_date'];
		$exp = $row['experience'];
		echo '<tr style="height:30px; padding:2px;">
				<td><div align="center">'.$fName.' '.$lName.'</div></td>
				<td><div align="center">'.$address.'</div></td>
				<td><div align="center">'.$mNo.'</div></td>
				<td><div align="center">'.$lNo.'</div></td>
				<td><div align="center">'.$eDate.'</div></td>
				<td><div align="center">'.$exp.'</div></td>
				<form action="editDriverView.php" method="post">
				<div align="center"><input hidden type="text" name="id" id="id" value="'.$lNo.'"/></div>
				<td><div align="center"><input type="submit" id="submit" value="Update"/></div></td>
				</form>
			</tr>';	
	}
} else {
	echo 'no drivers to display';	
}
		  if(isset($_GET['message'])){
			  $massege = $_GET['message'];
			  if ($massege=="1") {
				  echo 'User Successfuly Updated Driver';
			  }
			  else if ($massege=="2") {
				  echo 'Driver faild, TRY Again';
			  }
			  else if ($massege=="4") {
				  echo 'Submit the Form';
			  }
			  else if ($massege=="5") {
				  echo 'User Not Exsist';
			  }
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