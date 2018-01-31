<?php
include_once('../ssi/db.php');
session_start();	
if(isset($_SESSION['email']) && isset($_SESSION['epfno']) && isset($_SESSION['name']) && isset($_SESSION['contactNo'])){
?>

<body background="../Images/Vehicles/car.JPG">
<table width="80%" border="0" align="center">
<form id="form1" name="form1" method="post" action="Controller/goodsDeiveryController.php" enctype="multipart/form-data">
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Book A Vehicle For Goods Delivery</div>
      </div></th>
    </tr>
    <tr>
      <td width="15%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="38%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">User Information </div>
      </div></th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>EPF No. </td>
      <td>:</td>
      <td><label>
        <input name="epfno" type="text" id="epfno" value="<?php echo $_SESSION['epfno']; ?>" required readonly/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Name </td>
      <td>:</td>
      <td><label>
        <input name="name" type="text" id="name" value="<?php echo $_SESSION['name']; ?>" required readonly />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Mobile No </td>
      <td>:</td>
      <td><label>
        <input name="mno" type="text" id="mno" value="<?php echo $_SESSION['contactNo']; ?>" required readonly/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>E-mail </td>
      <td>:</td>
      <td><label>
        <input name="email" type="text" id="email" value="<?php echo $_SESSION['email']; ?>" required readonly/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Department </td>
      <td>:</td>
      <td><label>
        <input name="department" type="text" id="department" value="<?php echo $_SESSION['department']; ?>" required readonly/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="15%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="38%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Booking Details </div>
      </div></th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Booking Date and Time </td>
      <td>:</td>
      <td><label>
        <input name="dateBook" type="datetime-local" id="dateBook" required />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Contact Person </td>
      <td>:</td>
      <td><label>
        <input name="cperson" type="text" id="cperson" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Contact Person Phone Nmber </td>
      <td>:</td>
      <td><label>
        <input name="cpersonno" type="text" id="cpersonno" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pickup Address </td>
      <td>:</td>
      <td><label>
        <input name="caddress" type="text" id="caddress" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>P/O Number </td>
      <td>:</td>
      <td><label>
        <input name="pono" type="text" id="pono" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Goods Detail </td>
      <td>:</td>
      <td><label>
        <input name="gdetail" type="text" id="gdetail" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Reason </td>
      <td>:</td>
      <td><label>
        <textarea name="reason" id="reason"></textarea>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <td width="11%">&nbsp;</td>
      <td width="29%">Approved By</td>
      <td width="2%">:</td>
      <td width="38%">
      <label>
      <?php
	  echo '<select required="required" name="designation" id="designation">';
	  $getDesignation = "SELECT * FROM designation";
	  $resultDesignation = mysqli_query($con,$getDesignation);
	  if(mysqli_num_rows($resultDesignation)!=0){
		  //data
		  while($rowDesigantion = mysqli_fetch_array($resultDesignation)){
			  $designationId = $rowDesigantion['id'];
			  $designation = $rowDesigantion['name'];
			  echo '<option value="'.$designationId.'">'.$designation.'</option>';
		  }
	  } else {
		  //no data
		  echo '<option disabled="disabled">No Data To Show</option>';
	  }
	  echo '</select>';
	  ?>
      </label></td>
      <td width="20%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right">
        <input type="reset" name="reset" value="Reset"/>
      </div></td>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" value="Book Vehicle" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="5">
       <?php
	  if(isset($_GET['message'])){
		  $massege = $_GET['message'];
		  if ($massege=="1") {
			  echo 'User Successfuly Added Booking';
		  }
		  else if ($massege=="2") {
			  echo 'Booking faild, TRY Again';
		  }
		  else if ($massege=="3") {
			  echo 'Booking should be 1/2h earlier bofore 8.30, 11.30, 2.30';
		  }
		  else if ($massege=="4") {
			  echo 'Submit the Form';
		  }
		  else if ($massege=="5") {
			  echo 'Booking should be either 8.30, 11.30 or 2.30';
		  }
	  }
	  ?>
      </td>
    </tr>
</form>
</table>
<?php
} else {
	header('Location:login.php');	
}
?>