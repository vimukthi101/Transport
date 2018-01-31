<?php
include_once('../../ssi/db.php');

if (isset($_POST['Submit'])) { 
	$epfNo = $_POST['epfno'];
	$name = $_POST['name'];
	$mobile = $_POST['mno'];
	$email = $_POST['email'];
	$bookingId = $_POST['vtype'];
	$remark = $_POST['reason'];
	$insert = "INSERT INTO feedback (epf_no,name,mobile_no,email,booking_number,remark) VALUES ('".$epfNo."','".$name."','".$mobile."','".$email."','".$bookingId."','".$remark."')";
	if (mysqli_query($con,$insert)) {
		$insertId = mysqli_insert_id($con);
		header ('Location:../feedback.php?addedId='.$insertId);
	} else {
		header ('Location:../feedback.php?message=2');
	}
} else { 
	header('Location:../feedback.php?message=3');
}
?>
