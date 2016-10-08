<?php
	include $_SERVER['DOCUMENT_ROOT'].'/utility/functions.php';
	$c = connect_to_database();
	$setting = get_settings($c, "SELECT * FROM settings");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
		echo get_seo($c, "home", $setting); 
		include '../css/main.php'; 
	?>
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
	<?php include_once("analyticstracking.php") ?>
	<div class="row presentation" style="background-image: url('<?php echo $setting['home_page_background1']; ?>');">
		<div class="col-xs-12 col-md-12 presentation_padding">
			<div class="presentation_content">
				<span class="presentation_title">We apologize! This page is coming soon!</span><br /><br />
			</div>
		</div>
	</div>	
	<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
	<?php include '../js/main.php'; ?>
</body>
</html>