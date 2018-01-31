<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
?>
<?php
include_once('../ssi/db.php');
session_start();	
if(isset($_SESSION['email']) && isset($_SESSION['epfno']) && isset($_SESSION['name']) && isset($_SESSION['contactNo'])){
?>
<body background="../Images/Vehicles/complain.jpg">
<table width="80%" border="0" align="center">
<form id="form1" name="form1" method="post" action="Controller/feedbackController.php" enctype="multipart/form-data">
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Book A Vehicle </div>
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
      <td width="15%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
      <td width="38%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Complain</div>
      </div></th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
     
      <td>&nbsp;</td>
      <td>Complain Type </td>
      <td>:</td>
      <td><label>
        <select name="vtype" id="vtype" required="required" >
        <option selected disabled>Booking Date - Duration - Destination - Reason</option>
            <?php
				$get ="SELECT * FROM booking WHERE epf_no='".$_SESSION['epfno']."' and status='1'";
				$result= mysqli_query($con, $get);
				if(mysqli_num_rows($result)!=0){
					while ($row= mysqli_fetch_array($result)){
						$bookingId = $row['id'];
						$bookingDate = $row['booking_date'];
						$bookingDuration = $row['duration'];
						$bookingDest = $row['destination'];
						$bookingReason = $row['reason'];
						echo '<option value="'.$bookingId.'">'.$bookingDate.' - '.$bookingDuration.' - '.$bookingDest.' - '.$bookingReason.'</option>';
					}
				} else {
					echo '<option disabled>No records to display</option>';
				}
			?>
		</select>
      </label></td>
      <td>&nbsp;</td>
    </tr>
       <tr>
      <td>&nbsp;</td>
      <td>Remark</td>
      <td>:</td>
      <td><label>
        <textarea name="reason" id="reason"></textarea>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    
      
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
      <td></td>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" value="Complain" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="5">
 
      </td>
    </tr>
</form>
</table>
<?php
	  if(isset($_GET['message'])){
		  $massege = $_GET['message'];
		  if ($massege=="2") {
			  echo 'Couldnot submit the complain, please try again';
		  }
		  else if ($massege=="3") {
			  echo 'Please submit the form';
		  }
	  }else if(isset($_GET['addedId'])){
		  $massege = $_GET['addedId'];
		  echo 'complain submitted. compain ID : ' .$massege;
	  }
	  ?>
<?php
} else {
	header('Location:login.php');	
}
?>