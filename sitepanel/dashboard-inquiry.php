
 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
		  			  
            <div class="inner">
              <h3><?php
			   if(count($dashboardinquirycontent)):
                   echo count($dashboardinquirycontent);
                  endif;?>
				</h3>

              <p>Total Inquiries</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url('sitepanel/inquiries'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>