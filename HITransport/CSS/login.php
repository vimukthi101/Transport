
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../../../Users/Admin/Downloads/vehicle/vehicle/include/admin.css" rel="stylesheet" type="text/css">
<link href="../../../../Users/Admin/Downloads/vehicle/vehicle/include/menu.css" rel="stylesheet" type="text/css">
<link href="../../../../Users/Admin/Downloads/vehicle/vehicle/include/main.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Vehicle Management System</title>
<style>
html,body{
    height: 100%;
    text-align: center;
    font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
    font-size: small;
    color:#FA0;
    background-image: url(../Images/Vehicles/main.jpg);
}
.style1 {
	font-size: 16px;
	font-weight: bold;
	color: #D22929;
	text-decoration:underline;
}
.style3 {
	font-size: 18px;
	font-weight: bold;
	color: #D22929;
	text-decoration:blink;
}
.myBox {
    margin: 0.5in auto;
    color: #fff;
    width: 600px;
    padding: 20px;
    text-align: left;
    background-color: #CCCCCC;
    border: 3px solid #fff;

    /* Do rounding (native in Firefox and Safari) */
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
}
.style4 {color: #EED9A8}
.style5 {color: #D22929}
.style6 {color: #D22929; font-weight: bold; }
</style>

<?php
include_once('../ssi/db.php');
?>
  <p>&nbsp;</p>


<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<div class="myBox">
<table width="" border="0"  align="center" style=" background:#EED9A8">
  <tr>
    <th width="45" scope="col">&nbsp;</th>
    <th width="498" scope="col">&nbsp;</th>
    <th width="43" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th colspan="3" bgcolor="#D22929" scope="col"><div align="center"><span class="style3"><span class="style4"><marquee>Vehicle Management System</marquee></span></span> </div></th>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form" name="form" method="post" action="Controller/loginController.php">
      <table width="100%" border="0" align="center">
        <tr>
          <th colspan="3" scope="col">
		 
			<h3><font color="#000000"> </font></h3>
		
		  </th>
          </tr>
        <tr>
          <td width="46%" rowspan="8"><img src="../Images/Vehicles/Toyota KDH.jpg" width="221" height="193" /></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><span class="style1"> Login  </span> </div></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="22%"><span class="style6">User Name :</span> 
            <span class="style5">
            <label></label>
            </span></td>
          <td width="32%"><label>
            <input name="Username" type="text" id="Username" />
          </label></td>
        </tr>
        <tr>
          <td><span class="style6">&nbsp;Password :
              <label>              </label>
          </span>
            <span class="style5">
            <label></label>
            </span></td>
          <td><label>
            <input name="uName"  pattern="^[a-zA-Z]{1}[a-z]+[.][a-zA-Z]{1}[a-z]+$" title="invalid User name (eg:'John.Doe','john.doe')" type="text" id="uName" required="required" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">
		  
		  <div align="center">
            <input name="Submit2" type="submit" class="redButton" onclick="MM_validateForm('Username','','R','Password','','R');return document.MM_returnValue" value=" Log In "/>
          </div></td>
        </tr>
        <tr>
          <td colspan="2"><label> 
          <a href="">Forgot Pasword</a>
           <div align="right">
          <input type="reset" name="reset" value="Reset" />
        </div>
            </label></td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
      </table>
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
      
        </form>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>