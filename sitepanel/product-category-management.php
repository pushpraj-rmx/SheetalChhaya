<?php $page_title="Product Management";$page_subtitle="Manage Product Category";
include("header.php");
include("left-nev.php");error_reporting(0);$parent_url=explode("/",$_SERVER['REQUEST_URI']);$ct=count($parent_url);$parent_id=$parent_url[$ct-1];if($parent_url[$ct]){$cpgnum=$parent_url[$ct];}else{$cpgnum=0;	}?>
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
		<li><a href="<?php echo base_url('sitepanel/productcategories/0'); ?>"><?php echo $page_title;?></a></li>
        <li class="active"><?php echo $page_subtitle;?></li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
             <button type="button" class="btn bg-navy margin" onclick="window.location.href='<?php echo base_url('sitepanel/addproductcategory/').$parent_id ?>'">Add Product Category</button>
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
                  <th>Category Title</th>
                  <th>Pg Url</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>		        <?php		        $pi=1;				$totecpg=count($productcategorycontent);				$pgnum=intval(basename($_SERVER['REQUEST_URI'])/10);				if(count($productcategorycontent)):				foreach($productcategorycontent as $contents):				if($pgnum>0)				{				$pg=$pgnum*10;				$sn=$pg+$pi;					}				else				{				$sn=$pi;					}                ?>
                <tr>
				 <td><?php echo $sn;?></td>
                  <td><a href="<?php echo base_url('sitepanel/') ?>productcategories/<?=$contents['product_cat_id'];?>"><b><?=str_replace("^","'",$contents['product_category']);?></b></a></td>
                 <td><?=$contents['pg_url'];?></td>
                 <td>                                  <?php if ($contents['pg_status'] == 'Active') : ?>									<a href="<?php echo base_url('sitepanel/') ?>productcategorypgstatus/<?=$contents['product_cat_id'];?>/Inactive/<?php echo $parent_id;?>/<?php echo $cpgnum;?>"><span class="label label-info">Active</span></a>                                    <?php else: ?>                                     <a href="<?php echo base_url('sitepanel/') ?>productcategorypgstatus/<?=$contents['product_cat_id'];?>/Active/<?php echo $parent_id;?>/<?php echo $cpgnum;?>"><span class="label bg-red">Inactive</span></a>                                    <?php endif ?>									</td>
				  
                  <td><a href="<?php echo base_url('sitepanel/') ?>productcategoryedit/<?=$contents['product_cat_id'];?>/<?php echo $parent_id;?>/<?php echo $cpgnum;?>">
				  <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Edit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				  </a>                 <!--
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('sitepanel/') ?>productcategorydelete/<?=$contents['product_cat_id'];?>/<?php echo $parent_id;?>/<?php echo $cpgnum;?>" onclick="return confirm('Are you sure you want to delete this ?')">				 <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>                  </a>-->
				
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
