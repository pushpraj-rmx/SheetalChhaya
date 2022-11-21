<?php 
$page_title="Gallery Management";
$page_subtitle="Add Gallery";include("header.php");include("left-nev.php");
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
		<li><a href="<?php echo base_url('sitepanel/galleries/0') ?>"><?php echo $page_title;?></a></li>
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
            <div class="box-body">              <!--<form method="post" enctype="multipart/form-data">-->               <?php echo form_open_multipart('sitepanel/addgallery');?>			   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			   Gallery Category <span style="color:red;">*</span>                <div class="form-group">                  <select class="form-control" name="gallery_category">				  <option value="">Select</option>		           <?php				   $query=$this->db->query("select * from tbl_gallery_category where pg_status='Active'");				  				  $gallerycatcontent=$query->result_array();				  foreach($gallerycatcontent as $contents)				  {				  ?>				  <option value="<?=str_replace("'","^",$contents['gallery_category']);?>"><?=str_replace("^","'",$contents['gallery_category']);?></option>				 <?php } ?>				  </select>				  				  <div style="color:red"><?php echo form_error('gallery_category');?></div>                </div>				
			    Gallery Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="gallery_title" value="<?php echo set_value('gallery_title'); ?>" placeholder="Gallery Title">                  <div style="color:red"><?php echo form_error('gallery_title');?></div>
                </div>
				Alt <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="gallery_alt" value="<?php echo set_value('gallery_alt'); ?>" placeholder="Gallery Alt">                   <div style="color:red"><?php echo form_error('gallery_alt');?></div>
                </div>
				Status <span style="color:red;"></span>
				<div class="radio">
                    <label>
					  <span><input type="radio" name="pg_status" value="Active" checked="checked"/></span>
<span>Active</span>  <span style="margin-left:30px;">
<input type="radio" name="pg_status"  value="Inactive"  /></span><span>Inactive</span>
                    </label>
                  </div>
				
				<div class="form-group">
				<label for="exampleInputFile">Image<span style="color:red;">*</span></label>
                <!--<input type="file" name="image" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'image']);				?>
                <p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>
				</div>								<!--				<div class="form-group">				<label for="exampleInputFile">Image (Big)<span style="color:red;">*</span></label>                <?php				echo form_upload(['name'=>'bigimage']);				?>                <p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>				</div>-->
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