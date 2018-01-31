<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('../ssi/db.php');
include_once('print.php');
?>
<?php
$pdf->AddPage('L', 'A4');
$html= '<div class="header">
Complain Details
</div>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">EPF No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">UserName </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Email Address</span></th>
    <th bgcolor="#D22929" scope="col">Complain</th></tr>';
$get= "SELECT * FROM feedback";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$epf = $row['epf_no'];
		$userName = $row['name'];
		$mobile = $row['mobile_no'];
		$email = $row['email'];
		$remark = $row['remark'];
		$html .= '<tr style="height:30px; padding:4px;">
				<td><div align="center">'.$epf.'</div></td>
				<td><div align="center">'.$userName.'</div></td>
				<td><div align="center">'.$mobile.'</div></td>
				<td><div align="center">'.$email.'</div></td>
				<td><div align="center">'.$remark.'</div></td>
			</tr>';	
	}
	$pdf->Cell(0, 0, 'HIKH Transport Management System', 1, 1, 'C');
	 $pdf->writeHTML($html, true, false, true, false, '');
	 $pdf->lastPage();
	 $pdf->Output('complaint.pdf', 'I');
} else {
	echo "No complains to display.";	
}
?>	
</table>