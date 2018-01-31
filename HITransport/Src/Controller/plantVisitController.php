<?php
include_once('../../ssi/db.php');
include_once('../../ssi/smtpsettings.php');
session_start();
if (isset($_POST['Submit'])) { 
	$epfNo = $_POST['epfno'];
	$uName = $_POST['name'];
	$mobileno = $_POST['mno']; 
	$email = $_POST['email'];
	$department = $_POST['department'];
	$bDate = $_POST['dateBook'];
	$pDate = $_POST['datePick'];
	$jtype = $_POST['jtype'];
	$passenger = $_POST['passenger'];
	$destination = $_POST['destination'];
	$reason = $_POST['reason'];
	$vehicletype = $_POST['vtype'];
	$approve = $_POST['designation'];
	$currentDate = strtotime(date('Y/m/d H:i'));
	$checkWith = strtotime(date('Y/m/d H:i', strtotime($bDate)));
	if(round(($checkWith - $currentDate) / (60 * 60)) > 6){
		$insert = "INSERT INTO `booking`(`epf_no`, `user_name`, `mobile_no`, `email`, `booking_date`, `destination`, `reason`, `vehicle_type`, `status`, `approved_by`, `department`, `jtype`, `passenger`, `pickup_date`) VALUES ('".$_SESSION['epfno']."', '".$_SESSION['name']."', '".$_SESSION['contactNo']."', '".$_SESSION['email']."', '".$bDate."', '".$destination."', '".$reason."', '".$vehicletype."', '0','".$approve."','".$department."', '".$jtype."', '".$passenger."', '".$pDate."');";
			if (mysqli_query($con,$insert)) {
				$id= mysqli_insert_id($con);
				$select = "SELECT * FROM `user` WHERE designation IN (SELECT name FROM designation WHERE ID='".$approve."') AND department='".$department."' ";
				$result = mysqli_query($con,$select);
				if(mysqli_num_rows($result)!=0){
					while($row= mysqli_fetch_array($result)){
						//sendemail
						$to = $row['email'];
						//Set who the message is to be sent to
						$mail->addAddress($to, $to);
						//Set the subject line
						$mail->Subject = "Approve the transport booking";
$mail->Body = "Dear HOD,

Following booking is pending approval,

Booked By

EPF no :".$epfNo."
User :".$uName."
Mobile :".$mobileno."
Email :".$email."

Booking Details

Booking Date :".date('Y/m/d h:i:sA', strtotime($bDate))."
Pickup Date :".date('Y/m/d h:i:sA', strtotime($pDate))."
Booking Type :".$btype."
Journey Type :".$jtype."
Passengers :".$passenger."
Duration :".$duration."
Destination :".$destination."
Reason :".$reason."
Vehicle type :".$vehicletype."

Approve : www.xxx.lk/Src/Controller/approvePlant.php?id=".$id."
Reject : www.xxx.lk/Src/Controller/rejectPlant.php?id=".$id."

Thank You!";
						$mail->send();
					}
				}
				header ('Location:../plantVisit.php?message=1');
			} else {
				header ('Location:../plantVisit.php?message=2');
			}	
	} else {
		header ('Location:../plantVisit.php?message=3');
	}
} else { 
	header('Location:../plantVisit.php?message=4');
}

?>
