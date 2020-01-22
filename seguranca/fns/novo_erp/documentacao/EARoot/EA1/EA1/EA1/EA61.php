<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tipo Mercadoria</title>
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
<div class="pageHeader"></div>
<div class="PageBody">
	<div id="name_classifier" style="display: none;"></div>
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Tipo Mercadoria", " : "))</script>  : Public  &lt;&lt;Gateway&gt;&gt; Gateway</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">04/10/2017 09:17:04</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">04/10/2017 09:17:29</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">Augustus Borges</td>
		</tr>
		<tr id="proj01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Version:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj02" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Phase:</td>
			<td class="ObjectDetailsValue">1.0</td>
		</tr>
		<tr id="proj03" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Status:</td>
			<td class="ObjectDetailsValue">Proposed</td>
		</tr>
		<tr id="proj04" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Complexity:</td>
			<td class="ObjectDetailsValue">Easy</td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Difficulty:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj06" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Priority:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Multiplicity:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{9AFA7E0C-5A59-4a23-B287-9EAA3C8F3C85}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA41.php">Envio Fabrica</a></td>
		</tr>
	</table>
	
	<div class="TableGroup" id="TableGroup">
		<ul class="ItemTitle">
			<li onClick="parent.toggleItem('FlowTo');" id="FlowToTitle">Flow To</li>
			<li onClick="parent.toggleItem('FlowFrom');" id="FlowFromTitle">Flow From</li>
			<li onClick="parent.toggleItem('TaggedVal');" id="TaggedValTitle">Tagged Values</li>
			<li onClick="parent.toggleItem('CustomProperties');" id="CustomPropertiesTitle">Advanced</li>
		</ul>
		<div class="ItemBody" id="FlowToTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="50%" class="TableHeading">Element</td>
					<td width="50%" class="TableHeading">Name</td>
				</tr>
				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA63.php">Transferencia de produtos entre estoque</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Importado</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow368" onclick="parent.toggleDiv('detailsDIVLinkFlow368', 'DetailsImageLinkFlow368')" />Details:
							<div id="detailsDIVLinkFlow368" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA62.php">Transferencia de produto entre filiais</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">Nacional</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow369" onclick="parent.toggleDiv('detailsDIVLinkFlow369', 'DetailsImageLinkFlow369')" />Details:
							<div id="detailsDIVLinkFlow369" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="ItemBody" id="FlowFromTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="50%" class="TableHeading">Element</td>
					<td width="50%" class="TableHeading">Name</td>
				</tr>
				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA56.php">Pedido Aprovado</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow370" onclick="parent.toggleDiv('detailsDIVLinkFlow370', 'DetailsImageLinkFlow370')" />Details:
							<div id="detailsDIVLinkFlow370" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
<div class="ItemBody" id="TaggedValTable">
	<table align="center" border="0" cellspacing="0" cellpadding="0" class="Table">
		<tr>
			<td width="50%" class="TableHeading">Tag</td>
			<td width="50%" class="TableHeading">Value</td>
		</tr>
					<tr>
				<td width="50%" class="TableRow" valign="top">eventGatewayType</td>
				<td width="50%" class="TableRow" valign="top">Exclusive</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario371" onclick="parent.toggleDiv('detailsDIVScenario371','DetailsImageScenario371')" />Details:
						<div id="detailsDIVScenario371" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Exclusive,Parallel<br />Default: Exclusive<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">gatewayDirection</td>
				<td width="50%" class="TableRow" valign="top">Unspecified</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario372" onclick="parent.toggleDiv('detailsDIVScenario372','DetailsImageScenario372')" />Details:
						<div id="detailsDIVScenario372" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Unspecified,Converging,Diverging,Mixed<br />Default: Unspecified<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">gatewayType</td>
				<td width="50%" class="TableRow" valign="top">Parallel</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario373" onclick="parent.toggleDiv('detailsDIVScenario373','DetailsImageScenario373')" />Details:
						<div id="detailsDIVScenario373" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Exclusive,Complex,Inclusive,Parallel,Event<br />Default: Exclusive<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">instantiate</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario374" onclick="parent.toggleDiv('detailsDIVScenario374','DetailsImageScenario374')" />Details:
						<div id="detailsDIVScenario374" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">markerVisible</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario375" onclick="parent.toggleDiv('detailsDIVScenario375','DetailsImageScenario375')" />Details:
						<div id="detailsDIVScenario375" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">waitingForStart</td>
				<td width="50%" class="TableRow" valign="top">true</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario376" onclick="parent.toggleDiv('detailsDIVScenario376','DetailsImageScenario376')" />Details:
						<div id="detailsDIVScenario376" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: true<br /></div>

						</div>
					</div>
				</td>
			</tr>
	</table>
</div>		<div class="ItemBody" id="CustomPropertiesTable">
			<table border="0" cellspacing="0" cellpadding="0" class="Table">
				<tr>
					<td width="30%" class="TableHeading">Property</td>
					<td width="70%" class="TableHeading">Value</td>
				</tr>
			<tr>
				<td width="30%" class="TableRow">_subtypeProperty:</td>
				<td width="70%" class="TableRow">BPMN2.0::Gateway::gatewayType</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroups:</td>
				<td width="70%" class="TableRow">Base Element,Gateway,Event Gateway,Exclusive Gateway,Complex Gateway,Other</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupStates:</td>
				<td width="70%" class="TableRow">Base Element=closed;Gateway=open;Event Gateway=open;Exclusive Gateway=open;Complex Gateway=closed;Other=closed;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupings:</td>
				<td width="70%" class="TableRow">auditing=Base Element;categoryValue=Base Element;documentation=Base Element;monitoring=Base Element;gatewayDirection=Gateway;gatewayType=Gateway;eventGatewayType=Event Gateway;instantiate=Event Gateway;markerVisible=Exclusive Gateway;activationCondition=Complex Gateway;waitingForStart=Complex Gateway;assignments=Other;</td>
			</tr>


			</table>
		</div>	</div>
<div class="pageFooter"></div>
 
</body>
</html>