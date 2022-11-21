<?php $page_title="Contact Management";$page_subtitle="Manage Contact Us";include("header.php");include("left-nev.php");?>  <!-- Content Wrapper. Contains page content -->  <div class="content-wrapper">    <!-- Content Header (Page header) -->    <section class="content-header">      <h1>        <?php echo $page_title;?>        <small><?php echo $page_subtitle;?></small>      </h1>      <ol class="breadcrumb">        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>">Dashboard</a></li>		<li><a href=""><?php echo $page_title;?></a></li>        <li class="active"><?php echo $page_subtitle;?></li>      </ol>    </section>    <!-- Main content -->    <section class="content">      <!-- Main row -->      <div class="row">        <!-- Left col -->		<section class="col-lg-7 connectedSortable">          <!-- TO DO List -->                      <div class="box box-info">			<?php echo isset($error) ? $error : ''; ?>            <div class="box-body">			<?php         $attributes = ['name' => 'formEdit', 'id' => 'formEdit'];        		echo form_open_multipart('', $attributes);      ?>              <!--<form method="post" enctype="multipart/form-data">-->		   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			  Contact Person <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="contact_person" value="<?php echo str_replace("^","'",$getcontact->contact_person); ?>" placeholder="Contact Person">                  <div style="color:red"><?php echo form_error('contact_person');?></div>                </div>				Mobile No <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="mobile_no" value="<?php echo $getcontact->mobile_no; ?>" placeholder="Mobile No">                  <div style="color:red"><?php echo form_error('mobile_no');?></div>                </div>				Whatsapp No <span style="color:red;"></span>				<div class="form-group">                  <input type="text" class="form-control" name="whatsapp_no" value="<?php echo str_replace("^","'",$getcontact->whatsapp_no); ?>" placeholder="Whatsapp No">                </div>				Phone No <span style="color:red;"></span>				<div class="form-group">                  <input type="text" class="form-control" name="phone_no" value="<?php echo str_replace("^","'",$getcontact->phone_no); ?>" placeholder="Phone No">                </div>            			  Email Id <span style="color:red;">*</span>				<div class="form-group">                  <input type="text" class="form-control" name="email_id" value="<?php echo str_replace("^","'",$getcontact->email_id); ?>" placeholder="Email Id">                   <div style="color:red"><?php echo form_error('email_id');?></div>                </div>								Alt Email Id <span style="color:red;"></span>				<div class="form-group">                  <input type="text" class="form-control" name="alt_email" value="<?php echo str_replace("^","'",$getcontact->alt_email); ?>" placeholder="Alt Email Id">                </div>								Address <span style="color:red;">*</span>				<div class="form-group">                  <input type="text" class="form-control" name="address" value="<?php echo str_replace("^","'",$getcontact->address); ?>" placeholder="Address">                   <div style="color:red"><?php echo form_error('address');?></div>                </div>				               Google Map				<div class="form-group">                  <textarea class="form-control" name="google_map"><?php echo $getcontact->google_map;?></textarea>				</div>				            </div>            <div class="box-footer">                <button type="submit" name="Submit" class="btn btn-primary">Update</button>				&nbsp;&nbsp;&nbsp;&nbsp;				<button type="reset" name="Reset" class="btn btn-primary">Reset</button>              </div>		 </form>          </div>        <!-- /.box -->        </section> <section class="col-lg-5 connectedSortable">          <!-- Map box -->          <div class="box box-info">            <div class="box-body">			  <?php echo $getcontact->contact_person;?><br>				<?php echo $getcontact->mobile_no;?><br>				<?php echo $getcontact->email_id;?><br>				<?php echo $getcontact->address;?><br>				<?php echo $getcontact->google_map;?>				          </div><!-- /.box -->        </section>        <!-- /.Left col -->      <!-- /.row (main row) -->    </section>    <!-- /.content -->  </div>  <!-- /.content-wrapper --><?php include("footer.php");?>