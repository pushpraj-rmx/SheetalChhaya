<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
	  <title><?php echo str_replace("^","'",$pghomecontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_keyword); ?>">
		<meta name="description" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_desc); ?>">
    <?php include('analytics.php');?>
   </head>
   <body>
   
     <?php include('header.php');?>
	  <main id="tt-pageContent">
         <div class="section-indent no-margin mainSlider-wrapper">
            <div id="js-mainSlider" class="mainSlider">
			   <div class="slide">
                  <div class="img--holder">
                     <picture>
                        <img src="<?php echo base_url('front/');?>images/banner1.jpg" alt="">
                     </picture>
                  </div>
                  <div class="slide-content">
                     <div class="container container-fluid-lg js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                        <div class="tt-text-01">Industry-Leading Guarantee</div>
                        <div class="tt-text-02">Residential<br>& Commercial Sanitizing</div>
                        <div class="tt-text-03">Imagine your home so clean, it’s clinically clean. Free from bacteria and viruses, free from mold and mildew.</div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="img--holder">
                     <picture>
                        <img src="<?php echo base_url('front/');?>images/mainslide-01-sm.webp" alt="">
                     </picture>
                  </div>
				  
                  <div class="slide-content">
                     <div class="container container-fluid-lg js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
                        <div class="tt-text-01">Industry-Leading Guarantee</div>
                        <div class="tt-text-02">Residential<br>& Commercial Sanitizing</div>
                        <div class="tt-text-03">Imagine your home so clean, it’s clinically clean. Free from bacteria and viruses, free from mold and mildew.</div>
                     </div>
                  </div>
               </div>
               <div class="slide">
                  <div class="img--holder">
                     <picture>
                        <img src="<?php echo base_url('front/');?>images/mainslide-02.webp" alt="">
                     </picture>
                  </div>
                  <div class="slide-content">
                     <div class="container container-fluid-lg js-rotation text-center" data-animation="fadeInUpSm" data-animation-delay="0s">
                        <div class="tt-text-01">Professional Sanitizing Service</div>
                        <div class="tt-text-02">Disinfecting & Deodorizing<br>Spray Services</div>
                        <div class="tt-text-03">Our expert cleaners are carefully selected and then fully trained to give them a deep.</div>
                     </div>
                  </div>
               </div>
			
            </div>
         </div>
         <div class="section-indent-extra">
            <div class="container container-fluid-lg no-gutters-lg">
               <div class="added-info row">
                  <a href="<?php echo base_url('contact-us');?>" class="added-info__item col-md-4">
                     <div class="added-info__icon"><i class="icon-484156"></i></div>
                     <div class="added-info__description">
                        <h6 class="added-info__title"><span>Delhi</span></h6>
						K-2068 Ground Floor CR Park New Delhi
                     </div>
                  </a>
                 <a href="<?php echo base_url('contact-us');?>" class="added-info__item col-md-4">
                     <div class="added-info__icon"><i class="icon-484156"></i></div>
                     <div class="added-info__description">
                        <h6 class="added-info__title"><span>Gurgram</span></h6>
                        Arjun Nagar Gurgram
                     </div>
                  </a>
                  <a href="<?php echo base_url('contact-us');?>" class="added-info__item col-md-4">
                     <div class="added-info__icon"><i class="icon-484156"></i></div>
                     <div class="added-info__description">
                        <h6 class="added-info__title"><span>Faridabad</span></h6>
                        Shop No-13 Near BBL Public School Deeraj Nagar Part 12 Sector 30 faridabad
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="section-indent">
            <div class="container container-fluid-lg">
               <div class="title-block">
                  <div class="title-block__label">More than 25 Years of Experience</div>
                  <h1 class="title-block__title">Pest Control Company in Delhi Ncr</h1>
               </div>
               <div class="row">
                  <div class="col-md-12">
                <p>New Sai Pest Control is a name of a highly esteemed service provider engaged in undertaking Pest Control Services in Delhi & NCR. Our Pest Control Services are safe, environment friendly and incur no adverse effect on human life. We are a team of Pest Control Expert in Delhi providing Herbal Pest Control to Home, Offices, Industries, Hotels and Corporate Hubs of Delhi. Our Pest Control Services are effective and cost effective. We are backed by a systematic management and well developed administration we placed our organization as a prominent organization in Delhi. With a rich experience of more than a decade we have successfully proved ourselves as a leading Pest Control Company in Delhi for Domestic, Commercial and Industrial Pest Control. Due to the timely execution of our quality Pest Control Services at reasonable price we have counted as Best in Pest Control Companies of Delhi & NCR

