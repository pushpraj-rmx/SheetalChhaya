<?php 
$page_title="Faq's Management";
$page_subtitle="Edit Faq's";
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
		<li><a href="<?php echo base_url()?>sitepanel/faqs"><?php echo $page_title;?></a></li>
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
            <div class="box box-info">
            <div class="box-body">
			  Heading <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="pg_name" value="<?php echo str_replace("^","'",$getfaq->pg_name); ?>" placeholder="Heading">
                </div>
				Page Url <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="pg_url" value="<?php echo $getfaq->pg_url; ?>" placeholder="Page Url">
                </div>
				Meta/Page Title <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="pg_meta_title" value="<?php echo str_replace("^","'",$getfaq->pg_meta_title); ?>" placeholder="Meta/Page Title">
                </div>
				Meta Keywords <span style="color:red;"></span>
				<div class="form-group">
				  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_keyword"><?php echo str_replace("^","'",$getfaq->pg_meta_keyword); ?></textarea>
                </div>
				Meta Description <span style="color:red;"></span>
				<div class="form-group">
                  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_desc"><?php echo str_replace("^","'",$getfaq->pg_meta_desc); ?></textarea>
                </div>
				Description <span style="color:red;">*</span>
				<div class="form-group">
                <textarea id="des" name="description" cols="45" rows="7" style="border:1px solid #A8D3FF;display:none;"><?php echo str_replace("^","'",$getfaq->description); ?></textarea>
                
                                                </div>
												
				Status <span style="color:red;"></span>
				<div class="radio">
                    <label>
					  <span><input type="radio" name="pg_status" value="Active" <?php if($getfaq->pg_status == 'Active') echo "checked"; ?>/></span>
<span>Active</span>  <span style="margin-left:30px;">
<input type="radio" name="pg_status"  value="Inactive" <?php if($getfaq->pg_status == 'Inactive') echo "checked"; ?> /></span><span>Inactive</span>
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