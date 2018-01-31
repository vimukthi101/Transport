

<?php
include_once('../ssi/db.php');
?>
  <table width="60%" border="0" align="center" cellpadding="5" cellspacing="2">
  <form id="form" name="form" method="post" action="Controller/MonthlyReportGenerator.php">

    <tr>
      <th colspan="5" scope="col"><div class="header">Daily Report</div></th>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="29%">Start Date </td>
      <td width="2%">:</td>
      <td width="38%">
        <input name="Startdate" id="Startdate" type="month"/></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>End Date </td>
      <td>:</td>
      <td>
         <input name="Enddate" id="Enddate" type="month"/>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Department</td>
      <td>:</td>
      <td><label>
         <?php
	  echo '<select required="required" name="department" id="department">';
	  $getDepartment = "SELECT * FROM department";
	  $resultDepartment = mysqli_query($con,$getDepartment);
	  if(mysqli_num_rows($resultDepartment)!=0){
		  //data
		  while($rowDepartment = mysqli_fetch_array($resultDepartment)){
			  $departmentId = $rowDepartment['id'];
			  $department = $rowDepartment['department_name'];
			  echo '<option value="'.$departmentId.'">'.$department.'</option>';
		  }
	  } else {
		  //no data
		  echo '<option disabled="disabled">No Data To Show</option>';
	  }
	  echo '</select>';
	  ?>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Status </td>
      <td>:</td>
      <td>
         <select name="status">
         	<option value="1">Approved</option>
            <option value="2">Rejected</option>
         </select>	
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        
      </label></td>
      <td colspan="2"><label>
        <input name="Submit" type="submit" value="Submit" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">
      <?php
	  if(isset($_GET['message'])){
		  $massege = $_GET['message'];
		  if ($massege=="1") {
			  echo 'Please submit the form';
		  }
		  else if ($massege=="2") {
			  echo 'No Records to show';
		  }
	  }
	  ?>
      </td>
    </tr>

</form>
  </table>

<?php
include_once('../ssi/db.php');
?>
  