New Sai Pest Control offer complete range of professional Pest Control Services at reasonable costs. We are completely devoted to remove your all types of pest problems.We have been recognized as the highest growing New Sai Pest Control Company in the India. We are at the beginning of new and innovative treatments in adjustment to deliver angry aegis for our customers. We are so assured in our service that we offer our clients a 100 percent New Sai Pest Control provide leading pest control services in Delhi, Gurgaon with centralized head office in south delhi for rapid services of pest control in south delhi & gurgaon as well.</p>
                  </div>
              </div>
            </div>
         </div>
         <div class="section-indent">
            <div class="tabs-default tabs-layout-01">
               <div class="container container-fluid-lg tt-ajax-tabs">
                  <ul class="nav nav-tabs nav-tabs__right" role="tablist">
                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tt-tab-01" role="tab"><span class="tt-large">Residential</span></a></li>
                     <li class="nav-item"><a class="nav-link show active" data-toggle="tab" data-ajax-include="ajax-content/tabs-commercial.html" href="#tt-tab-02" role="tab"><span class="tt-large">Commercial</span></a></li>
                  </ul>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade" id="tt-tab-01" role="tabpanel">
                     <div class="tab-layout01">
                        <div class="tab-layout01__img">
                           <picture>
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01-sm.webp" media="(max-width: 767px)" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01-sm.png" media="(max-width: 767px)" type="image/png">
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01-md.webp" media="(max-width: 1024px)" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01-md.png" media="(max-width: 1024px)" type="image/png">
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01.webp" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/tab-layout01-img01.png" type="image/png">
                              <img src="<?php echo base_url('front/');?>images/tab-layout01-img01.webp" alt="">
                           </picture>
                        </div>
                        <div class="tab-layout01__descriptions">
                           <h5 class="tab-layout01__title">Residential Pest Control</h5>
                           <p>Being a homeowner, you know very well that home pest control is essential for protecting your family and assets and holds equal importance as any other maintenance of the house.  Pests such as spiders, lizards, rodents, termites, and fleas can easily infect your house if you do not have proper pest protection.</p>
                           <div class="tt-icon-list">
                              <div class="tt-item">
                                 <div class="tt-item__img"><i class="icon-2819968"></i></div>
                                 <div class="tt-item__title">Mattress<br>Sanitizing</div>
                              </div>
                              <div class="tt-item">
                                 <div class="tt-item__img"><i class="icon-533676"></i></div>
                                 <div class="tt-item__title">Furniture<br>Sanitizing</div>
                              </div>
                              <div class="divider_xs d-block d-md-none"></div>
                              <div class="tt-item">
                                 <div class="tt-item__img"><i class="icon-671366"></i></div>
                                 <div class="tt-item__title">Carpet<br>Sanitizing</div>
                              </div>
                              <div class="tt-item">
                                 <div class="tt-item__img"><i class="icon-181174"></i></div>
                                 <div class="tt-item__title">Whole Home<br>Sanitizing</div>
                              </div>
                           </div>
                           <a href="services-residential.html" class="tt-btn tt-btn__top">GET SERVICE NOW <span class="icon-271228"></span></a>
                        </div>
                     </div>
                  </div>
               <div class="tab-pane active show" id="tt-tab-02" role="tabpanel"><div class="tab-layout01 additional-01">
	<div class="tab-layout01__img">
		<picture>
			<source srcset="<?php echo base_url('front/');?>images/tab-layout01-img02.webp" type="image/webp">
			<source srcset="<?php echo base_url('front/');?>images/tab-layout01-img02.png" type="image/png">
			<img src="<?php echo base_url('front/');?>images/tab-layout01-img02.webp" alt="">
		</picture>
	</div>
	<div class="tab-layout01__descriptions">
		<h5 class="tab-layout01__title">Commercial Pest Control</h5>
		<p>
			Pest control is a major issue faced not only by households but also various corporate office establishments.
