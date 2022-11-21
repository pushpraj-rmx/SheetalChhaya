<?php 
$page_title="Video Management";
$page_subtitle="Add Video";include("header.php");include("left-nev.php");
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
		<li><a href="<?php echo base_url('sitepanel/videos') ?>"><?php echo $page_title;?></a></li>
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
            <div class="box box-info">			           <?php if($this->session->flashdata('sucmsg')): ?>    <p><?php echo $this->session->flashdata('sucmsg'); ?></p><?php endif; ?>
            <div class="box-body">              <!--<form method="post" enctype="multipart/form-data">-->               <?php echo form_open_multipart('sitepanel/addvideo');?>			   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			      Video Category <span style="color:red;">*</span>                <div class="form-group">                  <select class="form-control" name="video_category">				  <option value="">Select</option>		           <?php				   $query=$this->db->query("select * from tbl_video_category where pg_status='Active'");				  				  $videocatcontent=$query->result_array();				  foreach($videocatcontent as $contents)				  {				  ?>				  <option value="<?=str_replace("'","^",$contents['video_category']);?>"><?=str_replace("^","'",$contents['video_category']);?></option>				 <?php } ?>				  </select>				  				  <div style="color:red"><?php echo form_error('video_category');?></div>                </div>			   			   
			  Video Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="video_title" value="<?php echo set_value('video_title'); ?>" placeholder="Video Title">                  <div style="color:red"><?php echo form_error('video_title');?></div>
                </div>              Video Link <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="video_link" value="<?php echo set_value('video_link'); ?>" placeholder="Video Link">                </div>
					               	<div class="form-group">				<label for="exampleInputFile">Video File<span style="color:red;">*</span></label>                <!--<input type="file" name="file" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'file']);				?>                <p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>				</div>
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