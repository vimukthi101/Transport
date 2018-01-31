<?php
include_once('../../ssi/db.php');

if (isset($_POST['Submit'])) { 
	$username = $_POST['Username'];
	$password= $_POST['Password'];
	$confirmpassword = $_POST['ConfirmPassword'];
	$designation = $_POST['designation'];
	$department = $_POST['department'];
	$epfno = $_POST['Epfno'];
	$mobile = $_POST['Mobile'];
	$email = $_POST['Email'];
	if ($password==$confirmpassword){
		$select = "SELECT * FROM hikh_tms.user WHERE Epfno = '".$epfno."' or name = '".$username."'";
		
		$result = mysqli_query($con, $select);
		
		if (mysqli_num_rows($result)==0){
			$insert = "INSERT INTO `hikh_tms`.`user` (`Epfno`, `name`, `password`, `designation`, `department`, `mobile_no`, `email`) VALUES ('".$epfno."', '".$username."', '".$password."', '".$designation."', '".$department."', '".$mobile."', '".$email."');";
		if (mysqli_query($con,$insert)) {
			header ('Location:../uEdit.php?message=1');
		} 
		else {
			header ('Location:../uEdit.php?message=2');
		}
			}
			else {
				header ('Location:../uEdit.php?message=5');
				}

		
		
	} else { 
		header('Location:../uEdit.php?message=3');
	}
} else { 
	header('Location:../uEdit.php?message=4');
}

?>

