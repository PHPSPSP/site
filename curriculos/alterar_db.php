<?php

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$senha = md5(md5(md5(md5($_POST[s]))));
$sql = "UPDATE user SET 
		nome='".mysql_real_escape_string($_POST['nome'])."', 
		mail='".mysql_real_escape_string($_POST['mail'])."', 
		login='".mysql_real_escape_string($_POST['login'])."', 
		tipo='".mysql_real_escape_string($_POST['tipo'])."',
		senha='".mysql_real_escape_string($senha)."',
		senha2='".mysql_real_escape_string($_POST['s'])."'
	WHERE id = ".(int)$_GET['id'];

$resultado = mysql_query($sql)
or die ("echo (\"<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel atualizar o cadastro.');
		window.location.href='altera.php';
        </SCRIPT>\");");

?>
<?php
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Alteracao realizada com sucesso!');
		window.location.href='reg.php';
        </SCRIPT>");
        ?>