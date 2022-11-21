<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
     <title><?php echo str_replace("^","'",$servicecontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$servicecontent->pg_meta_keyword);?>">
		<meta name="description" content="<?php echo str_replace("^","'",$servicecontent->pg_meta_desc);?>">
     <?php include('analytics.php');?>
   </head>
   <body>
     <?php include('header.php');?>
	 <div id="subtitle-wrapper">
         <div class="container container-fluid-xl">
            <div class="tt-breadcrumbs">
               <ul>
                  <li><a href="<?php echo base_url();?>">home</a></li>
                 	<li><a href="<?php echo base_url(); ?><?php echo $servicecontent->service_caturl; ?>"><?php echo str_replace("^","'",$servicecontent->servicecat_title); ?></a>
            </li>
            <li><a href="javascript:void()"><?php echo str_replace("^","'",$servicecontent->nav_title); ?></a></li>
                         </ul>
            </div>
            <h1 class="subtitle__title"><?php echo str_replace("^","'",$servicecontent->nav_title); ?></h1>
         </div>
      </div>
      <main id="tt-pageContent">

         <div class="section-indent no-margin">
            <div class="tt-wrapper01 wrapper-left-center section-inner02" style="background-image: url('<?php echo base_url('front/');?>images/wrapper-left-center.png')">
               <div class="container container-fluid-xl">
                  <div class="row">
                     <div class="col-md-5 col-xl-4">
                        <div class="box-layout">
                           <div class="item-box">
                              <div class="item-box__title"><?php echo str_replace("^","'",$servicecontent->service_title); ?></div>
                              <div class="item-box__content no-inner">
                                 <div class="tt-submenu">
                                   <?php
	   foreach($getservicehpcatlist as $getserdata)
	   {     if($getserdata->service_title<>$servicecontent->service_title){
	  ?>
								   <a href="<?php echo base_url('pest-control/');?><?php echo $servicecontent->service_caturl;?>/<?php echo $getserdata->pg_url;?>" class="tt-submenu__item active">
                                       <div class="tt-submenu__text" style="padding-left:25px;"><span><?php echo str_replace("^","'",$getserdata->service_title);?></span></div>
                                    </a>
                                <?php }}?>
                                 </div>
                              </div>
                           </div>
                     
                        </div>
                     </div>
                     <div class="divider d-block d-md-none"></div>
                     <div class="col-md-7 col-xl-8">
                        <div class="title-block title-block__indent-top">
                           <h2 class="title-block__title"><?php echo str_replace("^","'",$servicecontent->service_title); ?></h2>
                        </div>

                        <div class="row obj-top">
                           <div class="col-sm-12">
						   <img style="width: 350px; float: left;padding-right:10px" class="note-float-left" src="<?php echo base_url(); ?>upload/service/<?php echo $servicecontent->image;?>" class="lazyload tt-mobile-fullwidth" alt="">

<p><?php echo str_replace("^","'",$servicecontent->description); ?></p>
                           </div>
                        </div>
                        <ul class="tt-list-01 obj-top">
                           <li>
      <a href="<?php echo base_url('pest-control-noida');?>" style="color:#000">Pest Control Service in Noida </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-dwarka');?>" style="color:#000">Pest Control Services in Dwarka </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-ghaziabad');?>" style="color:#000">Pest Control Services Ghaziabad </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-gurugram');?>" style="color:#000">Pest Control Services in Gurugram </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-faridabad');?>" style="color:#000">Pest Control Services in Faridabad </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-manesar');?>" style="color:#000">Pest Control Services in Manesar </a>
   </li>
                        </ul>
						<br><a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">GET SERVICE NOW <span class="icon-271228"></span></a>
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