<?
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("../privado.php");
include("../listas.php");

if ($_SESSION['tipo'] != "sup" && $_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "scom" && $_SESSION['tipo'] != "sgi"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
		window.location.href='../logado.php';
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
<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
</head>

<body style="font-family:Tahoma, Geneva, sans-serif">
<div style="page-break-after:always">
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="12%" rowspan="4" align="center" valign="middle"><img src="../../assets/images/SPSP-peq.png" width="81" height="102" /></td>
      <td colspan="3" align="center"><strong><font size="+2">LISTA DE PRESENÇA</font></strong></td>
    </tr>
    <tr>
      <td width="36%">Evento: Curso de Formação de Agente de Portaria</td>
      <td colspan="2">Data:</td>
    </tr>
    <tr>
      <td>Local: SPSP Marília</td>
      <td width="28%">Horário:</td>
      <td width="24%">Carga Horária: 08 horas</td>
    </tr>
    <tr>
      <td>Cliente:</td>
      <td colspan="2">Avaliação de Eficácia? (  ) Sim | ( ) Não</td>
    </tr>
  </table>
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><strong>Declaro ter participado do Treinamento referente à:<br />
        CURSO DE FORMAÇÃO DE AGENTE DE PORTARIA</strong></td>
    </tr>
    <tr>
      <td width="4%" align="center">N.º</td>
      <td width="35%" align="center">Nome dos Participantes</td>
      <td width="14%" align="center">Função</td>
      <td width="21%" align="center">Local onde Trabalha</td>
      <td width="26%" align="center">Assinatura dos Participantes</td>
    </tr>
    <?php

if( $_SERVER['REQUEST_METHOD']=='GET' )
	{	$where = Array();
		$status1 = $_GET['status1'];
		$status2 = $_GET['status2'];
		}

$result=mysql_query("SELECT * FROM curso where status='{$status1}' and colaborador='SIM' order by nome limit 0,20");

/*$result=mysql_query("SELECT * FROM curso where status='Selecionado' order by nome");*/
/*$result=mysql_query("SELECT * FROM curso where aprovado='SIM' and colaborador='NAO' group by nome order by date, nome limit 0,10");*/
/*$result=mysql_query("SELECT * FROM curso where colaborador='SIM' group by nome order by date, nome limit 0,70");*/
$i = 1;
while($row=mysql_fetch_array($result)) {
	$nomepes = ucwords(strtolower($row['nome']));
		$cel = ucwords(strtolower($row['cel']));
	$fone = ucwords(strtolower($row['fone']));
echo "
            <tr>
    <td width='4%' align='center'>".$i."</td>
    <td width='35%'>".$nomepes."</td>
    <td width='14%'>".$cel."</td>
    <td width='21%'>".$fone."</td>
    <td width='26%'></td>
  </tr>
";$i++;
}
?>
  </table>
  <br />
  <br />
  <? echo "$ver_for_7"; ?> </div>
<div style="page-break-after:always">
  <center>
    <strong>CONTEÚDO PROGRAMÁTICO – EVENTO/TREINAMENTO</strong>
  </center>
  <br />
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="19%" align="center"><strong>CARGA HORÁRIA</strong></td>
      <td width="47%" align="center"><strong>ASSUNTO ABORDADO</strong></td>
      <td width="16%" align="center"><strong>FACILITADOR</strong></td>
      <td width="18%" align="center"><strong>ASSINATURA</strong></td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

  </table>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <? echo "$ver_for_7"; ?> </div>
<div style="page-break-after:always">
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="12%" rowspan="4" align="center" valign="middle"><img src="../../assets/images/SPSP-peq.png" width="81" height="102" /></td>
      <td colspan="3" align="center"><strong><font size="+2">LISTA DE PRESENÇA</font></strong></td>
    </tr>
    <tr>
      <td width="36%">Evento: Curso de Formação de Agente de Portaria</td>
      <td colspan="2">Data:</td>
    </tr>
    <tr>
      <td>Local: SPSP Marília</td>
      <td width="28%">Horário:</td>
      <td width="24%">Carga Horária: 08 horas</td>
    </tr>
    <tr>
      <td>Cliente:</td>
      <td colspan="2">Avaliação de Eficácia? (  ) Sim | ( ) Não</td>
    </tr>
  </table>
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><strong>Declaro ter participado do Treinamento referente à:<br />
        CURSO DE FORMAÇÃO DE AGENTE DE PORTARIA</strong></td>
    </tr>
    <tr>
      <td width="4%" align="center">N.º</td>
      <td width="35%" align="center">Nome dos Participantes</td>
      <td width="14%" align="center">Função</td>
      <td width="21%" align="center">Local onde Trabalha</td>
      <td width="26%" align="center">Assinatura dos Participantes</td>
    </tr>
    <?php
	
$result=mysql_query("SELECT * FROM curso where status='{$status1}' and colaborador='SIM' order by nome limit 20,40");
$i = 1;
while($row=mysql_fetch_array($result)) {
	$nomepes = ucwords(strtolower($row['nome']));
		$cel = ucwords(strtolower($row['cel']));
	$fone = ucwords(strtolower($row['fone']));
echo "
            <tr>
    <td width='4%' align='center'>".$i."</td>
    <td width='35%'>".$nomepes."</td>
    <td width='14%'>".$cel."</td>
    <td width='21%'>".$fone."</td>
    <td width='26%'></td>
  </tr>
";$i++;
}
?>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
  </table>
  <br />
  <br />
  <? echo "$ver_for_7"; ?> </div>
<div style="page-break-after:always">
  <center>
    <strong>CONTEÚDO PROGRAMÁTICO – EVENTO/TREINAMENTO</strong>
  </center>
  <br />
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="19%" align="center"><strong>CARGA HORÁRIA</strong></td>
      <td width="47%" align="center"><strong>ASSUNTO ABORDADO</strong></td>
      <td width="16%" align="center"><strong>FACILITADOR</strong></td>
      <td width="18%" align="center"><strong>ASSINATURA</strong></td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;<br />
        <br /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />  <br />
  <? echo "$ver_for_7"; ?> </div>
<div style="page-break-after:always">
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="12%" rowspan="4" align="center" valign="middle"><img src="../../assets/images/SPSP-peq.png" width="81" height="102" /></td>
      <td colspan="3" align="center"><strong><font size="+2">LISTA DE PRESENÇA</font></strong></td>
    </tr>
    <tr>
      <td width="36%">Evento: Curso de Formação de Agente de Portaria</td>
      <td colspan="2">Data:</td>
    </tr>
    <tr>
      <td>Local: SPSP Marília</td>
      <td width="28%">Horário:</td>
      <td width="24%">Carga Horária: 08 horas</td>
    </tr>
    <tr>
      <td>Cliente:</td>
      <td colspan="2">Avaliação de Eficácia? (  ) Sim | ( ) Não</td>
    </tr>
  </table>
  <table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="5"><strong>Declaro ter participado do Treinamento referente à:<br />
        CURSO DE FORMAÇÃO DE AGENTE DE PORTARIA</strong></td>
    </tr>
    <tr>
      <td width="4%" align="center">N.º</td>
      <td width="35%" align="center">Nome dos Participantes</td>
      <td width="14%" align="center">Função</td>
      <td width="21%" align="center">Local onde Trabalha</td>
      <td width="26%" align="center">Assinatura dos Participantes</td>
    </tr>
    <?php
	
$result=mysql_query("SELECT * FROM curso where status='{$status2}' and colaborador='NAO' order by nome limit 0,20");
$i = 1;
while($row=mysql_fetch_array($result)) {
	$nomepes = ucwords(strtolower($row['nome']));
	$cel = ucwords(strtolower($row['cel']));
	$fone = ucwords(strtolower($row['fone']));
echo "
            <tr>
    <td width='4%' align='center'>".$i."</td>
    <td width='35%'>".$nomepes."</td>
    <td width='14%'>".$cel."</td>
    <td width='21%'>".$fone."</td>
    <td width='26%'></td>
</tr>
";$i++;
}
?>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
<tr>
	<td width="4%" align="center">.</td>
    <td width='35%'></td>
    <td width='14%'></td>
    <td width='21%'></td>
    <td width='26%'></td>
</tr>
  </table>
  <br />
  <br />
  <? echo "$ver_for_7"; ?> </div>
<center>
  <strong>CONTEÚDO PROGRAMÁTICO – EVENTO/TREINAMENTO</strong>
</center>
<br />
<table style="font-family:Tahoma, Geneva, sans-serif" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19%" align="center"><strong>CARGA HORÁRIA</strong></td>
    <td width="47%" align="center"><strong>ASSUNTO ABORDADO</strong></td>
    <td width="16%" align="center"><strong>FACILITADOR</strong></td>
    <td width="18%" align="center"><strong>ASSINATURA</strong></td>
  </tr>
  <tr>
    <td>&nbsp;<br />
      <br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<br />
      <br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<br />
      <br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<br />
      <br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;<br />
      <br /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<? echo "$ver_for_7"; ?>

</body>
</html>