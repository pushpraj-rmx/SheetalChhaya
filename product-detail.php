



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
     <title><?php echo str_replace("^","'",$productcontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$productcontent->pg_meta_keyword);?>">
        <meta name="description" content="<?php echo str_replace("^","'",$productcontent->pg_meta_desc);?>">
<!-- Stylesheets -->
<?php include("analytics.php");?>

</head>

<body class="shop-page">
<!-- Main Header -->
<?php include("header1.php");?>
    <!-- End Main Header -->
<!--//header-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Packages</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row product-block">
				<div class="col-md-4">
					<div class="product-block-gallery">
					
						<div class="product-block-mainimage1">
							<img id="mainImage1" src="<?php echo base_url(); ?>upload/product/<?php echo $productcontent->image;?>"/>
							
						</div>
							<div class="product-block-actions1">
						
							<a href="#" class="btn ro btn-fill btn-noanimate product-block-add-to-cart1 "  data-toggle="modal" data-target="#modalBookingForm">Book Now<i class="icon-cart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="product-block-info">
						
						<h2 class="product-block-title"><?php echo str_replace("^","'",$productcontent->product_title); ?></h2>
						<div class="product-block-price">₹ <?php echo str_replace("^","'",$productcontent->mrp_price); ?></div>
						<div class="product-block-price-comment"> <?php echo str_replace("^","'",$productcontent->sort_description); ?></div>
						<div class="product-block-description">
							<table class="table table-striped">
								<tr>
									<td><span>Turnaround time </span></td>
									<td><?php echo str_replace("^","'",$productcontent->tat);?></td>
								</tr>
								<tr>
									<td><span>Advise</span></td>
									<td><?php echo str_replace("^","'",$productcontent->advise); ?></td>
								</tr>
							
							</table>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="prd-tabs-wrap">
				<!-- Nav tabs -->
				<div class="nav nav-pills" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Description</a>
					<a class="nav-link" data-toggle="pill" href="#tab2" role="tab">All Test </a>
				</div>
				<!-- Tab panels -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="tab1">
					<?php echo str_replace("^","'",$productcontent->description); ?></div>
					<div role="tabpanel" class="tab-pane" id="tab2">
					<?php echo str_replace("^","'",$productcontent->test_names); ?></div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Similar Packages</h2>
				<div class="h-decor"></div>
			</div>
			<div class="prd-grid prd-carousel">
			    	<?php $squery = $this->db->query("select * from tbl_product where pg_status='Active' ");
					$getservicehp=$squery->result();
       foreach($getservicehp as $getserdata)
       { $scquery = $this->db->query("select * from tbl_product_category");
					$getctserdata=$scquery->row();
      ?>
				<div class="prd">
					<div class="prd-img">
						<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><img src="<?php echo base_url(); ?>upload/product/<?php echo $getserdata->image;?>" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>"><?php echo str_replace("^","'",$getserdata->product_title);?></a></h3>
						<div class="price">₹  <?php echo str_replace("^","'",$getserdata->mrp_price);?></div>

						<a href="<?php echo base_url('our-package/');?><?php echo $getserdata->pg_url;?>/<?php echo $getserdata->pg_url;?>" class="btn"><i class="icon-cart"></i>Book Now<i class="icon-cart"></i></a>
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

<div class="modal modal-form fade" id="modalBookingForm">
	<div class="modal-dialog">
		<div class="modal-content">
			<button aria-label='Close' class='close' data-dismiss='modal'>
				<i class="icon-error"></i>
			</button>
			<div class="modal-body">
				<div class="modal-form">
					<h3>Book an Appointment</h3>
					<form class="mt-15" action="<?php echo base_url('home/processpackage/');?>" method="post" novalidate>
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<?php if($this->session->flashdata('csucmsg')): ?>
    <p><?php echo $this->session->flashdata('csucmsg'); ?></p>
<?php endif; ?>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
							<input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*"/>
						</div>
						<div class="row row-xs-space mt-1">
							<div class="col-sm-6">
								<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
									<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*"/>
								</div>
							</div>
							<div class="col-sm-6 mt-1 mt-sm-0">
								<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
									<input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone"/>
								</div>
							</div>
						</div>
					
						<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-micro"></i>
								</span>
							<select name="test" class="form-control">
								<option selected="selected" value="<?php echo str_replace("^","'",$productcontent->product_title); ?>"><?php echo str_replace("^","'",$productcontent->product_title); ?></option>
							
								
							
							</select>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="bdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
							</div>
						</div>
						<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
							<div class="datepicker-wrap">
								<input name="time" type="text" class="form-control timepicker" placeholder="Time">
							</div>
						</div>
					
						<div class="text-right mt-2">
							<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Vendors -->
<?php include("script.php");?>

</body>


</html>












<script src="<?php echo base_url('front/');?>vendor/jquery.elevateZoom/jquery.elevateZoom-3.0.8.min.js"></script>



</body>


</html>