A pest infestation in the office premises can be a matter of concern, as it may impact the productivity of employees if not properly treated.
		</p>
		<div class="tt-icon-list">
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2599697"></i></div>
				<div class="tt-item__title">
					Building<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2231632"></i></div>
				<div class="tt-item__title">
					Education<br> Centre
				</div>
			</div>
			<div class="divider_xs d-block d-md-none"></div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-864916"></i></div>
				<div class="tt-item__title">
					Warehouse<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
				<div class="tt-item__img"><i class="icon-2979708"></i></div>
				<div class="tt-item__title">
					Factory<br> Cleaning
				</div>
			</div>
		</div>
		<a href="services-commercial.html" class="tt-btn tt-btn__top02">GET SERVICE NOW <span class="icon-271228"></span></a>
	</div>
</div></div></div>
            </div>
         </div>
         <div class="section-inner-round-layout01">
            <div class="container container-fluid-lg">
               <div class="row align-items-center">
                  <div class="col-xl-5">
                     <div class="tt-custom-width round-layout01__align">
                        <div class="title-block">
                           <div class="title-block__label">Protecting Our Environment</div>
                           <h6 class="title-block__title">New Sai Pest <br>Control Service</h6>
                        </div>
                        <p>New Sai Pest Control provides round the year pest control for residences, farm houses and housing colonies. The program for residential pest control is to carry out regular visit to control all pests and pest infestation, Our treatment of spray and Gell application on a regular visit ensures 100% guaranteed pest solution.</p>
                        <a href="#" class="tt-btn tt-btn__top" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
                     </div>
                  </div>
                  <div class="col-xl-7">
                     <div class="round-layout01 lazyload" style="background:url(<?php echo base_url('front/');?>images/round-layout-01.png)">
                        <div class="round-layout01__img-motion"><img src="<?php echo base_url('front/');?>images/round-layout01-img-motion.png" class="lazyload" alt=""> 
						<img src="<?php echo base_url('front/');?>images/round-layout01-img-bg.png" class="lazyload" alt=""></div>
                        <div class="round-layout01__wrapper">
                           <div class="round-layout01_item item-position-01">Germs</div>
                           <div class="round-layout01_item item-position-02">Viruses<br>& Bacteria</div>
                           <div class="round-layout01_item item-position-03">Odors</div>
                           <div class="round-layout01_item item-position-04 item-absent">Harmful<br>Allergens</div>
                           <div class="round-layout01_center">
                              <h5 class="tt-title">Harmful<br>Allergens</h5>
                              <p>Allergens can be any substance that causes an allergic reaction.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-indent no-margin">
            <div class="text-center title-block title-block__indent01">
               <div class="title-block__label">Important Information</div>
               <h4 class="title-block__title">Leaders in the Sanitizing Industry</h4>
            </div>
            <div class="tabs-default02 tabs-layout-01">
               <div class="container container-fluid-lg tt-ajax-tabs">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#tt-tab02-01" role="tab"><span class="tt-large">Why Hire Us?</span> <span class="tt-small">Why should you choose our company</span></a></li>
                     <li class="nav-item"><a class="nav-link" data-ajax-include="ajax-content/tabs-our-mission.html" data-toggle="tab" href="#tt-tab02-02" role="tab"><span class="tt-large">Our Mission</span> <span class="tt-small">Our company is dedicated to customers</span></a></li>
                     <li class="nav-item"><a class="nav-link" data-ajax-include="ajax-content/tabs-certifications.html" data-toggle="tab" href="#tt-tab02-03" role="tab"><span class="tt-large">Our Certifications</span> <span class="tt-small">Industry-leading certifications</span></a></li>
                  </ul>
               </div>
               <div class="tab-content">
                  <div class="tab-pane active fade" id="tt-tab02-01" role="tabpanel">
                     <div class="tab-layout02 lazyload" data-bg="<?php echo base_url('front/');?>images/tab-layout02-bg.png">
                        <div class="container container-fluid-lg">
                           <div class="row">
                              <div class="col-xl-6">
                                 <div class="box-info-wrapper row js-init-carusel-mobile slick-dotted slick-default slick-default__dark">
                                    <div class="col-sm-6">
                                       <div class="box-info">
                                          <div class="box-info__img"><i class="icon-3028779"></i></div>
                                          <h6 class="box-info__title">Our Employees</h6>
                                          <p>Our pay rates are higher than industry standards for the best employees.</p>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="box-info">
                                          <div class="box-info__img"><i class="icon-1283357"></i></div>
                                          <h6 class="box-info__title">Our Training</h6>
                                          <p>All of our employees<br>receive cleaning methods and equipment training.</p>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="box-info">
                                          <div class="box-info__img"><i class="icon-181177"></i></div>
                                          <h6 class="box-info__title">Our Services</h6>
                                          <p>We provide a wide array of professional cleaning services perfect.</p>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="box-info">
                                          <div class="box-info__img"><i class="icon-1283338"></i></div>
                                          <h6 class="box-info__title">Professionalism</h6>
                                          <p>We conduct frequent quality control inspections to ensure the best services.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6 text-xl-left text-center">
                                 <div class="video-block01 video-block01__indent lazyload" data-bg="<?php echo base_url('front/');?>images/you.png">
                                    <a href="https://www.youtube.com/watch?v=DOK8SdxdHgw" class="tt-video-link js-video-popup"></a>
                                    <div class="video-block01__img"></div>
                                    <div class="video-block01__description">
                                       <h6 class="video-block01__title">Get The Best<br>Sanitizing Services</h6>
                                       Our expert cleaners are carefully selected and then fully trained to give them a deep.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tt-tab02-02" role="tabpanel">
				  <div class="tab-layout02 lazyloaded" data-bg="<?php echo base_url('front/');?>images/tab-layout02-bg.png" style="background-image: url(&quot;<?php echo base_url('front/');?>images/tab-layout02-bg.png&quot;);">
						<div class="container container-fluid-lg">
							<div class="row">
								<div class="col-sm-9 col-md-5 col-xl-6">
									<div class="img-double img-double__indent01">
										<img class=" lazyloaded" src="<?php echo base_url('front/');?>images/img-double01.jpg" data-src="<?php echo base_url('front/');?>images/img-double01.jpg" alt="">
										<div class="img-double_subimg">
											<img class=" lazyloaded" src="<?php echo base_url('front/');?>images/img-double01-01.jpg" data-src="<?php echo base_url('front/');?>images/img-double01-01.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="divider d-block d-md-none"></div>
								<div class="col-sm-12 col-md-7 col-xl-6 align-self-center">
									<div class="row tt-typography tt-col-wrapper">
										<div class="col-md-6">
											<h6 class="tt-title">Our Mission</h6>
											<p>
												We are committed to providing the quality service available by exceeding the expectations of our clients, as well as their employees  improvements in Productivity.
											</p>
										</div>
										<div class="col-md-6">
											<h6 class="tt-title">Vision Statement</h6>
											<p>
												We are constantly working to be recognized by our clients, employees and the industry as the most respected and the leading provider of contract cleaning services.
											</p>
										</div>
										<div class="col-12">
											<h6 class="tt-title">Our Core Values</h6>
											<ul class="tt-list-02">
												<li><span class="tt-base-dark">Respect:</span> taking time to understand and value each person and respecting their choices.</li>
												<li><span class="tt-base-dark">Responsibility:</span> acting with integrity towards our staff, our customers, the community and the environment.</li>
												<li><span class="tt-base-dark">Excellence:</span> to always look to provide the best quality experience with regards to our cleaning and our customer service.</li>
												<li><span class="tt-base-dark">Innovation:</span> to be industry leaders.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
                  <div class="tab-pane" id="tt-tab02-03" role="tabpanel">
				  <div class="tab-layout02 lazyloaded" data-bg="<?php echo base_url('front/');?>images/tab-layout02-bg.png" style="background-image: url(&quot;<?php echo base_url('front/');?>images/tab-layout02-bg.png&quot;);">
						<div class="container container-fluid-lg">
							<div class="row">
								<div class="col-md-6 col-lg-7">
									<div class="tt-typography tt-typography__indent01">
										<h6 class="tt-title">Choosing a Service You Trust</h6>
										<p>
											Are you bothered about choosing the best home cleaning service because you do not know which to trust? We are certain about the fact that you want the best services, which is why we are here for you. We are experts, and we don’t want you to go through the stress of surfing the internet without getting any result; this could be annoying, and we know that.
										</p>
										<h6 class="tt-title">Certified Cleaning and Sanitizing Technicians</h6>
										<p>
											All of our experts are certified surgical cleaning technicians. This is a very comprehensive healthcare cleaning certification by the SM Certification Services (SMCS). By holding these janitorial licenses, we are able to maintain proper upkeep for every medical office.
										</p>
										<p>
											This allows us to provide state-of-the-art care in operating rooms, common areas, and health labs. With an entire personnel of CSCT professionals, we maintain an edge as the leading service provider in the medical cleaning industry.
										</p>
									</div>
								</div>
								<div class="divider d-block d-md-none"></div>
								<div class="col-md-6 col-lg-5">
									<div class="tt-certifications-wrapper">
									<img src="<?php echo base_url('front/');?>images/newsaipestcertificate.jpeg">
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
               </div>
            </div>
         </div>
         <div class="section-indent no-margin">
            <div class="section-parallax lazyload" data-bg="<?php echo base_url('front/');?>images/section-bg-01.jpg">
               <div class="section-parallax__inner">
                  <h6 class="section-parallax__title">Need Commercial or<br>Residential Pest Control Service?</h6>
                  <p>Contact professional Pest Control Company in Delhi, NCR, Gurgaon, Ghaziabad and make your residential and workplace bug-free. 100% Result Guaranteed</p>
               </div>
            </div>
         </div>
         <div class="section-indent-extra02">
            <div class="container container-fluid-xl no-gutters-lg">
               <div class="row no-gutters">
                  <div class="col-lg-7">
                     <div class="tt-box-wrapper tt-wrapper01">
                        <div class="title-block">
                           <h6 class="title-block__title">Questions & Answers</h6>
                        </div>
                        <div class="js-accordeon accordeon-01">
                           <div class="tt-item tt-item__open">
                              <div class="tt-item__title">What should I expect on my first appointment?</div>
                              <div class="tt-item__content">We will arrive at your home we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your home.</div>
                           </div>
                           <div class="tt-item">
                              <div class="tt-item__title">What all is included in your service?</div>
                              <div class="tt-item__content">We will arrive at your home we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your home.</div>
                           </div>
                           <div class="tt-item">
                              <div class="tt-item__title">Do you furnish the cleaning supplies?</div>
                              <div class="tt-item__content">We will arrive at your home we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your home.</div>
                           </div>
                           <div class="tt-item">
                              <div class="tt-item__title">Are you insured?</div>
                              <div class="tt-item__content">We will arrive at your home we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your home.</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="tt-box-wrapper tt-wrapper02">
                        <div class="title-block">
                           <h6 class="title-block__title">Get An Estimate</h6>
                        </div>
                        <p>Services are offered without contract and can be modified at any time.</p>
						<?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
                        <form id="feedbackform" class="form-default" method="post" action="<?php echo base_url('home/processcontact');?>">
                           <div class="row row-align-col">
                              <div class="col-12">
                                 <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your name" required>
								 <input type="hidden" name="backurl" value="<?php echo basename($_SERVER['REQUEST_URI']);?>">
								 </div>
                              </div>
                              <div class="col-md-4 col-lg-6">
                                 <div class="form-group"><input type="email" name="email" class="form-control" placeholder="E-mail" required></div>
                              </div>
                              <div class="col-md-4 col-lg-6">
                                 <div class="form-group"><input type="tel" name="phone" class="form-control" placeholder="Phone" required></div>
                              </div>
                              <div class="col-md-4 col-lg-12">
                                 <div class="form-group"><input type="text" name="message" class="form-control" placeholder="Message" required></div>
                              </div>
                              <div class="col-md-8 col-lg-12">
                                 <div class="form-group">
                                    <div class="custom-select">
                                       <select name="service" class="tt-select" required>
                                          <option value="">Services</option>
										  <?php
	   foreach($getservicehpcatlist as $getserdata)
	   {
	  ?>
                                          <option value="<?php echo str_replace("^","'",$getserdata->service_title);?>"><?php echo str_replace("^","'",$getserdata->service_title);?></option>
	   <?php }?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-lg-12">
                                 <div class="form-group">
                                    <input name="date_of_visit" placeholder="Date of visit" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type="text">
                                    <div class="form-group__icon icon-684847"></div>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="tt-btn"><span class="icon-lightning"></span>SUBMIT REQUEST <span class="icon-271228"></span></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-inner tt-wrapper03 lazyload" data-bg="<?php echo base_url('front/');?>images/round-layout-01.png">
            <div class="container container-fluid-lg">
               <div class="row no-gutters">
                  <div class="col-md-8 col-xl-7">
                     <div class="title-block">
                        <h6 class="title-block__label">What to Expect</h6>
                        <h6 class="title-block__title">Ready for Your Home or Office<br>to Feel Rejuvenated?</h6>
                     </div>
                     <div class="row">
                        <div class="col-md-6 col-lg-7">Our team is well trained and highly qualified experts in professional cleaning and disinfect services to keep all types of premises clean and safe. We segment our services under six segments to make it easier for you to choose!</div>
                        <div class="divider_sm d-block d-md-none"></div>
                        <div class="col-md-6 col-lg-5">
                           <ul class="tt-list-01">
                              <li>Customized Cleaning Schedule</li>
                              <li>Security Protection</li>
                              <li>Trusted &amp; experienced</li>
                              <li>24-Hour warranty</li>
                              <li>Client Support</li>
                           </ul>
                        </div>
                     </div>
                     <div class="info-list info-list__top">
                        <div class="info-list__item">
                           <div class="info-list__icon"><i class="icon-1837446"></i></div>
                           <div class="info-list__description">
                              <div class="info-list__value">100K+</div>
                              <div class="info-list__title">Cleans</div>
                           </div>
                        </div>
                        <div class="info-list__item">
                           <div class="info-list__icon"><i class="icon-2583032"></i></div>
                           <div class="info-list__description">
                              <div class="info-list__value">100%</div>
                              <div class="info-list__title">Satisfaction</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="divider d-block d-md-none"></div>
                  <div class="col-md-4 col-xl-5">
                     <div class="imginfo">
                        <div class="imginfo__img">
                           <picture>
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01-sm.webp" media="(max-width: 767px)" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01-sm.jpg" media="(max-width: 767px)" type="image/png">
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01-md.webp" media="(max-width: 1024px)" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01-md.jpg" media="(max-width: 1024px)" type="image/png">
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01.webp" type="image/webp">
                              <source srcset="<?php echo base_url('front/');?>images/imginfo-img01.jpg" type="image/png">
                              <img src="<?php echo base_url('front/');?>images/imginfo-img01.jpg" alt="">
                           </picture>
                        </div>
                        <div class="imginfo__box">
                           <h6 class="imginfo__title">Get a Price Quote Today!</h6>
                           <p>Trust us with all of your commercial<br>or residential sanitizing needs.</p>
                           <address><a href="tel:919818912045"><span class="icon-1034182"></span> +91-9818912045</a></address>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-inner tt-wrapper04 lazyload" data-bg="<?php echo base_url('front/');?>images/round-layout-01.png">
            <div class="container-fluid no-gutters">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="tt-img-parallax" id="js-change-img">
                        <div class="tt-img-right"><img src="<?php echo base_url('front/');?>images/img-after.png" class="js-init-parallax lazyload" data-orientation="down" data-overflow="true" data-scale="1.2" alt=""></div>
                        <div class="tt-img-left"><img src="<?php echo base_url('front/');?>images/img-before.png" class="js-init-parallax lazyload" data-orientation="up" data-overflow="true" data-scale="1.2" alt=""></div>
                        <a href="https://www.youtube.com/watch?v=DOK8SdxdHgw" class="tt-img-icon tt-video-link02 js-video-popup"></a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="blog-output-indent">
                        <div class="slick-dotted slick-dotted_indent01 slick-dots-left slick-hidden-none slick-default slick-default__dark" id="js-init-blogoutput" data-slick='{
                           "slidesToShow": 1,
                           "autoplaySpeed": 4500,
                           "slidesToScroll": 1,
                           "fade": true
                           }'>
                           <div class="item">
                              <div class="blog-output" data-img01="<?php echo base_url('front/');?>images/img-before.png" data-img02="<?php echo base_url('front/');?>images/img-after.png">
                                 <img src="<?php echo base_url('front/');?>images/blog-output__marker.png" class="lazyload blog-output__marker" alt="">
                                 <div class="title-block title-block__indent02">
                                    <div class="title-block__label">Our Testimonials</div>
                                    <h6 class="title-block__title">Excellent Service and Cleaning Results</h6>
                                 </div>
                                 <blockquote class="blockquote02">
                                   Excellence work done by NSPCS and the good thing is that they did work with full safety.
