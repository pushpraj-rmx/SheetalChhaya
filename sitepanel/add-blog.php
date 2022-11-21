<?php 
$page_title="Blog Management";
$page_subtitle="Add Blog";include("header.php");include("left-nev.php");
?>
<!-- Customizer JavaScript File (remove if not needed) -->
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
		<li><a href="<?php echo base_url('sitepanel/blogs') ?>"><?php echo $page_title;?></a></li>
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
            <div class="box box-info">			           <?php if($this->session->flashdata('sucmsg')): ?>           <p><?php echo $this->session->flashdata('sucmsg'); ?></p>           <?php endif; ?>
            <div class="box-body">              <!--<form method="post" enctype="multipart/form-data">-->               <?php echo form_open_multipart('sitepanel/addblog');?>			   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			    Blog Category <span style="color:red;">*</span>                <div class="form-group">                  <select class="form-control" name="blog_category">				  <option value="">Select</option>				  <?php				   $query=$this->db->query("select * from tbl_blog_category where pg_status='Active'");				  				  $blogcatcontent=$query->result_array();				  foreach($blogcatcontent as $contents)				  {				  ?>				  <option value="<?=str_replace("'","^",$contents['blog_category']);?>"><?=str_replace("^","'",$contents['blog_category']);?></option>				 <?php } ?>				  </select>				  <div style="color:red"><?php echo form_error('blog_category');?></div>                </div>				
			  Blog Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="pg_name" value="<?php echo set_value('pg_name'); ?>" placeholder="Heading">                  <div style="color:red"><?php echo form_error('pg_name');?></div>
                </div>
				Page Url <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="pg_url" value="<?php echo set_value('pg_url'); ?>" placeholder="Page Url">                  <div style="color:red"><?php echo form_error('pg_url');?></div>
                </div>				Blog By <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="blog_by" value="<?php echo set_value('blog_by'); ?>" placeholder="Blog By">                  <div style="color:red"><?php echo form_error('blog_by');?></div>                </div>								Sort Description <span style="color:red;"></span>				<div class="form-group">				  <textarea class="form-control" style="height:50px; width:100%;" name="sort_description"><?php echo set_value('sort_description'); ?></textarea>                  <div style="color:red"><?php echo form_error('sort_description');?></div>                </div>				
				Meta/Page Title <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="pg_meta_title" value="<?php echo set_value('pg_meta_title'); ?>" placeholder="Meta/Page Title">                   <div style="color:red"><?php echo form_error('pg_meta_title');?></div>
                </div>
				Meta Keywords <span style="color:red;"></span>
				<div class="form-group">
				  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_keyword"><?php echo set_value('pg_meta_keyword'); ?></textarea>
                </div>
				Meta Description <span style="color:red;"></span>
				<div class="form-group">
                  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_desc"><?php echo set_value('pg_meta_desc'); ?></textarea>
                </div>
				Description <span style="color:red;">*</span>
				<div class="form-group">
               <textarea id="des" name="description" cols="45" rows="7" style=" border:1px solid #A8D3FF;display:none;" ><?php echo set_value('description'); ?></textarea>                <input id="summernote">				<div style="color:red"><?php echo form_error('description');?></div>
                
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
				<label for="exampleInputFile">Image <span style="color:red;">*</span></label>                 <p>image Size Must be 600px*350px</p>
                <!--<input type="file" name="image" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'image']);				?>
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
<?php include("footer.php");?>