<?php 
include("left-nev.php");
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
		<li><a href="<?php echo base_url('sitepanel/banners/0') ?>"><?php echo $page_title;?></a></li>
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
			  Banner Title <span style="color:red;">*</span>
                <div class="form-group">
                  <input type="text" class="form-control" name="banner_title" value="<?php echo set_value('banner_title'); ?>" placeholder="Banner Title">
                </div>
				Link <span style="color:red;"></span>
                <div class="form-group">
                  <input type="text" class="form-control" name="banner_link" value="<?php echo set_value('banner_link'); ?>" placeholder="Link">
				Alt <span style="color:red;">*</span>
				<div class="form-group">
                  <input type="text" class="form-control" name="banner_alt" value="<?php echo set_value('banner_alt'); ?>" placeholder="Banner Alt">
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
				<label for="exampleInputFile">Banner Image <span style="color:red;">*</span></label>
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