<?php
include_once('../../ssi/db.php');
include_once('../../ssi/smtpsettings.php');
session_start();
if (isset($_POST['Submit'])) { 
	$epfNo = $_POST['epfno'];
	$uName = $_POST['name'];
	$mobileno = $_POST['mno']; 
	$email = $_POST['email'];
	$bookingdate = $_POST['dateBook'];
	$reason = $_POST['reason'];
	$approve = $_POST['designation'];
	$department = $_POST['department'];
	$contactPerson = $_POST['cperson'];
	$cpersonNo = $_POST['cpersonno'];
	$ponumber = $_POST['pono'];
	$caddress = $_POST['caddress'];
	$gdeatils = $_POST['gdetail'];
	$currentDate = date('Y/m/d');
	$currentTime = date('H:i');
	$checkWithDate = date('Y/m/d', strtotime($bookingdate));
	$checkWithTime = date('H:i', strtotime($bookingdate));
	if($checkWithTime == "08:30" | $checkWithTime == "11:30" | $checkWithTime == "14:30"){
		if($currentDate == $checkWithDate){
			if(((strtotime($checkWithTime) - strtotime($currentTime)) / 60) > 30){
				$status = 1;
			} else {
				//can proceed
				$status = 0;
				header('Location:../goodsDelivery.php?message=3');
			}
		} else {
			//can proceed
			$status = 1;
		}	
	} else {
		//should be 8.30 11.30 or 2.30
		$status = 0;
		header('Location:../goodsDelivery.php?message=5');
	}
	if($status == 1){
		$insert = "INSERT INTO `goods_delivery`(`user_name`, `epf_no`, `mobile_no`, `email`, `booking_date`, `pickup_address`, `dapartment`, `contact_person`, `contact_person_mobile`, `po_number`, `goods_detaill`,`reason`,`approved_by`) VALUES ('".$_SESSION['name']."', '".$_SESSION['epfno']."', '".$_SESSION['contactNo']."', '".$_SESSION['email']."', '".$bookingdate."', '".$caddress."', '".$department."', '".$contactPerson."', '".$cpersonNo."', '".$ponumber."','".$gdeatils."','".$reason."','".$approve."')";
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

Requested By

EPF no :".$epfNo."
User :".$uName."
Mobile :".$mobileno."
Email :".$email."

Delivery Details

Contact Person: ".$contactPerson."
Contact Person Number :	".$cpersonNo."
PO Number : ".$ponumber."
Pickup Address : ".$caddress."
Goods Detail : ".$gdeatils."

Booking Details

Booking Date :".date('Y/m/d h:i:sA', strtotime($bookingdate))."
Reason :".$reason."

Approve : www.xxx.lk/Src/Controller/approve.php?id=".$id."
Reject : www.xxx.lk/Src/Controller/reject.php?id=".$id."

Thank You!";
						$mail->send();
					}
				}
				header ('Location:../goodsDelivery.php?message=1');
			} else {
				header ('Location:../goodsDelivery.php?message=2');
			}	
	}
} else { 
	header('Location:../goodsDelivery.php?message=4');
}

?>
