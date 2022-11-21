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
	 <div id="subtitle-wrapper">
         <div class="container container-fluid-xl">
            <div class="tt-breadcrumbs">
               <ul>
                  <li><a href="<?php echo base_url();?>">home</a></li>
                  <li>Our Services</li>
               </ul>
            </div>
            <h1 class="subtitle__title">Our Services</h1>
         </div>
      </div>
      <main id="tt-pageContent">
        <div class="section-indent">
            <div class="container container-fluid-lg">
               <div class="title-block text-center">
                  <div class="title-block__label">New Sai Pest Control Service</div>
                  <h5 class="title-block__title">Our Services</h5>
                  <div class="title-block__text">When you choose us as a service partner we bring expertise and experience as standard.</div>
               </div>
               <div class="row box01-wrapper text-center text-sm-left">
			   <?php
	   foreach($getservicehpcatlist as $getserdata)
	   {
	  ?>
                  <div class="col-sm-6 col-md-4">
                     <div class="box01">
                        <div class="box01__img"><a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>">
						<img src="<?php echo base_url(); ?>upload/service/<?php echo $getserdata->iconimage;?>" class="lazyload" alt="<?php echo str_replace("^","'",$getserdata->service_title);?>"></a></div>
                        <h6 class="box01__title"><a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->nav_title);?></a></h6>
                        <p><?php echo str_replace("^","'",$getserdata->sort_description);?>...</p>
						<a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>" class="tt-btn tt-btn__top">READ MORE <span class="icon-271228"></span></a>
                     </div>
                  </div>
                 <?php }?>
               </div>
            </div>
         </div>
		 
		 <br>
		  <div class="section-indent no-margin">
            <div class="tt-wrapper01 section-inner-round-layout02">
               <div class="container container-fluid-lg">
                  <div class="row flex-xl-row-reverse align-items-lg-center">
                     <div class="col-xl-4 offset-xl-1">
                        <div class="tt-custom-width">
                           <div class="title-block">
                              <div class="title-block__label">Protecting Our Environment</div>
                              <h6 class="title-block__title">Why Disinfectant Misting</h6>
                           </div>
                           <p>No stain is too stubborn, no streak too enduring. Our maids not only have modern cleaning tools and equipment; they have the knowledge and experience needed to conquer even the messiest of messes. Rather than keep all of that knowledge to ourselves, we’re sharing our tips here to help homeowners keep their homes clean and tidy.</p>
                           <a href="#" class="tt-btn tt-btn__top" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
                        </div>
                     </div>
                     <div class="divider d-block d-xl-none"></div>
                     <div class="col-xl-7">
                        <div class="tt-layout-responsive-sm">
                           <div class="round-layout02 lazyload" style="background-image: url('<?php echo base_url('front/');?>images/round-layout-02.png')">
                              <div class="round-layout02__wrapper">
                                 <div class="round-layout02_item item-position-01 item-absent">
                                    <div class="tt-icon"><i class="icon-3022151"></i></div>
                                    <div class="tt-title">Protect Against Viruses</div>
                                 </div>
                                 <div class="round-layout02_item item-position-02 item-select">
                                    <div class="tt-icon"><i class="icon-32142155"></i></div>
                                    <div class="tt-title">Misting<br>is Safe</div>
                                 </div>
                                 <div class="round-layout02_item item-position-03">
                                    <div class="tt-icon"><i class="icon-497392"></i></div>
                                    <div class="tt-title">Non Toxic<br>&amp; no Alcohol</div>
                                 </div>
                                 <div class="round-layout02_item item-position-04">
                                    <div class="tt-icon"><i class="icon-1584892"></i></div>
                                    <div class="tt-title">Quick Kill</div>
                                 </div>
                                 <div class="round-layout02_item item-position-05 item-absent">
                                    <div class="tt-icon"><i class="icon-827743"></i></div>
                                    <div class="tt-title">Non Corrosive</div>
                                 </div>
                                 <div class="round-layout02_item item-position-06">
                                    <div class="tt-icon"><i class="icon-2877983"></i></div>
                                    <div class="tt-title">Protect<br>Skin &amp; Eyes</div>
                                 </div>
                                 <div class="round-layout02_center">
                                    <h5 class="tt-title">Misting<br>is Safe</h5>
                                    <p><span class="tt-full-text d-none d-md-block">Disinfectant misting is safe for children, pets and anyone and anyone who is allergic to chemical misting </span><span class="tt-short text d-block d-md-none">Disinfectant misting is safe for children, pets and anyone..</span></p>
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
            <div class="container container-fluid-lg">
               <div class="title-block text-center">
                  <br><div class="title-block__label">Quickest Way to Sanitize</div>
                  <h5 class="title-block__title">Why Steam Cleaning</h5>
               </div>
               <div class="row box01-wrapper text-center text-sm-left">
                  <div class="col-sm-6 col-md-4">
                     <div class="box01 text-center">
                        <div class="box01__img box01__img-round"><a href="#"><img class="lazyload" src="<?php echo base_url('front/');?>images/services-img-03.jpg" alt=""></a></div>
                        <h6 class="box01__title"><a href="#">Kills <span class="tt-base-color">99.9%</span> of Bacteria</a></h6>
                        <p>We use a state of art technology to achieve deep sanitizing to remove and kill deeply embedded allergy and germ-infected debris.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="box01 text-center">
                        <div class="box01__img box01__img-round"><a href="#"><img class="lazyload" src="<?php echo base_url('front/');?>images/services-img-04.jpg" alt=""></a></div>
                        <h6 class="box01__title"><a href="#">It's Just <span class="tt-base-color">H20</span> (Water)</a></h6>
                        <p>Completely natural, steam lifts heavy stains from fabric, dislodges encrusted dirt, melts away grease or grime, kills molds and mildew.</p>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                     <div class="box01 text-center">
                        <div class="box01__img box01__img-round"><a href="#"><img class="lazyload" src="<?php echo base_url('front/');?>images/services-img-05.jpg" alt=""></a></div>
                        <h6 class="box01__title"><a href="#"><span class="tt-base-color">Safe</span> & Eco Friendly</a></h6>
                        <p>We do not use any chemicals, so there is no harmful residue left behind on surfaces that could be toxic to pets and children.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
 <?php include('footer.php');?>