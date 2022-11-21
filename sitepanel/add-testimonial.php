<?php 
$page_title="Testimonial Management";
$page_subtitle="Add Testimonial";
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
		<li><a href="<?php echo base_url('sitepanel/testimonials/0') ?>"><?php echo $page_title;?></a></li>
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
			  Name <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="client_name" value="<?php echo set_value('client_name'); ?>" placeholder="Name">
                </div>
				Company <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="client_company" value="<?php echo set_value('client_company'); ?>" placeholder="Company">
                </div>
				Designation <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="client_designation" value="<?php echo set_value('client_designation'); ?>" placeholder="Designation">
                </div>				
				Description <span style="color:red;">*</span>
				<div class="form-group">
                <textarea id="des" name="description" cols="45" rows="7" style=" border:1px solid #A8D3FF;display:none;" ><?php echo set_value('description'); ?></textarea>
                
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
				<label for="exampleInputFile">Image <span style="color:red;">*</span></label>
                <!--<input type="file" name="image" id="exampleInputFile">-->
                <p class="help-block">
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