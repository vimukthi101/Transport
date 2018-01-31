<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
if(isset($_POST['id'])){
	$id= $_POST['id'];
?>
<html lang="en" style="" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<?php
	include_once('../ssi/includes-inside.php');
	include_once('../ssi/db.php');
?>
</head>
<body>
<div>
<?php
	include_once('../ssi/navbar.php');
	$get= "SELECT * FROM vehicle WHERE vehicle_no='".$id."'";
	$result= mysqli_query($con, $get);
	if(mysqli_num_rows($result)!=0){
		while($row= mysqli_fetch_array($result)){
			$vImage = $row['image'];
			$vName = $row['vehicle_name'];
			$vNo = $row['vehicle_no'];
			$fuel = $row['fuel_type'];
			$rs = $row['rs/km'];
			$avg = $row['average'];
			$cost = $row['cost'];
			$type = $row['vehicle_type'];
			$insurer = $row['insurer_name'];
			$company = $row['company name'];
			$date = $row['insurance_date'];
			$exp = $row['expiry_date'];
			$driver = $row['driver_name'];
		}
	}
?>
<div class="w3-main">
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle" style="background-color:#00F;"><img src="images/cab.png" alt=""><span>Add Vehicles</span></h2>
            <div class="book-form" style="color:#F00;">
            </div>
			<div class="book-form">
  				<form id="form1" name="form1" method="post" action="Controller/editVehicleController.php" enctype="multipart/form-data">
    				<div class="form-date-w3-agileits">
                          <div class="form-agileits"><label>Vehicle Name :</label></div>
                          <div class="form-agileits-2">
                            <input name="VehicleName" type="text" id="VehicleName" required value="<?php echo $vName; ?>"/>
                          </div>
                          <div class="clear"></div>
					</div>
					<div class="form-date-w3-agileits second-agile">
						<div class="form-agileits"><label>Vehicle No. :</label></div>
						<div class="form-agileits-2">
                            <input name="VehicleNo" type="text" title="invalid Vehicle No (eg:'CABxxxx','NA-XXXX')" id="VehicleNo" required value="<?php echo $vNo; ?>" readonly/>
                        </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Fuel Type :</label></div>
						<div class="form-agileits-2">
                            <select name="ftype" id="ftype" required="required" >
                            	<?php if($fuel=="Pertol"){
									echo'<option value="Pertol" selected>&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel">&nbsp;Diesel&nbsp;</option>
                                <option value="Gas">&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid">&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity">&nbsp;Electricity&nbsp;</option>';
								} else if($fuel=="Diesel"){
									echo'<option value="Pertol" >&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel" selected>&nbsp;Diesel&nbsp;</option>
                                <option value="Gas">&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid">&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity">&nbsp;Electricity&nbsp;</option>';
									} else if($fuel=="Gas"){
									echo'<option value="Pertol" >&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel" >&nbsp;Diesel&nbsp;</option>
                                <option value="Gas" selected>&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid">&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity">&nbsp;Electricity&nbsp;</option>';
									} else if($fuel=="Hybrid"){
									echo'<option value="Pertol" >&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel" >&nbsp;Diesel&nbsp;</option>
                                <option value="Gas">&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid" selected>&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity">&nbsp;Electricity&nbsp;</option>';
									} else if($fuel=="Electricity"){
									echo'<option value="Pertol" >&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel" >&nbsp;Diesel&nbsp;</option>
                                <option value="Gas">&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid">&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity" selected>&nbsp;Electricity&nbsp;</option>';
									}?>
                            </select>
                         </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Rs / K.m. :</label></div>
						<div class="form-agileits-2">
							  <input name="Rs" type="number" id="Rs" size="10" required value="<?php echo $rs; ?>"/>
      					</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Average :</label></div>
						<div class="form-agileits-2">
							 <input name="Average" type="number" id="Average" required value="<?php echo $avg; ?>"/>
      					</div>	
						<div class="clear"> </div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Cost :</label></div>
						<div class="form-agileits-2">
      						<input name="Cost" type="number" id="Cost" size="10" required value="<?php echo $cost; ?>"/>
                        </div>	
						<div class="clear"></div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Vehicle Type :</label></div>
						<div class="form-agileits-2">
                            	<select name="vtype" id="vtype" required="required" >
                                <?php if($type=="Luxury Cars"){
									echo '<option value="Luxury Cars" selected>&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>';
								} else if($type=="Executive Cars"){
									echo '<option value="Luxury Cars" >&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars" selected>&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>';
								} else if($type=="Economy Cars"){
									echo '<option value="Luxury Cars" >&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars" selected>&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>';
								} else if($type=="Luxury Vans"){
									echo '<option value="Luxury Cars" >&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans" selected>&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>';
								} else if($type=="Executive Vans"){
									echo '<option value="Luxury Cars" >&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans" selected>&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>';
								} else if($type=="Economy Vans"){
									echo '<option value="Luxury Cars" >&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans" selected>&nbsp;Economy Vans</option>';
								} 
								?>
                                </select>
                         </div>
						<div class="clear"> </div>
					</div>
                    <h2 class="tittle" style="background-color:#00F;"><img src="images/cab.png" alt=""><span>Insurance Details</span></h2>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Insurer Name :</label></div>
						<div class="form-agileits-2">
                        	<input name="InsurerName" type="text" id="InsurerName" required value="<?php echo $insurer; ?>"/>
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Company Name :</label></div>
						<div class="form-agileits-2">
                        	<input name="CompanyName" type="text" id="CompanyName" required  value="<?php echo $company; ?>"/> 
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Date Of. Insurance :</label></div>
						<div class="form-agileits-2">
                        	<input name="doi" type="date" id="doi" required value="<?php echo $date; ?>"/>
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Date of Expiry : </label></div>
						<div class="form-agileits-2">
                        	<input type="date" name="doe" id="doe" required value="<?php echo $exp; ?>"/>
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Driver Name :</label></div>
						<div class="form-agileits-2">
                        	<?php
							  echo '<select required="required" name="driver" id="driver">';
							  $getDepartment = "SELECT licence_no,frist_name,last_name FROM driver";
							  $resultDepartment = mysqli_query($con,$getDepartment);
							  if(mysqli_num_rows($resultDepartment)!=0){
								  //data
								  while($rowDepartment = mysqli_fetch_array($resultDepartment)){
									  $licenseNo = $rowDepartment['licence_no'];
									  $fName = $rowDepartment['frist_name'];
									  $lName = $rowDepartment['last_name'];
									  if($driver == $licenseNo){
											echo '<option value="'.$licenseNo.'" selected>'.$fName.' '.$lName.'</option>';  
									  } else {
										  echo '<option value="'.$licenseNo.'">'.$fName.' '.$lName.'</option>';
									  }
								  }
							  } else {
								  //no data
								  echo '<option disabled="disabled">No Data To Show</option>';
							  }
							  echo '</select>';
							 ?>
                        </div>
                        <div class="clear"></div>						
					</div>
					<div class="make">
                        <input name="Submit" type="submit" class="btn btn-success" style="background-color:#00F;" value="Update Vehicle" />
                        <div class="clear"> </div>
                  </div>
			</form>
		</div>
	</div>
	</div>
</div>
</div>
  <?php
		include_once('../ssi/footer.php');
	?>
</body>
</html>
<?php
} else {
	header('Location:../404.php');	
}
?>