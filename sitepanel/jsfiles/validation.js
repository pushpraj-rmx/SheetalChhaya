function isPhone(A){return A.match(/^-{0,1}\d*\.{0,1}\d+$/) != null}

function removeAllOptions(selectbox)

{

	var i;

	for(i=selectbox.options.length-1;i>=0;i--)

	{

		selectbox.remove(i);

	}

}



function addOption(selectbox, value, text )

{

	var optn = document.createElement("Option");

	optn.value = value;

	optn.text = text;

	selectbox.options.add(optn);

}

function ajaxcheck(sText,id)

{

 	var frm=sText; 

    var str = $('#'+id).val();

    var oid = $('#id').val();

	if(str=="")

	{

		return false;	

	}

	if(id=="category" || id=="menu")

	{

		var category=$('#category').val();

		var parameters = "id=" + id + "&str=" + str + "&oid=" + oid + "&category=" + category;

	}

		

	/*else if(id=="modelno" || id=="pname")

	{

		var category=$('#category').val();

		var parameters = "id=" + id + "&str=" + str + "&oid=" + oid + "&category=" + category;

	}

*/

	

	else

	var parameters = "id=" + id + "&str=" + str + "&oid=" + oid;

     $.ajax({

     type: "GET",

     url: "checkuser.php",

     data: parameters,

     success: function(data){

	 $('#page-loader').hide();

	 if(data!='')

	 {

		$('#'+id).val('');

		$('#page-loader').show();

		$('#page-loader').html(data);

		return false;

	 }

     }

   });

}

