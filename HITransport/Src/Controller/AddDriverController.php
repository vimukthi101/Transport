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
		if (mysqli_num_rows($result)==0){
			$insert = "INSERT INTO `hikh_tms`.`driver` (`frist_name`, `last_name`, `address`, `mobile_no`, `licence_no`, `expiry_date`,`experience`, `note`) VALUES ('".$fristname."', '".$lastname."', '".$address."', '".$mobile."', '".$licenceno."', '".$expirydate."', '".$yearexperiecnce."', '".$note."');";
			if (mysqli_query($con,$insert)) {
				header ('Location:../addDriver.php?message=1');
			} else {
				header ('Location:../addDriver.php?message=2');
			}
		} else {
			header ('Location:../addDriver.php?message=5');
		}
} else { 
	header('Location:../addDriver.php?message=4');
}

?>
