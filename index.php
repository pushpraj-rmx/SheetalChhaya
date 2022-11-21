<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-241145775-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-241145775-1');
</script>

<head>
<meta charset="utf-8">
<?php 
		/*?><title><?php echo str_replace("^","'",$pghomecontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_keyword); ?>">
		<meta name="description" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_desc); ?>"><?php */
?>

<!-- Stylesheets -->
<?php include("analytics.php");?>

</head>
<a href="https://wa.me/<?php echo str_replace("^","'",$getcontact->whatsapp_no); ?>" class="float" target="_blank" style="text-decoration: none">
<i class="icofont-brand-whatsapp"></i>
</a>
<body class="shop-page layout-medlab">
    <div class="settings-panel">
	<div class="settings-panel-buy-now"><a href="#" target="_blank" class="settings-panel-btn btn-primary"> <img src="<?php echo base_url(); ?>front/images/bni.png" alt="">  </a></div>

</div>
<!--header-->
 <?php include("header1.php");?>
<!--//header-->
<div class="page-content">
	<!--section slider-->
	<div class="section mt-0">
		<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
			<div class="quickLinks js-quickLinks closed">
				<div class="container">
					<div class="row no-gutters">
						<div class="col">
							<a href="#" class="link">
								<i class="icon-placeholder"></i><span>Location</span></a>
							<div class="link-drop p-0">
								<div class="google-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.537488602159!2d77.08779572543834!3d28.59171352973543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b42e3cdc165%3A0x40f68d483ba6fbd4!2sSheetal%20Chhaya%20Diagnostics!5e0!3m2!1sen!2sin!4v1658207799761!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
								</div>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-clock"></i><span>Book Package</span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Package Booking</h5>
								<form id="" method="post"  action="<?php echo base_url('home/processpackage/');?>" novalidate>
								    <?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
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
										<input name="name" type="text" class="form-control" placeholder="Your Name"/>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
												<input name="email" type="text" class="form-control" placeholder="Your Email"/>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
												<input name="phone" type="text" class="form-control" placeholder="Your Phone"/>
											</div>
										</div>
									</div>
										<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-micro"></i>
										</span>
										<select name="category" class="form-control" >
										    <option selected="selected" disabled="disabled">Package Category</option>
										     <?php $squery = $this->db->query("select * from tbl_product_category where pg_status='Active'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
											
											<option ><?php echo str_replace("^","'",$getserdata->product_category);?></option>
											<?php }$i++;}?>
										</select>
									</div>
									<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-micro"></i>
										</span>
										<select name="test" class="form-control">
										    <option selected="selected" disabled="disabled">Package</option>
										     <?php $squery = $this->db->query("select * from tbl_product where pg_status='Active'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
											
											<option ><?php echo str_replace("^","'",$getserdata->product_title);?></option>
											<?php }$i++;}?>
										</select>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col-sm-6">
											<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="bdate" type="text" class="form-control datetimepicker" placeholder="bDate" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-6 mt-1 mt-sm-0">
											<div class="input-group flex-nowrap">
													<span>
															<i class="icon-clock"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="time" type="text" class="form-control timepicker" placeholder="Time" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="text-right mt-2">
										<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Book Test </span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Test Booking</h5>
								<form id="" method="post"  action="<?php echo base_url('home/processtest/');?>"novalidate>
								    <?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
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
										<input name="name" type="text" class="form-control" placeholder="Your Name"/>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
												<input name="email" type="text" class="form-control" placeholder="Your Email"/>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
												<input name="phone" type="text" class="form-control"  placeholder="Your Phone"/>
											</div>
										</div>
									</div>
										<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-micro"></i>
										</span>
										<select name="category" class="form-control" >
										    <option selected="selected" disabled="disabled">Test Category</option>
										     <?php $squery = $this->db->query("select * from tbl_service_category where pg_status='Active'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
											
											<option ><?php echo str_replace("^","'",$getserdata->service_category);?></option>
											<?php }$i++;}?>
										</select>
									</div>
									<div class="selectWrapper input-group mt-1">
											<span>
											<i class="icon-micro"></i>
										</span>
										<select name="test" class="form-control">
										    <option selected="selected" disabled="disabled">Test</option>
										     <?php $squery = $this->db->query("select * from tbl_service where pg_status='Active' ");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
											
											<option><?php echo str_replace("^","'",$getserdata->service_title);?></option>
											<?php }$i++;}?>
										</select>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col-sm-6">
											<div class="input-group flex-nowrap">
													<span>
														<i class="icon-calendar2"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="bdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-6 mt-1 mt-sm-0">
											<div class="input-group flex-nowrap">
													<span>
															<i class="icon-clock"></i>
													</span>
												<div class="datepicker-wrap">
													<input name="time" type="text" class="form-control timepicker" placeholder="Time" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="text-right mt-2">
										<button type="submit" name="sendmail" class="btn btn-sm btn-hover-fill">Request</button>
									</div>
								</form>
							</div>
						</div>
							<div class="col">
							<a href="#" class="link">
								<i class="icon-pencil-writing"></i><span>Franchise Booking </span>
							</a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Apply NOW</h5>
								<form  method="post" action="<?php echo base_url('home/processfrnc/');?>" novalidate>
									<div class="successform">
										<?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
									</div>
									<div class="errorform">
										<p>Something went wrong, try refreshing and submitting the form again.</p>
									</div>
									<div class="input-group">
											<span>
											<i class="icon-user"></i>
										</span>
										<input name="name" type="text" class="form-control" placeholder="Your Name"/>
									</div>
									<div class="row row-sm-space mt-1">
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-email2"></i>
												</span>
												<input name="email" type="text" class="form-control" placeholder="Your Email"/>
											</div>
										</div>
										<div class="col">
											<div class="input-group">
													<span>
													<i class="icon-smartphone"></i>
												</span>
												<input name="phone" type="text" class="form-control" placeholder="Your Phone"/>
											</div>
										</div>
									</div>
									
									
									<div class="text-right mt-2">
										<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
									</div>
								</form>
							</div>
						</div>
						
						
						<div class="col">
							<a href="#" class="link">
								<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
							<div class="link-drop">
								<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
								<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
								<ul class="icn-list">
									<li><i class="icon-telephone"></i><span class="phone"> +91 8810511367<br>+91 9868704466</span>
									</li>
									<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@Sheetalchhaya.com</a></li>
								</ul>
								<p class="text-right mt-2"><a href="<?php echo base_url('contact-us');?>" class="btn btn-sm btn-hover-fill link-inside">Our Contacts</a></p>
							</div>
						</div>
						<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
					</div>
				</div>
				<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
			</div>
		</div>
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="loader-dna">
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
					<column>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
					</column>
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
				</div>
			</div>
			<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
			<?php
                             foreach($getbanr as $bnrresult)
                             {
	                         ?>
			
				<div class="slide">
					<div class="img--holder" data-bg="<?php echo base_url('upload/');?>banner/<?=$bnrresult->image;?>"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<!--<div class="container">-->
								<!--	<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><br>-->
								<!--		<b><?php echo str_replace("^","'",$bnrresult->banner_title); ?></b></div>-->
								<!--	<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Sheetal Chhaya Diagnostics center</div>-->
								<!--	<div class="slide-btn"><a href="services.html" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>-->
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<!--//section slider-->
	<!--section departments-->
	<div class="section bg-bottom bg-right bg-norepeat bg-md-none bg-fixed section-bottom-padding " style="background-image: url(<?php echo base_url('front/');?>images/bg-bottom-right.png)">
		<div class="container">
			<div class="row mt-lg-4">
			    	<div class="col-lg-6 col-xl-6 pr-xl-7 d-lg-none ">
			    	     <div class="department-tabs2 homehide">
						<div class="department-tab2">
							<div class="department-tab2-number">1</div>
							<div class="department-tab2-text">Latest Equipment</div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">2</div>
							<div class="department-tab2-text">Quality Service</div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">3</div>
							<div class="department-tab2-text">Skilled Team</div>
							<div class="department-tab2-decor"></div>
						</div>
						<div class="department-tab2">
							<div class="department-tab2-number">4</div>
							<div class="department-tab2-text">Positive Reviews</div>
							<div class="department-tab2-decor"></div>
						</div>
					</div>
			    	</div>
			<div class="col-lg-6 d-none d-lg-block">
			   
						<img src="<?php echo base_url('upload/');?><?php echo str_replace("^","'",$pghomecontent->image); ?>" alt="" class="img-fluid">
					</div>
				<div class="col-md-6 col-xl-6">
					<div class="department-carousel2">
						<div class="department-item">
							<div class="h-sub theme-color">About us</div>
							<?php echo str_replace("^","'",$pghomecontent->description); ?>
							<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>schedule a visit</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section  departments-->
	<!--section-->
	<div class="section bg-grey mt-md-0">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="General Tests"><span>General<span class="clearfix d-sm-none"></span> Diagnostic Tests</span></h2>
				<div class="h-decor"></div>
			</div>
			<div class="nav nav-pills-icons js-nav-pills-carousel" role="tablist">
			     <?php $squery = $this->db->query("select * from tbl_service where pg_status='Active' and home_page_showing_status='Yes'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
      
				<a class="nav-link <?php if($i==1) { ?>  active<?php } ?>" data-toggle="pill" href="#tab-<?php echo $i;?>" role="tab"><i class="<?php echo str_replace("^","'",$getserdata->icon);?>"></i><span><?php echo str_replace("^","'",$getserdata->service_title);?></span></a>
			<?php }$i++;}?>
			</div>
			<div id="tab-content" class="tab-content mt-2 mt-sm-4">
			     <?php $squery = $this->db->query("select * from tbl_service where pg_status='Active' and home_page_showing_status='Yes'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
				<div id="tab-<?php echo $i;?>" class="tab-pane fade <?php if($i==1) { ?>show active<?php } ?>" role="tabpanel">
					<div class="tab-bg"><img src="<?php echo base_url(); ?>front/images/content/bg-map.png" alt=""></div>
					<div class="row">
						<div class="col-md-6 h-100 mb-2 mb-md-0">
						    
							<img src="<?php echo base_url(); ?>upload/service/<?php echo $getserdata->image;?>" alt="" class="img-fluid">
						</div>
						<div class="col-md-6">
							<div class="pt-xl-1">
								<h3><?php echo str_replace("^","'",$getserdata->service_title);?></h3>
								<p><?php echo str_replace("^","'",$getserdata->description);?></p>
								<ul class="marker-list-md">
									<li><?php echo str_replace("^","'",$getserdata->tat);?></li>
									<li><?php echo str_replace("^","'",$getserdata->advise);?></li>
									<li><?php echo str_replace("^","'",$getserdata->price);?></li>
									
								</ul>
								<a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>order test</span><i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				
				
				<?php }$i++;}?>
			</div>
		</div>
	</div>
	<!--//section-->
	
