<?php 
include("header.php");
include("left-nev.php");
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

</script>
<?php if($this->session->flashdata('sucmsg')): ?>
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
                <tbody>
                <tr>
				 <td><?php echo $sn;?></td>
                  <td><a href="<?php echo base_url('sitepanel/') ?>productcategories/<?=$contents['product_cat_id'];?>"><b><?=str_replace("^","'",$contents['product_category']);?></b></a></td>
                 <td><?=$contents['pg_url'];?></td>
                 <td>
				  
                  <td><a href="<?php echo base_url('sitepanel/') ?>productcategoryedit/<?=$contents['product_cat_id'];?>/<?php echo $parent_id;?>/<?php echo $cpgnum;?>">
				  <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Edit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				  </a>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('sitepanel/') ?>productcategorydelete/<?=$contents['product_cat_id'];?>/<?php echo $parent_id;?>/<?php echo $cpgnum;?>" onclick="return confirm('Are you sure you want to delete this ?')">
				
				  </td>
                </tr>
             <?php $pi++; 
                </tbody>
                
              </table>
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