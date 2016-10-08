<div class="row footer">
	<div class="col-xs-12 col-md-3 footer_div">
		<div class="footer_title text-uppercase">Info</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/comingsoon/';">Search</div>
		<div class="footer_link">&copy; <?php echo date("Y"); ?> Ready Ready Moving</div>
		<i>Powered by</i><br /><a href="http://www.wavelinkllc.com/" target="_blank"><img class="wavelink_logo" src="http://www.wavelinkllc.com/images/WaveLink_Logo-Grayscale.png" alt="Wave Link, LLC"></a>
	</div>
	<div class="col-xs-12 col-md-3 footer_div">
		<div class="footer_title text-uppercase">Quick Links</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/';">Home</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/services/';">Services</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/about/';">About</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/gallery/';">Gallery</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/pricing/';">Pricing</div>
		<div class="footer_link" onclick="location.href='http://www.readyreadymoving.com/contact/';">Contact</div>
	</div>
	<div class="col-xs-12 col-md-3 footer_div">
		<div class="footer_title text-uppercase">Social</div>
		<h4>
			<i class="fa fa-facebook" onclick="window.open('<?php echo $setting['facebook_link']; ?>');"></i><br />
			<i class="fa fa-twitter" onclick="window.open('<?php echo $setting['twitter_link']; ?>');"></i>
		</h4>
	</div>
	<div class="col-xs-12 col-md-3 footer_div">
		<div class="footer_title text-uppercase">Contact Us</div>
		<div class="footer_link"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $setting['email']; ?></div>
		<div class="footer_link"><i class="fa fa-mobile"></i>&nbsp;&nbsp;<?php echo $setting['phone']; ?></div>
	</div>
</div>