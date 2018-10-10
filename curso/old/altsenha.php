<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$sql = "SELECT * FROM user WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");

$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>

<title>Grupo SPSP - Sistema de Consulta de Currículos</title>
<link rel="shortcut icon" href="../images/ico.png" type="imge/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="spsp, terceirização, temporário, trabalho, serviço, grupo, empresa" />
<meta name="description" content="SPSP - Grupo Empresarial de Serviços" />
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../ddsmoothmenu.css" />

<script language="javascript" type="text/javascript">
function clearText(field){    if (field.defaultValue == field.value) field.value = '';    else if (field.value == '') field.value = field.defaultValue;}
</script>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/ddsmoothmenu.js"></script>

<script type="text/javascript">
ddsmoothmenu.init({	mainmenuid: "templatemo_menu", 
	orientation: 'h',
	classname: 'ddsmoothmenu', 
	contentsource: "markup"})
</script>

<script type="text/javascript">
function validar(formulario){
	if(formulario.velha.value !== '<?=$_SESSION['senha2'];?>'){alert("A senha ANTIGA informada está incorreta!"); formulario.velha.focus(); return false;}
	if(formulario.s.value == ''){alert("Informe a NOVA senha!"); formulario.s.focus(); return false;}
	if(formulario.s.value == '<?=$_SESSION['senha2'];?>'){alert("A NOVA senha é igual a ANTIGA!"); formulario.s.focus(); return false;}
	if(formulario.s.value !== formulario.s2.value){alert("A confirmação da senha está diferente da NOVA SENHA informada!"); formulario.s.focus(); return false;}
	return true;}
</script>
</head>

<body>

<div id="templatemo_wrapper">
  <div id="templatemo_header">
    <div class="logotop"><a href="../index.html"><img src="../images/logo SPSP.png" alt="" width="130" height="149" align="left" /></a></div>
   <br /><br />
    <div class="slogan"> Consulta de Currículos</div>
    <div style="clear:both;"></div>
  </div>
</div>
<div class="menu">
<div id="templatemo_menu" class="ddsmoothmenu"></div></div>

<div style="width:100%; height:100%;">
<div style="width: 1024px; margin: 0 auto; text-align: right;"><a href="../index.html"><font color="#333333" size="-3">retorne ao site SPSP</font></a></div></div><div id="imagemmeio">

  <div class="subtit">Consulta de Currículos</div>
  <div class="info">
<div>
<p><strong><font color="#FF0000">Alteração da Senha</font></strong><br />
</p>

<img src="../images/users.png" width="140" style="float:left; margin-right:10px" />
<div>
<form name="formulario" action="alt_s.php?login=<?=$_SESSION['login'];?>" method="post" onsubmit="return validar(this);">

	<div style="width:120px; float:left">Nome: </div><b><?=$_SESSION['nome'];?></b><br />
	<div style="width:120px; float:left"><label for="velha">Senha Antiga: </label></div>
	<input name="velha" size="25" id="velha" type="password" /><br />
	<div style="width:120px; float:left"><label for="senha">Nova Senha: </label></div>
	<input name="s" id="s" size="25" type="password"/><br />
    <div style="width:120px; float:left"><label for="senha2">Confirma Senha: </label></div>
	<input name="s2" id="s2" size="25" type="password"/><br />
	<input type="submit" value="Alterar" /> <input type="button" value="Voltar" onclick="location.href='logado.php'"/> 

</form>

</div>

</div><div style="clear:both"></div>
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