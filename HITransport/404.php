<?php
	if(!isset($_SESSION[''])){
		session_start();	
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>HIKH Transport Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!--body start-->
	<div class="col-md-12">
        <img src="Images/404.png" class="img-responsive center-block" style="padding:50px;margin-top:80px;height:80vh;"/>
        <?php
			session_destroy();
			header("Refresh: 5; URL=index.php");
		?>
    </div>
<!--body end-->
</body>
</html>