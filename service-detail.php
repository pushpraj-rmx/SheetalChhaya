



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
     <title><?php echo str_replace("^","'",$servicecontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$servicecontent->pg_meta_keyword);?>">
        <meta name="description" content="<?php echo str_replace("^","'",$servicecontent->pg_meta_desc);?>">
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
					<span>Shop</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container mt-6">
			<div class="row product-block">
				<div class="col-md-6">
					<div class="product-block-gallery">
					
						<div class="product-block-mainimage">
							<img id="mainImage" src="<?php echo base_url(); ?>upload/service/<?php echo $servicecontent->image;?>"/>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-block-info">
					
						<h2 class="product-block-title"><?php echo str_replace("^","'",$servicecontent->service_title); ?></h2>
						<div class="product-block-price"><?php echo str_replace("^","'",$servicecontent->price); ?></div>
					
						<div class="product-block-description">
							<table class="table table-striped">
								<tr>
									<td><span>Location:</span></td>
									<td>Front, Driver Or Passenger Side</td>
								</tr>
								<tr>
									<td><span>Product Fit:</span></td>
									<td>Direct Fit</td>
								</tr>
								<tr>
									<td><span>Quantity Sold:</span></td>
									<td>Sold Individually</td>
								</tr>
								<tr>
									<td><span>Anticipated Ship Out Time:</span></td>
									<td>1-2 Business Days</td>
								</tr>
							</table>
						</div>
						<div class="product-block-actions">
							<div class="qty-count">
								<span class="count-reduce">–</span>
								<input type="text" class="count-input" value="1" readonly>
								<span class="count-add">+</span>
							</div>
							<a href="#" class="btn btn-fill btn-noanimate product-block-add-to-cart ">Add To Cart<i class="icon-cart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section mt-5">
		<div class="container">
			<div class="prd-tabs-wrap">
				<!-- Nav tabs -->
				<div class="nav nav-pills" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Description</a>
					<a class="nav-link" data-toggle="pill" href="#tab2" role="tab">Reviews (2)</a>
				</div>
				<!-- Tab panels -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="tab1">
					    <?php echo str_replace("^","'",$servicecontent->description); ?>
					</div>
					<div role="tabpanel" class="tab-pane" id="tab2">
						<h6>Joseph C. Lane</h6>
						<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
						<p>Excellent clinic which has looked after my families dental healthcare for many years. Last year I received private treatment for a tooth implant and the whole process was professionally managed and delivered.</p>
						<div class="divider"></div>
						<h6>Jenny M. Fischer</h6>
						<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
						<p>I am so grateful for the opportunity to come to the Loma Linda School of Dentistry. The prices are more than fair and my mouth is already doing much better. Everyone is helpful</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="title-wrap text-center">
				<h2 class="h1">Similar Products</h2>
				<div class="h-decor"></div>
			</div>
			<div class="prd-grid prd-carousel">
				<div class="prd">
					<div class="prd-img">
						<a href="shop-product.html"><img src="images/product/prd-5.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="shop-product.html">Waterpik ADA Accepted WP-660 Aquarius Water Flosser</a></h3>
						<div class="price">$59.98</div>
						<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
						
						<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
					</div>
				</div>
				<div class="prd">
					<div class="prd-img">
						<a href="shop-product.html"><img src="images/product/prd-2.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
						<div class="price">$38.88</div>
						<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
						<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
					</div>
				</div>
				<div class="prd">
					<div class="prd-img">
						<a href="shop-product.html"><img src="images/product/prd-7.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="shop-product.html">Oral-B Glide Pro-Health Comfort Plus Mint Flavor Floss</a></h3>
						<div class="price">$5.79</div>
						<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
					</div>
				</div>
				<div class="prd">
					<div class="prd-img">
						<a href="shop-product.html"><img src="images/product/prd-8.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="shop-product.html">Cool Mint Listerine Antiseptic Mouthwash</a></h3>
						<div class="price">$5.98</div>
						<div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
						
						<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
					</div>
				</div>
				<div class="prd">
					<div class="prd-img">
						<a href="shop-product.html"><img src="images/product/prd-9.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="prd-info">
						<h3><a href="shop-product.html">5 Pack Charcoal Toothbrush</a></h3>
						<div class="price">$11.62</div>
						<a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
					</div>
				</div>
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
<!-- Vendors -->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
<script src="vendor/cookie/jquery.cookie.js"></script>
<script src="vendor/bootstrap-datetimepicker/moment.js"></script>
<script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="vendor/waypoints/sticky.min.js"></script>
<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="vendor/slick/slick.min.js"></script>
<script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
<script src="vendor/countTo/jquery.countTo.js"></script>
<script src="vendor/jquery.elevateZoom/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="vendor/form-validation/jquery.form.js"></script>
<script src="vendor/form-validation/jquery.validate.min.js"></script>
<!-- Custom Scripts -->
<script src="js/app.js"></script><script src="color/color.js"></script>
<script src="js/app-shop.js"></script>
<script src="form/forms.js"></script>

</body>


</html>