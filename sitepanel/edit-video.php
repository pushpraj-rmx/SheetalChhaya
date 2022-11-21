<?php 
$page_title="Video Management";
$page_subtitle="Edit Video";include("header.php");include("left-nev.php");
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
		<li><a href="<?php echo base_url()?>sitepanel/videos"><?php echo $page_title;?></a></li>
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
            <div class="box box-info">			<?php echo isset($error) ? $error : ''; ?>
            <div class="box-body">			<?php         		$attributes = ['name' => 'formEdit', 'id' => 'formEdit'];        		echo form_open_multipart('', $attributes);      	  ?>              <!--<form method="post" enctype="multipart/form-data">-->		   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			   Video Category <span style="color:red;">*</span>                <div class="form-group">				 <select class="form-control" name="video_category">                 <option value="">Select</option>                <?php				   $query=$this->db->query("select * from tbl_video_category where pg_status='Active'");				  				  $videocatcontent=$query->result_array();				  foreach($videocatcontent as $contents)				  {				  ?>				  <option value="<?=$contents['video_category'];?>" <?php if($contents['video_category']==$getvideo->video_category) echo "selected";?>><?=str_replace("^","'",$contents['video_category']);?></option>				 <?php } ?>				 </select>				  <div style="color:red"><?php echo form_error('video_category');?></div>                </div>				
			  Video Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="video_title" value="<?php echo str_replace("^","'",$getvideo->video_title); ?>" placeholder="Video Title">                  <div style="color:red"><?php echo form_error('video_title');?></div>
                </div>				            Video Link <span style="color:red;"></span>                <div class="form-group">                  <input type="text" class="form-control" name="video_link" value="<?php echo str_replace("^","'",$getvideo->video_link); ?>" placeholder="Video Link">                </div>				
				Status <span style="color:red;"></span>
				<div class="radio">
                    <label>
					  <span><input type="radio" name="pg_status" value="Active" <?php if($getvideo->pg_status == 'Active') echo "checked"; ?>/></span>
<span>Active</span>  <span style="margin-left:30px;">
<input type="radio" name="pg_status"  value="Inactive" <?php if($getvideo->pg_status == 'Inactive') echo "checked"; ?> /></span><span>Inactive</span>
                    </label>
                  </div>
				
				<div class="form-group">
				<label for="exampleInputFile">Video File <span style="color:red;">*</span></label>
                <!--<input type="file" name="image" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'file']);				?>								<?php 				 if($getvideo->video_link)				 {                  ?>				  <iframe width="240" height="200" src="<?php echo $getvideo->video_link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	 				<?php				}				 else if($getvideo->video_file)				 {					 ?><video width="240" height="200" controls>  <source src="<?php echo base_url().'upload/video/'.$getvideo->video_file;?>" type="video/mp4"></video><?php									 }				 else{					 echo "No Video Uploaded";				 }				 ?>				<p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>
				</div>
            </div>
            <div class="box-footer">
                <button type="submit" name="Submit" class="btn btn-primary">Update</button>
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
<?php include("footer.php");?><script>$('#summernote').summernote("code",`<?php echo str_replace("^","'",$getvideo->description); ?>`);</script>
