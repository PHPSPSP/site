<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../config.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "2" && $_SESSION['tipo'] != "3"){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Voce nao tem acesso a esse FOR!');
        window.location.href='../logado.php';
        </SCRIPT>");}else{  };

    $sql = mysql_query("DELETE from tb_departamento WHERE id='". $_GET["id"]."'");

        if (!$sql){
        die ("Erro ao alterar o banco");

        }

?>

<script language="javascript">
window.location="alterar_depto.php";
</script>