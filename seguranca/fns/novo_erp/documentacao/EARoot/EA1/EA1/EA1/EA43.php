<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fabricação</title>
<link href="../../../../css/ea.css" rel="stylesheet" type="text/css" />
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
	
<img src="EA44.png" usemap="#EA44" border="0" />

<MAP NAME="EA44">
<area shape="rect" coords="10,10,145,85" href="EA41.php" target="_self">
</MAP>

	<div class="ObjectTitle">Fabricação : Business Process diagram</div>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">04/10/2017 09:38:57</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Modified:</td>
			<td width="85%" class="ObjectDetailsValue">04/10/2017 09:39:53</td>
		</tr>
		<tr style="padding-top: 10px;">
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="proj00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td width="85%" class="ObjectDetailsValue">Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td width="85%" class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr>
			<td width="15%" class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td width="85%" class="ObjectDetailsValue"></td>			
		</tr>
		<tr id="adv00" style="display: none;">
			<td width="15%" class="ObjectDetailsTopic" style="padding-left: 18px;">ID:</td>
			<td width="85%" class="ObjectDetailsValue">{6CB54649-ABEE-4feb-8226-FE0FA2CE31D5}</td>
		</tr>
	</table>
	
</div>
 
</body>
</html>