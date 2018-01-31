<?php
include_once('../../ssi/db.php');

if (isset($_POST['Submit'])) { 
	$vehiclename = $_POST['VehicleName'];
	$vehicleno = $_POST['VehicleNo'];
	$fueltype = $_POST['ftype'];
	$rs = $_POST['Rs'];
	$average = $_POST['Average'];
	$cost = $_POST['Cost'];
	$vehicletype = $_POST['vtype'];
	$insurername = $_POST['InsurerName'];
	$companyname = $_POST['CompanyName'];
	$insurancedate = $_POST['doi'];
	$expirydate = $_POST['doe'];
	$drivername = $_POST['driver'];
		$select = "SELECT * FROM `vehicle` WHERE vehicle_no = '".$vehicleno."'"; 
		$result = mysqli_query($con, $select);
		if (mysqli_num_rows($result)!=0){
			$insert = "UPDATE `vehicle` SET `vehicle_name`='".$vehiclename."', `fuel_type`='".$fueltype."', `rs/km`='".$rs."', `average`='".$average."', `cost`='".$cost."', `vehicle_type`='".$vehicletype."', `insurer_name`='".$insurername."', `company name`='".$companyname."', `insurance_date`='".$insurancedate."', `expiry_date`='".$expirydate."', `driver_name`='".$drivername."' WHERE `vehicle_no`='".$vehicleno."'";
			if (mysqli_query($con,$insert)) {
				header ('Location:../editVehicle.php?message=1');
			} else {
				header ('Location:../editVehicle.php?message=2');
			}
		} else {
			header ('Location:../editVehicle.php?message=5');
		}
} else { 
	header('Location:../editVehicle.php?message=4');
}

?>
