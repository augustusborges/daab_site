<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Processo de despacho de carga</title>
<link href="../../../css/ea.css" rel="stylesheet" type="text/css" />
<script>
function initPage(src) {	
	if(parent==this&&(this.location+"").indexOf('EARoot')!=-1)
		document.location=(this.location+"").substring(0,(this.location+"").indexOf('EARoot'))+"index"+(this.location+"").substring((this.location+"").lastIndexOf('.'))+"?goto="+((this.location+"").substring((this.location+"").indexOf('EARoot')+7,(this.location+"").lastIndexOf('.')).replace(/\//g,':').replace(/EA/g,""));
	else
		parent.initPage(src);
}

function nameClassifier(name, separator)
{
  var str = name;
  var classifierName;
  var node = document.getElementById('name_classifier');
  if(node != null)
  {
    classifierName = node.innerHTML;
  }
  if(classifierName != "")
  {
   str += separator + classifierName;
  }
  
  return str;
}
</script>
</head>
<body onload="initPage(this);" class="Content">
<div class="PageBody">
	
<img src="EA69.png" border="0" />

	<div class="ObjectTitle">Processo de despacho de carga : Business Process diagram</div>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">26/10/2017 15:17:23</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Modified:</td>
			<td width="85%" class="ObjectDetailsValue">26/10/2017 15:17:37</td>
		</tr>
		<tr style="padding-top: 10px;">
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="proj00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td width="85%" class="ObjectDetailsValue">augus</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td width="85%" class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="adv00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">ID:</td>
			<td width="85%" class="ObjectDetailsValue">{EE27EB67-4FC5-4f51-B1E1-A317C665D976}</td>
		</tr>
	</table>
	
</div>
 
</body>
</html>