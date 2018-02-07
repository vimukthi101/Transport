<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
include_once('../ssi/includes-inside-2.php');
include_once('../ssi/db.php');
?>
<body>
<div>
<?php
	include_once('../ssi/navbar.php');
?>
</div>
<div>
  <table width="60%" border="0" align="center" cellpadding="5" cellspacing="2">
  <form id="form" name="form" method="post" action="Controller/AddDriverController.php">

    <tr>
      <th colspan="5" scope="col"><div class="header">Add Driver</div></th>
    </tr>
    
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="29%">Image </td>
      <td width="2%">:</td>
      <td width="38%"><input name="Image" type="file" id="Image" required accept="image/*"/></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="29%">First Name </td>
      <td width="2%">:</td>
      <td width="38%"><label>
        <input name="Firstname" pattern="([a-z]|[A-Z])[a-z]+"  title="invalid First Name (eg:'John','doe')" type="text" id="Firstname" required="required" />
      </label></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Last Name </td>
      <td>:</td>
      <td><label>
         <input name="Lastname" pattern="([a-z]|[A-Z])[a-z]+"  title="invalid Last Name (eg:'John','doe')" type="text" id="Lastname" required="required" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
        <td>&nbsp;</td>
      <td>Address</td>
      <td>:</td>
      <td><label>
        <input name="Address" pattern=".+" type="text" id="Address" required="required" title="Invalid Address" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Mobile No. </td>
      <td>:</td>
      <td><input name="Mobile" type="tel" id="Mobile" value="" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>License No. </td>
      <td>:</td>
      <td><label>
        <input name="LicenseNo" type="text" id="LicenseNo" required="required" title="Invalid Licence No" pattern="\w+"/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Expiry Date </td>
      <td>:</td>
      <td>
        <input name="Expirydate" id="Expirydate" type="date"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Year of Experiacne </td>
      <td>:</td>
      <td>
        <input type="number" required="required" name="Yearexperiecnce" id="Yearexperiecnce"/>
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Note</td>
      <td>:</td>
      <td><label>
        <textarea name="Note" cols="30" rows="5" id="Note"></textarea>
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <div align="right">
          <input type="reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td colspan="2"><label>
        <input name="Submit" type="submit" value="Driver Add" />
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
			  echo 'User Successfuly Added Driver';
		  }
		  else if ($massege=="2") {
			  echo 'Driver faild, TRY Again';
		  }
		
		  else if ($massege=="4") {
			  echo 'Submit the Form';
		  }
		  else if ($massege=="5") {
			  echo 'User Already Exsist';
		  }
	  }
	  ?>
      </td>
    </tr>

</form>
  </table>
  </div>
  <div>
   <?php
		include_once('../ssi/footer.php');
	?>
  </div>
  </body>