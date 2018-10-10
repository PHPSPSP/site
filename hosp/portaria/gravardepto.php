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

$nomeuser = $_SESSION['login'];
$usuario = $_SESSION['nome'];
$email = $_SESSION['mail'];
$clienteativo = $_SESSION['cliente'];
$tipo = $_SESSION['tipo'];
$usuario_id = $_SESSION['id'];
$local = $_SESSION['cliente'];

    if (isset( $_POST["nome"] ) ) {

      $nome = $_POST["nome"];

      $sql = mysql_query("INSERT INTO tb_departamento (nomes, local) VALUES ('$nome', '$local')");

        if (!$sql){
          die ("Erro ao inserir no banco");

      }
    }

?>

<script language="javascript">
window.location="cadastro_depto.php";
</script>