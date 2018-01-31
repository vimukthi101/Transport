<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../ssi/db.php');
if(isset($_POST['id'])){
	$lNo = $_POST['id'];
	$get= "SELECT * FROM driver where licence_no='".$lNo."'";
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
			$note = $row['note'];
		}
	}
?>
	<table width="60%" border="0" align="center" cellpadding="5" cellspacing="2">
	  <form id="form" name="form" method="post" action="Controller/UpdateDriverController.php">
		<tr>
		  <th colspan="5" scope="col"><div class="header">Edit Drivers</div></th>
		</tr>
		<tr>
		  <td width="11%">&nbsp;</td>
		  <td width="29%">First Name </td>
		  <td width="2%">:</td>
		  <td width="38%"><label>
			<input name="Firstname" pattern="([a-z]|[A-Z])[a-z]+"  title="invalid First Name (eg:\'John\',\'doe\')" type="text" id="Firstname" required value="<?php echo $fName; ?>"/>
		  </label></td>
		  <td width="20%">&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>Last Name </td>
		  <td>:</td>
		  <td><label>
			 <input name="Lastname" pattern="([a-z]|[A-Z])[a-z]+"  title="invalid Last Name (eg:\'John\',\'doe\')" type="text" id="Lastname" required  value="<?php echo $lName; ?>"/>
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
		 <tr>
			<td>&nbsp;</td>
		  <td>Address</td>
		  <td>:</td>
		  <td><label>
			<input name="Address" pattern=".+" type="text" id="Address" required title="Invalid Address"  value="<?php echo $address; ?>"/>
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>Mobile No. </td>
		  <td>:</td>
		  <td><input name="Mobile" type="tel" id="Mobile" value="<?php echo $mNo; ?>"/></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>License No. </td>
		  <td>:</td>
		  <td><label>
			<input readonly name="LicenseNo" type="text" id="LicenseNo" required title="Invalid Licence No" pattern="\w+"  value="<?php echo $lNo; ?>"/>
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>Expiry Date </td>
		  <td>:</td>
		  <td>
			<input name="Expirydate" id="Expirydate" type="date"  value="<?php echo $eDate; ?>"/></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>Year of Experiacne </td>
		  <td>:</td>
		  <td>
			<input type="number" required name="Yearexperiecnce" id="Yearexperiecnce"  value="<?php echo $exp; ?>"/>
		  </td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>Note</td>
		  <td>:</td>
		  <td><label>
			<textarea name="Note" cols="30" rows="5" id="Note"  value="<?php echo $note; ?>"></textarea>
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td colspan="2"><label>
			<input name="Submit" type="submit" value="Driver Update" />
		  </label></td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
	</form>
	  </table>
<?php
} else {
	header('Location:../404.php');
}
?>