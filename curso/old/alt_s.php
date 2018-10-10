<?php

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");


$senha = md5(md5(md5(md5($_POST[s]))));
$sql = "UPDATE user SET
	senha='".mysql_real_escape_string($senha)."',
	senha2='".mysql_real_escape_string($_POST['s'])."'
	WHERE login='$login'";

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel alterar a senha.');
		window.location.href='altsenha.php';
        </SCRIPT>\");");

?>
<?php
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Senha alterada com sucesso!');
		window.location.href='index.php';
        </SCRIPT>");
        ?>