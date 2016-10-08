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
		echo get_seo($c, "contact", $setting); 
		include '../css/main.php'; 
	?>
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
	<?php include_once("analyticstracking.php") ?>
	<div class="row presentation" style="height:700px; background-image: url('<?php echo $setting['home_page_background1']; ?>');">
		<div class="col-xs-12 col-md-8 presentation_padding_short">
			<div class="presentation_content" style="height:100px;">
				<span class="presentation_title">Contact Us</span>
			</div>
			<div class="presentation_contact_div">
			    <span class="presentation_contact_greeting">Hey!</span><br />
			    <span class="presentation_contact_title">We're <b>Ready Ready Moving!</b></span><br />
			 	<div class="presentation_contact_subtitle">Please fill out the form below to be contacted immediately.</div>  
				<form id="contact_form">
				  <div class="row">
					  <div class="col-xs-12 col-md-12">
						  <input class="presentation_contact_textbox" name="name" type="text" class="form-control" placeholder="Name">
					  </div>
				  </div> 
				  <div class="row">
					  <div class="col-xs-6 col-md-6">
						  <input class="presentation_contact_textbox" name="phone" type="text" class="form-control" placeholder="Phone">
					  </div>
					  <div class="col-xs-6 col-md-6">
						  <input class="presentation_contact_textbox" name="email" type="email" class="form-control" placeholder="Or Email">
					  </div>
				  </div>
				  <button id="contact_form_submit_button" type="submit" class="btn btn-success presentation_contact_submit_button text-uppercase" onclick="submit_contact_form(); return false;">Send</button>
				</form>
				<span id="form-message"></span>
			</div>
		</div>
	</div>	
	<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
	<?php include '../js/main.php'; ?>
	<script type="text/javascript"> 
		function submit_contact_form(){
			$("#contact_form_submit_button").hide();
			$( "#form-message" ).html( "<i>Loading..</i>" );
			$.post( "submit_contact.php", $( "#contact_form" ).serialize() )
			  .done(function( data ) {
				$( "#form-message" ).html( data );
			  })
			  .fail(function() {
				alert( "There was an network error. Please try again." );
				$( "#form-message" ).html( "" );
			  })
			  .always(function() {
			  	$("#contact_form_submit_button").show();
			  });
		}
	</script>
</body>
</html>