<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Confirma Booking</title>
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
<div class="pageHeader"></div>
<div class="PageBody">
	<div id="name_classifier" style="display: none;"></div>
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("Confirma Booking", " : "))</script>  : Public  &lt;&lt;Activity&gt;&gt; Activity</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">18/10/2017 17:12:12</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">18/10/2017 17:12:30</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="proj00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Author:</td>
			<td class="ObjectDetailsValue">augus</td>
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
			<td class="ObjectDetailsTopic"><img src="../../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{6429878A-F197-4387-9457-B23F51E7BC43}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA66.php">Importação - AS IS</a></td>
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
						<a href="EA106.php">Cadastra Booking</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow536" onclick="parent.toggleDiv('detailsDIVLinkFlow536', 'DetailsImageLinkFlow536')" />Details:
							<div id="detailsDIVLinkFlow536" class="DetailsDiv" >
							&nbsp;
							</div>
						</div>
					</td>
				</tr>				<tr>
					<td width="50%" class="TableRow" valign="top">
						<a href="EA94.php">Embarcação</a><br />
						Event «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow537" onclick="parent.toggleDiv('detailsDIVLinkFlow537', 'DetailsImageLinkFlow537')" />Details:
							<div id="detailsDIVLinkFlow537" class="DetailsDiv" >
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
						<a href="EA112.php">Envia dados do Fornecedor</a><br />
						Activity «SequenceFlow» 
					</td>
					<td width="50%" class="TableRow" valign="top">&nbsp;</td>					
				</tr>
				<tr>
					<td class="TableRowBottomDashed"  colspan="2">
						<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageLinkFlow538" onclick="parent.toggleDiv('detailsDIVLinkFlow538', 'DetailsImageLinkFlow538')" />Details:
							<div id="detailsDIVLinkFlow538" class="DetailsDiv" >
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
				<td width="50%" class="TableRow" valign="top">activityType</td>
				<td width="50%" class="TableRow" valign="top">Task</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario539" onclick="parent.toggleDiv('detailsDIVScenario539','DetailsImageScenario539')" />Details:
						<div id="detailsDIVScenario539" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Task,Sub-Process<br />Default: Task<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">adHoc</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario540" onclick="parent.toggleDiv('detailsDIVScenario540','DetailsImageScenario540')" />Details:
						<div id="detailsDIVScenario540" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">adHocOrdering</td>
				<td width="50%" class="TableRow" valign="top">Unspecified</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario541" onclick="parent.toggleDiv('detailsDIVScenario541','DetailsImageScenario541')" />Details:
						<div id="detailsDIVScenario541" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: Parallel,Sequential,Unspecified<br />Default: Unspecified<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">behavior</td>
				<td width="50%" class="TableRow" valign="top">All</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario542" onclick="parent.toggleDiv('detailsDIVScenario542','DetailsImageScenario542')" />Details:
						<div id="detailsDIVScenario542" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,One,All,Complex<br />Default: All<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">cancelRemainingInstances</td>
				<td width="50%" class="TableRow" valign="top">true</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario543" onclick="parent.toggleDiv('detailsDIVScenario543','DetailsImageScenario543')" />Details:
						<div id="detailsDIVScenario543" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: true<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">completionQuantity</td>
				<td width="50%" class="TableRow" valign="top">1</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario544" onclick="parent.toggleDiv('detailsDIVScenario544','DetailsImageScenario544')" />Details:
						<div id="detailsDIVScenario544" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Default: 1<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">implementation</td>
				<td width="50%" class="TableRow" valign="top">##unspecified</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario545" onclick="parent.toggleDiv('detailsDIVScenario545','DetailsImageScenario545')" />Details:
						<div id="detailsDIVScenario545" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: ##webService,##unspecified<br />Default: ##unspecified<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">instantiate</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario546" onclick="parent.toggleDiv('detailsDIVScenario546','DetailsImageScenario546')" />Details:
						<div id="detailsDIVScenario546" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isACalledActivity</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario547" onclick="parent.toggleDiv('detailsDIVScenario547','DetailsImageScenario547')" />Details:
						<div id="detailsDIVScenario547" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isATransaction</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario548" onclick="parent.toggleDiv('detailsDIVScenario548','DetailsImageScenario548')" />Details:
						<div id="detailsDIVScenario548" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isForCompensation</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario549" onclick="parent.toggleDiv('detailsDIVScenario549','DetailsImageScenario549')" />Details:
						<div id="detailsDIVScenario549" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">isSequential</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario550" onclick="parent.toggleDiv('detailsDIVScenario550','DetailsImageScenario550')" />Details:
						<div id="detailsDIVScenario550" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">loopCharacteristics</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario551" onclick="parent.toggleDiv('detailsDIVScenario551','DetailsImageScenario551')" />Details:
						<div id="detailsDIVScenario551" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Standard,MultiInstance<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">startQuantity</td>
				<td width="50%" class="TableRow" valign="top">1</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario552" onclick="parent.toggleDiv('detailsDIVScenario552','DetailsImageScenario552')" />Details:
						<div id="detailsDIVScenario552" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Default: 1<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">state</td>
				<td width="50%" class="TableRow" valign="top">None</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario553" onclick="parent.toggleDiv('detailsDIVScenario553','DetailsImageScenario553')" />Details:
						<div id="detailsDIVScenario553" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: None,Ready,Active,Cancelled,Aborting,Aborted,Completing,Completed<br />Default: None<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">taskType</td>
				<td width="50%" class="TableRow" valign="top">Abstract</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario554" onclick="parent.toggleDiv('detailsDIVScenario554','DetailsImageScenario554')" />Details:
						<div id="detailsDIVScenario554" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: BusinessRule,Manual,Receive,Service,Send,Script,User,Abstract<br />Default: Abstract<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">testBefore</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario555" onclick="parent.toggleDiv('detailsDIVScenario555','DetailsImageScenario555')" />Details:
						<div id="detailsDIVScenario555" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

						</div>
					</div>
				</td>
			</tr>			<tr>
				<td width="50%" class="TableRow" valign="top">triggeredByEvent</td>
				<td width="50%" class="TableRow" valign="top">false</td>
			</tr>	
			<tr>
				<td class="TableRowBottomDashed"  colspan="2">
					<div class="DetailsDivParent"><img src="../../../images/minus03.gif" align="absmiddle" id="DetailsImageScenario556" onclick="parent.toggleDiv('detailsDIVScenario556','DetailsImageScenario556')" />Details:
						<div id="detailsDIVScenario556" class="DetailsDiv" >
						<div class="ObjectDetailsNotes">Values: true,false<br />Default: false<br /></div>

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
				<td width="30%" class="TableRow">_defaultDiagramType:</td>
				<td width="70%" class="TableRow">BPMN2.0::Business Process</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_subtypeProperty:</td>
				<td width="70%" class="TableRow">BPMN2.0::Activity::taskType</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroups:</td>
				<td width="70%" class="TableRow">Base Element,Activity,Task,AdHoc,Loop,Sub-Process,Callable Element,Execution,Other</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupings:</td>
				<td width="70%" class="TableRow">auditing=Base Element;categoryValue=Base Element;documentation=Base Element;monitoring=Base Element;activityType=Activity;calledActivityRef=Activity;instantiate=Activity;isACalledActivity=Activity;isATransaction=Activity;isForCompensation=Activity;resources=Activity;messageRef=Task;operationRef=Task;rendering=Task;script=Task;scriptFormat=Task;taskType=Task;adHoc=AdHoc;adHocOrdering=AdHoc;cancelRemainingInstances=AdHoc;completionCondition=AdHoc;behavior=Loop;complexBehaviorDefinition=Loop;isSequential=Loop;loopCardinality=Loop;loopCharacteristics=Loop;loopCondition=Loop;loopCounter=Loop;loopDataInputRef=Loop;loopDataOutputRef=Loop;loopMaximum=Loop;noneBehaviorEventRef=Loop;oneBehaviorEventRef=Loop;testBefore=Loop;transactionMethod=Sub-Process;transactionProtocol=Sub-Process;triggeredByEvent=Sub-Process;ioBinding=Callable Element;ioSpecification=Callable Element;supportedInterfaceRefs=Callable Element;actualOwner=Execution;completionQuantity=Execution;implementation=Execution;numberOfActiveInstances=Execution;numberOfCompletedInstances=Execution;numberOfInstances=Execution;numberOfTerminatedInstances=Execution;startQuantity=Execution;state=Execution;taskPriority=Execution;assignments=Other;sub-ProcessRef=Other;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">_tagGroupStates:</td>
				<td width="70%" class="TableRow">Base Element=closed;Activity=open;Task=open;AdHoc=closed;Loop=closed;Sub-Process=closed;Callable Element=closed;Execution=closed;Other=closed;</td>
			</tr>

			<tr>
				<td width="30%" class="TableRow">isReadOnly:</td>
				<td width="70%" class="TableRow">false</td>
			</tr>


			</table>
		</div>	</div>
<div class="pageFooter"></div>
 
</body>
</html>