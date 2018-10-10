<?php
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");

if ($_SESSION['tipo'] != "sgi" && $_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.close();
        </SCRIPT>");}else{	};

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*") or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1") or die ("Erro ao selecionar a base de dados.");
$sql = "SELECT * FROM checklist WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check List Supervisão - Enviar Finalizado</title>
<link rel="shortcut icon" href="images/ico.png" type="imge/x-icon" />
<meta name="keywords" content="spsp, terceirização, temporário, trabalho, serviço, grupo, empresa" />
<meta name="description" content="SPSP - Grupo Empresarial de Serviços" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	font-size: 14px;
	color: #000000;
}
</style>
<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;}
</script>

<script>
function formatar(src, mask)
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {                src.value += texto.substring(0,1);  }}
</script>

<script>
function check_date(date) {
   var err = 0
   string = date
   var valid = "0123456789/"
   var ok = "yes";
   var temp;
   for (var i=0; i< string.length; i++) {
     temp = "" + string.substring(i, i+1);
     if (valid.indexOf(temp) == "-1") err = 1;   }
   if (string.length != 10) err=1
   b = string.substring(3, 5)		// month
   c = string.substring(2, 3)		// '/'
   d = string.substring(0, 2)		// day 
   e = string.substring(5, 6)		// '/'
   f = string.substring(6, 10)	// year
   if (b<1 || b>12) err = 1
   if (c != '/') err = 1
   if (d<1 || d>31) err = 1
   if (e != '/') err = 1
   if (f<1850 || f>2050) err = 1
   if (b==4 || b==6 || b==9 || b==11){
     if (d==31) err=1   }
   if (b==2){
     var g=parseInt(f/4)
     if (isNaN(g)) {
         err=1      }
     if (d>29) err=1
     if (d==29 && ((f/4)!=parseInt(f/4))) err=1   }
   if (err==1) {
   	alert("Data inválida");
	formulario.data10.focus(); return false;
    return false;   }
   else {    return true;   }}
</script>

<script type="text/javascript">
function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{	return (Value > 9) ? "" + Value : "0" + Value;}
</script>

<script language="JavaScript1.2">
function DoPrinting(){
if (!window.print){
alert("Use o Netscape  ou Internet Explorer \n nas versões 4.0 ou superior!")
return}
window.print()}
</script>

</head>

<body onload="UR_Start(); formulario.cliente.focus();">

<div id="templatemo_wrapper">
  <div id="templatemo_header"><center>
  <font size="6">Check List Supervisão - Finalizados</font>
  </center>
  </div></div>
  <div id="imagemmeio">
  <div class="info">
  
<form enctype="multipart/form-data" method="POST" name="formulario" id="formulario" action="enviafp.php" target="" onsubmit="">  
  <div class="padd">
    <div style="width: 100%; float: left; font-size: 14px;"><font size="+2"><center>RELATÓRIO DE VISTORIA</center></font><br /><br />
<table>
  <tr>
    <td width="75">DATA:</td>
    <td width="180" bgcolor="#FFFFFF"><?php echo $linha['dataout'] ?><input readonly="readonly" style="display:none" name="dataout" type="text" id="dataout" size="auto" value="<?php echo $linha['dataout'] ?>"/></td>
    <td width="90">CLIENTE:</td>
    <td width="180" bgcolor="#FFFFFF"><?php echo $linha['cliente'] ?><input readonly="readonly" style="display:none" name="cliente" type="text" id="cliente" size="auto" value="<?php echo $linha['cliente'] ?>"/></td>
  </tr>
  <tr>
    <td>SUPERV.:</td>
    <td bgcolor="#FFFFFF"><? echo "$usuario"; ?></td>
    <td>ATIVIDADE:</td>
    <td bgcolor="#FFFFFF"><?php echo $linha['ativ'] ?><input readonly="readonly" style="display:none" name="ativ" type="text" id="ativ" size="auto" value="<?php echo $linha['ativ'] ?>"/></td>
  </tr>
