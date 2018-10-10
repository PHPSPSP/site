<?php

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

if($_POST[s] == $_POST[s2]){

$senha = md5(md5(md5(md5($_POST[s]))));

$id = $_GET['id'];

$sql = "UPDATE usuarios SET
	senha='".mysql_real_escape_string($senha)."',
	senha2='".mysql_real_escape_string($_POST['s2'])."'
	WHERE id='$id'";

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel alterar a senha.');
		window.location.href='altsenha.php';
        </SCRIPT>\");");

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Senha alterada com sucesso!');
		window.location.href='logado.php';
        </SCRIPT>");
} else {

	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('A confirmação da senha não confere, verifique se o campo nova senha e confirmação da nova senha estão iguais!');
		window.back();
        </SCRIPT>");
}


?>