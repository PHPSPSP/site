<?
session_start();
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
<link href="../../templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript" src="../../js/jquery.min.js"></script>

<script>
function formatar(src, mask)
{ var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {	src.value += texto.substring(0,1); }}
</script>

</head>

<body>


<table width="100%" style="margin-top:6px" border="0">
<tr>
<td width="23%"><strong><font color="#FF0000">Gerar Lista de Presença Curso de Portaria</font></strong></td>
<td width="10%" align="right"><a href="../logado.php">Voltar</a></td></tr></table>
</div><br />



<form name="form1" action="FOR010pag2.php" method="GET">
<table border="0">
  <tr>
    <td width="116"><label>Supervisor: </label></td>
    <td><select name="s">
      <option value="">Todos</option>
<?php
$consulta=mysql_query("SELECT * FROM curso where aprovado='SIM' group by nome order by colaborador, nome DSC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nomesup']."'>".$dados['nomesup']."</option>");}
?>
   </select></td>
  </tr>
  <tr>
    <td><label>Cliente: </label></td>
    <td><select name="c">
      <option value="">Todos</option>
<?php
$consulta=mysql_query("SELECT * FROM visita group by nomeposto order by nomeposto ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['nomeposto']."'>".$dados['nomeposto']."</option>");}
?>
	</select></td>
  </tr>
  <tr>
    <td><label>Período: </label></td>
    <td><input name="inicio" type="date" id="inicio" size="10" maxlength="10" onkeypress="formatar(this, '##/##/####')"/> a <input name="final" type="date" id="final" size="10" maxlength="10" onkeypress="formatar(this, '##/##/####')"/>
 </td>
  </tr>
  <tr>
  <td>
  <input type="submit" name="ok" value="Filtrar" /></td></tr>
</table>
</form>

</body>
</html>