At this time we need this types of work for general services of pest control and etc and with safety too...  Good work 👍
<div class="blockquote02-sign"><strong>— Sanjay Kumar Srivastav,</strong> Small Business Owner</div>
                                 </blockquote>
                              </div>
                           </div>
                           <div class="item">
                              <div class="blog-output" data-img01="<?php echo base_url('front/');?>images/img02-before.png" data-img02="<?php echo base_url('front/');?>images/img02-after.png">
                                 <img src="<?php echo base_url('front/');?>images/blog-output__marker.png" class="lazyload blog-output__marker" alt="">
                                 <div class="title-block title-block__indent02">
                                    <div class="title-block__label">Our Testimonials</div>
                                    <h6 class="title-block__title">Excellent Service and Cleaning Results</h6>
                                 </div>
                                 <blockquote class="blockquote02">
Excellent service, very prompt and having a professional approach, would love to use his services again. I strongly recommend him to all
                                    <div class="blockquote02-sign"><strong>— Ravi Puliani</strong></div>
                                 </blockquote>
                              </div>
                           </div>
                           <div class="item">
                              <div class="blog-output" data-img01="<?php echo base_url('front/');?>images/img03-before.png" data-img02="<?php echo base_url('front/');?>images/img03-after.png">
                                 <img src="<?php echo base_url('front/');?>images/blog-output__marker.png" class="lazyload blog-output__marker" alt="">
                                 <div class="title-block title-block__indent02">
                                    <div class="title-block__label">Our Testimonials</div>
                                    <h6 class="title-block__title">Excellent Service and Cleaning Results</h6>
                                 </div>
                                 <blockquote class="blockquote02">