function chkvalue(str)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	if($("#"+str).val()=="")

	{

		msg+="<li>User ID is a required field</li>";

		status=1;

	}

	if($("#password").val()=="")

	{

		msg+="<li>Password is a required field</li>";

		status=1;

	}

	if($("#cpassword").val()=="")

	{

		msg+="<li>Confirm Password is a required field</li>";

		status=1;

	}

	if($("#name").val()=="")

	{

		msg+="<li>Name is a required field</li>";

		status=1;

	}

	if($("#email1").val()=="")

	{

		msg+="<li>E-Mail ID is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}

function chkusertype()

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#usertype").val()=="")

	{

		msg+="<li>Role is a required field</li>";

		status=1;

	}

	if($("#description").val()=="")

	{

		msg+="<li>Description is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}

function chkcategory()

{ 

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#category").val()=="")

	{

		msg+="<li>Category is a required field</li>";

		status=1;

	}



	if($("#sku").val()=="")

	{

		msg+="<li>SKU is a required field</li>";

		status=1;

	}

	

	/*if($("#categorybanner").val()=="")

	{

		msg+="<li>Images is a required field</li>";

		status=1;

	}*/

	if($("#metatitle").val()=="")

	{

		msg+="<li>Meta Title is a required field</li>";

		status=1;

	}





	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

	

}

function chkprocat()

{ 

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#subcategoryid").val()=="")

	{

		msg+="<li>Sub-Category is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}

function chkproduct(action)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	var location1 = FCKeditorAPI.GetInstance('description'); //location_info is name of text area.

	var description = location1.GetXHTML(true);

	document.getElementById('errortext').style.display='none';

	if($("#category").val()=="")

	{

		msg+="<li>Category is a required field</li>";

		status=1;

	}

	if($("#pname").val()=="")

	{

		msg+="<li>Product Name is a required field</li>";

		status=1;

	}



	if($("#modelno").val()=="")

	{

		msg+="<li>Model Number is a required field</li>";

		status=1;

	}




	if(action=='Add' && $("#banner").val()=="")
	/*if(action=='Add' && $("#banner").val()=="") */

	{

		msg+="<li>Banner is a required field</li>";

		status=1;

	}

	if($("#metatitle").val()=="")

	{

		msg+="<li>Meta/Page Title is a required field</li>";

		status=1;

	}

	/*

	if($("#offer").val()=="")

	{

		msg+="<li>Offer is a required field</li>";

		status=1;

	}

	if($("#listprice").val()=="")

	{

		msg+="<li>List Price is a required field</li>";

		status=1;

	}*/

	if($("#price").val()=="")

	{

		msg+="<li>Price is a required field</li>";

		status=1;

	}
	
		if($("#quantity").val()=="" || (action=='Edit' && $("#quantity").val()=="" && $("#quantity").val()==""))

	{

		msg+="<li>Quantity is a required field</li>";

		status=1;

	}


	/*if($("#itemsincluded").val()=="")

	{

		msg+="<li>Items Included is a required field</li>";

		status=1;

	}
*/
	if($("#material").val()=="")

	{

		msg+="<li>Properties is a required field</li>";

		status=1;

	}

	/*if($("#height").val()=="")

	{

		msg+="<li>Height is a required field</li>";

		status=1;

	}

	if($("#width").val()=="")

	{

		msg+="<li>Width is a required field</li>";

		status=1;

	}

	if($("#depth").val()=="")

	{

		msg+="<li>Depth is a required field</li>";

		status=1;

	}

	if(!description)

	{

		msg+="<li>Description is a required field</li>";

		status=1;

	}

	if($("#pcolor").val()=="")

	{

		msg+="<li>Product Color is a required field</li>";

		status=1;

	}*/

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}





function chkproductvid(action)

{

	var msg="";

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#pname").val()=="")

	{

		msg+="<li>Product Name is a required field</li>";

		status=1;

	}

	if($("#vid").val()=="")

	{

		msg+="<li>Category is a required field</li>";

		status=1;

	}

	if((action=='Add' && $("#banner").val()=="") || (action=='Edit' && $("#oldbanner").val()=="" && $("#banner").val()==""))

	{

		msg+="<li>Banner is a required field</li>";

		status=1;

	}

	

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}





function chkmenu()

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#menu").val()=="")

	{

		msg+="<li>Menu is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}

function chkwebpage(action)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	var location1 = FCKeditorAPI.GetInstance('description'); //location_info is name of text area.

	var description = location1.GetXHTML(true);

	document.getElementById('errortext').style.display='none';

	if($("#menuid").val()=="")

	{

		msg+="<li>Menu is a required field</li>";

		status=1;

	}

	if($("#heading").val()=="")

	{

		msg+="<li>Heading is a required field</li>";

		status=1;

	}

	/*if((action=='Add' && $("#banner").val()=="") || (action=='Edit' && $("#oldbanner").val()=="" && $("#banner").val()==""))

	{

		msg+="<li>Banner is a required field</li>";

		status=1;

	}*/

	if($("#metatitle").val()=="")

	{

		msg+="<li>Meta/Page Title is a required field</li>";

		status=1;

	}

	if(!description)

	{

		msg+="<li>Description is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}

function chknewsletter()

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	var location1 = FCKeditorAPI.GetInstance('description'); //location_info is name of text area.

	var description = location1.GetXHTML(true);

	document.getElementById('errortext').style.display='none';

	if(undefined === $("input[id="+check+"]:checked").val())

	{

		msg+="<li>E-Mail ID is a required field</li>";

		status=1;

	}

	if(!description)

	{

		msg+="<li>Description is a required field</li>";

		status=1;

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}

function chkpassword()

{

	var msg="";

	$("#errortext").html('');

	var status=0;	

	document.getElementById('errortext').style.display='none';

	if(($("#password").val()!='' && $("#cpassword").val()!='') && ($("#password").val()!=$("#cpassword").val()))

	{

		msg+="Password doesn't match";

		status=1;

	}

	if(status==1)

	{

		document.frm.cpassword.value="";

		document.frm.cpassword.focus();

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}

function chkcoupon()

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	if($("#couponcode").val()=="")

	{

		msg+="<li>Coupon Code is a required field.</li>";

		status=1;

	}

	if($("#couponname").val()=="")

	{

		msg+="<li>Coupon Name is a required field.</li>";

		status=1;

	}

	var fields = $("input[@id=product]:checked").length;

 	if (fields == 0) 

	{

		msg+="<li>Plan is a required field</li>";

		status=1;

	}

	if($("#discountamount").val()=="")

	{

		msg+="<li>Discount Amount is a required field.</li>";

		status=1;

	}

	if($("#minimumpurchase").val()=="")

	{

		msg+="<li>Minimum Purchase is a required field.</li>";

		status=1;

	}

	if($("#startdate").val()=="")

	{

		msg+="<li>Start Date is a required field.</li>";

		status=1;

	}

	if($("#expirydate").val()=="")

	{

		msg+="<li>Expiry Date is a required field.</li>";

		status=1;

	}

	if($("#startdate").val()!="" && $("#expirydate").val()!="")

	{

		var startdate=document.getElementById('startdate').value;

		var expirydate=document.getElementById('expirydate').value;

		startdate=startdate.split('-');

		var startdate1=startdate[2]+startdate[1]+startdate[0];

		expirydate=expirydate.split('-');

		var expirydate1=expirydate[2]+expirydate[1]+expirydate[0];

		if(startdate1>expirydate1)

		{

			msg+="<li>Expiry Date must be more than Start Date.</li>";

			status=1;

		}

	}

	if(status==1)

	{

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}

function chkimg(id)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#"+id).val()!="")

	{

		if (!/(\.(gif|jpg|jpeg|bmp|png))$/i.test($("#"+id).val()))

		{

			msg+="<li>Invalid Image Format</li>";

			status=1;

		}

	}

	if(status==1)

	{

		document.getElementById(id).value='';

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}




function chkpdf(id)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#"+id).val()!="")

	{

		if (!/(\.(pdf|doc|ppt|xls|xlsx|zip|csv|txt))$/i.test($("#"+id).val()))

		{

			msg+="<li>Invalid Pdf Format</li>";

			status=1;

		}

	}

	if(status==1)

	{

		document.getElementById(id).value='';

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 100}, 1000);

		return false;

	}

}










function chkfile(id)

{

	var msg="";

	$("#errortext").html('');

	var status=0;

	document.getElementById('errortext').style.display='none';

	if($("#"+id).val()!="")

	{

		if (!/(\.(csv))$/i.test($("#"+id).val()))

		{

			msg+="<li>Invalid File Format</li>";

			status=1;

		}

	}

	if(status==1)

	{

		document.getElementById(id).value='';

		$("#errortext").append(msg).fadeIn(2000);

		$('html,body').animate({scrollTop: 200}, 1000);

		return false;

	}

}



<!--------Start for view product according to dropdown select category  ---------------->





function ajaxcheckcategoryparent(sText,id,idd)

{

	var id=id;

	var idd=idd;

	if(idd=='parent')

	var strop="Select Sub-Category";

	var ajaxRequest;  // The variable that makes Ajax possible!

	try

	{

		// Opera 8.0+, Firefox, Safari

		ajaxRequest = new XMLHttpRequest();

	} 

	catch (e)

	{

		// Internet Explorer Browsers

		try

		{

			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");

		} 

		catch (e) 

		{

			try

			{

				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");

			} 

			catch (e){

				// Something went wrong

				alert("Your browser is not compitable for the page on which you are working!");

				return false;

			}

		}

	}

	// Create a function that will receive data sent from the server

	ajaxRequest.onreadystatechange = function()

	{

	 if(ajaxRequest.readyState == 4)

	  {

		var message=ajaxRequest.responseText;

				var res1=message.split('*');

				var len1=res1.length;

		  		var j=0;

				removeAllOptions(document.getElementById(idd));

		 		addOption(document.getElementById(idd), "", strop);

				var count1=0;

				  while(j<len1-1)

				  {

					var p3=res1[j];

					var r1=p3.split('@');

				addOption(document.getElementById(idd),r1[0], r1[1]);

				j=j+1;

				  }

	  }

	}

   var frm=sText;   

   var str = document.getElementById(id).value;

	if(str=="")

	{

		return false;	

	}

	var queryString = "?id=" + id + "&str=" + str;

	ajaxRequest.open("GET", "checkuser.php" + queryString, true);

	ajaxRequest.send(null); 

}



<!--------END for view product according to dropdown select category  ---------------->



function ajaxcheck1(sText,id,idd)

{

	var id=id;

	var idd=idd;

	if(idd=='subcategoryid')

	var strop="Select Sub-Category";

	var ajaxRequest;  // The variable that makes Ajax possible!

	try

	{

		// Opera 8.0+, Firefox, Safari

		ajaxRequest = new XMLHttpRequest();

	} 

	catch (e)

	{

		// Internet Explorer Browsers

		try

		{

			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");

		} 

		catch (e) 

		{

			try

			{

				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");

			} 

			catch (e){

				// Something went wrong

				alert("Your browser is not compitable for the page on which you are working!");

				return false;

			}

		}

	}

	// Create a function that will receive data sent from the server

	ajaxRequest.onreadystatechange = function()

	{

	 if(ajaxRequest.readyState == 4)

	  {

		var message=ajaxRequest.responseText;

				var res1=message.split('*');

				var len1=res1.length;

		  		var j=0;

				removeAllOptions(document.getElementById(idd));

		 		addOption(document.getElementById(idd), "", strop);

				var count1=0;

				  while(j<len1-1)

				  {

					var p3=res1[j];

					var r1=p3.split('@');

				addOption(document.getElementById(idd),r1[0], r1[1]);

				j=j+1;

				  }

	  }

	}

   var frm=sText;   

   var str = document.getElementById(id).value;

	if(str=="")

	{

		return false;	

	}

	var queryString = "?id=" + id + "&str=" + str;

	ajaxRequest.open("GET", "checkuser.php" + queryString, true);

	ajaxRequest.send(null); 

}

function frmsubmit(str,id1,id2,value2)

{

	var value1=document.getElementById(id1).value;

	var path=str+'&'+id1+'='+value1+'&'+id2+'='+value2;

	window.location.href=path;

}

function checkmail()

{

  var msg="";

  $("#matchmail").html('');

  document.getElementById('matchmail').style.display='none';

  var str = document.frm.email1.value; // email string

  var reg1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; // not valid

  var reg2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/; // valid

  if(document.frm.email1.value!="")

  {

	  if (!reg1.test(str) && reg2.test(str)) 

	  { // if syntax is valid

		//alert("Thank your for your feedback."); // this is optional

		//return true;

	  }

	  else

	  {

		  msg+="Invalid E-Mail ID";

		  $("#matchmail").append(msg).fadeIn(2000);

		  document.frm.email1.value="";

		  document.frm.email1.focus();

		  return false;

	  }

  }

}

function chkcom(A,id){

	var status=0;

	var id=id;

	var msg="";

	$("#match"+id).html('');

	document.getElementById("#match"+id).style.display='none';

	if($("#"+id).val()!='')

	{

		if(isPhone(A)==false)

		{

			msg+="Enter Only Number";

			status=1;

		}

	}

	if(status==1)

	{

		$("#"+id).val('');

		$("#"+id).focus();

		$("#match"+id).append(msg).fadeIn(2000);

		return false;

	}

}

function showtable(id)

{

	if(document.getElementById(id).style.display=='none')

		$('#'+id).show();

	else

		$('#'+id).hide();

}

function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}