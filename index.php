<html>
<head>
	<title>Bed-Rooms and Bell-Hops Admin Panel | Add Property</title>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<script type="text/javascript" src="http://localhost/brbh/js/interface.js"></script>
	<script type="text/javascript" src="http://localhost/brbh/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://localhost/brbh/js/jquery.datepick.js"></script>
	<link href="http://localhost/brbh/css/jquery.datepick.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">
$(function() {
	$('#active1').datepick();
	$('#expiry1').datepick();
	$("#block_start_date").datepick({ dateFormat: 'mm/yy' });
	$('#block_end_date').datepick({ dateFormat: 'mm/yy' });
	});

</script>

<script type="text/javascript">     
function addbrowseRow12(){
	var container = document.getElementById('browsetbl');
	var div1 = document.createElement('DIV');
	var div2 = document.createElement('DIV');
	var div3 = document.createElement('DIV');
	var label1 = document.createElement('INPUT');
	var inp1 = document.createElement('INPUT');
	
	
	var btn=document.createElement('INPUT');
	
	label1.setAttribute('value','Block From');
	label1.style.width =  "172px";
    label1.style.height =  "20px";
	label1.style.border =  "0px solid black";
	label1.style.fontSize =  "12px";
	label1.style.fontWeight =  "Normal";
	label1.style.marginBottom =  "5px";
	label1.style.color =  "#333333";
	label1.style.backgroundColor =  "#FFFFFF";
	label1.setAttribute('type','text');
	label1.disabled='true';

	
	inp1.setAttribute('type','text');
	inp1.setAttribute('class','formInput smallFormInput');
	inp1.name = "block_start_date[]";
	inp1.id = "block_start_date1";
	inp1.style.marginRight =  "15px";
    inp1.style.marginBottom =  "5px";
	inp1.onclick=$(function() {$(inp1).datepick();});
	
	btn.setAttribute('type','button');
	btn.setAttribute('value','Delete');
	btn.style.width =  "50px";
    btn.style.height =  "20px";
	btn.style.cursor =  "pointer";
	btn.style.color =  "#FFFFFF";
    btn.style.fontSize =  "12px";
	btn.style.backgroundColor =  "#6CB741";
	btn.style.padding =  "1px";
	btn.style.marginBottom =  "5px";
	btn.onclick=function(){delbrRow1(this);}
	
	
	div2.appendChild(label1);
	div2.appendChild(inp1);
	div3.appendChild(btn);
	div1.appendChild(div2);
	div1.appendChild(div3);
	container.appendChild(div1);
  }

  function delbrRow1(button){
	var v=confirm("Do You want to delete?");
	if(v){ 
	  var row = button.parentNode.parentNode;
	  var tbody = document.getElementById('browsetbl');
	  tbody.removeChild(row);
	}
  }
  
  function blockNonNumbers(obj, e, allowDecimal, allowNegative)
{
	var key;
	var isCtrl = false;
	var keychar;
	var reg;
		
	if(window.event) {
		key = e.keyCode;
		isCtrl = window.event.ctrlKey
	}
	else if(e.which) {
		key = e.which;
		isCtrl = e.ctrlKey;
	}
	
	if (isNaN(key)) return true;
	
	keychar = String.fromCharCode(key);
	
	if(key==46) return false;
	
	// check for backspace or delete, or if Ctrl was pressed
	if (key == 8 || isCtrl)
	{
		return true;
	}

	reg = /\d/;
	var isFirstN = allowNegative ? keychar == '-' && obj.value.indexOf('-') == -1 : false;
	var isFirstD = allowDecimal ? keychar == '.' && obj.value.indexOf('.') == -1 : false;
	
	return isFirstN || isFirstD || reg.test(keychar);
}
  
</script>
</head>

<body>

	<table  width="50%" border="0" align="center">
		<tr>
			<td width="100%" align="left"><table width="100%" cellspacing="0" callpadding="0" border='0'>


<tr >
<td class="formLabel" width="170">Block From</td>
<td class="formRow">
<input readonly type="text" class="formInput smallFormInput" id="block_start_date" name="block_start_date[]" value="" /></td>
</tr>
<tr>
<td class="formLabel">Block To</td>
<td class="formRow">
<input readonly type="text" class="formInput smallFormInput" id="block_end_date" name="block_end_date[]" value="" />
</td>
</tr>
<tr><td colspan="2" class="formRow" align="right"><div><a href="javascript:addbrowseRow12();">Add More</a></div></td></tr>
<tr><td colspan="2" class="formLabel" id="browsetbl"></td></tr>
</table>
	</td>
</tr>
	</table>
		
</body>

</html>
