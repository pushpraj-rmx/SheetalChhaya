	<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('html');
$this->load->helper('url');
?>


<!DOCTYPE html>
<html lang="en">


<head>
<?php include("analytics.php");?>


</head>

<body class="shop-page">
<?php include("header1.php");?>
<!--//header-->
<!--quick links-->

<!--//quick links-->
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 aside">
					<div class="blog-post blog-post-single">
						<div class="blog-post-info">
							<div class="post-date">17<span>JAN</span></div>
							<div>
								<h2 class="post-title"><a href="blog-post-page.html"><?php echo str_replace("^","'",$blgcontent->blog_title); ?></a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="#"><i><?php echo str_replace("^","'",$blgcontent->blog_by); ?></i></a></div>
									
								</div>
							</div>
						</div>
						<div class="post-image">
							<img src="<?php echo base_url(); ?>upload/blog/<?php echo $blgcontent->image;?>" alt="">
						</div>
						<div class="post-text">
						    <?php echo str_replace("^","'",$blgcontent->description); ?>
						</div>
					
					</div>
				
				</div>
				<div class="col-lg-3 aside-left mt-5 mt-lg-0">
					<div class="side-block">
						<form action="#" class="content-search d-flex">
							<div class="input-wrap">
								<input type="text" class="form-control" placeholder="Keywords">
							</div>
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
					<div class="side-block">
						<h3 class="side-block-title">Categories</h3>
						<ul class="categories-list">
						    <?php $squery = $this->db->query("select * from tbl_blog_category where pg_status='Active' ");
					$getblogcat=$squery->result();
					$i=1;
       foreach($getblogcat as $getblogcatdata)
       { {
      ?>
							<li><a href="#"><?php echo str_replace("^","'",$getblogcatdata->blog_category); ?></a></li>
							<?php }$i++;}?>
						</ul>
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
<?php include("script.php");?>

</body>


</html>