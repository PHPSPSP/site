<?php
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

$nomeposto = nl2br($_POST['nomeposto']);
$nomesup = nl2br($_POST['nomesup']);
$tipo2 = nl2br($_POST['tipo2']);
$data = date('d-m-Y');
$rotina = nl2br($_POST['rotina']);
$postura = nl2br($_POST['postura']);
$uniforme = nl2br($_POST['uniforme']);
$ocorrencia = nl2br($_POST['ocorrencia']);
$cartao = nl2br($_POST['cartao']);
$equipamento = nl2br($_POST['equipamento']);
$cliente = nl2br($_POST['cliente']);
$pastamanual = nl2br($_POST['pastamanual']);
$outros = nl2br($_POST['outros']);
$epi = nl2br($_POST['epi']);
$estoqueprod = nl2br($_POST['estoqueprod']);
$observacao = nl2br($_POST['observacao']);
$horac = nl2br($_POST['horac']);
$horas = $_POST['horas'];
$horasr = $_POST['horas'];
switch ($horasr) {
case "": $horas2 = date('H:i:s'); break;
case !"": $horas2 = $horas; break;}

$colorsuccess = "<span style='background-color:#0F0'>&nbsp;&nbsp;&nbsp;</span>";
$colorwarning = "<span style='background-color: #FF0'>&nbsp;&nbsp;&nbsp;</span>";
$colordanger = "<span style='background-color: #F00'>&nbsp;&nbsp;&nbsp;</span>";

if(empty($usuario)){
      header("Location: http://www.spsp.com.br/for/proibido.php"); 
}else{
}

		$consulta_posto=mysql_query("SELECT NOMEPOS FROM sarposto WHERE CODPOS = '" . $tipo2 . "' AND CODCLI = '" . $nomeposto . "'");
		
		$consulta_cliente=mysql_query("SELECT NOMECLI FROM sarclien WHERE CODCLI = '" . $nomeposto . "'");
		
		while ($cliente_hk = mysql_fetch_array($consulta_cliente)) {
            $cliente_posto = $cliente_hk['NOMECLI'];
		}
		
		while ($posto = mysql_fetch_array($consulta_posto)) {
            $posto_atividade = $posto['NOMEPOS'];
		}
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=ISO-8859-1'>
<style type='text/css'>
body, td, th, a, h1, h2, h3, h4, h5, h6 {
	font-family: Tahoma, Geneva, sans-serif;
}
</style>
</head>
<body>
<div style="margin:20px; width:556px">
  <div style="width:556px; text-align:center; background-color:#F00;"><font size="-3" color="#FFFFFF"><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>FOR 010 - Relatório de Visita</td>
    <td align="right">SPSP 2016</td>
  </tr>
</table><br />
</font></div>
  <div style="clear:both"></div>

  <div style="width: 550px; background-color: #cccccc; padding: 2px;"> 
 <center> <img src="../../assets/images/SPSP-logo-bott.jpg" width="266" /></center>


    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" style="border-left-color: #000; border-left-style: solid; border-left-width: thin; padding-left: 5px;">Supervisor: <strong><? echo "$nomesup"; ?></strong><br />
          Posto: <strong><? echo "$cliente_posto"; ?></strong><br />
          Atividade: <strong><? echo "$posto_atividade"; ?></strong></td>
        <td width="50%" style="border-left-color: #000; border-left-style: solid; border-left-width: thin; padding-left: 5px;"> Data: <strong><? echo "$data"; ?></strong> <br />
          Hora de início: <strong><? echo "$horac"; ?></strong> <br />
          Hora de término: <strong><? echo "$horas2"; ?></strong></td>
      </tr>
    </table>
<br /><br />


    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="6" align="left" valign="middle" bgcolor="#FFFFFF"><br />
          <strong>Legenda:</strong><br />
<span style="background-color:#0F0">&nbsp;&nbsp;&nbsp;</span> = Conforme &nbsp;&nbsp;|&nbsp;&nbsp; <span style="background-color: #F00">&nbsp;&nbsp;&nbsp;</span> = Não Conforme &nbsp;&nbsp;|&nbsp;&nbsp; <span style="background-color: #FF0">&nbsp;&nbsp;&nbsp;</span> = Não Aplicável<br />
          <br /></td>
      </tr><tr>
        <td colspan="6" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr style="font-size:11px">
        <td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Rotina de Trabalho</strong></td>
        <Td width="16%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Postura</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Uniforme</strong></Td>
        <Td width="16%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Livro de Ocorrência</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Cartão de Ponto</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Rotina / Manual / FOR</strong></Td>
      </tr>
      <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $rotina=="conf"?"$colorsuccess":($rotina == "naplica" ? "$colorwarning" : "$colordanger"); ?></td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $postura=="conf"?"$colorsuccess":($postura == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $uniforme=="conf"?"$colorsuccess":($uniforme == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $ocorrencia=="conf"?"$colorsuccess":($ocorrencia == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $cartao=="conf"?"$colorsuccess":($cartao == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $pastamanual=="conf"?"$colorsuccess":($pastamanual == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
      </tr>
      <tr>
        <td colspan="6" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr style="font-size:11px">
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Contato com Cliente</strong></Td>
        <Td width="16%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Produtos e Equipamentos</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>EPI</strong></Td>
        <Td width="16%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Estoque de Produtos e Equipamentos</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF"><strong>Outros</strong></Td>
        <Td width="17%" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</Td>
      </tr>
      <tr>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $cliente=="conf"?"$colorsuccess":($cliente == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $equipamento=="conf"?"$colorsuccess":($equipamento == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $epi=="conf"?"$colorsuccess":($epi == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $estoqueprod=="conf"?"$colorsuccess":($estoqueprod == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF"><? echo $outros=="conf"?"$colorsuccess":($outros == "naplica" ? "$colorwarning" : "$colordanger"); ?></Td>
        <Td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</Td>
      </tr>
      
    </table>
    <br /><br />

    Descrição da N/C ou observações:<br />
    <? echo "$observacao"; ?><br />
    <br />
    </font>
 
  </div>
  <div style="clear:both"></div>
  <table border='0' width='556'>
    <tr><font size="-3">
      <td bgcolor="#7C7C7C" style="color: #FFF;"><br />
        <br />
        FOR 010 - V.07</td></font>
    </tr>
  </table>
</div>

</body>
</html>