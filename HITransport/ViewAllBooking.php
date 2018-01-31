<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/TMS_cover_photo.jpg" width="1200" height="141"></td>
 </tr>
<table width="85%" border="0" align="center">
    <tr>
      <div class="header">View Your Employer's Booking Request</div>
<br/>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Vehicle Type </span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Vehicle Number </span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Driver Name </span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Start Date</span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">End Date </span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Kilometer</span></th>
    <th bgcolor="#6666FF" scope="col"><span class="style10">Status&nbsp;</span></th>
	<th bgcolor="#6666FF" scope="col"><span class="style10">Action</span></th>
  </tr>

<form name="bookingForm" id="bookingForm" action="do?MOD=MTN&ACT=bookAction" method="post">
  <tr style="height:30px; padding:4px;">
    <td><div align="center"><%=(String)one.get(1)%></div></td>
    <td><div align="center"><%=(String)one.get(2)%></div></td>
    <td><div align="center"><%=(String)one.get(2)%></div></td>
    <td><div align="center"><%=(String)one.get(3)%></div></td>
    <td><div align="center"><%=(String)one.get(4)%></div></td>
    <td><div align="center"><%=(String)one.get(5)%>&nbsp;Km.</div></td>
    <td><div align="center"><select name="action" >
	<option value="Pending">Pending</option>
	<option value="Approved">Approved</option>
	<option value="Rejected">Rejected</option>
	</select></div></td>
	<td><div align="center"><input type="submit" value=" Go " /></div></td>
  </tr>
</form>
  
</table>
