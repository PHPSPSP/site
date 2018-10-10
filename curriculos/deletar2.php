<?php
include("config.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem permissao para deletar esse Curriculo! Somente o usuario administrador pode deleta-lo.');
		window.location.href='relatorio.php';
        </SCRIPT>");}else{	
		
if (isset($_GET['id']))

{		
		
    // excluindo um registro na tabela do bd
    $sql_DELETE = "DELETE FROM curric WHERE id = '".$_GET['id']."'";
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Curriculo deletado com sucesso!');
		window.history.back(-1);
        </SCRIPT>");

}else {


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel deletar o Curriculo.');
		window.history.back(-1);
        </SCRIPT>");

}};		

?>