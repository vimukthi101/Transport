<div class="nav-wrapper" id="nav-wrapper">
			<nav class="navbar navbar-static">
				<div class="container">
					<a class="logo" href="#"><img src="../images/logo.png" style="width:50px;height:40px;"></a>
					<div id="navbar" class="navbar-collapse collapse">				
						<ul class="nav navbar-nav">
                             <?php
		if($position =="ADMIN"){
			echo '<li><a href="index.php"><p> Home</p></a></li>
      <li class="hasSub"><a href="#"> Add</a>
		  <ul class="sub-menu">
		  	  <li><a href="uEdit.php"><p> Add Users</p></a></li>
			  <li><a href="addVehicle.php"><p>Add Vehicles</p></a></li>
			  <li><a href="addDriver.php"><p>Add Drivers</p></a></li>
			  <li><a href="editDriver.php"><p>Edit Drivers</p></a></li>
			  <li><a href="editVehicle.php"><p>Edit Vehicles</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> View</a>
		  <ul class="sub-menu">
		  	<li><a href="viewDrivers.php"><p>View Drivers</p></a></li>
	  <li><a href="viewVehicles.php"><p>View Vehicles PDF</p></a></li>
	  <li><a href="viewVehiclesUI.php"><p>View Vehicles UI</p></a></li>
     <li> <a href="viewAllbooking.php"><p>View Approved Booking</p></a></li>
      <li><a href="ApproveReject.php"><p>Approve /Reject Details</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> Reports</a>
		  <ul class="sub-menu">
		  	<li><a href="viewComplainDetails.php"><p>View Complains</p></a></li>
	  <li><a href="DailyReport.php"><p>Daily Reports</p></a></li>
	  <li><a href="MonthlyReport.php"><p>Monthly Reports</p></a></li>
		  </ul>
	  </li>
	  <li><a href="Controller/logout.php"><p> LogOut</p></a></li>
	  <li><p>Welcome  '.$_SESSION['name'].'</p></li>';
		} else if($position =="MANAGER" || $position =="GENERAL_MANAGER" || $position =="ASSISTANT_MANAGER" ||$position =="HEAD_OF_DEPARTMENT"){
			echo '<li><a href="index.php"><p> Home</p></a></li>
      <li class="hasSub"><a href="#"> Add</a>
		  <ul class="sub-menu">
		  	<li><a href="feedback.php"><p>Add Complain</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> View</a>
		  <ul class="sub-menu">
     <li> <a href="viewAllbooking.php"><p>View Approved Booking</p></a></li>
      <li><a href="ApproveReject.php"><p>Approve /Reject Details</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> Reports</a>
		  <ul class="sub-menu">
		  	<li><a href="viewComplainDetails.php"><p>View Complains</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> Bookings</a>
		  <ul class="sub-menu">
		  	<li><a href="plantVisit.php"><p>Plant Visit</p></a></li>
		  	<li><a href="booking.php"><p>Staff Transport</p></a></li>
			<li><a href="sampleDelivery.php"><p>Sample Delivery</p></a></li>
			<li><a href="goodsDelivery.php"><p>Goods Delivery</p></a></li>
			<li><a href="cancelBooking.php"><p>Cancel Bookings</p></a></li>
		  </ul>
	  </li>
	  <li><a href="Controller/logout.php"><p> LogOut</p></a></li>';
		} else if($position =="TRANSPORT_DEPARTMENT"){
			echo '<li><a href="index.php"><p> Home</p></a></li>
      <li class="hasSub"><a href="#"> Add</a>
		  <ul class="sub-menu">
			  <li><a href="addVehicle.php"><p>Add Vehicles</p></a></li>
			  <li><a href="addDriver.php"><p>Add Drivers</p></a></li>
			  <li><a href="editDriver.php"><p>Edit Drivers</p></a></li>
			  <li><a href="editVehicle.php"><p>Edit Vehicles</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> View</a>
		  <ul class="sub-menu">
		  	<li><a href="viewDrivers.php"><p>View Drivers</p></a></li>
	  <li><a href="viewVehicles.php"><p>View Vehicles PDF</p></a></li>
	  <li><a href="viewVehiclesUI.php"><p>View Vehicles UI</p></a></li>
     <li> <a href="viewAllbookingTransport.php"><p>View Approved Booking</p></a></li>
      <li><a href="ApproveReject.php"><p>Approve /Reject Details</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> Reports</a>
		  <ul class="sub-menu">
		  	<li><a href="viewComplainDetails.php"><p>View Complains</p></a></li>
	  <li><a href="DailyReport.php"><p>Daily Reports</p></a></li>
	  <li><a href="MonthlyReport.php"><p>Monthly Reports</p></a></li>
		  </ul>
	  </li>
	  <li><a href="Controller/logout.php"><p> LogOut</p></a></li>
	  <li><p>Welcome '.$_SESSION['name'].'</p></li>';
		} else {
			echo '<li><a href="index.php"><p> Home</p></a></li>
      <li class="hasSub"><a href="#"> Add</a>
		  <ul class="sub-menu">
		  	<li><a href="feedback.php"><p>Add Complain</p></a></li>
		  </ul>
	  </li>
	  <li class="hasSub"><a href="#"> Reports</a>
		  <ul class="sub-menu">
		  	<li><a href="viewAllbooking.php"><p>View Approved Booking</p></a></li>
		  </ul>
	  </li>
	  	  <li class="hasSub"><a href="#"> Bookings</a>
		  <ul class="sub-menu">
		  	<li><a href="plantVisit.php"><p>Plant Visit</p></a></li>
		  	<li><a href="booking.php"><p>Staff Transport</p></a></li>
			<li><a href="sampleDelivery.php"><p>Sample Delivery</p></a></li>
			<li><a href="goodsDelivery.php"><p>Goods Delivery</p></a></li>
			<li><a href="cancelBooking.php"><p>Cancel Bookings</p></a></li>
		  </ul>
	  </li>
	  <li><a href="Controller/logout.php"><p> LogOut</p></a></li>';
		}
	 ?>						
                        </ul>
					</div>		
				</div>
			</nav>
		</div>