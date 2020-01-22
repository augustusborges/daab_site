<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>30. Cadastro de Pedido de Venda</title>
<link href="../../css/ea.css" rel="stylesheet" type="text/css" />
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
	<span class="ObjectTitle"><script type="text/javascript">document.write(nameClassifier("30. Cadastro de Pedido de Venda", " : "))</script>  : Public  &lt;&lt;Functional&gt;&gt; Requirement</span>
	<table border="0" cellpadding="0" cellspacing="0" class="ObjectDetails">
		<tr>
			<td width="15%" class="ObjectDetailsTopic">Created:</td>
			<td width="85%" class="ObjectDetailsValue">06/10/2017 18:29:23</td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic">Modified:</td>
			<td class="ObjectDetailsValue">22/10/2017 22:47:01</td>
		</tr>
		<tr style="height: 10px"><td colspan="2"></td></tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="proj" onclick="parent.toggleData(this.id)" />Project:</td>
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
			<td class="ObjectDetailsValue">Medium</td>
		</tr>
		<tr id="proj06" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Priority:</td>
			<td class="ObjectDetailsValue">Medium</td>
		</tr>
		<tr id="proj05" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Multiplicity:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr>
			<td class="ObjectDetailsTopic"><img src="../../images/plus03.gif" align="absmiddle" id="adv" onclick="parent.toggleData(this.id)" />Advanced:</td>
			<td class="ObjectDetailsValue"></td>
		</tr>
		<tr id="adv00" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">UUID:</td>
			<td class="ObjectDetailsValue">{6727FD1A-90C3-4461-A0C7-2B593F012CFC}</td>
		</tr>
		<tr id="adv01" style="display: none;">
			<td class="ObjectDetailsTopic" style="padding-left: 18px;">Appears In:</td>
			<td class="ObjectDetailsValue"><a href="EA129.php">Requisitos</a></td>
		</tr>
	</table>
	<div class="ObjectDetailsNotes">10. Um pedido de venda pode ser feito tanto por um representante quanto por um cliente via portal, ou qualquer funcionário FNS com permissão para cadastro de pedido, neste caso diretamente no Sapiens&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;font color=&quot;#ff8080&quot;&gt;20. No momento do pedido o dono do pedido deverá informar se será frete CIF, FOB ou CIF incluso.&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;30. O sistema deverá aplicar as regras de cálculo de frete. vide &lt;a href=&quot;javascript:top.guidLink(&#39;{FDC93FC5-90F3-43ed-9469-A37DB4262B86}&#39;)&quot;&lt;font color=&quot;#0000ff&quot;&gt;&lt;u&gt;REQ60&lt;/u&gt;&lt;/font&gt;&lt;/a&gt;.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;40. O pedido deverá possuir um campo observações de livre digitação para o dono do pedido de venda.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;50. O sistema deverá apresentar as formas de pagamento possíveis para o pedido de acordo com regras de forma de pagamento. Vide &lt;a href=&quot;javascript:top.guidLink(&#39;{376EF43D-0226-45c9-9B20-6C52A637B073}&#39;)&quot;&lt;font color=&quot;#0000ff&quot;&gt;&lt;u&gt;REQ70&lt;/u&gt;&lt;/font&gt;&lt;/a&gt;.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;60. Caso o pedido de venda exija entrada de pagamento o mesmo deverá sensibilizar o contas a receber. vide &lt;a href=&quot;javascript:top.guidLink(&#39;{0FDBD5E4-FDC3-4917-ADF1-580149D295ED}&#39;)&quot;&lt;font color=&quot;#0000ff&quot;&gt;&lt;u&gt;REQ90&lt;/u&gt;&lt;/font&gt;&lt;/a&gt;.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;70. Caso o pedido exija entrada de pagamento. O mesmo deverá ficar congelado até a confirmação de pagamento da entrada.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;80. A confirmação do pagamento do valor de entrada do pedido libera o mesmo para prosseguir com o faturamento. Mas neste caso o sistema deverá reaplicar as regras de validação de pendência financeira. &lt;a href=&quot;javascript:top.guidLink(&#39;{8257C806-FA58-4acc-85D4-9770787FE71D}&#39;)&quot;&lt;font color=&quot;#0000ff&quot;&gt;&lt;u&gt;REQ10&lt;/u&gt;&lt;/font&gt;&lt;/a&gt;.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;90. No pedido a transportadora atrelada ao cliente deverá vir sempre selecionada, mas o cliente poderá mudar a transportadora para qualquer uma que desejar.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;100. No caso de frete FOB o cliente deverá selecionar a Transportadora de uma lista de transportadoras cadastradas no sistema.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;110. O sistema deverá efetuar cálculo de frete, como na nota fiscal, baseado na tabela de preço da transportadora,&#160; e apresentar valor de frete no pedido.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;120. No momento do pedido é verificado se há estoque para cada um dos produtos que compõe o pedido. Caso não haja:&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	1. O pedido é congelado&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	2. O dono do pedido de venda é avisado dos produtos faltantes&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	3. O Sistema deverá verificar se há algum pedido de compra para o produto já emitido. &lt;br /&gt;&lt;/p&gt;&lt;p&gt;	Caso haja:&lt;br /&gt;&lt;/p&gt;&lt;p&gt;		3.1 O dono do pedido é avisado do número do pedido de compra e a data de 		previsão de chegada do produto.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	caso não haja:&lt;br /&gt;&lt;/p&gt;&lt;p&gt;		3.1 O dono do pedido de venda é avisado da 	falta de previsão para entrega&lt;br /&gt;&lt;/p&gt;&lt;p&gt;		3.2 A lista de responsáveis por pedido de compra é informado de pedido 		congelado por falta de produto.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;130. Caso haja o pedido fica liberado pela visão de estoque&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;140. No momento do pedido é verificado se o cliente possui alguma pendência financeira vide &lt;a href=&quot;javascript:top.guidLink(&#39;{8257C806-FA58-4acc-85D4-9770787FE71D}&#39;)&quot;&lt;font color=&quot;#0000ff&quot;&gt;&lt;u&gt;REQ10&lt;/u&gt;&lt;/font&gt;&lt;/a&gt; . Caso haja:&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	1. O pedido é congelado&lt;br /&gt;&lt;/p&gt;&lt;p&gt;	2. Se for um representante ou funcionário recebe a informação em quais pendências 	financeiras o cliente está implicado &lt;br /&gt;&lt;/p&gt;&lt;p&gt;	3. Se for o cliente fazendo o pedido o mesmo recebe uma mensagem de entrar em contato 	com a empresa. &lt;font color=&quot;#ff8080&quot;&gt;VALIDAR&lt;/font&gt; &lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;150. Caso não haja pendências financeiras o pedido fica liberado pela visão do financeiro.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;160. O sistema deverá verificar se o pedido de venda deve passar por processo fabril (&lt;font color=&quot;#ff8080&quot;&gt;falta definir este processo&lt;/font&gt;) &lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;170. No final do processo &lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;160. Se o pedido estiver liberado do ponto de vista de estoque e do financeiro então o pedido recebe status de Aprovado&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;170. Pedidos aprovados iniciam o processo de Faturamento.&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&#160;&#160; &lt;br /&gt;&lt;/p&gt;</div>

<div class="pageFooter"></div>
 
</body>
</html>