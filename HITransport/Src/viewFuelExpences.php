
<style type="text/css">
<!--
.style10 {color: #EED9A8; font-weight: bold; font-size: 14px; }
.style11 {color: #E49C7C}
-->
</style>
<script>
function deleteFuel(id){
	if(confirm('Want to Delete this Fuel Details?')){
		window.location.href = 'do?MOD=MTN&ACT=fDel&fid='+id;
	}
}
</script>
<div class="header">View All Vehicle Excepnces Details </div><br/>
<h3>View all the Vehicle Expences Details.<br/>If you want to add more Vehilce Expences then <a href="../../../../Users/Admin/Downloads/vehicle/vehicle/do?MOD=MTN&amp;ACT=FuelAdd">Click Here.</a></h3><br/>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Driver Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Date</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Fuel Type </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Qty</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Cost&nbsp;&nbsp;</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Ation</span></th>
  </tr>


<tr style="height:30px; padding:4px;">
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center">&nbsp;Ltr.</div></td>
    <td><div align="center">Rs.</div></td>
    <td><div align="center"><a href="">Delete</a></div></td>
</tr>
	
</table>

