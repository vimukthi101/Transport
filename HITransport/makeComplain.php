
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
     <td class="contentArea"><form id="form1" name="form1" method="post" action="../Complain-Management-System/Complain-Management-System/do?MOD=BOK&ACT=doReg">
       <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#6666FF" class="entryTable">
  <tr id="entryTableHeader">
    <td>:: Create Transport Requestation ::</td>
  </tr>
  <tr>
    <td class="contentArea"><div class="errorMessage" align="center"></div>
        <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
          <tr align="center">
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Vehicle Type </td>
            <td class="content">
			<select name="compType" class="box">
				<option value="luxvan">Luxury Van </option>
                <option value="luxbus">Luxury Bus </option>
				<option value="nrmlvan"> Non A/C Van</option>
				<option value="nrmlbus">Non A/C Bus</option>
                <option value="car">Car</option>
		  </select>          </tr>
          <tr class="entryTable">
            <td class="label">&nbsp;Destination</td>
            <td class="content"><input name="compTitle" type="text" class="box" id="destination" value="" size="50" maxlength="100" /></td>
          </tr>
           <tr class="entryTable">
            <td class="label">&nbsp;Passengers</td>
            <td class="content"><input name="compTitle" type="text" class="box" id="destination" value="" size="50" maxlength="100" /></td>
          </tr>

          <tr class="entryTable">
            <td valign="top" class="label">&nbsp;Travel Description .</td>
            <td class="content"><textarea name="travelDes" cols="50" rows="6" class="box" id="travelDes"></textarea></td>
          </tr>


          <tr>
            <td width="200">&nbsp;</td>
            <td width="372">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="btnLogin" type="submit" id="btnLogin" value=" Make Request  "></td>
          </tr>
      </table></td>
  </tr>
</table>
    </form></td>
    </tr>
   </table></td>
 </tr>
</table>

<p>	 Powered By: ALWIS W.D.D.D : E131041008</a></p>
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
