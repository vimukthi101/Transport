<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../../ssi/db.php');
include_once('../../ssi/smtpSettings.php');
//errors will not be shown
error_reporting(0);
if(isset($_SESSION['email'])){
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['mobile']) & isset($_POST['vno'])){
	$id = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['id'])));
	$name = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['name'])));
	$mo= trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['mobile'])));
	$vno = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['vno'])));
	$email = $_SESSION['email'];
	$update = "UPDATE goods_delivery SET STATUS='3' WHERE id='".$id."'";
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
				$mail->Subject = "Booking Arranged";
$mail->Body = "Dear User,

Booking has been Arranged by ".$_SESSION['email']." on ".$time.".

Booking Date : ".$bookingDate."
Reason : ".$reason."
Driver Name : ".$name."
Mobile No : ".$mo."
Vehicle Number : ".$vno."

Thank You!";
				$mail->send();	
				header('Location:../viewAllbooking.php?error=1');	
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