Awesome service I will rate it to 5 . People are very good in the their work and complete the work with great satisfaction score I will definitely recommend them to all
                                    <div class="blockquote02-sign"><strong>— Anil Sharma</strong></div>
                                 </blockquote>
                              </div>
                           </div>
                        </div>
                        <div class="appendDots"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-indent">
            <div class="container container-fluid-xl">
               <div class="title-block text-center title-block__indent01">
                  <div class="title-block__label">Best Pest Control Service in Delhi NCR</div>
                  <h6 class="title-block__title">Our Services</h6>
               </div>
               <div class="news-obj-wrapper row slick-default slick-default__dark" data-slick='{
                  "slidesToShow": 3,
                  "autoplaySpeed": 7000,
                  "slidesToScroll": 3,
                  "responsive": [
                  {
                  "breakpoint": 1024,
                  "settings": {
                  "slidesToShow": 2
                  }
                  },
                  {
                  "breakpoint": 576,
                  "settings": {
                  "slidesToShow": 1,
                  "slidesToScroll": 1
                  }
                  }
                  ]
                  }'>
				  <?php
	   foreach($getservicehpcatlist as $getserdata)
	   {
	  ?>
                  <div class="col-md-4">
                     <div class="news-obj">
                        <div class="news-obj__img"><a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>"><img class="lazyload" src="<?php echo base_url();?>upload/service/<?php echo $getserdata->iconimage;?>"></a></div>
                        <div class="news-obj__description">
                           <div class="news-obj__title"><a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->service_title);?></a></div>
                           <p><?php echo str_replace("^","'",$getserdata->sort_description);?>...</p>
                           <a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>" class="tt-link"><span>READ MORE</span> <i class="icon-271228"></i></a>
                        </div>
                     </div>
                  </div>
	   <?php } ?>
               </div>
            </div>
         </div>
         <div class="section-indent">
            <div class="container container-fluid-lg">
               <div class="title-block text-center">
                  <h6 class="title-block__title">Supplies &amp; Clients</h6>
               </div>
               <div class="tt-logo-layout slick-default slick-default__dark" data-slick='{
                  "slidesToShow": 6,
                  "autoplaySpeed": 7500,
                  "slidesToScroll": 3,
                  "responsive": [
                  {
                  "breakpoint": 1024,
                  "settings": {
                  "slidesToShow": 5
                  }
                  },
                  {
                  "breakpoint": 546,
                  "settings": {
                  "slidesToShow": 3,
                  "slidesToScroll": 3
                  }
                  }
                  ]
                  }'>
             <?php 
											$qury=$this->db->query("select * from tbl_gallery where pg_status='Active' and gallery_category='Client'");
											$galres=$qury->result();
											foreach($galres as $galdata){
											?> 
			  <div><a href="#"><img src="<?php echo base_url('upload/');?>gallery/<?php echo $galdata->image;?>" data-src="<?php echo base_url('upload/');?>gallery/<?php echo $galdata->image;?>" class="lazyload" alt=""></a></div>
			 <?php } ?></div>
            </div>
         </div>
      </main>
 <?php include('footer.php');?>