<?php
session_start();

include("privado.php");

$usuario = $_SESSION['id'];

include("config.php");

$sql = "SELECT * FROM vagas WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

if ($usuario != $linha['usuario']){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem permissao para deletar essa vaga! Somente o usuario responsavel pela criacao da mesma pode deleta-la.');
		window.location.href='excvagas.php';
        </SCRIPT>");}else{
			
			
if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "rh"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem permissao para deletar essa Vaga! Somente o usuario RH pode deleta-lo.');
		window.location.href='logado.php';
        </SCRIPT>");}else{		
				
if (isset($_GET['id']))

{		
		
    // excluindo um registro na tabela do bd
    $sql_DELETE = "DELETE FROM vagas WHERE id = '".(int)$_GET['id']."'";
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Vaga deletada com sucesso!');
		window.location.href='excvagas.php';
        </SCRIPT>");

}else {

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel deletar a vaga.');
		window.location.href='excvagas.php';
        </SCRIPT>");
}}};		

?>