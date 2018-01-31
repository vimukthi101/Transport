
<html>
<head>
<title>transport Management System- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
<br/>
<br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/TMS_cover_photo.jpg" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form action="Register.php" method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p> 
       
<h3>Login to Book the Vehicle and Enjoy your Trips.<br/>
If You don't Register then <a href="../../../Users/Admin/Downloads/TMSSystem/login.php">Click Here</a> to Register with our self.</h3>
<table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">


<form id="form1" name="form1" method="post" action="do?MOD=BOK&ACT=doLog">
  <table width="70%" border="0" align="center" cellpadding="5" cellspacing="2">
    <tr>
      <th colspan="5" scope="col"><div class="header">&nbsp;User Login</div></th>
    </tr>
    <tr>
      <td width="20%">&nbsp;</td>
      <td width="27%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="31%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>User Name</td>
      <td>:</td>
      <td><label>
        <input name="Username" type="text" id="Username" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Password</td>
      <td>:</td>
      <td><label>
        <input name="Password" type="password" id="Password" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        
        <div align="right">
          <input type="submit" name="Submit2" value="Submit" />
        </div>
      </label></td>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" onClick="MM_validateForm('Username','','R','Password','','R');return document.MM_returnValue" value="User Login" />
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
      <td colspan="5"><div class="header">&nbsp;</div></td>
    </tr>
  </table>
</form>



       
       
      
          
      
       
   </table></td>
 </tr>
</table>

<p>Powered By: ALWIS W.D.D.D : E131041008</a></p>
</body>
</html>
<?php
if(!isset($_SESSION[''])){
	session_start();
}

if(isset($_GET['error'])){
	$massege = $_GET['error'];
	if($massege == "nu"){
		echo "user name required";
	}
	else if ($massege =="np"){
		echo "password required";
	}
	else if ($massege =="il"){
		echo "password invalid";
	}
	else if ($massege =="lo"){
		echo "logout Sucsessfully";
	}
	else if ($massege =="nl"){
		echo "pleace login";
	}
}


?>