</table><br /><br />
<div style="display:none">
<table border="1" cellspacing="0" cellpadding="0" bordercolor="#999999">
  <tr>

    <td bgcolor="#FFE1E1" style="text-align: center; font-weight: bold;">Item</td>
    <td bgcolor="#FFE1E1" style="text-align: center; font-weight: bold;">Check</td>
    <td bgcolor="#FFE1E1" style="text-align: center; font-weight: bold;">Observações</td></tr>
    
 <tr> <td style="text-align: left">01</td> <td style="text-align: center"><input name="q01" type="text" id="q01" size="auto" value="<?php echo $linha['q01'] ?>"/></td> <td style="text-align: center"><input name="obs1" type="text" id="obs1" size="auto" value="<?php echo $linha['obs1'] ?>"/></td></tr>
 <tr> <td style="text-align: left">02</td> <td style="text-align: center"><input name="q02" type="text" id="q02" size="auto" value="<?php echo $linha['q02'] ?>"/></td> <td style="text-align: center"><input name="obs2" type="text" id="obs2" size="auto" value="<?php echo $linha['obs2'] ?>"/></td></tr>
 <tr> <td style="text-align: left">03</td> <td style="text-align: center"><input name="q03" type="text" id="q03" size="auto" value="<?php echo $linha['q03'] ?>"/></td> <td style="text-align: center"><input name="obs3" type="text" id="obs3" size="auto" value="<?php echo $linha['obs3'] ?>"/></td></tr>
 <tr> <td style="text-align: left">04</td> <td style="text-align: center"><input name="q04" type="text" id="q04" size="auto" value="<?php echo $linha['q04'] ?>"/></td> <td style="text-align: center"><input name="obs4" type="text" id="obs4" size="auto" value="<?php echo $linha['obs4'] ?>"/></td></tr>
 <tr> <td style="text-align: left">05</td> <td style="text-align: center"><input name="q05" type="text" id="q05" size="auto" value="<?php echo $linha['q05'] ?>"/></td> <td style="text-align: center"><input name="obs5" type="text" id="obs5" size="auto" value="<?php echo $linha['obs5'] ?>"/></td></tr>
 <tr> <td style="text-align: left">06</td> <td style="text-align: center"><input name="q06" type="text" id="q06" size="auto" value="<?php echo $linha['q06'] ?>"/></td> <td style="text-align: center"><input name="obs6" type="text" id="obs6" size="auto" value="<?php echo $linha['obs6'] ?>"/></td></tr>
 <tr> <td style="text-align: left">07</td> <td style="text-align: center"><input name="q07" type="text" id="q07" size="auto" value="<?php echo $linha['q07'] ?>"/></td> <td style="text-align: center"><input name="obs7" type="text" id="obs7" size="auto" value="<?php echo $linha['obs7'] ?>"/></td></tr>
 <tr> <td style="text-align: left">08</td> <td style="text-align: center"><input name="q08" type="text" id="q08" size="auto" value="<?php echo $linha['q08'] ?>"/></td> <td style="text-align: center"><input name="obs8" type="text" id="obs8" size="auto" value="<?php echo $linha['obs8'] ?>"/></td></tr>
 <tr> <td style="text-align: left">09</td> <td style="text-align: center"><input name="q09" type="text" id="q09" size="auto" value="<?php echo $linha['q09'] ?>"/></td> <td style="text-align: center"><input name="obs9" type="text" id="obs9" size="auto" value="<?php echo $linha['obs9'] ?>"/></td></tr>
 <tr> <td style="text-align: left">10</td> <td style="text-align: center"><input name="q10" type="text" id="q10" size="auto" value="<?php echo $linha['q10'] ?>"/></td> <td style="text-align: center"><input name="obs10" type="text" id="obs10" size="auto" value="<?php echo $linha['obs10'] ?>"/></td></tr>
 <tr> <td style="text-align: left">11</td> <td style="text-align: center"><input name="q11" type="text" id="q11" size="auto" value="<?php echo $linha['q11'] ?>"/></td> <td style="text-align: center"><input name="obs11" type="text" id="obs11" size="auto" value="<?php echo $linha['obs11'] ?>"/></td></tr>
 <tr> <td style="text-align: left">12</td> <td style="text-align: center"><input name="q12" type="text" id="q12" size="auto" value="<?php echo $linha['q12'] ?>"/></td> <td style="text-align: center"><input name="obs12" type="text" id="obs12" size="auto" value="<?php echo $linha['obs12'] ?>"/></td></tr>
 <tr> <td style="text-align: left">13</td> <td style="text-align: center"><input name="q13" type="text" id="q13" size="auto" value="<?php echo $linha['q13'] ?>"/></td> <td style="text-align: center"><input name="obs13" type="text" id="obs13" size="auto" value="<?php echo $linha['obs13'] ?>"/></td></tr>
 <tr> <td style="text-align: left">14</td> <td style="text-align: center"><input name="q14" type="text" id="q14" size="auto" value="<?php echo $linha['q14'] ?>"/></td> <td style="text-align: center"><input name="obs14" type="text" id="obs14" size="auto" value="<?php echo $linha['obs14'] ?>"/></td></tr>
 <tr> <td style="text-align: left">15</td> <td style="text-align: center"><input name="q15" type="text" id="q15" size="auto" value="<?php echo $linha['q15'] ?>"/></td> <td style="text-align: center"><input name="obs15" type="text" id="obs15" size="auto" value="<?php echo $linha['obs15'] ?>"/></td></tr>
 <tr> <td style="text-align: left">16</td> <td style="text-align: center"><input name="q16" type="text" id="q16" size="auto" value="<?php echo $linha['q16'] ?>"/></td> <td style="text-align: center"><input name="obs16" type="text" id="obs16" size="auto" value="<?php echo $linha['obs16'] ?>"/></td></tr>
 <tr> <td style="text-align: left">17</td> <td style="text-align: center"><input name="q17" type="text" id="q17" size="auto" value="<?php echo $linha['q17'] ?>"/></td> <td style="text-align: center"><input name="obs17" type="text" id="obs17" size="auto" value="<?php echo $linha['obs17'] ?>"/></td></tr>
 <tr> <td style="text-align: left">18</td> <td style="text-align: center"><input name="q18" type="text" id="q18" size="auto" value="<?php echo $linha['q18'] ?>"/></td> <td style="text-align: center"><input name="obs18" type="text" id="obs18" size="auto" value="<?php echo $linha['obs18'] ?>"/></td></tr>
 <tr> <td style="text-align: left">19</td> <td style="text-align: center"><input name="q19" type="text" id="q19" size="auto" value="<?php echo $linha['q19'] ?>"/></td> <td style="text-align: center"><input name="obs19" type="text" id="obs19" size="auto" value="<?php echo $linha['obs19'] ?>"/></td></tr>
 <tr> <td style="text-align: left">20</td> <td style="text-align: center"><input name="q20" type="text" id="q20" size="auto" value="<?php echo $linha['q20'] ?>"/></td> <td style="text-align: center"><input name="obs20" type="text" id="obs20" size="auto" value="<?php echo $linha['obs20'] ?>"/></td></tr>
 <tr> <td style="text-align: left">21</td> <td style="text-align: center"><input name="q21" type="text" id="q21" size="auto" value="<?php echo $linha['q21'] ?>"/></td> <td style="text-align: center"><input name="obs21" type="text" id="obs21" size="auto" value="<?php echo $linha['obs21'] ?>"/></td></tr>
 <tr> <td style="text-align: left">22</td> <td style="text-align: center"><input name="q22" type="text" id="q22" size="auto" value="<?php echo $linha['q22'] ?>"/></td> <td style="text-align: center"><input name="obs22" type="text" id="obs22" size="auto" value="<?php echo $linha['obs22'] ?>"/></td></tr>
 <tr> <td style="text-align: left">23</td> <td style="text-align: center"><input name="q23" type="text" id="q23" size="auto" value="<?php echo $linha['q23'] ?>"/></td> <td style="text-align: center"><input name="obs23" type="text" id="obs23" size="auto" value="<?php echo $linha['obs23'] ?>"/></td></tr>
 <tr> <td style="text-align: left">24</td> <td style="text-align: center"><input name="q24" type="text" id="q24" size="auto" value="<?php echo $linha['q24'] ?>"/></td> <td style="text-align: center"><input name="obs24" type="text" id="obs24" size="auto" value="<?php echo $linha['obs24'] ?>"/></td></tr>
 <tr> <td style="text-align: left">25</td> <td style="text-align: center"><input name="q25" type="text" id="q25" size="auto" value="<?php echo $linha['q25'] ?>"/></td> <td style="text-align: center"><input name="obs25" type="text" id="obs25" size="auto" value="<?php echo $linha['obs25'] ?>"/></td></tr>
 <tr> <td style="text-align: left">26</td> <td style="text-align: center"><input name="q26" type="text" id="q26" size="auto" value="<?php echo $linha['q26'] ?>"/></td> <td style="text-align: center"><input name="obs26" type="text" id="obs26" size="auto" value="<?php echo $linha['obs26'] ?>"/></td></tr>
 <tr> <td style="text-align: left">27</td> <td style="text-align: center"><input name="q27" type="text" id="q27" size="auto" value="<?php echo $linha['q27'] ?>"/></td> <td style="text-align: center"><input name="obs27" type="text" id="obs27" size="auto" value="<?php echo $linha['obs27'] ?>"/></td></tr>
 <tr> <td style="text-align: left">28</td> <td style="text-align: center"><input name="q28" type="text" id="q28" size="auto" value="<?php echo $linha['q28'] ?>"/></td> <td style="text-align: center"><input name="obs28" type="text" id="obs28" size="auto" value="<?php echo $linha['obs28'] ?>"/></td></tr>
 <tr> <td style="text-align: left">29</td> <td style="text-align: center"><input name="q29" type="text" id="q29" size="auto" value="<?php echo $linha['q29'] ?>"/></td> <td style="text-align: center"><input name="obs29" type="text" id="obs29" size="auto" value="<?php echo $linha['obs29'] ?>"/></td></tr>
 <tr> <td style="text-align: left">30</td> <td style="text-align: center"><input name="q30" type="text" id="q30" size="auto" value="<?php echo $linha['q30'] ?>"/></td> <td style="text-align: center"><input name="obs30" type="text" id="obs30" size="auto" value="<?php echo $linha['obs30'] ?>"/></td></tr>
 <tr> <td style="text-align: left">31</td> <td style="text-align: center"><input name="q31" type="text" id="q31" size="auto" value="<?php echo $linha['q31'] ?>"/></td> <td style="text-align: center"><input name="obs31" type="text" id="obs31" size="auto" value="<?php echo $linha['obs31'] ?>"/></td></tr>
 <tr> <td style="text-align: left">32</td> <td style="text-align: center"><input name="q32" type="text" id="q32" size="auto" value="<?php echo $linha['q32'] ?>"/></td> <td style="text-align: center"><input name="obs32" type="text" id="obs32" size="auto" value="<?php echo $linha['obs32'] ?>"/></td></tr>
 <tr> <td style="text-align: left">33</td> <td style="text-align: center"><input name="q33" type="text" id="q33" size="auto" value="<?php echo $linha['q33'] ?>"/></td> <td style="text-align: center"><input name="obs33" type="text" id="obs33" size="auto" value="<?php echo $linha['obs33'] ?>"/></td></tr>
 <tr> <td style="text-align: left">34</td> <td style="text-align: center"><input name="q34" type="text" id="q34" size="auto" value="<?php echo $linha['q34'] ?>"/></td> <td style="text-align: center"><input name="obs34" type="text" id="obs34" size="auto" value="<?php echo $linha['obs34'] ?>"/></td></tr>
 <tr> <td style="text-align: left">35</td> <td style="text-align: center"><input name="q35" type="text" id="q35" size="auto" value="<?php echo $linha['q35'] ?>"/></td> <td style="text-align: center"><input name="obs35" type="text" id="obs35" size="auto" value="<?php echo $linha['obs35'] ?>"/></td></tr>
 <tr> <td style="text-align: left">36</td> <td style="text-align: center"><input name="q36" type="text" id="q36" size="auto" value="<?php echo $linha['q36'] ?>"/></td> <td style="text-align: center"><input name="obs36" type="text" id="obs36" size="auto" value="<?php echo $linha['obs36'] ?>"/></td></tr>
 <tr> <td style="text-align: left">37</td> <td style="text-align: center"><input name="q37" type="text" id="q37" size="auto" value="<?php echo $linha['q37'] ?>"/></td> <td style="text-align: center"><input name="obs37" type="text" id="obs37" size="auto" value="<?php echo $linha['obs37'] ?>"/></td></tr>
 <tr> <td style="text-align: left">38</td> <td style="text-align: center"><input name="q38" type="text" id="q38" size="auto" value="<?php echo $linha['q38'] ?>"/></td> <td style="text-align: center"><input name="obs38" type="text" id="obs38" size="auto" value="<?php echo $linha['obs38'] ?>"/></td></tr>
 <tr> <td style="text-align: left">39</td> <td style="text-align: center"><input name="q39" type="text" id="q39" size="auto" value="<?php echo $linha['q39'] ?>"/></td> <td style="text-align: center"><input name="obs39" type="text" id="obs39" size="auto" value="<?php echo $linha['obs39'] ?>"/></td></tr>
 <tr> <td style="text-align: left">40</td> <td style="text-align: center"><input name="q40" type="text" id="q40" size="auto" value="<?php echo $linha['q40'] ?>"/></td> <td style="text-align: center"><input name="obs40" type="text" id="obs40" size="auto" value="<?php echo $linha['obs40'] ?>"/></td></tr>
 <tr> <td style="text-align: left">41</td> <td style="text-align: center"><input name="q41" type="text" id="q41" size="auto" value="<?php echo $linha['q41'] ?>"/></td> <td style="text-align: center"><input name="obs41" type="text" id="obs41" size="auto" value="<?php echo $linha['obs41'] ?>"/></td></tr>
 <tr> <td style="text-align: left">42</td> <td style="text-align: center"><input name="q42" type="text" id="q42" size="auto" value="<?php echo $linha['q42'] ?>"/></td> <td style="text-align: center"><input name="obs42" type="text" id="obs42" size="auto" value="<?php echo $linha['obs42'] ?>"/></td></tr>
 <tr> <td style="text-align: left">43</td> <td style="text-align: center"><input name="q43" type="text" id="q43" size="auto" value="<?php echo $linha['q43'] ?>"/></td> <td style="text-align: center"><input name="obs43" type="text" id="obs43" size="auto" value="<?php echo $linha['obs43'] ?>"/></td></tr>
 <tr> <td style="text-align: left">44</td> <td style="text-align: center"><input name="q44" type="text" id="q44" size="auto" value="<?php echo $linha['q44'] ?>"/></td> <td style="text-align: center"><input name="obs44" type="text" id="obs44" size="auto" value="<?php echo $linha['obs44'] ?>"/></td></tr>
 <tr> <td style="text-align: left">45</td> <td style="text-align: center"><input name="q45" type="text" id="q45" size="auto" value="<?php echo $linha['q45'] ?>"/></td> <td style="text-align: center"><input name="obs45" type="text" id="obs45" size="auto" value="<?php echo $linha['obs45'] ?>"/></td></tr>
 <tr> <td style="text-align: left">46</td> <td style="text-align: center"><input name="q46" type="text" id="q46" size="auto" value="<?php echo $linha['q46'] ?>"/></td> <td style="text-align: center"><input name="obs46" type="text" id="obs46" size="auto" value="<?php echo $linha['obs46'] ?>"/></td></tr>
 <tr> <td style="text-align: left">47</td> <td style="text-align: center"><input name="q47" type="text" id="q47" size="auto" value="<?php echo $linha['q47'] ?>"/></td> <td style="text-align: center"><input name="obs47" type="text" id="obs47" size="auto" value="<?php echo $linha['obs47'] ?>"/></td></tr>
 <tr> <td style="text-align: left">48</td> <td style="text-align: center"><input name="q48" type="text" id="q48" size="auto" value="<?php echo $linha['q48'] ?>"/></td> <td style="text-align: center"><input name="obs48" type="text" id="obs48" size="auto" value="<?php echo $linha['obs48'] ?>"/></td></tr>
 <tr> <td style="text-align: left">49</td> <td style="text-align: center"><input name="q49" type="text" id="q49" size="auto" value="<?php echo $linha['q49'] ?>"/></td> <td style="text-align: center"><input name="obs49" type="text" id="obs49" size="auto" value="<?php echo $linha['obs49'] ?>"/></td></tr>
 <tr> <td style="text-align: left">50</td> <td style="text-align: center"><input name="q50" type="text" id="q50" size="auto" value="<?php echo $linha['q50'] ?>"/></td> <td style="text-align: center"><input name="obs50" type="text" id="obs50" size="auto" value="<?php echo $linha['obs50'] ?>"/></td></tr>
 <tr> <td style="text-align: left">51</td> <td style="text-align: center"><input name="q51" type="text" id="q51" size="auto" value="<?php echo $linha['q51'] ?>"/></td> <td style="text-align: center"><input name="obs51" type="text" id="obs51" size="auto" value="<?php echo $linha['obs51'] ?>"/></td></tr>
 <tr> <td style="text-align: left">52</td> <td style="text-align: center"><input name="q52" type="text" id="q52" size="auto" value="<?php echo $linha['q52'] ?>"/></td> <td style="text-align: center"><input name="obs52" type="text" id="obs52" size="auto" value="<?php echo $linha['obs52'] ?>"/></td></tr>
 <tr> <td style="text-align: left">53</td> <td style="text-align: center"><input name="q53" type="text" id="q53" size="auto" value="<?php echo $linha['q53'] ?>"/></td> <td style="text-align: center"><input name="obs53" type="text" id="obs53" size="auto" value="<?php echo $linha['obs53'] ?>"/></td></tr>
 <tr> <td style="text-align: left">54</td> <td style="text-align: center"><input name="q54" type="text" id="q54" size="auto" value="<?php echo $linha['q54'] ?>"/></td> <td style="text-align: center"><input name="obs54" type="text" id="obs54" size="auto" value="<?php echo $linha['obs54'] ?>"/></td></tr>
 <tr> <td style="text-align: left">55</td> <td style="text-align: center"><input name="q55" type="text" id="q55" size="auto" value="<?php echo $linha['q55'] ?>"/></td> <td style="text-align: center"><input name="obs55" type="text" id="obs55" size="auto" value="<?php echo $linha['obs55'] ?>"/></td></tr>
 <tr> <td style="text-align: left">56</td> <td style="text-align: center"><input name="q56" type="text" id="q56" size="auto" value="<?php echo $linha['q56'] ?>"/></td> <td style="text-align: center"><input name="obs56" type="text" id="obs56" size="auto" value="<?php echo $linha['obs56'] ?>"/></td></tr>
 <tr> <td style="text-align: left">57</td> <td style="text-align: center"><input name="q57" type="text" id="q57" size="auto" value="<?php echo $linha['q57'] ?>"/></td> <td style="text-align: center"><input name="obs57" type="text" id="obs57" size="auto" value="<?php echo $linha['obs57'] ?>"/></td></tr>
 <tr> <td style="text-align: left">58</td> <td style="text-align: center"><input name="q58" type="text" id="q58" size="auto" value="<?php echo $linha['q58'] ?>"/></td> <td style="text-align: center"><input name="obs58" type="text" id="obs58" size="auto" value="<?php echo $linha['obs58'] ?>"/></td></tr>
 <tr> <td style="text-align: left">59</td> <td style="text-align: center"><input name="q59" type="text" id="q59" size="auto" value="<?php echo $linha['q59'] ?>"/></td> <td style="text-align: center"><input name="obs59" type="text" id="obs59" size="auto" value="<?php echo $linha['obs59'] ?>"/></td></tr>
 <tr> <td style="text-align: left">60</td> <td style="text-align: center"><input name="q60" type="text" id="q60" size="auto" value="<?php echo $linha['q60'] ?>"/></td> <td style="text-align: center"><input name="obs60" type="text" id="obs60" size="auto" value="<?php echo $linha['obs60'] ?>"/></td></tr>
 <tr> <td style="text-align: left">61</td> <td style="text-align: center"><input name="q61" type="text" id="q61" size="auto" value="<?php echo $linha['q61'] ?>"/></td> <td style="text-align: center"><input name="obs61" type="text" id="obs61" size="auto" value="<?php echo $linha['obs61'] ?>"/></td></tr>
 <tr> <td style="text-align: left">62</td> <td style="text-align: center"><input name="q62" type="text" id="q62" size="auto" value="<?php echo $linha['q62'] ?>"/></td> <td style="text-align: center"><input name="obs62" type="text" id="obs62" size="auto" value="<?php echo $linha['obs62'] ?>"/></td></tr>
 <tr> <td style="text-align: left">63</td> <td style="text-align: center"><input name="q63" type="text" id="q63" size="auto" value="<?php echo $linha['q63'] ?>"/></td> <td style="text-align: center"><input name="obs63" type="text" id="obs63" size="auto" value="<?php echo $linha['obs63'] ?>"/></td></tr>
 <tr> <td style="text-align: left">64</td> <td style="text-align: center"><input name="q64" type="text" id="q64" size="auto" value="<?php echo $linha['q64'] ?>"/></td> <td style="text-align: center"><input name="obs64" type="text" id="obs64" size="auto" value="<?php echo $linha['obs64'] ?>"/></td></tr>
 <tr> <td style="text-align: left">65</td> <td style="text-align: center"><input name="q65" type="text" id="q65" size="auto" value="<?php echo $linha['q65'] ?>"/></td> <td style="text-align: center"><input name="obs65" type="text" id="obs65" size="auto" value="<?php echo $linha['obs65'] ?>"/></td></tr>
 <tr> <td style="text-align: left">66</td> <td style="text-align: center"><input name="q66" type="text" id="q66" size="auto" value="<?php echo $linha['q66'] ?>"/></td> <td style="text-align: center"><input name="obs66" type="text" id="obs66" size="auto" value="<?php echo $linha['obs66'] ?>"/></td></tr>
 <tr> <td style="text-align: left">67</td> <td style="text-align: center"><input name="q67" type="text" id="q67" size="auto" value="<?php echo $linha['q67'] ?>"/></td> <td style="text-align: center"><input name="obs67" type="text" id="obs67" size="auto" value="<?php echo $linha['obs67'] ?>"/></td></tr>
 <tr> <td style="text-align: left">68</td> <td style="text-align: center"><input name="q68" type="text" id="q68" size="auto" value="<?php echo $linha['q68'] ?>"/></td> <td style="text-align: center"><input name="obs68" type="text" id="obs68" size="auto" value="<?php echo $linha['obs68'] ?>"/></td></tr>
   </table><br />
