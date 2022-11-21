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
<!-- Stylesheets -->
 <?php include("analytics.php");?>

</head>
<body>
     <?php include("header1.php");?>
    <div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>About Us</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">We are working for your smile</div>
				<h1>About Our Lab</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left pr-md-4">
					<img src="<?php echo base_url('upload/');?><?php echo str_replace("^","'",$pgcontent->image); ?>" class="w-100" alt="">
				
				</div>
				<div class="col-lg-6 mt-3 mt-lg-0">
				    <?php echo str_replace("^","'",$pgcontent->description); ?>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->

	<!--section-->
	<div class="section mt-6 bg-grey">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Motivation is easy</div>
				<h2 class="h1">Our Core Values</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-innovation"></i></div>
						<div>
							<h5 class="icn-text-title"><?php echo str_replace("^","'",$pgcontent->extera_title1); ?></h5>
							<p><?php echo str_replace("^","'",$pgcontent->extera_text1); ?></p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-compassion"></i></div>
						<div>
							<h5 class="icn-text-title"><?php echo str_replace("^","'",$pgcontent->extera_title2); ?></h5>
							<p><?php echo str_replace("^","'",$pgcontent->extera_text2); ?></p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-integrity"></i></div>
						<div>
							<h5 class="icn-text-title"><?php echo str_replace("^","'",$pgcontent->extera_title3); ?></h5>
							<p><?php echo str_replace("^","'",$pgcontent->extera_text3); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="banner-center bg-cover" style="background-image: url(<?php echo base_url('front/');?>images/content/banner-center.jpg)">
				<div class="banner-center-caption text-center">
					<div class="banner-center-text1">Get the Smile You've Always Wanted!</div>
					<div class="banner-center-text2">We strive to provide the highest quality dental treatment at reasonable fees</div>
					<a href="#" class="btn btn-white mt-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an Appointment</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--section-->
	
	<div class="section bg-grey-lg mt-0">
			<div class="container">
				<div class="title-wrap">
					<h2 class="h1">Why Choose Us</h2>
					<div class="h-decor"></div>
				</div>
					<div class="row">
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">01.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pgcontent->extera_title4); ?></div>
							<div class="icn-text-num-text">
<p><?php echo str_replace("^","'",$pgcontent->extera_text4); ?></p>		
</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">02.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pgcontent->extera_title5); ?></div>
							<div class="icn-text-num-text">
<p>
    <?php echo str_replace("^","'",$pgcontent->extera_text5); ?>
</p>							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">03.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pgcontent->extera_title6); ?></div>
							<div class="icn-text-num-text">
							<p>
							    <?php echo str_replace("^","'",$pgcontent->extera_text6); ?>
							</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--section-->
	<div class="section mt-8">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="title-wrap">
						<h2 class="h1">Our Office </h2>
						<div class="h-decor"></div>
					</div>
					<p>Our dental office in is a state of the art dental facility equipped with the newest technology, capable of handling all of your dental needs. All of our operatories are equipped with intraoral cameras that are able to show us, and you, the precise treatment you might attain on a television screen.</p>
					<div class="mt-4"></div>
					<h3>Amenities</h3>
					<div class="mt-lg-4"></div>
					<ul class="marker-list-md">
						<li>TV’s in each treatment room</li>
						<li>Complimentary coffee, Juice</li>
						<li>Wireless Internet</li>
						<li>Warm lavender towels</li>
					</ul>
				</div>
				<div class="col-lg-8 mt-4 mt-lg-0">
					<div class="slider-gallery">
						<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-00.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-01.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-02.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-03.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-04.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-05.jpg" alt=""></li>
						</ul>
						<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-00-sm.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-01-sm.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-02-sm.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-03-sm.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-04-sm.jpg" alt=""></li>
							<li><img src="<?php echo base_url('front/');?>images/content/slider-gallery-05-sm.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<!--footer-->
<?php include("footer1.php");?>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Book an Appointment</h3>
					<form class="mt-15" id="bookingForm" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
									<input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age"/>
								</div>
							</div>
						</div>
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
							<select name="bookingservice" class="form-control">
								<option selected="selected" disabled="disabled">Select Service</option>
								<option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
								<option value="Histology">Histology</option>
								<option value="General Diagnostic Tests">General Diagnostic Tests</option>
								<option value="Naturopathic">Naturopathic</option>
								<option value="Genetics Tests">Genetics Tests</option>
								<option value="Cytology">Cytology</option>
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
						<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 <?php include("script.php");?>
</body>