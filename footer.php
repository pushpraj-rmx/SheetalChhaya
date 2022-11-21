
   <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+<?php echo str_replace("^","'",$getcontact->whatsapp_no); ?>", // WhatsApp number
            call_to_action: "Whats App", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            call: "+<?php echo str_replace("^","'",$getcontact->mobile_no); ?>", // Call phone number
            call_to_action: "Call Now", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


    
	
 <!-- Main Footer / Style Five-->
    <footer class="main-footer footer-style-five">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <div class="footer-column col-lg-4 col-md-5 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo-box">
                                <a href="<?php echo base_url();?>" title="mps"><img src="<?php echo base_url('front/');?>images/logo.png" alt="" title=""></a>
                            </div>
                            <div class="about-text">Integer lobortis sem consequat imperdiet In nulla viverra ut lorem ut, dapibus conse etur diam. Nun bibendum diet condiment sed ipsum duis lacinia.</div>
                            <div class="footer-social">
                                <ul class="footer-social-two clearfix">
                                    <li><a href="<?php echo $getwebsetting->website_twitter; ?>" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="<?php echo $getwebsetting->website_facebook; ?>" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="<?php echo $getwebsetting->website_instagram; ?>" target="_blank"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="<?php echo $getwebsetting->website_linkedin; ?>" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="<?php echo $getwebsetting->website_printest; ?>" target="_blank"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="big-column col-lg-5 col-md-7 col-sm-12">
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Quick Links</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="<?php echo base_url();?>">Home</a></li>
                                            <li><a href="<?php echo base_url('about-us');?>">About us</a></li>
                                            <li><a href="<?php echo base_url('our-product');?>">Our Product</a></li>
                                            <li><a href="<?php echo base_url('contact-us');?>">Contact us</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Our Services</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul>
                                            <li><a href="<?php echo base_url('installation-and-monitoring');?>">Installation & Monitoring</a></li>
                                            <li><a href="<?php echo base_url('after-sales-service');?>">After Sales Service</a></li>
                                            <li><a href="<?php echo base_url('free-replacemrnt');?>">Free Replacemrnt</a></li>
                                            <li><a href="<?php echo base_url('warrenty-claims');?>">Warrenty Claims</a></li>
                                            <li><a href="<?php echo base_url('energy-equipments');?>">Energy Equipments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                        <div class="footer-widget gallery-widget">
                            <div class="widget-title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="info">
                                <!--Info Block-->
                                <div class="info-block">
                                    <div class="icon-box">
                                        <span class="icon">
                                            <img src="<?php echo base_url('front/');?>images/icons/icon-message-1.png" alt="">
                                        </span>
                                    </div>
                                    <strong>Visit The Office</strong>
                                    <div class="info-text"><?php echo str_replace("^","'",$getcontact->address); ?></div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block">
                                    <div class="icon-box">
                                        <span class="icon">
                                            <img src="<?php echo base_url('front/');?>images/icons/icon-call-1.png" alt="">
                                        </span>
                                    </div>
                                    <strong>Phone Inquiry</strong>
                                    <div class="info-text">
                                        <a href="tel:<?php echo str_replace("^","'",$getcontact->mobile_no); ?>"><?php echo str_replace("^","'",$getcontact->mobile_no); ?></a>
                                    </div>
                                </div>
                                <!--Info Block-->
                                <div class="info-block">
                                    <div class="icon-box">
                                        <span class="icon">
                                            <img src="<?php echo base_url('front/');?>images/icons/icon-mail-1.png" alt="">
                                        </span>
                                    </div>
                                    <strong>Send Email</strong>
                                    <div class="info-text">
                                        <a href="mailto:<?php echo str_replace("^","'",$getcontact->email_id); ?>"><?php echo str_replace("^","'",$getcontact->email_id); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
                    
                </div>
				
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">

                <div class="inner clearfix">
                    <!--Scroll to top-->
                    <div class="scroll-top-footer scroll-to-target" data-target="html"><span class="flaticon-arrows"></span></div>
                    <!--Copyright-->
                    <div class="copyright">Copyright (c) 2022. All rights reserved.Designed & Developed by <a href="http://sparroweye.com/">SparrowEye</a></div>
                    
                </div>
                
            </div>
        </div>
        
    </footer>


</div>
<!--End pagewrapper-->


<script src="<?php echo base_url('front/');?>js/jquery.js"></script>
<script src="<?php echo base_url('front/');?>js/popper.min.js"></script>
<script src="<?php echo base_url('front/');?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('front/');?>js/jquery-ui.js"></script>
<script src="<?php echo base_url('front/');?>js/jquery.fancybox.js"></script>
<script src="<?php echo base_url('front/');?>js/owl.js"></script>
<script src="<?php echo base_url('front/');?>js/appear.js"></script>
<script src="<?php echo base_url('front/');?>js/wow.js"></script>
<script src="<?php echo base_url('front/');?>js/scrollbar.js"></script>
<script src="<?php echo base_url('front/');?>js/validate.js"></script>
<script src="<?php echo base_url('front/');?>js/mixitup.js"></script>
<script src="<?php echo base_url('front/');?>js/paroller.js"></script>
<script src="<?php echo base_url('front/');?>js/element-in-view.js"></script>
<script src="<?php echo base_url('front/');?>js/custom-script.js"></script>
<!--Google Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHJe2MPH8B-gLzZu5QI0Alc73nvkLuuqQ"></script>
<script src="<?php echo base_url('front/');?>js/map-script.js"></script>

</body>



</html>