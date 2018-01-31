<?php
include_once('../../ssi/db.php');

if (isset($_POST['Submit'])) { 
	$fristname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$address = $_POST['Address'];
	$licenceno = $_POST['LicenseNo'];
	$expirydate = $_POST['Expirydate'];
	$yearexperiecnce = $_POST['Yearexperiecnce'];
	$mobile = $_POST['Mobile'];
	$note = $_POST['Note'];
		$select = "SELECT * FROM `driver` WHERE licence_no ='".$licenceno."' ";
		$result = mysqli_query($con, $select);
		if (mysqli_num_rows($result)!=0){
			$insert = "UPDATE `hikh_tms`.`driver` SET `frist_name`='".$fristname."', `last_name`='".$lastname."', `address`='".$address."', `mobile_no`='".$mobile."', `expiry_date`='".$expirydate."',`experience`='".$yearexperiecnce."', `note`='".$note."' WHERE `licence_no`='".$licenceno."';";
			if (mysqli_query($con,$insert)) {
				header ('Location:../editDriver.php?message=1');
			} else {
				header ('Location:../editDriver.php?message=2');
			}
		} else {
			header ('Location:../editDriver.php?message=5');
		}
} else { 
	header('Location:../editDriver.php?message=4');
}

?>
