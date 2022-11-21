<?php 
$page_title="Product Management";
$page_subtitle="Manage Product";include("header.php");include("left-nev.php");error_reporting(0);$parent_url=explode("/",$_SERVER['REQUEST_URI']);$ct=count($parent_url);if($parent_url[$ct]){$cpgnum=$parent_url[$ct];}else{$cpgnum=0;	}
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
		<li><a href="<?php echo base_url('sitepanel/products') ?>"><?php echo $page_title;?></a></li>
        <li class="active"><?php echo $page_subtitle;?></li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header"><div class="col-xs-8">
<button type="button" class="btn bg-navy margin" onclick="window.location.href='<?php echo base_url('sitepanel/addproduct') ?>'">Add Product</button></div><div class="col-xs-4"><!--search--><input type="text" id="input" class="form-control" placeholder="Search by Product Details" style="margin-top:10px"><!--search--></div>					
            </div>
            <!-- /.box-header -->					
            <div class="box-body">			<script>$(document).ready(function(){        $("#page-msg").fadeOut(2000)});</script><div id="page-msg"><?php echo isset($error) ? $error : ''; ?>           <?php if($this->session->flashdata('sucmsg')): ?>    <p><?php echo $this->session->flashdata('sucmsg'); ?></p><?php endif; ?></div>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>S. No</th>
                  <th>Product Details</th>				  				  <!--<th>SKU Code</th>-->
                  <th>Page Url</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>		        <?php		        $pi=1;				$totecpg=count($productcontent);				$pgnum=basename($_SERVER['REQUEST_URI'])/10;				if(count($productcontent)):				foreach($productcontent as $contents):				if($pgnum>0)				{				$pg=$pgnum*10;				$sn=$pg+$pi;					}				else				{				$sn=$pi;					}								?>
                <tr>
				 <td><?php echo $sn;?></td>                  				 <td class="list">				 <?=str_replace("^","'",$contents['product_title']);?>				 <?= "<br><b>Category :</b>".str_replace("^","'",$contents['product_cat_title']);?>				  <?php				 				  $query=$this->db->query("select * from tbl_product_category where product_cat_id='".$contents['product_subcat']."'");				  				  $productcatcontent=$query->result_array();				  foreach($productcatcontent as $pccontents)				  {					echo "<br><b>Sub Category :</b>".str_replace("^","'",$pccontents['product_category']);  				  }				  ?>				  <br>Sku Code : <?=$contents['sku_code'];?><br>				  <?php				 $hmpgshowsts = explode(",",$contents['home_page_status']);				  if(in_array("1",$hmpgshowsts))				  {				  ?>				  <span class="label label-warning pull-left">NEW ARRIVALS</span>				  <?php				  }					  				   if(in_array("2",$hmpgshowsts))				  {				  ?>				  &nbsp;<span class="label label-info pull-left">TOP SELLERS</span>				  <?php				  }					  				   if(in_array("3",$hmpgshowsts))				  {				  ?>				  &nbsp;<span class="label label-teal pull-left" style="background-color:purple">SPECIAL</span>				   <?php				  }					  				   if(in_array("4",$hmpgshowsts))				  {				  ?>				  &nbsp;<span class="label label-danger pull-left">RECOMMENDAD</span>				   <?php				  }					  				   if(in_array("5",$hmpgshowsts))				  {				  ?>				  &nbsp;<span class="label label-success pull-left">TRENDING</span>				  <?php				  }				  				  ?>				 </td>				  
                  <!--<td><?//=$contents['sku_code'];?></td>-->
                 <td><?=$contents['pg_url'];?></td>
                 <td><img src="<?php echo base_url().'upload/product/small/'.$contents['image']; ?>" style="height:100px;width:70px;" /></td>
                  <td>                                  <?php if ($contents['pg_status'] == 'Active') : ?>									<a href="<?php echo base_url('sitepanel/') ?>productstatus/<?=$contents['product_id'];?>/Inactive/<?php echo $cpgnum;?>"><span class="label label-info">Active</span></a>                                    <?php else: ?>                                     <a href="<?php echo base_url('sitepanel/') ?>productstatus/<?=$contents['product_id'];?>/Active/<?php echo $cpgnum;?>"><span class="label bg-red">Inactive</span></a>                                    <?php endif ?>									</td>
				  
                  <td><a href="<?php echo base_url('sitepanel/') ?>productedit/<?=$contents['product_id'];?>/<?php echo $cpgnum;?>">
				  <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Edit"><i class="fa fa-refresh" aria-hidden="true"></i></button>
				  </a>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo base_url('sitepanel/') ?>productdelete/<?=$contents['product_id'];?>/<?php echo $cpgnum;?>" onclick="return confirm('Are you sure you want to delete this ?')">				 <button type="submit" style="width:30px; height:30px;margin-top:10px;" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>                  </a>				
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
<!-- Search Script Start --><script> $(document).ready(function(){          $('#input').keyup(function(){         let mrow = '';         let list = $('.list');         let val = $(this).val().toUpperCase();         for(let i=0;i<list.length;i++){         if($(this).val() !=''){          if($('.list').eq(i).text().toUpperCase().lastIndexOf(val) > -1){                         let ind = $('.list').eq(i).text().toUpperCase().indexOf(val);             let txt = $('.list').eq(i).text();            mrow++;            $('.list').eq(i).html(txt.slice(0,ind)+'<b>'+$(this).val()+'</b>'+txt.slice(ind+val.length)).parent().fadeIn();         }else{             $('.list').eq(i).parent().fadeOut();         }         }else{             for(let i=0;i<list.length;i++){                 $('.list b').eq(i).contents().unwrap();                  $('.list').eq(i).parent().fadeIn();             }         }         }         if(!$(this).val() == ''){         $('.resMatch').html(mrow+'/'+row).parent().show();         }else{             $('.resMatch').parent().fadeOut();         }     }) });</script><!-- Search Script End -->
