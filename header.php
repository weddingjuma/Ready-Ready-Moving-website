<div class="row upper_header">
	<div class="col-xs-hide col-md-1"></div>
	<div class="col-xs-hide col-md-7 header_headline_div">
		<i class="fa fa-star"></i>&nbsp;&nbsp;<i><?php echo $setting['headline']; ?></i>
	</div>
	<div class="col-xs-4 col-md-1 header_social_div">
		<h3>
			<i class="fa fa-facebook" onclick="window.open('<?php echo $setting['facebook_link']; ?>');"></i>&nbsp;&nbsp;
			<i class="fa fa-twitter" onclick="window.open('<?php echo $setting['twitter_link']; ?>');"></i>
		</h3>
	</div>
	<div class="col-xs-7 col-md-2">
		<table>
			<tr>
				<td>
					<a href="mailto:<?php echo $setting['email']; ?>" class="btn btn-success header_email_button">
						<i class="fa fa-envelope"></i>
					</a>
				</td>
				<td>&nbsp;</td>
				<td>
					<a href="tel:<?php echo $setting['phone']; ?>" class="btn btn-success header_call_button">
						<i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $setting['phone']; ?>
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-xs-3 col-md-1"></div>
</div>
<div class="row lower_header">
	<div class="col-xs-hide col-md-1"></div>
	<div class="col-xs-6 col-md-2">
		<img class="header_logo_img" alt="Ready Ready Moving" src="<?php echo $setting['logo']; ?>" />
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/';">
		Home
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/services/';">
		Services
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/about/';">
		About
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/gallery/';">
		Gallery
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/pricing/';">
		Pricing
	</div>
	<div class="col-xs-hide col-md-1 nav_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/contact/';">
		Contact
	</div>
	<div class="col-xs-hide col-md-1 search_button_div" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/comingsoon/';">
		<!--<i class="fa fa-search" onclick=""></i>-->
	</div>
	<div class="col-xs-6 col-md-hide">
		<button id="navigation_button" class="btn btn-default navicon_button" type="button" onclick="toggle_navigation_panel();">
			<i class="fa fa-navicon"></i>
		</button>
	</div>
</div>
<div id="navigation_panel" class="navigation_panel">
	<div class="row">
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/';">Home</div>
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/services/';">Services</div>
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/about/';">About</div>
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/gallery/';">Gallery</div>
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/pricing/';">Pricing</div>
		<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/contact/';">Contact</div>
		<!--<div class="col-xs-12 col-md-hide nav_button_mobile text-uppercase" onclick="location.href='http://<?php echo $_SERVER['SERVER_NAME']; ?>/comingsoon/';"><i class="fa fa-search" onclick=""></i></div>-->
	</div>
</div>
<script>
	function toggle_navigation_panel() {
	    $("#navigation_panel").slideToggle();
	}
</script>