<?php 
$page_title="Gallery Management";
$page_subtitle="Add Gallery Cagetory";include("header.php");include("left-nev.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $page_title;?>
        <small><?php echo $page_subtitle;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>">Dashboard</a></li>
		<li><a href="<?php echo base_url('sitepanel/gallerycategories/0') ?>"><?php echo $page_title;?></a></li>
        <li class="active"><?php echo $page_subtitle;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
		<section class="col-lg-12 connectedSortable">
          <!-- TO DO List -->          
            <div class="box box-info">			<script>$(document).ready(function(){        $("#page-msg").fadeOut(2000)});</script><div id="page-msg"><?php echo isset($error) ? $error : ''; ?>           <?php if($this->session->flashdata('sucmsg')): ?>    <p><?php echo $this->session->flashdata('sucmsg'); ?></p><?php endif; ?></div>
            <div class="box-body">              <!--<form method="post" enctype="multipart/form-data">-->               <?php echo form_open_multipart('sitepanel/addgallerycategory');?>			   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>
			  Category Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="gallery_category" value="<?php echo set_value('gallery_category'); ?>" placeholder="Category Title">                  <div style="color:red"><?php echo form_error('gallery_category');?></div>
                </div>
	            Page Url <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="pg_url" value="<?php echo set_value('pg_url'); ?>" placeholder="Page Url">                  <div style="color:red"><?php echo form_error('pg_url');?></div>                </div>				Meta/Page Title <span style="color:red;">*</span>				<div class="form-group">                  <input type="text" class="form-control" name="pg_meta_title" value="<?php echo set_value('pg_meta_title'); ?>" placeholder="Meta/Page Title">                   <div style="color:red"><?php echo form_error('pg_meta_title');?></div>                </div>				Meta Keywords <span style="color:red;"></span>				<div class="form-group">				  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_keyword"><?php echo set_value('pg_meta_keyword'); ?></textarea>                </div>				Meta Description <span style="color:red;"></span>				<div class="form-group">                  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_desc"><?php echo set_value('pg_meta_desc'); ?></textarea>                </div>
				Status <span style="color:red;"></span>
				<div class="radio">
                    <label>
					  <span><input type="radio" name="pg_status" value="Active" checked="checked"/></span>
<span>Active</span>  <span style="margin-left:30px;">
<input type="radio" name="pg_status"  value="Inactive"  /></span><span>Inactive</span>
                    </label>
                  </div>
				
            </div>
            <div class="box-footer">
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="reset" name="Reset" class="btn btn-primary">Reset</button>
              </div>
		 </form>

          </div>

        <!-- /.box -->
        </section>
        <!-- /.Left col -->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php");?>