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
			<h2 class="tittle" style="background-color:#00F;"><img src="images/cab.png" alt=""><span>Add Users</span></h2>
            <div class="book-form" style="color:#F00;">
            	<?php
                  if(isset($_GET['message'])){
                      $massege = $_GET['message'];
                      if ($massege=="1") {
                          echo 'User Successfuly Added';
                      }
                      else if ($massege=="2") {
                          echo 'User faild, TRY Again';
                      }
                      else if ($massege=="3") {
                          echo 'Confirm Password Not Match';
                      }
                      else if ($massege=="4") {
                          echo 'Submit the Form';
                      }
                      else if ($massege=="5") {
                          echo 'User Already Exsist';
                      }
                  }
                  ?>
            </div>
			<div class="book-form">
  				<form id="form1" name="form1" method="post" action="Controller/AddUserController.php">
    				<div class="form-date-w3-agileits">
                          <div class="form-agileits"><label>User Name :</label></div>
                          <div class="form-agileits-2">
                            <input name="Username" pattern="^[a-zA-Z]{1}[a-z]+[.][a-zA-Z]{1}[a-z]+$" title="invalid User name (eg:'John.Doe','john.doe')" type="text" id="Username" required="required" />
                          </div>
                          <div class="clear"></div>
					</div>
					<div class="form-date-w3-agileits second-agile">
						<div class="form-agileits"><label>Password</label></div>
						<div class="form-agileits-2">
                            <input name="Password" type="password" id="Password" value="" required="required" />
                        </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Confirm Password</label></div>
						<div class="form-agileits-2">
                            <input name="ConfirmPassword" type="password" id="ConfirmPassword" value="" required="required"/>
                         </div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label> Designation</label></div>
						<div class="form-agileits-2">
							  <?php
                              echo '<select required="required" name="designation" id="designation">';
                              $getDesignation = "SELECT * FROM designation";
                              $resultDesignation = mysqli_query($con,$getDesignation);
                              if(mysqli_num_rows($resultDesignation)!=0){
                                  //data
                                  while($rowDesigantion = mysqli_fetch_array($resultDesignation)){
                                      $designationId = $rowDesigantion['id'];
                                      $designation = $rowDesigantion['name'];
                                      echo '<option value="'.$designation.'">'.$designation.'</option>';
                                  }
                              } else {
                                  //no data
                                  echo '<option disabled="disabled">No Data To Show</option>';
                              }
                              echo '</select>';
                              ?>
      					</div>
						<div class="clear"> </div>
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Department</label></div>
						<div class="form-agileits-2">
							 <?php
								  echo '<select required="required" name="department" id="department">';
								  $getDepartment = "SELECT * FROM department";
								  $resultDepartment = mysqli_query($con,$getDepartment);
								  if(mysqli_num_rows($resultDepartment)!=0){
									  //data
									  while($rowDepartment = mysqli_fetch_array($resultDepartment)){
										  $departmentId = $rowDepartment['id'];
										  $department = $rowDepartment['department_name'];
										  echo '<option value="'.$department.'">'.$department.'</option>';
									  }
								  } else {
									  //no data
									  echo '<option disabled="disabled">No Data To Show</option>';
								  }
								  echo '</select>';
                          	?>
      					</div>	
						<div class="clear"> </div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>EPF No :</label></div>
						<div class="form-agileits-2">
      						<input name="Epfno" type="number" id="EpfNo"  value="" required="required"/>
                        </div>	
						<div class="clear"></div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Mobile No. </label></div>
						<div class="form-agileits-2">
                        	<input name="Mobile" type="tel" id="Mobile" value="" />
                        </div>
                        <div class="clear"></div>						
					</div>
					<div class="form-date-w3-agileits">
						<div class="form-agileits"><label>Email</label></div>
						<div class="form-agileits-2">
                            	<input name="Email" type="email" id="Email" value="" required="required" />
                         </div>
						<div class="clear"> </div>
					</div>
					<div class="make">
                         <input type="reset" class="btn btn-clear" name="Submit2" value="Reset" />
                        <input name="Submit" type="submit" class="btn btn-success" style="background-color:#00F;" value="User Add" />
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