<div class="section">
		<div class="container-fluid px-0">
			<div class="banner-center bg-cover" style="background-image: url(<?php echo base_url('front/');?>banner-center.jpg)">
				<div class="banner-center-caption text-center">
					<div class="banner-center-text1-1">Online Appointments &amp; Prescriptions</div>
					<div class="banner-center-text5 max-450-md">You can now book a limited amount of doctors’ appointments online
					</div>
					<a href="<?php echo base_url('contact-us');?>" class="btn mt-2 mt-sm-3 mt-lg-5"><i class="icon-right-arrow"></i><span>Contact Us</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>


<!--section services-->
	<div class="page-content">
	
	<!--//section-->
	<div class="section">
		<div class="container ">
			<div class="title-wrap text-center">
				<h2 class="h1">Health Packages</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row specialist-carousel js-specialist-carousel ">
			    
				<?php $squery = $this->db->query("select * from tbl_product where pg_status='Active' ");
					$getservicehp=$squery->result();
       foreach($getservicehp as $getserdata)
       { $scquery = $this->db->query("select * from tbl_product_category");
					$getctserdata=$scquery->row();
      ?>
				<div class="col-sm-6 col-md-4 ">
					<div class="service-card">
					    <div class="service-card-photo">
							<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><img src="<?php echo base_url(); ?>upload/product/<?php echo $getserdata->image;?>" class="img-fluid" alt=""></a>
						
						</div>
					    
					    
					
						<h5 class="service-card-name" style="text-align:left"><a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->product_title);?></a></h5>
						
						<div class="h-decor"></div>
						<div class="doctor-box-text" style="text-align:left">
							<p><?php echo str_replace("^","'",$getserdata->sort_description);?></p>
						</div>
						<div style="text-align:left" >
						    <ul class="marker-list-md-line">
						    <?php echo str_replace("^","'",$getserdata->test_names);?>
						    </ul>
						</div>
						<div class="doctor-box-bottom">
							<div class="prices-box-link">
									<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>" class="btn-link btn-link--sm"><span>View All</span><i class="icon-right-arrow"></i></a>
								</div>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
	<!--//section  services-->
	
	

