 <select class="form-control" name="item_subcat" >				  <option value="">Select</option>				  <?php				  foreach($getitemsubcategory as $scontents)				  {				  ?>				  <option value="<?=$scontents['service_category'];?>"><?=$scontents['service_title'];?>				  <?php				  }				  ?></select>