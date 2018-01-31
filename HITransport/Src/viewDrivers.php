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
Driver Details
</div>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">First Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Last Name </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Address</span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Mobile No</span></th> 
	<th bgcolor="#D22929" scope="col"><span class="style10">Licence No</span></th> 
	<th bgcolor="#D22929" scope="col"><span class="style10">Expiry Date</span></th>
	<th bgcolor="#D22929" scope="col"><span class="style10">Year of Experiacne</span></th></tr>';
$get= "SELECT * FROM driver";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$fName = $row['frist_name'];
		$lName = $row['last_name'];
		$address = $row['address'];
		$mNo = $row['mobile_no'];
		$lNo = $row['licence_no'];
		$eDate = $row['expiry_date'];
		$exp = $row['experience'];
		$html .= '<tr style="height:30px; padding:4px;">
				<td><div align="center">'.$fName.'</div></td>
				<td><div align="center">'.$lName.'</div></td>
				<td><div align="center">'.$address.'</div></td>
				<td><div align="center">'.$mNo.'</div></td>
				<td><div align="center">'.$lNo.'</div></td>
				<td><div align="center">'.$eDate.'</div></td>
				<td><div align="center">'.$exp.'</div></td>
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