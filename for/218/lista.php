<?
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

$nomeuser = $_SESSION['nomeuser'];
$usuario = $_SESSION['usuario'];
$email = $_SESSION['mail'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<title>Grupo SPSP - Formulários SPSP</title>
<link rel="shortcut icon" href="../../images/ico.png" type="imge/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="spsp, terceirização, temporário, trabalho, serviço, grupo, empresa" />
<meta name="description" content="SPSP - Grupo Empresarial de Serviços" />
<link href="../../templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>

</head>

<body>

<div id="templatemo_wrapper">
  <div id="templatemo_header">
    <div class="logotop"><img src="../../images/logo SPSP.png" alt="" width="130" height="149" align="left" /></div>
   <br /><br />
    <div class="slogan">Check List - Supervisão</div>
    <div style="clear:both;"></div>
  </div>
</div>
<div class="menu">
<div id="templatemo_menu" class="ddsmoothmenu"></div></div>

<div style="width:100%; height:100%;">
<div style="width: 1024px; margin: 0 auto; text-align: right;">.</div></div><div id="imagemmeio">

  <div class="subtit">Check List - Supervisão</div>
  <div class="info">

<div style="width:998px">

<div style="float:left; width:848px">
<div style="width:100%">
<table width="100%" style="margin-top:6px" border="0">
<tr>
<td width="23%"><strong><font color="#FF0000">Lista de Check List Enviados</font></strong></td>
<td width="10%" align="right"><a href="../logado.php">Voltar</a></td></tr></table>
</div><br />
<?php

$result=mysql_query("select * from checklist");

echo "<table>
  <tr>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=203><b>Cliente</b></td>
	<td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=203><b>Atividade</b></td>
	<td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=203><b>Data</b></td>
    <td bgcolor='#CCCCCC' align='center' style='border:1px #6e6e6e solid;' width=88><b>Ação</b></td>
  </tr></table>";
while($row=mysql_fetch_array($result))
echo "<table>
  <tr>
    <td style='border-bottom:1px #6e6e6e solid;' width=205 align=left>".nl2br($row['cliente'])."</td>
    <td style='border-bottom:1px #6e6e6e solid;' width=205 align=left>".nl2br($row['ativ'])."</td>
    <td style='border-bottom:1px #6e6e6e solid;' width=205 align=left>".nl2br($row['dataout'])."</td>
    <td style='border-bottom:1px #6e6e6e solid;' align='center' width=90><a href=\"enviaf.php?id=".$row['id']."\"><font color='#0099FF'>Reenviar</font></a></td>
  </tr>
</table>";

?>

<br />
</div>
<div style="float:left; width:150px">
<img src="../../images/tool.png" align="left" width="140" height="140" style="margin-right:10px; margin-top:10px" /></div>
</div>
<div style="clear:both"></div>
</p>
</div></p>
</div>
<div id="imagemfundo">
  <div id="templatemo_roda">
    <div id="templatemo_bottom"><font color="#FFFFFF"></font></div>
    <hr color="#999999" style="height:1px; border-bottom:2px #5c5c5c solid;"/></p><span style="color: #DBDBDB; font-size: 12px;">2013 © SPSP . Todos os direitos reservados</span></div>
</div>
</body>
</html>