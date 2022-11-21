<header class="header">
	<div class="header-quickLinks js-header-quickLinks d-lg-none">
		<div class="quickLinks-top js-quickLinks-top"></div>
		<div class="js-quickLinks-wrap-m">
		</div>
	</div>
	<div class="header-topline d-none d-lg-flex">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-auto d-flex align-items-center">
					<div class="header-info"><i class="icon-placeholder2"></i>F-82/3, Solanki Chowk, Sadh Nagar II Palam </div>
					<div class="header-phone"><i class="icon-telephone"></i><a href="tel:<?php echo str_replace("^","'",$getcontact->mobile_no); ?>"><?php echo str_replace("^","'",$getcontact->mobile_no); ?></a></div>
					<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@sheetalchhayadiagnostics.com">info@sheetalchhayadiagnostics.com</a></div>
				</div>
				<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="<?php echo $getwebsetting->website_facebook; ?>" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="<?php echo $getwebsetting->website_twitter; ?>" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="<?php echo $getwebsetting->website_instagram; ?>" class="hovicon"><i class="icon-instagram-circle"></i></a>
							<a href="<?php echo $getwebsetting->website_youtube; ?>" class="hovicon"><i class="fa fa-youtube-play circle"></i></a>
							<a href="<?php echo $getwebsetting->website_linkedin; ?>" class="hovicon"><i class="fa fa-linkedin circle"></i></a>
							
				</div>
			</div>
		</div>
	</div>
	<div class="header-content">
		<div class="container">
			<div class="row align-items-lg-center">
				<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
					<span class="icon-menu"></span>
				</button>
				<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
					<a href="<?php echo base_url();?>" class="header-logo"><img src="<?php echo base_url('front/');?>images/logo.jpg" alt="" class="img-fluid"></a>
				</div>
				<div class="col-lg ml-auto header-nav-wrap">
					<div class="header-nav js-header-nav">
						<nav class="navbar navbar-expand-lg btco-hover-menu">
							<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url();?>">HOME</a>
									</li>
								
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('about-us');?>">ABOUT US</a>
									</li>
								<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('our-product');?>">PACKAGES</a>
									</li>
									
									<li class="nav-item dropdown">
										<a href="<?php echo base_url('blog');?>" class="nav-link dropdown-toggle" data-toggle="dropdown">BLOG</a>
										
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url('contact-us');?>">CONTACT</a>
									</li>
									<li class="nav-item">
									    <a href="http://122.160.140.108/SheetalReport/PatientLogin.aspx">
									    <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Download Reports</span><i class="icon-right-arrow"></i></button></a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</header>