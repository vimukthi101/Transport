<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
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
?>
<div class="w3-main">
	<div class="about-bottom">
		<div class="w3l_about_bottom_right two">
			<h2 class="tittle" style="background-color:#00F;"><img src="images/cab.png" alt=""><span>Add Vehicles</span></h2>
            <div class="book-form" style="color:#F00;">
            	<?php
				  if(isset($_GET['message'])){
					  $massege = $_GET['message'];
					  if ($massege=="1") {
						  echo 'User Successfuly Added Vehicle';
					  }
					  else if ($massege=="2") {
						  echo 'Vehicle faild, TRY Again';
					  }
					
					  else if ($massege=="4") {
						  echo 'Submit the Form';
					  }
					  else if ($massege=="5") {
						  echo 'Vehicle Already Exsist';
					  }
				  }
				  ?>
            </div>
			<div class="book-form">
  				<form id="form1" name="form1" method="post" action="Controller/addVehicleController.php" enctype="multipart/form-data">
    				<div class="form-date-w3-agileits">
                          <div class="form-agileits"><label>Vehicle Name :</label></div>
                          <div class="form-agileits-2">
                            <input name="VehicleName" type="text" id="VehicleName" required />
                          </div>
                          <div class="clear"></div>
					</div>
					<div class="form-date-w3-agileits second-agile">
						<div class="form-agileits"><label>Vehicle No. :</label></div>
						<div class="form-agileits-2">
                            <input name="VehicleNo" type="text" title="invalid Vehicle No (eg:'CABxxxx','NA-XXXX')" id="VehicleNo" required />
                        </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Fuel Type :</label></div>
						<div class="form-agileits-2">
                            <select name="ftype" id="ftype" required="required" >
                                <option value="Pertol">&nbsp;Pertol&nbsp;</option>
                                <option value="Diesel">&nbsp;Diesel&nbsp;</option>
                                <option value="Gas">&nbsp;Gas&nbsp;</option>
                                <option value="Hybrid">&nbsp;Hybrid&nbsp;</option>
                                <option value="Electricity">&nbsp;Electricity&nbsp;</option>
                            </select>
                         </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Rs / K.m. :</label></div>
						<div class="form-agileits-2">
							  <input name="Rs" type="number" id="Rs" size="10" required />
      					</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Average :</label></div>
						<div class="form-agileits-2">
							 <input name="Average" type="number" id="Average" required />
      					</div>	
						<div class="clear"> </div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Cost :</label></div>
						<div class="form-agileits-2">
      						<input name="Cost" type="number" id="Cost" size="10" required />
                        </div>	
						<div class="clear"></div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Image :</label></div>
						<div class="form-agileits-2">
                        	<input name="Image" type="file" id="Image" required accept="image/*"/> 
                        </div>
                        <div class="clear"></div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Vehicle Type :</label></div>
						<div class="form-agileits-2">
                            	<select name="vtype" id="vtype" required="required" >
                                    <option value="Luxury Cars">&nbsp;Luxury Cars</option>
                                    <option value="Executive Cars">&nbsp;Executive Cars </option>
                                    <option value="Economy Cars">&nbsp;Economy Cars</option>
                                   <option value="Luxury Vans">&nbsp;Luxury Vans</option>
                                    <option value="Executive Vans">&nbsp;Executive Vans </option>
                                    <option value="Economy Vans">&nbsp;Economy Vans</option>
                                </select>
                         </div>
						<div class="clear"> </div>
					</div>
                    <h2 class="tittle" style="background-color:#00F;"><img src="images/cab.png" alt=""><span>Insurance Details</span></h2>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Insurer Name :</label></div>
						<div class="form-agileits-2">
                        	<input name="InsurerName" type="text" id="InsurerName" required />
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Company Name :</label></div>
						<div class="form-agileits-2">
                        	<input name="CompanyName" type="text" id="CompanyName" required /> 
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Date Of. Insurance :</label></div>
						<div class="form-agileits-2">
                        	<input name="doi" type="date" id="doi" required />
                        </div>
                        <div class="clear"></div>						
					</div>
                    <div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Date of Expiry : </label></div>
						<div class="form-agileits-2">
                        	<input type="date" name="doe" id="doe" required />
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
									  echo '<option value="'.$licenseNo.'">'.$fName.' '.$lName.'</option>';
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
                        <input type="reset" name="reset" class="btn btn-clear" value="Reset"/>
                        <input name="Submit" type="submit" class="btn btn-success" style="background-color:#00F;" value="Add Vehicle" />
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