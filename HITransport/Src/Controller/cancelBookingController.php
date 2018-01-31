<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../../ssi/db.php');
//errors will not be shown
error_reporting(0);
if(isset($_SESSION['email'])){
	if(isset($_POST['id'])){
		$id = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['id'])));
		$delete = "delete from booking where id='".$id."'";
		if(mysqli_query($con, $delete)){
			header('Location:../cancelBooking.php');
		}
	} else {
		header('Location:../../404.php');	
	}
} else {
	header('Location:../../404.php');	
}
?>