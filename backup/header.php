 <nav class="panel-menu" id="mobile-menu">
         <ul></ul>
         <div class="mm-navbtn-names">
            <div class="mm-closebtn">Close</div>
            <div class="mm-backbtn">Back</div>
         </div>
      </nav>
      <header id="tt-header">
         <!-- holder-top (mobile) -->
         <div class="holder-top-mobile d-block d-md-none">
            <div class="h-topbox__content">
               <div class="tt-item">
                  <div class="tt-item__icon"><span class="icon-1124618"></span></div>
                  <div class="tt-item__text">
                     <address><?php echo str_replace("^","'",$getcontact->address); ?></address>
                  </div>
               </div>
               <div class="tt-item">
                  <div class="tt-item__icon"><span class="icon-1034182"></span></div>
                  <div class="tt-item__text">+91-<?php echo $getcontact->whatsapp_no; ?></div>
               </div>
               <div class="tt-item">
                  <div class="tt-item__icon"><span class="icon-70562"></span></div>
                  <div class="tt-item__text"><a href="mailto:<?php echo $getcontact->email_id; ?>"><?php echo $getcontact->email_id; ?></a></div>
               </div>
               <div class="tt-item">
                  <div class="tt-item__icon"><span class="icon-1034182"></span></div>
                  <div class="tt-item__text">
                     <address><a href="tel:91<?php echo $getcontact->mobile_no; ?>">+91-<?php echo $getcontact->mobile_no; ?></a></address>
                  </div>
               </div>
            </div>
            <a href="#" class="h-topbox__btn" id="js-toggle-h-holder"><i class="tt-arrow down"></i> </a><a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
         </div>
         <!-- /holder-top (mobile) --><!-- holder-top (desktop) -->
         <div class="holder-top-desktop d-none d-md-block">
            <div class="row">
               <div class="col-auto">
                  <div class="h-info01">
                     <div class="tt-item">
                        <address><span class="icon-1124618"></span> <?php echo str_replace("^","'",$getcontact->address); ?></address>
                     </div>
                     <div class="tt-item"><span class="icon-1034182"></span> <?php echo $getcontact->whatsapp_no; ?></div>
                     <div class="tt-item"><a href="mailto:<?php echo $getcontact->email_id; ?>"><span class="icon-70562"></span> <?php echo $getcontact->email_id; ?></a></div>
                  </div>
               </div>
               <div class="col-auto ml-auto">
                  <ul class="h-social">
                     <li><a href="<?php echo $getwebsetting->website_facebook; ?>" target="_blank" class="icon-733605"></a></li>
                           <li><a href="<?php echo $getwebsetting->website_twitter; ?>" target="_blank" class="icon-733635"></a></li>
                           <li><a href="<?php echo $getwebsetting->website_instagram; ?>" target="_blank" class="icon-733614"></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- /holder-top (desktop) --><!-- holder- -->
        <div id="js-init-sticky">
            <div class="tt-holder-wrapper">
               <div class="tt-holder">
                  <div class="tt-col-left">
                     <!-- logo --> <a href="<?php echo base_url();?>" class="hlogo"><img class="tt-icon" src="<?php echo base_url('front/');?>images/logo.png" alt=""></a><!-- /logo -->
                  </div>
                  <div class="tt-col-center tt-col-wide tt-col-objects tt-different-sides">
                     <div class="tt-col__item">
                        <!-- desktop-nav -->
                        <nav id="tt-nav">
                           <ul>
                              <li><a href="<?php echo base_url();?>"><span>Home</span></a></li>
                              <li><a href="<?php echo base_url('about-us');?>"><span>About Us</span></a></li>
                              <li>
                                 <a href="<?php echo base_url('services');?>"><span>Our Services</span></a>
                                 <ul>
								 <?php
	   foreach($getservicehpcatlist as $getserdata)
	   {
	  ?>
                                    <li>      <a href="<?php echo base_url('pest-control/');?><?php echo $getserdata->ser_pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->service_title);?> </a>
</li>
	   <?php }?>
                                 </ul>
                              </li>
                            
                              <li>
                                 <a href="#"><span>Locations</span></a>
                                 <ul>
                                       <li>
      <a href="<?php echo base_url('pest-control-noida');?>">Pest Control Service in Noida </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-dwarka');?>">Pest Control Services in Dwarka </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-ghaziabad');?>">Pest Control Services Ghaziabad </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-gurugram');?>">Pest Control Services in Gurugram </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-faridabad');?>">Pest Control Services in Faridabad </a>
   </li>
   <li>
      <a href="<?php echo base_url('pest-control-manesar');?>">Pest Control Services in Manesar </a>
   </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="<?php echo base_url('contact-us');?>"><span>Branch</span></a>
                              </li>
							  <li>
                                 <a href="<?php echo base_url('contact-us');?>"><span>Contact Us</span></a>
                              </li>
                           </ul>
                           <div id="tt-nav__line"></div>
                        </nav>
                        <!-- /desktop-nav -->
                     </div>
                     <div class="tt-col__item d-none d-md-block">
                        <div class="h-info02">
                           <div class="tt-item">
                              <address><a href="tel:91<?php echo $getcontact->mobile_no; ?>"><span class="icon-1034182"></span> +91-<?php echo $getcontact->mobile_no; ?></a></address>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tt-col-right tt-col-objects">
                    
                     <div class="tt-col__item d-none d-md-block"><a href="#" class="tt-btn" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a></div>
                     <div class="tt-col__item toggle-wrapper"><a href="#" id="tt-menu-toggle" class="icon-menu"></a></div>
                  </div>
               </div>
            </div>
         </div>
      
      </header>
      