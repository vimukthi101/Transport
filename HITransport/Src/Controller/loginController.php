<?php
include_once('../../ssi/db.php');
session_start();	
if (isset($_POST['Submit'])) { 
	$uName = $_POST['uName'];
	$pwd = $_POST['password'];
		$select = "SELECT * FROM `user` WHERE name = '".$uName."' AND password='".$pwd."'"; 
		$result = mysqli_query($con, $select);
		if (mysqli_num_rows($result)==1){
			while($row = mysqli_fetch_array($result)){
				$name = $row['name'];
				$contactNo = $row['mobile_no'];
				$epfNo = $row['Epfno'];
				$email = $row['email'];
				$position = $row['designation'];
				$department = $row['department'];
				$_SESSION['name'] = $name;
				$_SESSION['contactNo'] = $contactNo;
				$_SESSION['epfno'] = $epfNo;
				$_SESSION['email'] = $email;
				$_SESSION['position'] = $position;
				$_SESSION['department'] = $department;
			}
			header ('Location:../index.php');
		} else {
			header ('Location:../login.php?message=1');
		}
} else { 
	header('Location:../login.php?message=2');
}
?>
