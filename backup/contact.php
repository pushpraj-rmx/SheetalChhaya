<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title><?php echo str_replace("^","'",$pgcontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_keyword); ?>">
		<meta name="description" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_desc); ?>">    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <?php $this->load->view('analytics');?>
</head>
   <body>
      <?php $this->load->view('header');?>
	  <div id="subtitle-wrapper">
         <div class="container container-fluid-xl">
            <div class="tt-breadcrumbs">
               <ul>
                  <li><a href="<?php echo base_url();?>">Home</a></li>
                  <li>Contact Us</li>
               </ul>
            </div>
            <h1 class="subtitle__title">Contact Us</h1>
         </div>
      </div>
      <main id="tt-pageContent">
         <div class="tt-wrapper05 section-inner03" style="background-image: url('<?php echo base_url('front/');?>images/wrapper05.png')">
            <div class="container container-fluid-xl">
               <div class="row">
                  <div class="col-md-6">
                     <div class="tt-text-indent-right">
                        <div class="title-block">
                           <div class="title-block__label">Get in Touch With Us</div>
                           <h2 class="title-block__title">Let's Discuss Any Sanitizing Services Enquiry</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="tt-title-text-align">We are making every attempt to complete requests and fulfill orders in as timely a fashion as possible. You may fill out our form below, but please be patient as we work to produce cleaning chemicals and disinfectants for the health and safety of everyone. Thank you!</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-indent no-margin">
            <div id="map"><?php echo str_replace("^","'",$getcontact->google_map); ?></div>
         </div>
         <div class="section-wrapper tt-wrapper06" style="background-image: url('<?php echo base_url('front/');?>images/wrapper-contact.png');">
            <div class="section-indent-extra03">
               <div class="container container-fluid-xl">
                  <div class="row box-contact__wrapper">
                     <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-1124618"></i>
                           <h6 class="box-contact__title">Delhi</h6>
                           <address>K-2068 Ground Floor CR Park New Delhi</address>
                        </div>
                     </div>
                   <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-1124618"></i>
                           <h6 class="box-contact__title">Gurgaon</h6>
                           <address>Arjun Nagar Gurgram</address>
                        </div>
                     </div>
                <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-1124618"></i>
                           <h6 class="box-contact__title">Faridabad</h6>
                           <address><?php echo str_replace("^","'",$getcontact->address); ?></address>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
			 <div class="section-indent-extra03" style="margin-top:20px">
               <div class="container container-fluid-xl">
                  <div class="row box-contact__wrapper">
                     <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-1034182"></i>
                           <h6 class="box-contact__title">Contact Phone</h6>
                           <address><a href="tel:91<?php echo str_replace("^","'",$getcontact->mobile_no); ?>">+91-<?php echo str_replace("^","'",$getcontact->mobile_no); ?></a></address>
						</div>
                     </div>
					  <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-70562"></i>
                           <h6 class="box-contact__title">E-mail Address</h6>
                           <address><a href="mailto:<?php echo str_replace("^","'",$getcontact->email_id); ?>"><?php echo str_replace("^","'",$getcontact->email_id); ?></a></address>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="box-contact">
                           <i class="box-contact__icon icon-1034182"></i>
                           <h6 class="box-contact__title">Contact Phone</h6>
                        <address><a href="tel:91<?php echo str_replace("^","'",$getcontact->whatsapp_no); ?>">+91-<?php echo str_replace("^","'",$getcontact->whatsapp_no); ?></a></address>
						</div>
                     </div>
                   
                  </div>
               </div>
            </div>
            <div class="section-indent">
               <div class="container container-fluid-lg">
                  <div class="title-block text-center">
                     <h2 class="title-block__title">Get in Touch. We're Here to Help.</h2>
                     <div class="title-block__text tt-width-large">We look forward to helping you create and maintain a clean, healthy environment that’s as enjoyable as it is functional.</div>
                  </div>
                  <div class="row justify-content-md-center">
                     <div class="col-md-9 col-lg-8">
					 <?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
                            <form class="form-default text-center" id="contact-form" method="post" action="<?php echo base_url('home/processcontact/');?>">
						<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your name" required>
						<input type="hidden" name="backurl" value="<?php echo basename($_SERVER['REQUEST_URI']);?>">
						</div>
                           <div class="row row-align-col">
                              <div class="col-md-6">
                                 <div class="form-group"><input type="text" name="email" class="form-control" placeholder="E-mail" required></div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group"><input type="text" name="phonenumber" class="form-control" placeholder="Phone" required></div>
                              </div>
                           </div>
                           <div class="form-group"><textarea name="message" rows="4" class="form-control" placeholder="Your message" required></textarea></div>
                           <button type="submit" class="tt-btn tt-btn-form">SEND MESSAGE <span class="icon-271228"></span></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
 <?php $this->load->view('footer');?>