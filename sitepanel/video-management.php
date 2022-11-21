<?php $page_title="Video Management";$page_subtitle="Manage Video";
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
		<li><a href="<?php echo base_url('sitepanel/videos') ?>"><?php echo $page_title;?></a></li>
        <li class="active"><?php echo $page_subtitle;?></li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
             <button type="button" class="btn bg-navy margin" onclick="window.location.href='<?php echo base_url('sitepanel/addvideo') ?>'">Add Video</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<script>$(document).ready(function(){        $("#page-msg").fadeOut(2000)});</script><div id="page-msg"><?php echo isset($error) ? $error : ''; ?>           <?php if($this->session->flashdata('sucmsg')): ?>    <p><?php echo $this->session->flashdata('sucmsg'); ?></p><?php endif; ?></div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>S. No</th>
                  <th>Category</th>
                  <th>Download Title</th>
                  <th>Download File</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>		        <?php		        $pi=1;				$totecpg=count($videocontent);				if(basename($_SERVER['REQUEST_URI'])>1)				{				$pg=basename($_SERVER['REQUEST_URI']);					}				else{				$pg=10;					}				$pgnum=$pg/10;				if(count($videocontent)):				foreach($videocontent as $contents):				if($pgnum>0)				{				$pg=$pgnum*10;				$sn=$pg+$pi;					}				else				{				$sn=$pi;					}                ?>
                <tr>
				 <td><?php echo $sn;?></td>
                  <td><?=$contents['video_category'];?></td>
                 <td><?=$contents['video_title'];?></td>
                 <td><?php 				 if($contents['video_link'])				 {                  ?>				  <iframe width="240" height="200" src="<?php echo $contents['video_link'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	 				<?php				}				 else				 {					 ?><video width="240" height="200" controls>  <source src="<?php echo base_url().'upload/video/'.$contents['video_file'];?>" type="video/mp4"></video><?php									 }				 ?>				 				 </td>
                  <td>                                  <?php if ($contents['pg_status'] == 'Active') : ?>									<a href="<?php echo base_url('sitepanel/') ?>videostatus/<?=$contents['video_id'];?>/Inactive"><span class="label label-info">Active</span></a>                                    <?php else: ?>                                     <a href="<?php echo base_url('sitepanel/') ?>videostatus/<?=$contents['video_id'];?>/Active"><span class="label bg-red">Inactive</span></a>                                    <?php endif ?>									</td>
				  
                  <td><a href="<?php echo base_url('sitepanel/') ?>videoedit/<?=$contents['video_id'];?>">
				  <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Edit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				  </a>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('sitepanel/') ?>videodelete/<?=$contents['video_id'];?>" onclick="return confirm('Are you sure you want to delete this ?')">				 <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>                  </a>
				
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