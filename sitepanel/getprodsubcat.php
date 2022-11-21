 <select class="form-control" name="product_subcat" >
				  <option value="">Select</option>
				  <?php
				  foreach($getproductsubcategory as $scontents)
				  {
				  ?>
				  <option value="<?=$scontents['product_cat_id'];?>"><?=$scontents['product_category'];?>
				  <?php
				  }
				  ?>
</select>