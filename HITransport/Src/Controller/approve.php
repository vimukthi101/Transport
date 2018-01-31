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
	$update = "UPDATE goods_delivery SET STATUS='1' WHERE id='".$id."'";
	if(mysqli_query($con, $update)){
		$time = date("Y-m-d H:i:s");
		//success sent mail
		$getUsers = "SELECT * FROM goods_delivery where id='".$id."'";
		$resultGetUsers = mysqli_query($con, $getUsers) or die();
		if(mysqli_num_rows($resultGetUsers)!=0){
			while($rowUsers = mysqli_fetch_array($resultGetUsers)){
				$user = $rowUsers['email'];
				$userName = $rowUsers['user_name'];
				$mNo = $rowUsers['mobile_no'];
				$bookingDate = $rowUsers['booking_date'];
				$reason = $rowUsers['reason'];
				//send email
				$to = $user;
				//Set who the message is to be sent to
				$mail->addAddress($to, $to);
				//Set the subject line
				$mail->Subject = "Booking Approved";
$mail->Body = "Dear User,

Booking has been approved by ".$_SESSION['email']." on ".$time.".

Thank You!";
				$mail->send();	
				header('Location:../ApproveReject.php?error=1');	
			}
		}
		
		//mail for transport department
		$getTransUsers = "SELECT * FROM user where designation='TRANSPORT_DEPARTMENT'";
		$resultGetTransUsers = mysqli_query($con, $getTransUsers) or die();
		if(mysqli_num_rows($resultGetTransUsers)!=0){
			while($rowTransUsers = mysqli_fetch_array($resultGetTransUsers)){
				$transUser = $rowTransUsers['email'];
				//send email
				$to = $transUser;
				//Set who the message is to be sent to
				$mail->addAddress($to, $to);
				//Set the subject line
				$mail->Subject = "Booking Approved";
$mail->Body = "Dear User,

Booking has been approved by ".$_SESSION['email']." on ".$time.". Following are the information,

Booked User : ".$userName."
Booking Date : ".$bookingDate."
Mobile no : ".$mNo."
Reason : ".$reason."

Thank You!";
				$mail->send();	
				header('Location:../ApproveReject.php?error=1');	
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