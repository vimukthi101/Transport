<?php
$host = 'localhost';
$db = 'hikh_tms';
$user = 'root';
$password = '';

//no errors will be shown
error_reporting(0);

//db connection creation
$con = mysqli_connect($host, $user, $password, $db);
if(!$con){
	header('Location:../404.php');
}
?>