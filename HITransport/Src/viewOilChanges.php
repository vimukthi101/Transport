
<style type="text/css">
<!--
.style10 {color: #EED9A8; font-weight: bold; font-size: 14px; }
.style11 {color: #E49C7C}
-->
</style>
<script>
function deleteOil(id){
	if(confirm('Want to Delete this Vehicle Oil Details?')){
		window.location.href = 'do?MOD=MTN&ACT=oDel&oid='+id;
	}//if
}//delete
</script>

<div class="header">View All Oil Change Details </div>
<br/>
<h3>View all the Oil Change Details.<br/>
  If you want to add more Details then <a href="../../../../Users/Admin/Downloads/vehicle/vehicle/do?MOD=MTN&amp;ACT=OilAdd">Click Here.</a></h3>
<br/>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Driver Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Date</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Cost </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Oil Type</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Odometer&nbsp;&nbsp;</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Ation</span></th>
  </tr>


<tr style="height:30px; padding:4px;">
    <td><div align="center"><%=(String)one.get(1)%></div></td>
    <td><div align="center"><%=(String)one.get(2)%></div></td>
    <td><div align="center"><%=(String)one.get(3)%></div></td>
    <td><div align="center"><%=(String)one.get(4)%>&nbsp;Rs.</div></td>
    <td><div align="center"><%=(String)one.get(5)%>&nbsp;</div></td>
    <td><div align="center"><%=(String)one.get(6)%>Rs.</div></td>
    <td><div align="center"><a href="javascript:deleteOil(<%=(String)one.get(0)%>)">Delete</a></div></td>
</tr>

</table>