<br /></div>
</div></div>
<div style="clear:both"></div><br />
<div style="display:none"><input name="datain" id="datain" type="text" value="<?php echo $linha['datain'] ?>"><input name="id2" id="id2" type="text" value="<?php echo $linha['id'] ?>">
<input name="usuario" type="text" value="<? echo "$usuario"; ?>"><input name="emailuser" type="text" value="<? echo "$email"; ?>"></div>
Responsável: <b><? echo "$usuario"; ?></b>  -  E-mail: <b><? echo "$email"; ?></b> - Data e Hora: <b><script type="text/javascript">
data = new Date();
dia = data.getDate();
mes = data.getMonth();
ano = data.getFullYear();

meses = new Array(12);

meses[0] = "01";
meses[1] = "02";
meses[2] = "03";
meses[3] = "04";
meses[4] = "05";
meses[5] = "06";
meses[6] = "07";
meses[7] = "08";
meses[8] = "09";
meses[9] = "10";
meses[10] = "11";
meses[11] = "12";

document.write (dia + "/" + meses[mes] + "/" + ano);
</script>  -   
<font id="ur" face="Trebuchet MS, Verdana, Arial, sans-serif" color="#000"></font></b><br />
<br />
<input type="submit" name="submit" id="submit" style="font-size:16px" value="Gerar PDF e Enviar">
</form>

<div style="clear:both"></div>
    
</div></div>

</body>
</html>