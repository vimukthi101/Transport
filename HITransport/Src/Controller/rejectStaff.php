<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../../ssi/db.php');
include_once('../../ssi/smtpSettings.php');
//errors will not be shown
error_reporting(0);
if(isset($_SESSION['email'])){
if(isset($_GET['id'])){
	$id = trim(htmlspecialchars(mysqli_real_escape_string($con,$_GET['id'])));
	$email = $_SESSION['email'];
	$update = "UPDATE staff_transport SET STATUS='2' WHERE id='".$id."'";
	if(mysqli_query($con, $update)){
		//success sent mail
		$time = date("Y-m-d H:i:s");
		$getUsers = "SELECT * FROM staff_transport where id='".$id."'";
		$resultGetUsers = mysqli_query($con, $getUsers) or die();
		if(mysqli_num_rows($resultGetUsers)!=0){
			while($rowUsers = mysqli_fetch_array($resultGetUsers)){
				$user = $rowUsers['email'];
				//send email
				$to = $user;
				//Set who the message is to be sent to
				$mail->addAddress($to, $to);
				//Set the subject line
				$mail->Subject = "Booking Rejected";
$mail->Body = "Dear User,

Booking has been rejected by ".$_SESSION['email']." on ".$time.".

Thank You!";
				$mail->send();	
				header('Location:../ApproveReject.php?error=2');	
			}
		}
	}
} else {
	header('Location:../../404.php');	
}
} else {
	header('Location:../../404.php');	
}
?>