<div class="section bg-grey-lg mt-0">
			<div class="container">
				<div class="title-wrap">
					<h2 class="h1">Exceptional Service, Exceptional Care</h2>
					<div class="h-decor"></div>
				</div>
				
				<div class="row shop-tracking-status d-none d-lg-block">

        <div class="col-md-12">
            <div class="well">





                <div class="order-status">

                    <div class="order-status-timeline">
                        <!-- class names: c0 c1 c2 c3 and c4 -->
                        <div class="order-status-timeline-completion c4"></div>
                    </div>

                    <div class="image-order-status image-order-status-new active img-circle">
                        <span class="status">Phlebotomists arrival</span>
                        <div class="icon"></div>
                    </div>
                    <div class="image-order-status image-order-status-active active img-circle">
                        <span class="status">Sample Collected</span>
                        <div class="icon"></div>
                    </div>
                    <div class="image-order-status image-order-status-intransit active img-circle">
                        <span class="status">Sample Arrived</span>
                        <div class="icon"></div>
                    </div>
                    <div class="image-order-status image-order-status-delivered active img-circle">
                        <span class="status">Processing</span>
                        <div class="icon"></div>
                    </div>
                    <div class="image-order-status image-order-status-completed active img-circle">
                        <span class="status"> Report</span>
                        <div class="icon"></div>
                    </div>

                </div>


            </div>
        </div>

    </div>
    
    
     

				<div class="row">
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">01.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pghomecontent->extera_title1); ?></div>
							<div class="icn-text-num-text">
