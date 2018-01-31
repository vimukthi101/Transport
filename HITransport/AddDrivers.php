<html>
<title>Untitled Document</title>
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/TMS_cover_photo.jpg" width="900" height="110"></td>
 </tr>
<table width="85%" border="0" align="center">
    <tr>
      <th colspan="5" scope="col"><div class="header">
        <div align="left">Add Driver Details </div>
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
      <td>&nbsp;</td>
      <td>Driver First  Name </td>
      <td>:</td>
      <td><label>
        <input name="FirstName" type="text" id="FirstName" size="30" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Driver Last Name  </td>
      <td>:</td>
      <td><label>
        <input name="LastName" type="text" id="LastName" size="30" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Address</td>
      <td>:</td>
      <td><label>
        <input name="Address" type="text" id="Address" size="40" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>City </td>
      <td>:</td>
      <td><label>
        <input name="City" type="text" id="City" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>State. </td>
      <td>:</td>
      <td><label>
        <input name="State" type="text" id="State" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Mobile No. </td>
      <td>:</td>
      <td><label>
        <input name="MobileNo" type="text" id="MobileNo" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>License No. </td>
      <td>:</td>
      <td><label>
        <input name="LicenseNo" type="text" id="LicenseNo" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Expiry Date </td>
      <td>:</td>
      <td><label>
      <input type="text" name="doe"  readonly="true"/>
       <a href="javascript: void(0);" onMouseOver="if (timeoutId) clearTimeout(timeoutId);window.status='Show Calendar';return true;" onMouseOut="if (timeoutDelay) calendarTimeout();window.status='';" onClick="g_Calendar.show(event,'form1.doe',true,'yyyy-mm-dd'); return false;"><img src="Images/calendar.gif" name="imgCalendar" width="34" height="21" border="0" alt="" ></a></label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Year of Experiacne  </td>
      <td>:</td>
      <td><label>
        <input type="text" name="Experiance" />
		
      </label></td>
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
          <input type="reset" name="Submit2" value="Reset"  class="redButton"/>
          </div>
      </label></td>
      <td>&nbsp;</td>
      <td><label>
        <input name="Submit" type="submit" class="redButton" onClick="MM_validateForm('FirstName','','R','LastName','','R','Address','','R','City','','R','State','','R','MobileNo','','R','LicenseNo','','R','Experiance','','RisNum');return document.MM_returnValue" value="Add Driver" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
