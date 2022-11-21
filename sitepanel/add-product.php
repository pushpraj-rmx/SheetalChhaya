<?php $page_title="Product Management";$page_subtitle="Add Product";include("header.php");include("left-nev.php");?>  <!-- Content Wrapper. Contains page content -->  <div class="content-wrapper">    <!-- Content Header (Page header) -->    <section class="content-header">      <h1>        <?php echo $page_title;?>        <small><?php echo $page_subtitle;?></small>      </h1>      <ol class="breadcrumb">        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>        <li><a href="<?php echo base_url('sitepanel/dashboard') ?>">Dashboard</a></li>		<li><a href="<?php echo base_url('sitepanel/products') ?>"><?php echo $page_title;?></a></li>        <li class="active"><?php echo $page_subtitle;?></li>      </ol><script>function showSubcat(str) {    if (str == "") {        document.getElementById("txtHint").innerHTML = "";        return;    } else {        if (window.XMLHttpRequest) {            // code for IE7+, Firefox, Chrome, Opera, Safari            xmlhttp = new XMLHttpRequest();        } else {            // code for IE6, IE5            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");        }        xmlhttp.onreadystatechange = function() {            if (this.readyState == 4 && this.status == 200) {                document.getElementById("txtHint").innerHTML = this.responseText;            }        };        xmlhttp.open("GET","getsubcategories/"+str,true);        xmlhttp.send();    }}</script>    </section>    <!-- Main content -->    <section class="content">      <!-- Main row -->      <div class="row">        <!-- Left col -->		<section class="col-lg-12 connectedSortable">          <!-- TO DO List -->                      <div class="box box-info">			           <?php if($this->session->flashdata('sucmsg')): ?>           <p><?php echo $this->session->flashdata('sucmsg'); ?></p>           <?php endif; ?>            <div class="box-body">              <!--<form method="post" enctype="multipart/form-data">-->               <?php echo form_open_multipart('sitepanel/addproduct');?>			   			   <?php 			   if(form_error('body'))			   {				echo form_error('body');   			   }			   ?>			    <div class="col-sm-6">			    Product Category <span style="color:red;">*</span>                <div class="form-group">                  <select class="form-control" name="product_cat" onchange="showSubcat(this.value)">				  <option value="">Select</option>				  <?php				   $query=$this->db->query("select * from tbl_product_category where pg_status='Active'");				  				  $productcatcontent=$query->result_array();				  foreach($productcatcontent as $contents)				  {				  ?>				  <option value="<?=$contents['product_cat_id'];?>"><?=str_replace("^","'",$contents['product_category']);?></option>				 <?php } ?>				  </select>				  <div style="color:red"><?php echo form_error('product_cat');?></div>                </div>				</div>																<div class="col-sm-6" >			    	Package Price <span style="color:red;">*</span>				<div class="form-group">                  <input type="text" id="mrpprice" class="form-control" name="mrp_price" value="<?php echo set_value('mrp_price'); ?>" placeholder="Product (MRP) Price">                   <div style="color:red"><?php echo form_error('mrp_price');?></div>                </div>				</div>								<div class="col-sm-6">							  Product Title <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="product_title" value="<?php echo set_value('product_title'); ?>" placeholder="Product Title">                  <div style="color:red"><?php echo form_error('product_title');?></div>                </div>				Page Url <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="pg_url" value="<?php echo set_value('pg_url'); ?>" placeholder="Page Url">                  <div style="color:red"><?php echo form_error('pg_url');?></div>                </div>												Sort Description <span style="color:red;"></span>				<div class="form-group">				  <textarea class="form-control" style="height:50px; width:100%;" name="sort_description"><?php echo set_value('sort_description'); ?></textarea>                </div>							TAT <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="tat" value="<?php echo set_value('tat'); ?>" placeholder="TAT">                  <div style="color:red"><?php echo form_error('tat');?></div>                </div>                Advise <span style="color:red;">*</span>                <div class="form-group">                  <input type="text" class="form-control" name="advise" value="<?php echo set_value('advise'); ?>" placeholder="Advise">                  <div style="color:red"><?php echo form_error('advise');?></div>                </div>															Status <span style="color:red;"></span>				<div class="radio">                    <label>					  <span><input type="radio" name="pg_status" value="Active" checked="checked"/></span><span>Active</span>  <span style="margin-left:30px;"><input type="radio" name="pg_status"  value="Inactive"  /></span><span>Inactive</span>                    </label>                  </div>				  				</div>                <div class="col-sm-6">					Meta/Page Title <span style="color:red;">*</span>				<div class="form-group">                  <input type="text" class="form-control" name="pg_meta_title" value="<?php echo set_value('pg_meta_title'); ?>" placeholder="Meta/Page Title">                   <div style="color:red"><?php echo form_error('pg_meta_title');?></div>                </div>				Meta Keywords <span style="color:red;"></span>				<div class="form-group">				  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_keyword"><?php echo set_value('pg_meta_keyword'); ?></textarea>                </div>				Meta Description <span style="color:red;"></span>				<div class="form-group">                  <textarea class="form-control" style="height:50px; width:100%;" name="pg_meta_desc"><?php echo set_value('pg_meta_desc'); ?></textarea>                </div>										               								</div>                <div class="col-sm-12">					Description <span style="color:red;">*</span>				<div class="form-group">               <textarea id="des" name="description" cols="45" rows="7" style=" border:1px solid #A8D3FF;display:none;" ><?php echo set_value('description'); ?></textarea>                <input id="summernote">				<div style="color:red"><?php echo form_error('description');?></div>                                                                </div>		                                                Test Name <span style="color:red;">*</span>				<div class="form-group">               <textarea id="des2" name="test_names" cols="45" rows="7" style=" border:1px solid #A8D3FF;display:none;" ><?php echo set_value('test_names'); ?></textarea>                <input id="summernote2">				<div style="color:red"><?php echo form_error('test_names');?></div>                                                                </div>				<div class="form-group">				<label for="exampleInputFile">Image <span style="color:red;">*</span></label>                 <p>image Size Must be 600px*350px</p>                <!--<input type="file" name="image" id="exampleInputFile">-->                <?php				echo form_upload(['name'=>'image']);				?>                <p class="help-block">				 <?php 			  if(form_error('upload_error'))			   {				echo form_error('upload_error');   			   }			   ?></p>				</div>                        <div class="box-footer">                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>				&nbsp;&nbsp;&nbsp;&nbsp;				<button type="reset" name="Reset" class="btn btn-primary">Reset</button>              </div>		 </form>          </div></div>        <!-- /.box -->        </section>        <!-- /.Left col -->      <!-- /.row (main row) -->    </section>    <!-- /.content -->  </div>  <!-- /.content-wrapper --><?php include("footer.php");?><script>$("#sellingprice").mouseleave(function() {	var sellingprice = $("#sellingprice").val();	var mrpprice = $("#mrpprice").val();	if(sellingprice > mrpprice)	{    $( "#chkprice" ).html( "Selling Price must be less than MRP Or Both Could be Equal" );	}	if(sellingprice < mrpprice)	{	$( "#chkprice" ).html( "" );		}});</script>