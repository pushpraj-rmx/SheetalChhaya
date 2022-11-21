<?php $page_title="Testimonial Management";$page_subtitle="Manage Testimonial";
include("header.php");
include("left-nev.php");
?>
<!--######## delete cancel ########-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--######## delete cancel ########-->
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
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
             <button type="button" class="btn bg-navy margin" onclick="window.location.href='<?php echo base_url('sitepanel/addtestimonial') ?>'">Add Testimonial</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<script>
$(document).ready(function(){
        $("#page-msg").fadeOut(2000)
});

</script><div id="page-msg"><?php echo isset($error) ? $error : ''; ?>
           <?php if($this->session->flashdata('sucmsg')): ?>    <p><?php echo $this->session->flashdata('sucmsg'); ?></p><?php endif; ?></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>S. No</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>		        <?php		        $pi=1;				$totecpg=count($testimonialcontent);				if(basename($_SERVER['REQUEST_URI'])>1)				{				$pg=basename($_SERVER['REQUEST_URI']);					}				else{				$pg=10;					}				$pgnum=$pg/10;				if(count($testimonialcontent)):				foreach($testimonialcontent as $contents):				if($pgnum>0)				{				$pg=$pgnum*10;				$sn=$pg+$pi;					}				else				{				$sn=$pi;					}                ?>
                <tr>
				 <td><?php echo $sn;?></td>
                  <td><?=$contents['client_name'];?></td>
                 <td><?=$contents['client_company'];?></td>
                 <td><img src="<?php echo base_url().'upload/testimonial/'.$contents['image']; ?>" style="height:50px;width:100px;" /></td>
                  <td>                                  <?php if ($contents['pg_status'] == 'Active') : ?>									<a href="<?php echo base_url('sitepanel/') ?>testimonialpgstatus/<?=$contents['testimonial_id'];?>/Inactive"><span class="label label-info">Active</span></a>                                    <?php else: ?>                                     <a href="<?php echo base_url('sitepanel/') ?>testimonialpgstatus/<?=$contents['testimonial_id'];?>/Active"><span class="label bg-red">Inactive</span></a>                                    <?php endif ?>									</td>
				  
                  <td><a href="<?php echo base_url('sitepanel/') ?>testimonialedit/<?=$contents['testimonial_id'];?>">
				  <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Edit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				  </a>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('sitepanel/') ?>testimonialdelete/<?=$contents['testimonial_id'];?>" onclick="return confirm('Are you sure you want to delete this ?')">				 <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>                  </a>
				
				  </td>
                </tr>
             <?php $pi++; 			 endforeach; ?>            <?php else: ?>	   	   <tr><td colspan="6"><p> No Records in database</p></td></tr>	   <?php endif;?>
                </tbody>
                
              </table><?phpecho $this->pagination->create_links();?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php");?>