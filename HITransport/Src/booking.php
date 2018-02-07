<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
include_once('../ssi/db.php');
include_once('../ssi/includes-inside-2.php');
?>
<body>
<div>
<?php
	include_once('../ssi/navbar.php');
?>
</div>
<body>
<?php
if(isset($_SESSION['email']) && isset($_SESSION['epfno']) && isset($_SESSION['name']) && isset($_SESSION['contactNo'])){
?>
<table width="80%" border="0" align="center">
<form id="form1" name="form1" method="post" action="Controller/BookingController.php" enctype="multipart/form-data">
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Book A Vehicle For Staff Transport</div>
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
        <div align="left">Booking Added User Information </div>
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
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Booking User Information </div>
      </div></th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>EPF No. </td>
      <td>:</td>
      <td><label>
        <input name="bepfno" type="text" id="bepfno" required/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Name </td>
      <td>:</td>
      <td><label>
        <input name="bname" type="text" id="bname" required />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Mobile No </td>
      <td>:</td>
      <td><label>
        <input name="bmno" type="text" id="bmno" required/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Department </td>
      <td>:</td>
      <td><label>
        <input name="bdepartment" type="text" id="bdepartment" required/>
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
      <td>Journey Type </td>
      <td>:</td>
      <td><label>
        <select name="jtype" id="jtype" required="required" >
            <option value="One Way">&nbsp;One Way</option>
            <option value="Return">&nbsp;Return</option>
		</select>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nmber of Passengers</td>
      <td>:</td>
      <td><label>
        <input name="passenger" type="number" id="passenger" min="1" required />
      </label>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Destination </td>
      <td>:</td>
      <td><label>
        <input name="destination" type="text" id="destination" required />
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
    <tr>
      <td>&nbsp;</td>
      <td>Vehicle Type </td>
      <td>:</td>
      <td><label>
        <select name="vtype" id="vtype" required="required" >
            <option value="Luxury Cars">&nbsp;Luxury Cars</option>
            <option value="Executive Cars">&nbsp;Executive Cars </option>
            <option value="Economy Cars">&nbsp;Economy Cars</option>
           <option value="Luxury Vans">&nbsp;Luxury Vans</option>
            <option value="Executive Vans">&nbsp;Executive Vans </option>
            <option value="Economy Vans">&nbsp;Economy Vans</option>
		</select>
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
		  else if ($massege=="4") {
			  echo 'Submit the Form';
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
</div>
<div>
<?php
		include_once('../ssi/footer.php');
	?>
</div>
</body>