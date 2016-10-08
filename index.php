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
		include 'css/main.php'; 
	?>
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
	<?php include_once("analyticstracking.php") ?>
	<div class="row presentation" style="background-image: url('<?php echo $setting['home_page_background1']; ?>');">
		<div class="col-xs-12 col-md-8 presentation_padding">
			<div class="presentation_content">
				<span class="presentation_title"><?php echo $setting['slogan']; ?></span><br /><br />
				<span class="presentation_subtitle"><?php echo $setting['pitch']; ?></span><br /><br />
				<table>
					<tr>
						<td>
							<div class="widget ng-scope" id="tt-review-widget-star"> <img src="https://static.thumbtackstatic.com/media/logos/thumbtack/wordmark.svg" alt="Thumbtack" class="tt-logo"> <a href="https://www.thumbtack.com/profile/services/3JQaifinT3cWHw/"> <div class="ng-binding">Ready Ready Moving LLC</div> </a> <div id="tt-dynamic">  <img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/review-widget/orange_star.svg"> <img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/review-widget/orange_star.svg"> <img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/review-widget/orange_star.svg"> <img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/review-widget/orange_star.svg"> <img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/review-widget/orange_star.svg"> <span>33 reviews</span> </div> <div class="tt-best-of ng-scope"> <a href="https://www.thumbtack.com/ga/atlanta/moving-and-packing-companies/"> Thumbtack Best of 2015 </a> </div></div><script type='text/javascript' src='https://www.thumbtack.com/profile/widgets/scripts/?service_id=3JQaifinT3cWHw&widget_id=review&type=star'></script>
						</td>
						<td>
							&nbsp;&nbsp;<img src="https://static.thumbtackstatic.com/media/pages/profile/standard-widgets/pro-svg/orange/2015.svg" alt="" style="height:100px; cursor:pointer;" onclick="window.open('https://www.thumbtack.com/profile/services/3JQaifinT3cWHw/');">
						</td>
						<td>
							&nbsp;&nbsp;<img src="http://www.readyreadymoving.com/images/thumbstack.png" alt="Thumbtack Best Pro of 2015" style="height:100px; cursor:pointer;" onclick="window.open('https://www.thumbtack.com/profile/services/3JQaifinT3cWHw/');" />
						</td>
						<td>
							&nbsp;&nbsp;<img ng-src="https://static7.thumbtackstatic.com/media/pages/profile/best-of/best-of-2016.png" src="https://static7.thumbtackstatic.com/media/pages/profile/best-of/best-of-2016.png" alt="Thumbtack Best Pro of 2016" style="height:100px; cursor:pointer;" onclick="window.open('https://www.thumbtack.com/profile/services/3JQaifinT3cWHw/');" /> 
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 presentation_padding">
			<div class="presentation_contact_div">
			    <span class="presentation_contact_greeting">Hey!</span><br />
			    <span class="presentation_contact_title">We're <b>Ready Ready Moving!</b></span><br />
			 	<div class="presentation_contact_subtitle">Please fill out the form below to be contacted immediately.</div>  
				<form id="contact_form">
				  <div class="row">
					  <div class="col-xs-12 col-md-12">
						  <input class="presentation_contact_textbox" class="form-control" name="name" type="text" placeholder="Name">
					  </div> 
				  </div> 
				  <div class="row">
					  <div class="col-xs-6 col-md-6">
						  <input class="presentation_contact_textbox" class="form-control" name="phone" type="text" placeholder="Phone">
					  </div>
					  <div class="col-xs-6 col-md-6">
						  <input class="presentation_contact_textbox" class="form-control"  name="email" type="email" placeholder="Or Email">
					  </div>
				  </div>
				  <button id="contact_form_submit_button" type="submit" class="btn btn-success presentation_contact_submit_button text-uppercase" onclick="submit_contact_form(); return false;">Send</button>
				</form>
				<span id="form-message"></span>
			</div>
		</div>
	</div>	
	<div class="row featured" style="background-image: url('<?php echo $setting['feature1_photo']; ?>');">
		<div class="col-xs-12 col-md-8 featured_padding">
			<div class="featured_content">
				<span class="featured_title"><?php echo $setting['feature1_title']; ?></span><br /><br />
				<span class="featured_subtitle"><?php echo $setting['feature1_description']; ?></span><br /><br />
			</div>
		</div>
	</div>	
	<div class="row featured" style="background-image: url('<?php echo $setting['feature2_photo']; ?>');">
		<div class="col-xs-12 col-md-8 featured_padding">
			<div class="featured_content">
				<span class="featured_title"><?php echo $setting['feature2_title']; ?></span><br /><br />
				<span class="featured_subtitle"><?php echo $setting['feature2_description']; ?></span><br /><br />
			</div>
		</div>
	</div>
	<div class="row featured" style="background-image: url('<?php echo $setting['feature3_photo']; ?>');">
		<div class="col-xs-12 col-md-8 featured_padding">
			<div class="featured_content">
				<span class="featured_title"><?php echo $setting['feature3_title']; ?></span><br /><br />
				<span class="featured_subtitle"><?php echo $setting['feature3_description']; ?></span><br /><br />
			</div>
		</div>
	</div>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>
	<?php include 'js/main.php'; ?>
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