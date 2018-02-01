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
<h4><u>Vehicle Details</u></h4>
</div>
<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
  <tr>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Name </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle No. </span></th>
     <th bgcolor="#D22929" scope="col"><span class="style10">Fuel Type </span></th>
    <th bgcolor="#D22929" scope="col"><span class="style10">Rs / K.m. </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Vehicle Type </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Insurer Name </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Company Name </span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Date Of. Insurance</span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Date of Expiry</span></th>
	 <th bgcolor="#D22929" scope="col"><span class="style10">Driver Name</span></th></tr>';
$get= "SELECT * FROM vehicle";
$result= mysqli_query($con, $get);
if(mysqli_num_rows($result)!=0){
	while($row= mysqli_fetch_array($result)){
		$vName = $row['vehicle_name'];
		$vNo = $row['vehicle_no'];
		$fuel = $row['fuel_type'];
		$rs = $row['rs/km'];
		$type = $row['vehicle_type'];
		$insurer = $row['insurer_name'];
		$company = $row['company name'];
		$date = $row['insurance_date'];
		$exp = $row['expiry_date'];
		$driver = $row['driver_name'];
		$getDriver = "SELECT * FROM driver WHERE licence_no='".$driver."'";
		$resultDriver= mysqli_query($con, $getDriver);
		if(mysqli_num_rows($resultDriver)!=0){
			while($rowDriver= mysqli_fetch_array($resultDriver)){
				$dName = $rowDriver['frist_name'].' '.$rowDriver['last_name'];
			}
		} else {
			$dName = $driver;	
		}
		$html .= '<tr style="height:30px; padding:4px;">
				<td><div align="center">'.$vName.'</div></td>
				<td><div align="center">'.$vNo.'</div></td>
				<td><div align="center">'.$fuel.'</div></td>
				<td><div align="center">'.$rs.'</div></td>
				<td><div align="center">'.$type.'</div></td>
				<td><div align="center">'.$insurer.'</div></td>
				<td><div align="center">'.$company.'</div></td>
				<td><div align="center">'.$date.'</div></td>
				<td><div align="center">'.$exp.'</div></td>
				<td><div align="center">'.$dName.'</div></td>
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