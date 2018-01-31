
<style type="text/css">
<!--
.style10 {color: #EED9A8; font-weight: bold; font-size: 14px; }
.style11 {color: #E49C7C}
-->
</style>
<script>
function deleteDriver(id){
	if(confirm('Want to Delete this Driver Details?')){
		window.location.href = 'do?MOD=MTN&ACT=dDel&did='+id;
	}
}
</script>

<div class="header">View All Driver Details </div>
<br/>
<h3>View all the Records of Drivers.<br/>
If you want to add more Driver Records then <a href="../../../../Users/Admin/Downloads/vehicle/vehicle/do?MOD=MTN&amp;ACT=DvrAdd">Click Here.</a></h3>
<br/>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">Driver Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">City Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Mobile</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Lic. No  </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Expiry Date </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Experiance&nbsp;&nbsp;</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Ation</span></th>
  </tr>


<tr style="height:30px; padding:4px;">
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center">&nbsp;</div></td>
    <td><div align="center">&nbsp;</div></td>
    <td><div align="center">Years.</div></td>
    <td><div align="center"><a href="">Delete</a></div></td>
</tr>

</table>
