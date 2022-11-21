<?php 
$page_title="Testimonial Management";
$page_subtitle="Edit Testimonial";include("header.php");include("left-nev.php");
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
		<li><a href="<?php echo base_url()?>sitepanel/testimonials/0"><?php echo $page_title;?></a></li>
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
            <div class="box-body">			<?php         $attributes = ['name' => 'formEdit', 'id' => 'formEdit'];        		echo form_open_multipart('', $attributes);      ?>              <!--<form method="post" enctype="multipart/form-data">-->		   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>
			  Name <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="client_name" value="<?php echo str_replace("^","'",$gettestimonial->client_name); ?>" placeholder="Name">                  <div style="color:red"><?php echo form_error('client_name');?></div>
                </div>
				Company <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="client_company" value="<?php echo str_replace("^","'",$gettestimonial->client_company); ?>" placeholder="Company">                  <div style="color:red"><?php echo form_error('client_company');?></div>
                </div>
				Designation <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="client_designation" value="<?php echo str_replace("^","'",$gettestimonial->client_designation); ?>" placeholder="Designation">                   <div style="color:red"><?php echo form_error('client_designation');?></div>
                </div>
				
				Description <span style="color:red;">*</span>
				<div class="form-group">                 				 <textarea id="des" name="description" cols="45" rows="7" style=" border:1px solid #A8D3FF;display:none;" ><?php echo str_replace("^","'",$gettestimonial->description); ?></textarea>                <input id="summernote">								<div style="color:red"><?php echo form_error('description');?></div>
                
                                                </div>
												
				Status <span style="color:red;"></span>
				<div class="radio">
                    <label>
					  <span><input type="radio" name="pg_status" value="Active" <?php if($gettestimonial->pg_status == 'Active') echo "checked"; ?>/></span>
<span>Active</span>  <span style="margin-left:30px;">
<input type="radio" name="pg_status"  value="Inactive" <?php if($gettestimonial->pg_status == 'Inactive') echo "checked"; ?> /></span><span>Inactive</span>
                    </label>
                  </div>
				
				<div class="form-group">
				<label for="exampleInputFile">Image <span style="color:red;">*</span></label>                <p class="help-block">Image width must be 200px and height must be 200px.</p>
                <!--<input type="file" name="image" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'image']);				?>				<img src="<?php echo base_url().'upload/testimonial/'.$gettestimonial->image; ?>" style="heigh:100px;width:100px;margin-top:15px"/>
                <p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>
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
<?php include("footer.php");?><script>$('#summernote').summernote("code",`<?php echo str_replace("^","'",$gettestimonial->description); ?>`);</script>
