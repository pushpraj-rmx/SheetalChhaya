     <footer id="tt-footer">
         <div class="footer-wrapper01 lazyload" data-bg="<?php echo base_url('front/');?>images/footer-bg__top.png">
            <div class="f-holder">
               <div class="container container-fluid-lg">
                  <div class="row">
                     <div class="col-md-4">
                        <h6 class="f-title">About Us</h6>
                        <p class="text-f">New Sai Pest Control is a name of a highly esteemed service provider engaged in undertaking Pest Control Services in Delhi & NCR. Our Pest Control Services are safe, environment friendly and incur no adverse effect on human life.</p>
                        <a href="<?php echo base_url('about-us');?>" class="tt-link tt-link__color01 tt-link__top"><span>REQUEST A QUOTE</span> <i class="icon-271228"></i></a>
                     </div>
                     <div class="col-md-4">
                        <h6 class="f-title">Quick Links</h6>
                           <ul>
                              <li><a href="<?php echo base_url();?>" class="footerlink"><span>Home</span></a></li>
                              <li><a href="<?php echo base_url('about-us');?>" style="color:#fff"><span>About Us</span></a></li>
                              <li><a href="<?php echo base_url('services');?>" style="color:#fff"><span>Our Services</span></a></li>
							   <li><a href="<?php echo base_url('contact-us');?>" style="color:#fff"><span>Branch</span></a></li>
                              <li><a href="<?php echo base_url('contact-us');?>" style="color:#fff"><span>Contact Us</span></a></li>
                           </ul>
                     </div>
					
                     <div class="col-md-4">
                        <h6 class="f-title">Contacts</h6>
                        <address>
                           <?php echo str_replace("^","'",$getcontact->address); ?><br>Mon-Fri 08:00 AM - 05:00 PM
                           <p><a href="tel:91<?php echo $getcontact->mobile_no; ?>"><span class="icon-1034182"></span> <strong>+91-<?php echo $getcontact->mobile_no; ?></strong></a>,
						   <a href="tel:91<?php echo $getcontact->whatsapp_no; ?>"><strong>+91-<?php echo $getcontact->whatsapp_no; ?></strong></a></p>
                        </address>
                        <ul class="f-social">
                           <li><a href="<?php echo $getwebsetting->website_facebook; ?>" target="_blank" class="icon-733605"></a></li>
                           <li><a href="<?php echo $getwebsetting->website_twitter; ?>" target="_blank" class="icon-733635"></a></li>
                           <li><a href="<?php echo $getwebsetting->website_instagram; ?>" target="_blank" class="icon-733614"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-wrapper02 lazyload" data-bg="<?php echo base_url('front/');?>images/footer-bg__bottom.png">
               <div class="f-copyright">&copy; <?php echo date('Y');?> New Sai Pest Control. All Rights Reserved.</div>
         </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script async src="<?php echo base_url('front/');?>js/bundle.js"></script>
      <div class="modal fade" id="modalMRequestQuote" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-body form-default modal-layout-dafault">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-860796"></span></button>
                  <div class="modal-titleblock">
                     <div class="modal-title">Request a Quote</div>
                  </div>
                  <p>Services are offered without contract and can be modified at any time.</p>
				  <?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
                  <form class="form-modal" id="jsFormRequestQuote" method="post" action="<?php echo base_url('home/processcontact');?>">
                     <div class="form-group"><input type="text" name="name" class="form-control" required placeholder="Your name"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group"><input type="email" name="email" class="form-control" required placeholder="E-mail"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"><input type="tel" name="phone" class="form-control" required placeholder="Phone"></div>
                        </div>
                     </div>
                     <div class="form-group"><input type="text" name="address" class="form-control" required placeholder="Address"></div>
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
                     <div class="form-group">
                        <input name="date_of_visit" placeholder="Date of visit" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type="text">
                        <div class="form-group__icon icon-684847"></div>
                     </div>
                     <div class="form-group"><textarea name="message" class="form-control" placeholder="Your comment"></textarea></div>
                     <button type="submit" class="tt-btn btn__color01">SUBMIT REQUEST <span class="icon-271228"></span></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="js-backtotop" class="tt-back-to-top"><i class="icon-271228"></i></a>
   </body>
</html>