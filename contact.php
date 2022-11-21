<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<title><?php echo str_replace("^","'",$pgcontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_keyword); ?>">
        <meta name="description" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_desc); ?>">
<?php include("analytics.php");?>

</head>
<body>
    <?php include("header1.php");?>

 
<div class="page-content">
    
    <!--section-->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md col-lg-5">
					<div class="pr-0 pr-lg-8">
						<div class="title-wrap">
							<h2>Get In Touch With Us</h2>
							<div class="h-decor"></div>
						</div>
						<div class="mt-2 mt-lg-4">
							<p>For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.</p>
							<p class="p-sm">Fields marked with a * are required.</p>
						</div>
						<div class="mt-2 mt-md-5"></div>
						<h5>Stay Connected</h5>
						<div class="content-social mt-15">
							<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
							<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
							<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
							<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md col-lg-6 mt-4 mt-md-0">
					<form class="contact-form"method="post" action="<?php echo base_url('home/processcontact/');?>" novalidate="novalidate">
					 <?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
					
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div>
							<input type="text" class="form-control" name="name" placeholder="Your name*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="email" placeholder="Email*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="phone" placeholder="Your Phone">
						</div>
						<div class="mt-15">
							<textarea class="form-control" name="message" placeholder="Message"></textarea>
						</div>
						<div class="mt-3">
							<button type="submit" name="sendmail" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-5">
		<div class="contact-map">
<?php echo str_replace("^","'",$getcontact->google_map); ?>	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-5 ">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<div class="title-wrap">
						<h5>Clinic Location</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-placeholder2"></i> <?php echo str_replace("^","'",$getcontact->address); ?>
						</li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>Contact Info</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-telephone"></i>Phone: <span class="theme-color"> <a href="tel:<?php echo str_replace("^","'",$getcontact->mobile_no); ?>"> <?php echo str_replace("^","'",$getcontact->mobile_no); ?></a>
							 <br> Phone:<span class="theme-color"><span class="text-nowrap"><a href="tel:<?php echo str_replace("^","'",$getcontact->phone_no); ?>"> <?php echo str_replace("^","'",$getcontact->phone_no); ?></a></span>
								</span>
						</li>
						<li><i class="icon-black-envelope"></i><a href="mailto:<?php echo str_replace("^","'",$getcontact->email_id); ?>"><?php echo str_replace("^","'",$getcontact->email_id); ?></a></li>
					</ul>
				</div>
				<div class="col-md mt-3 mt-md-0">
					<div class="title-wrap">
						<h5>Working Time</h5>
						<div class="h-decor"></div>
					</div>
					<ul class="icn-list-lg">
						<li><i class="icon-clock"></i>
							<div>
								<div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 - 20:00</span></div>
								<div class="d-flex"><span>Friday</span><span class="theme-color">07:00 - 22:00</span></div>
								<div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	
</div>
<!--footer-->
<?php include("footer1.php");?>
<!--//footer-->s
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>  
<?php include("script.php");?>

</body>
</html>