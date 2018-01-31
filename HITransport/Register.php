
<html>
<head>
<title>transport Management System- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>

<br/>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="Images/TMS_cover_photo.jpg" width="900" height="120"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form action="../../../../../xampp/htdocs/cpytms/login.php" method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p> 
       <h3>If you want to Book any of the Vehicle then please register ypur self.<br/>
After Registration You can Login-In and Book any of the Vehicle From this site.<br/>
If You already Register with us then please <a href="../Complain-Management-System/Complain-Management-System/do?MOD=BOK&ACT=Login">Login</a> to Book the vehicle for your Trips.</h3>
<form id="form1" name="form1" method="post" action="../Complain-Management-System/Complain-Management-System/do?MOD=BOK&ACT=doReg">
  <table width="70%" border="0" align="center" cellpadding="5" cellspacing="2">
    <tr>
      <th colspan="5" scope="col"><div class="header">User Registration</div></th>
    </tr>
    <tr>
      <td width="20%">&nbsp;</td>
      <td width="29%">&nbsp;</td>
      <td width="2%">&nbsp;</td>
      <td width="29%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="label">&nbsp;User Name</td>
      <td>:</td>
      <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" size="30" maxlength="20"></td
      ><td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="label">&nbsp;Password</td>
      <td>:</td>
      <td class="content"><input name="txtPassword" type="password" class="box" id="txtPassword" value="" size="30" maxlength="20" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <<td class="label"> &nbsp;User Type </td>
      <td>:</td>
    <td class="content"><select name="utype" class="box">
               <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
               </select>			  </td>
           
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="label"> &nbsp;Department </td>
      <td>:</td>
      <td class="content"><select name="dtype" class="box">
               <option value="employer">&nbsp;&nbsp; Department &nbsp;</option>
               </select>			  
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>EPF No. </td>
      <td>:</td>
      <td><input name="EpfNo" type="text" id="EpfNo" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>E-mail</td>
      <td>:</td>
      <td><input name="Email" type="text" id="Email" /></td>
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
      <td>&nbsp;</td>
      <td><label>
        <div align="right">
          <input type="reset" name="Submit2" value="Reset" />
        </div>
      </label></td>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" onClick="MM_validateForm('Username','','R','Password','','R','City','','R','State','','R','MobileNo','','R','Email','','RisEmail','Address','','R');return document.MM_returnValue" value="Register Now" />
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




       
       
       
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>

<p>Powered By: ALWIS W.D.D.D : E131041008</a></p>
</body>
</html>
<?php
if(isset($_GET['error'])){
	$massege = $_GET['error'];
		if($massege =="ef"){
			echo "reqired feild emptiy";
		}else if ($massege =="ae"){
			echo "User already exists";
		}else if ($massege =="qf"){
			echo "Cooldn't register the User";
		}else if ($massege =="su"){
			echo "User Succsessfully Registerd";
		}
}
?>
