<!--footer-->
<div class="footer mt-30">
	<div class="container">
		<div class="row py-1 py-md-2 px-lg-0">
			<div class="col-lg-4 footer-col1 pt-lg-3">
				<div class="row flex-column flex-md-row flex-lg-column">
					<div class="col-md col-lg-auto">
						<div class="footer-logo">
							<img src="<?php echo base_url('front/');?>images/logo.jpg" alt="" class="img-fluid">
						</div>
						<div class="mt-2 mt-lg-0"></div>
						<div class="footer-social d-none d-md-block d-lg-none">
							<a href="<?php echo $getwebsetting->website_facebook; ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="<?php echo $getwebsetting->website_twitter; ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<!--<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>-->
							<a href="<?php echo $getwebsetting->website_instagram; ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
					<div class="col-md">
						<div class="footer-text mt-1 mt-lg-1">
							<p>Sheetal Chhaya Diagnostics serves as a versatile platform that provides you with a complete medical report after conducting your blood test.Our proficient team of diagnosticians, doctors and lab assistants makes sure you receive a reliable and cost-effective service. </p>
						
						</div>
						<div class="footer-social d-md-none d-lg-block">
							<a href="<?php echo $getwebsetting->website_facebook; ?>" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="<?php echo $getwebsetting->website_twitter; ?>" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<!--<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>-->
							<a href="<?php echo $getwebsetting->website_instagram; ?>" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Contact Info</h3>
				<div class="h-decor"></div>
				<ul class="icn-list">
					<li><i class="icon-placeholder2"></i><?php echo str_replace("^","'",$getcontact->address); ?>
						<br>
					
					</li>
					<li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap"><?php echo str_replace("^","'",$getcontact->mobile_no); ?></span>, <span class="text-nowrap"><?php echo str_replace("^","'",$getcontact->phone_no); ?></span></span></b>
						
					</li>
					<li><i class="icon-black-envelope"></i><a href="mailto:<?php echo str_replace("^","'",$getcontact->email_id); ?>"><?php echo str_replace("^","'",$getcontact->email_id); ?></a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-4">
				<h3>Our Location</h3>
				<div class="h-decor"></div>
					<div class="google-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.537488602159!2d77.08779572543834!3d28.59171352973543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b42e3cdc165%3A0x40f68d483ba6fbd4!2sSheetal%20Chhaya%20Diagnostics!5e0!3m2!1sen!2sin!4v1658207799761!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
			
			</div>
		</div>
	</div>
	<div class="footer-bottom " style="margin-top:30px">
		<div class="container">
			<div class="row text-center text-md-left">
				<div class="col-sm">Website Developed by <a href="https://www.codesparrow.org/">CodeSparrow</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
					<a href="#">Privacy Policy</a></div>
				<div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<b><?php echo str_replace("^","'",$getcontact->phone_no); ?></b></div>
			</div>
		</div>
	</div>
</div>
<!--//footer-->