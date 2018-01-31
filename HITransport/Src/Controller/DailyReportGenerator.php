<?php
include_once('../../ssi/db.php');
include_once('print.php');
if (isset($_POST['Submit'])) { 
	$start = $_POST['Startdate'];
	$end = $_POST['Enddate'];
	$status = $_POST['status'];
	$department = $_POST['department'];
	if($status == 1){
		$getApproved = "SELECT * FROM booking WHERE booking_date BETWEEN '".$start."' AND '".$end."' AND status='1' AND department='".$department."'";
		$resultApproved = mysqli_query($con, $getApproved);	
		if (mysqli_num_rows($resultApproved)!=0) {
			$pdf->AddPage('L', 'A4');
			$html = '<div>
					<h2>APPROVED BOOKING DETAILS</h2>
				</div>
				<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
				  <tr>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>EPF No</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>UserName</b> </span></th>
					 <th bgcolor="#D22929" scope="col"><span class="style10"><b>Mobile No</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Email Address</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Booking Date</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Duration</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Destination</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Reason</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Vehicle Type</b></span></th>
				  </tr>';
			  while($row= mysqli_fetch_array($resultApproved)){
					$epf = $row['epf_no'];
					$userName = $row['user_name'];
					$mobile = $row['mobile_no'];
					$email = $row['email'];
					$date = $row['booking_date'];
					$duration = $row['duration'];
					$destination = $row['destination'];
					$reason = $row['reason'];
					$type = $row['vehicle_type'];
					$id = $row['id'];
						$html .= '<tr style="height:30px; padding:4px;">
								<td><div align="center">'.$epf.'</div></td>
								<td><div align="center">'.$userName.'</div></td>
								<td><div align="center">'.$mobile.'</div></td>
								<td><div align="center">'.$email.'</div></td>
								<td><div align="center">'.$date.'</div></td>
								<td><div align="center">'.$duration.'</div></td>
								<td><div align="center">'.$destination.'</div></td>
								<td><div align="center">'.$reason.'</div></td>
								<td><div align="center">'.$type.'</div></td>
							</tr>';	
			 }
			 $pdf->Cell(0, 0, 'HIKH Transport Management System', 1, 1, 'C');
			 $pdf->writeHTML($html, true, false, true, false, '');
			 $pdf->lastPage();
			 $pdf->Output('report.pdf', 'I');
		} else {
			header('Location:../DailyReport.php?message=2');		
		}
	} else {
		$getRejected = "SELECT * FROM booking WHERE booking_date BETWEEN '".$start."' AND '".$end."' AND status='2' AND department='".$department."'";
		$resultRejected = mysqli_query($con, $getRejected);
		if (mysqli_num_rows($resultRejected)!=0) {
			$pdf->AddPage('L', 'A4');
			$html = '<div>
					<h2>REJECTED BOOKING DETAILS</h2>
				</div>
				<table width="95%" align="center"  style="border:#D22929 solid 2px;padding:10px;" border="0">
				  <tr>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>EPF No</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>UserName</b> </span></th>
					 <th bgcolor="#D22929" scope="col"><span class="style10"><b>Mobile No</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Email Address</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Booking Date</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Duration</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Destination</b></span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Reason</b> </span></th>
					<th bgcolor="#D22929" scope="col"><span class="style10"><b>Vehicle Type</b></span></th>
				  </tr>';
			  while($row= mysqli_fetch_array($resultRejected)){
					$epf = $row['epf_no'];
					$userName = $row['user_name'];
					$mobile = $row['mobile_no'];
					$email = $row['email'];
					$date = $row['booking_date'];
					$duration = $row['duration'];
					$destination = $row['destination'];
					$reason = $row['reason'];
					$type = $row['vehicle_type'];
					$id = $row['id'];
						$html .= '<tr style="height:30px; padding:4px;">
								<td><div align="center">'.$epf.'</div></td>
								<td><div align="center">'.$userName.'</div></td>
								<td><div align="center">'.$mobile.'</div></td>
								<td><div align="center">'.$email.'</div></td>
								<td><div align="center">'.$date.'</div></td>
								<td><div align="center">'.$duration.'</div></td>
								<td><div align="center">'.$destination.'</div></td>
								<td><div align="center">'.$reason.'</div></td>
								<td><div align="center">'.$type.'</div></td>
							</tr>';	
			 }
			 $pdf->Cell(0, 0, 'HIKH Transport Management System', 1, 1, 'C');
			 $pdf->writeHTML($html, true, false, true, false, '');
			 $pdf->lastPage();
			 $pdf->Output('report.pdf', 'I');
		} else {
			header('Location:../DailyReport.php?message=2');		
		}
	}
} else { 
	header('Location:../DailyReport.php?message=1');
}
?>