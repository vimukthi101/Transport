<?php
include_once('../ssi/db.php');
?>
<body background="../Images/Vehicles/home page.jpg" style="background-repeat:no-repeat;background-size:cover;">
  <p>&nbsp;</p>
  <table width="60%" border="0" align="center" cellpadding="5" cellspacing="2">
  <form id="form" name="form" method="post" action="Controller/loginController.php">
    <tr>
      <th colspan="5" scope="col"><div class="header">Login</div></th>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="29%">User Name </td>
      <td width="2%">:</td>
      <td width="38%"><label>
        <input name="uName"  pattern="^[a-zA-Z]{1}[a-z]+[.][a-zA-Z]{1}[a-z]+$" title="invalid User name (eg:'John.Doe','john.doe')" type="text" id="uName" required />
      </label></td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Password </td>
      <td>:</td>
      <td><label>
         <input name="password" type="password" id="password" required />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><a href="">Forgot Pasword</a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <div align="right">
          <input type="reset" name="reset" value="Reset" />
        </div>
      </label></td>
      <td colspan="2"><label>
        <input name="Submit" type="submit" value="Login" />
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
			  echo 'Wrong username or password';
		  }
		  else if ($massege=="2") {
			  echo 'Submit the form';
		  }
	  }
	  ?>
      </td>
    </tr>

</form>
  </table>
  
  
  