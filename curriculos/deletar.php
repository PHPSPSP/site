<?php
include("config.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem permissao para deletar esse Curriculo! Somente o usuario administrador pode deleta-lo.');
		window.location.href='relatorio.php';
        </SCRIPT>");}else{	
		
if (isset($_GET['id']))
{

    $sql_DELETE = "DELETE FROM user WHERE id = '".$_GET['id']."'";
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuario deletado com sucesso!');
		window.location.href='reg.php';
        </SCRIPT>");

}else {


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel deletar o usuario.');
		window.location.href='reg.php';
        </SCRIPT>");

}};

?>