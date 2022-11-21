<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
     <title><?php echo str_replace("^","'",$pghomecontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_keyword); ?>">
        <meta name="description" content="<?php echo str_replace("^","'",$pghomecontent->pg_meta_desc); ?>">
<!-- Stylesheets -->
<?php include("analytics.php");?>
</head>


 <body>
     <?php include("header1.php");?>
     <div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">What We Offer</div>
				<h1>Our Services</h1>
				<div class="h-decor"></div>
				<div class="text-center max-670 mt-4 mx-md-auto">
					<p>Clinical laboratory services are tests provided by a medical lab that aid in diagnosis and treatment of patients. There are many types of clinical laboratory services, including:</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row col-equalH">
			    
			    	<?php $squery = $this->db->query("select * from tbl_product where pg_status='Active' ");
					$getservicehp=$squery->result();
       foreach($getservicehp as $getserdata)
       { $scquery = $this->db->query("select * from tbl_product_category");
					$getctserdata=$scquery->row();
      ?>
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
						<div class="service-card-photo">
							<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><img src="<?php echo base_url(); ?>upload/product/<?php echo $getserdata->image;?>" class="img-fluid" alt=""></a>
						</div>
						<h5 class="service-card-name"><a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->product_title);?></a></h5>
						<div class="h-decor"></div>
						<div class="doctor-box-text" style="text-align:left">
							<p><?php echo str_replace("^","'",$getserdata->sort_description);?></p>
						</div>
						<div style="text-align:left" >
						    <ul class="marker-list-md-line">
						    <?php echo str_replace("^","'",$getserdata->test_names);?>
						    </ul>
						</div>
						<div class="doctor-box-bottom">
							<div class="prices-box-link">
									<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>" class="btn-link btn-link--sm"><span>View All</span><i class="icon-right-arrow"></i></a>
								</div>
						</div>
					</div>
				</div>
					<?php }?>
			</div>
		</div>
	</div>
	<!--//section-->
</div>
<!--footer-->
<?php include("footer1.php");?>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>
<?php include("script.php");?>
 </body>
</html>