<?php
$host ="localhost";
$user = "root";
$password= "";
$database = "tms_db";

$con = mysqli_connect($host,$user,$password,$database);
if(!$con){
	echo "fail";
}



?>