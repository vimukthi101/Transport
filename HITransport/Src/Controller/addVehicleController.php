<?php
include_once('../../ssi/db.php');

if (isset($_POST['Submit'])) { 
	$vehiclename = $_POST['VehicleName'];
	$vehicleno = $_POST['VehicleNo'];
	$fueltype = $_POST['ftype'];
	$rs = $_POST['Rs'];
	$average = $_POST['Average'];
	$cost = $_POST['Cost'];
	$image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
	$vehicletype = $_POST['vtype'];
	$insurername = $_POST['InsurerName'];
	$companyname = $_POST['CompanyName'];
	$insurancedate = $_POST['doi'];
	$expirydate = $_POST['doe'];
	$drivername = $_POST['driver'];
		$select = "SELECT * FROM `vehicle` WHERE vehicle_no = '".$vehicleno."'"; 
		$result = mysqli_query($con, $select);
		if (mysqli_num_rows($result)==0){
			$insert = "INSERT INTO `vehicle`(`vehicle_name`, `vehicle_no`, `fuel_type`, `rs/km`, `average`, `cost`, `image`, `vehicle_type`, `insurer_name`, `company name`, `insurance_date`, `expiry_date`, `driver_name`) VALUES ('".$vehiclename."', '".$vehicleno."', '".$fueltype."', '".$rs."', '".$average."', '".$cost."', '".$image."', '".$vehicletype."', '".$insurername."', '".$companyname."', '".$insurancedate."', '".$expirydate."', '".$drivername."');";
			if (mysqli_query($con,$insert)) {
				header ('Location:../addVehicle.php?message=1');
			} else {
				header ('Location:../addVehicle.php?message=2');
			}
		} else {
			header ('Location:../addVehicle.php?message=5');
		}
} else { 
	header('Location:../addVehicle.php?message=4');
}

?>
