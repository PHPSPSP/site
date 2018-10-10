<?php

include("config.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a deletar!');
		window.close();
        </SCRIPT>");}else{	

if (isset($_GET['id']))
{

    $sql_DELETE = "DELETE FROM usuarios WHERE id = '".$_GET['id']."'";
    $query = mysql_query($sql_DELETE) or die(mysql_error());

echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Usuario deletado com sucesso!');
		window.location.href='listareg.php';
        </SCRIPT>");

}else {


echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Nao foi possivel deletar o usuario.');
		window.location.href='listareg.php';
        </SCRIPT>");

};
};

?>