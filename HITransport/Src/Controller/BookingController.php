<?php
include_once('../../ssi/db.php');
include_once('../../ssi/smtpsettings.php');
session_start();
if (isset($_POST['Submit'])) { 
	$epfNo = $_POST['epfno'];
	$uName = $_POST['name'];
	$mobileno = $_POST['mno']; 
	$email = $_POST['email'];
	$bepfNo = $_POST['bepfno'];
	$buName = $_POST['bname'];
	$bmobileno = $_POST['bmno']; 
	$bdepartment = $_POST['bdepartment'];
	$destination = $_POST['destination'];
	$reason = $_POST['reason'];
	$vehicletype = $_POST['vtype'];
	$approve = $_POST['designation'];
	$department = $_POST['department'];
	$jtype = $_POST['jtype'];
	$passenger = $_POST['passenger'];
			$insert = "INSERT INTO `staff_transport`(`epf_no`, `user_name`, `mobile_no`, `email`, `department`, `j_type`, `passengers`, `destination`, `reason`, `vehicle_type`, `approved_by`, `b_epf`, `b_name`, `b_mobile`, `b_department`) VALUES ('".$_SESSION['epfno']."', '".$_SESSION['name']."', '".$_SESSION['contactNo']."', '".$_SESSION['email']."', '".$department."', '".$jtype."', '".$passenger."', '".$destination."', '".$reason."','".$vehicletype."','".$approve."', '".$bepfNo."', '".$buName."', '".$bmobileno."', '".$bdepartment."');";
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

Requested By

EPF no :".$bepfNo."
User :".$buName."
Mobile :".$bmobileno."
Department :".$bdepartment."

Booking Details

Booking Date :".date('Y/m/d h:i:sA', strtotime($bookingdate))."
Booking Type :".$btype."
Journey Type :".$jtype."
Passengers :".$passenger."
Duration :".$duration."
Destination :".$destination."
Reason :".$reason."
Vehicle type :".$vehicletype."

Approve : www.xxx.lk/Src/Controller/approveStaff.php?id=".$id."
Reject : www.xxx.lk/Src/Controller/rejectStaff.php?id=".$id."

Thank You!";
						$mail->send();
					}
				}
				header ('Location:../booking.php?message=1');
			} else {
				header ('Location:../booking.php?message=2');
			}
} else { 
	header('Location:../booking.php?message=4');
}

?>