<p><?php echo str_replace("^","'",$pghomecontent->extera_text1); ?><</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">02.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pghomecontent->extera_title2); ?></div>
							<div class="icn-text-num-text">
<p><?php echo str_replace("^","'",$pghomecontent->extera_text2); ?></p>							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">03.</div>
							<div class="icn-text-num-title"><?php echo str_replace("^","'",$pghomecontent->extera_title3); ?></div>
							<div class="icn-text-num-text">
								<p><?php echo str_replace("^","'",$pghomecontent->extera_text3); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
			<!--section contact-->
	<div class="section bg-norepeat bg-bottom bg-left bg-md-none bg-fixed section-bottom-padding-half section-top-padding" style="background-image: url(<?php echo base_url('front/');?>images/bg-bottom-left2.png)">
		<div class="banner-appointment-form">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 col-lg-5 order-2 order-sm-2 mt-3 mt-md-0 text-center">
						<img src="<?php echo base_url('front/');?>images/content/banner-appointment.png" alt="" class="banner-appointment-form-image">
					</div>
					<div class="col-sm-7 col-lg-7 order-1 order-sm-1 d-flex">
						<div class="pt-2 pt-lg-6 px-lg-3 text-center">
							<div class="title-wrap-alt">
								<h2 class="double-title double-title--vcenter double-title--center" data-title="Appointment"><span>Make an <span class="theme-color">Appointment</span></span></h2>
							</div>
							<p>We believe in providing the best possible care to all our existing patients and welcome
								new patients to sample.</p>
							<form class="contact-form" method="post" action="<?php echo base_url('home/processcontact/');?>" novalidate>
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
								<div class="row row-sm-space mt-15">
									<div class="col-sm-6"><input type="text" class="form-control" name="phone" placeholder="Your Phone"></div>
									<div class="col-sm-6 mt-15 mt-sm-0"><input type="text" class="form-control" name="email" placeholder="Email*"></div>
								</div>
								<div class="mt-15">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<div class="mt-2 mt-lg-4">
									<button type="submit" name="sendmail" class="btn"><i class="icon-right-arrow"></i><span>Send request</span><i class="icon-right-arrow"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section contact-->
	
	<!--section blog posts -->
		<div class="section bg-grey-lg mt-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="title-wrap text-center text-md-left">
							<h2 class="h1">Latest News</h2>
							<div class="h-decor"></div>
						</div>
						<div class="blog-grid blog-grid-carousel js-blog-grid-carousel mt-md-3 mb-0 row">
						
						<?php $squery = $this->db->query("select * from tbl_blog where pg_status='Active' ");
					$getbloghp=$squery->result();
       foreach($getbloghp as $getblogdata)
       { $scquery = $this->db->query("select * from tbl_blog_category");
					$getctblogdata=$scquery->row();
      ?>
            <div class="col-sm-6">
								<div class="blog-post">
									<div class="post-image">
										<a href="blog-post-page.html"><img src="<?php echo base_url(); ?>upload/blog/<?php echo $getblogdata->image;?>" alt=""></a>
									</div>
									<div class="blog-post-info">
										<div class="post-date">17<span>JAN</span></div>
										<div>
											<h2 class="post-title"><a href="blog-post-page.html"><?php echo str_replace("^","'",$getblogdata->blog_title);?></a></h2>
										</div>
									</div>
									<div class="post-teaser"><?php echo str_replace("^","'",$getblogdata->sort_description);?></div>
									<div class="mt-2 mt-lg-3"><a href="<?php echo base_url('blogss/');?><?php echo $getblogdata->pg_url;?>/<?php echo $getblogdata->pg_url;?>" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<div class="col-lg-4 mt-6 mt-lg-0">
						<div class="testimonial-card">
							<div class="h-sub">What People Says</div>
							<h2 class="h1">Patient <span class="theme-color">Testimonials</span></h2>
							<div class="testimonial-card-carousel js-testimonial-card-carousel">
							    	<?php $squery = $this->db->query("select * from tbl_testimonial where pg_status='Active' ");
					$gettesthp=$squery->result();
       foreach($gettesthp as $gettestdata)
       { $scquery = $this->db->query("select * from tbl_testimonial");
					$getcttestdata=$scquery->row();
      ?>
								<div>
									<div class="testimonial-card-text"><?php echo str_replace("^","'",$gettestdata->description);?></div>
									<div class="testimonial-card-author"><span class="testimonial-card-name">–<?php echo str_replace("^","'",$gettestdata->client_name);?>, </span><span class="testimonial-card-position"><?php echo str_replace("^","'",$gettestdata->client_designation);?></span></div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->


	<!--section specialists-->
	<div class="section bg-norepeat bg-right bg-md-none section-top-padding" style="background-image: url(images/bg-top-right.png);margin-bottom:80px;">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Perfect Team</div>
				<h1 class="double-title double-title--center double-title--vcenter" data-title="Perfect Team"><span>A Professional & Care Provider</span></h1>
				<div class="h-decor"></div>
			</div>
		
			<div class="row specialist-carousel js-specialist-carousel">
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-01.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Frank Bigham</a></h5>
							<div class="doctor-box-position">Medical Director</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-02.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Stuart Orozco</a></h5>
							<div class="doctor-box-position">Tissue Bank Director</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-03.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Betty Bone</a></h5>
							<div class="doctor-box-position">Embryologist</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-04.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Robert Rush</a></h5>
							<div class="doctor-box-position">Psychiatrist</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category1">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-05.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Terri Williams</a></h5>
							<div class="doctor-box-position">Psychiatrist</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 category2">
					<div class="doctor-box doctor-box-style3 text-center">
						<div class="doctor-box-photo">
							<a href="doctor-page.html"><img src="<?php echo base_url('front/');?>images/content/doctor-06.jpg" class="img-fluid" alt=""></a>
							<div class="doctor-box-links">
								<a href="#"><i class="icon-facebook-logo"></i></a>
								<a href="#"><i class="icon-google-logo"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
							</div>
						</div>
						<div class="doctor-box-top">
							<h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Berry Gardner</a></a></h5>
							<div class="doctor-box-position">Cardiolog</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section specialists-->




<?php include("footer1.php");?>
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Ask a Question</h3>
					<form class="mt-15"  action="<?php echo base_url('home/processcontact/');?>" method="post" novalidate>
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
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
							<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
						</div>
						<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
							<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
						</div>
						<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
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
					<form class="mt-15" action="<?php echo base_url('home/processtest/');?>" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
					
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
							<select name="test" class="form-control">
								<option selected="selected" disabled="disabled">Select Service</option>
								<?php $squery = $this->db->query("select * from tbl_service where pg_status='Active' and home_page_showing_status='Yes'");
					$getservicehp=$squery->result();
					$i=1;
       foreach($getservicehp as $getserdata)
       { {
      ?>
								<option ><?php echo str_replace("^","'",$getserdata->service_title);?></option>
							<?php }$i++;}?>
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="time" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
					
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Vendors -->

<?php include("script.php");?>
<?php echo file_get_contents("https://handle.inspiroxindia.in/plugin.php?id=IX20222023-00038&mode=body"); ?>
<script>

</body>
    </html>