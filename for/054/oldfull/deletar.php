<?php
session_start();

include("../privado.php");

$usuario = $_SESSION['nome'];

include("../config.php");

$sql = "SELECT * FROM for054 WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta.");
$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

if ($usuario != $linha['nomeuser']){	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem permissao para deletar esse FOR! Somente o usuario responsavel pela criacao do mesmo pode deleta-lo.');
		window.location.href='FOR054.php';
        </SCRIPT>");}else{
			
if (isset($_GET['id']))

{		
		
    // excluindo um registro na tabela do bd
    $sql_DELETE = "DELETE FROM for054 WHERE id = '".(int)$_GET['id']."'";
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('FOR 054 deletado com sucesso!');
		window.location.href='FOR054.php';
        </SCRIPT>");

}else {

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel deletar o FOR 054.');
		window.location.href='FOR054.php';
        </SCRIPT>");
}};		

?>