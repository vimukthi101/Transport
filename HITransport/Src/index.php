<?php
if(!isset($_SESSION[''])){
	session_start();
}
$position = $_SESSION['position'];
?>
<html lang="en" style="" class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<?php
	include_once('../ssi/includes.php');
?>
</head>
<body>
		<div id="homepage-block-1" class="bgMove" style="background-image: url(../images/_homepage-1-bg.jpg);">
		<?php
		include_once('../ssi/navbar.php');
		?>
		<div class="container content">
			<div class="get-icon">
				<h2 style="color:#FFF;">HIKH TRANSPORT MANAGEMENT SYSTEM</h2>
				<span class="fa fa-phone-square"></span>
			</div>
			<div id="large-image">
				<img src="../images/_car-big.png" class="car" alt="Taxi">
				<img src="../images/_car-splash.png" class="splash" alt="Taxi">
			</div>
		</div>
	</div>
   
    <?php
		include_once('../ssi/footer.php');
	?>
</body>
</html>
