function checkvalpurge(urltogo,action)
{
 var urltogo=urltogo;
 var len=document.frm.elements.length;
 flag=0;
 for(i=0;i<len;i++)
  {
   if(document.frm.elements[i].type=="checkbox")
   {
    if (document.frm.elements[i].checked==true)
	 { flag=1;
	   break;
	 }
    }
  }//end of for

  if (flag==0)
  {
  alert("Please select a record to continue");
  return false;
  }
  else if(flag==1)
  {
  if(action=='')
  {
	  aa=confirm("Are you sure you want to delete the record(s)");
  }
  else
  {
	  if(action=='no')
	  aa=confirm("Are you sure you want to restore the record(s)");
	  else
	  aa=confirm("Are you sure you want to delete the record(s)");
  }
  if(aa==false)
  {return false;}
  else
  {
		  if(action=='')
		  document.frm.action= urltogo + ".php" + "?" + "q=delete";
		  else
		  document.frm.action= urltogo + ".php" + "?" + "q=delete&action="+action;
		  document.frm.submit();
  }
 }
}
function checkvalpurge2(urltogo,str)
{
 var urltogo=urltogo;
 var len=document.frm.elements.length;
 flag=0;
 for(i=0;i<len;i++)
  {
   if(document.frm.elements[i].type=="checkbox")
   {
    if (document.frm.elements[i].checked==true)
	 { flag=1;
	   break;
	 }
    }
  }//end of for

  if (flag==0)
  {
  alert("Please select a record to continue");
  return false;
  }
  else if(flag==1)
  {
  aa=confirm("Are you sure you want to delete the record(s)");
  if(aa==false)
  {return false;}
  else
  {
		  document.frm.myaction.value="purge";
		  document.frm.action= urltogo + ".php" + "?" + "q=delete&p="+str;
		  document.frm.submit();
  }
 }
}
function checkvalpurge3(urltogo,id,str)
{
 var urltogo=urltogo;
 var id=id;
 var str=str;
document.frm.action= urltogo + ".php?id=" + id+"&str"+str;
		  //document.frm.submit();
}
function checkdelete(urltogo)
{
	var x=confirm("Are you sure you want to delete the record?");
	if(x==true)
	window.location.href= urltogo;
}
function check_decheck_all()
{
	var len=document.frm.elements.length;
	if(document.frm.checkboxall.checked==true)
	{
		for(i=0;i<len;i++)
		{
			if((document.frm.elements[i].type=="checkbox")&&(document.frm.elements[i].disabled==false))
			{
				document.frm.elements[i].checked=true;
			}
		}//end of for
	}
	else if(document.frm.checkboxall.checked==false)
	{
		for(i=0;i<len;i++)
		{
		  if(document.frm.elements[i].type=="checkbox")
		  {
			document.frm.elements[i].checked=false;
		  }
		}
}
}
function getuserid(id)
{
	var id=id;
	document.frm.userid.value=id;
	document.frm.submit();
}
function checkvalpref(urltogo,id,str)
{
 location.href= urltogo + ".php" + "?q=sort&id="+id+ "&str="+str;
}
function searchtextval()
{
	var msg="<div class=validation><ul>";
	$("#errortext").html('');
	var status=0;
	if($("#searchtext").val()=="")
	{
		msg+="<li>Enter keywords to search.</li>";
		status=1;
	}
	if(status==1)
	{
		msg+="</ul></div>";
		$("#errortext").append(msg).fadeIn(1000);
		$('html,body').animate({scrollTop: 100}, 500);
		return false;
	}
}
function searchtextval1()
{
	document.getElementById('searchtext').value='';
}
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}