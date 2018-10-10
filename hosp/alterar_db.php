<?php
/*ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);*/

include("privado.php");

if ($_POST['t']=="8"){ $senha=""; $senha2="desativado*"; } else { $senha = md5(md5(md5(md5($_POST['s'])))); $senha2=$_POST['s']; };

$sql = "UPDATE usuarios_hosp SET 
nome='".mysql_real_escape_string($_POST['n'])."', 
mail='".mysql_real_escape_string($_POST['m'])."', 
login='".mysql_real_escape_string($_POST['l'])."', 
tipo='".mysql_real_escape_string($_POST['t'])."',
gestor='".mysql_real_escape_string($_POST['g'])."',
id_hk='".mysql_real_escape_string($_POST['hk'])."',
regiao='".mysql_real_escape_string($_POST['r'])."',
cliente='".mysql_real_escape_string($_POST['c'])."',
senha='".mysql_real_escape_string($senha)."',
senha2='".mysql_real_escape_string($senha2)."'
WHERE id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nao foi possivel atualizar o cadastro.');
window.location.href='logado.php';
</SCRIPT>\");");

echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Alteracao realizada com sucesso!');
window.location.href='listareg.php';
</SCRIPT>");
?>