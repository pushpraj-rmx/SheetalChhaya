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
<title><?php echo str_replace("^","'",$pgcontent->pg_meta_title); ?></title>
        <meta name="keywords" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_keyword); ?>">
        <meta name="description" content="<?php echo str_replace("^","'",$pgcontent->pg_meta_desc); ?>">
<?php include("analytics.php");?>

</head>


<!DOCTYPE html>
<html lang="en">




<body class="shop-page">
<?php include("header1.php");?>
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Blog Posts</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<h1>Blog Post Isotop</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="blog-isotope">
					<?php $squery = $this->db->query("select * from tbl_blog where pg_status='Active' ");
					$getbloghp=$squery->result();
       foreach($getbloghp as $getblogdata)
       { $scquery = $this->db->query("select * from tbl_blog_category");
					$getctblogdata=$scquery->row();
      ?>
				<div class="blog-post">
					<div class="post-image">
						<a href="blog-post-page.html"><img src="<?php echo base_url(); ?>upload/blog/<?php echo $getblogdata->image;?>" alt=""></a>
					</div>
					<div class="blog-post-info">
						<div class="post-date">17<span>JAN</span></div>
						<div>
							<h2 class="post-title"><a href="blog-post-page.html"><?php echo str_replace("^","'",$getblogdata->blog_title);?></a></h2>
							<div class="post-meta">
								<div class="post-meta-author">by <a href="#"><i>admin</i></a></div>
								<div class="post-meta-social">
									<a href="#"><i class="icon-facebook-logo"></i></a>
									<a href="#"><i class="icon-twitter-logo"></i></a>
									<a href="#"><i class="icon-google-logo"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="post-teaser"><?php echo str_replace("^","'",$getblogdata->sort_description);?></div>
					<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
				</div>
					<?php }?>
			</div>
			<div class="clearfix"></div>
			<ul class="pagination justify-content-center">
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><span class="page-link">...</span></li>
				<li class="page-item"><a class="page-link" href="#">15</a></li>
			</ul>
		</div>
	</div>
</div>
<!--//section-->
<!--footer-->
<?php include("footer1.php");?>
<!--//footer-->
<div class="backToTop js-backToTop">
	<i class="icon icon-up-arrow"></i>
</div>

</body>

<?php include("script.php");?>
</html>