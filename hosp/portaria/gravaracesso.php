<?php
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
session_start();

include("../privado.php");
include("../config.php");

if ($_SESSION['tipo'] != "1" && $_SESSION['tipo'] != "2" && $_SESSION['tipo'] != "3" && $_SESSION['tipo'] != "11" && $_SESSION['tipo'] != "12" && $_SESSION['tipo'] != "13"){
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

    if (isset( $_POST["nome"] ) ) {

      $nome = $_POST["nome"];
      $acompanhante = $_POST["acompanhante"];
      $placadoveiculo = $_POST["placadoveiculo"];
      $tipodoveiculo = $_POST["tipodoveiculo"];
      $departamento = $_POST["departamento"];
      $nomepaciente = $_POST["nomepaciente"];
      $cliente = $clienteativo;
      $horaentrada = time ("H:i:s");
      $usuario_entrada = $usuario_id;
      $status = '';

      $sql = mysql_query("INSERT INTO tb_entrada (nome,acompanhante,placadoveiculo,tipodoveiculo,departamento,cliente,horaentrada, status, usuario_entrada, nomepaciente) VALUES ('$nome', '$acompanhante', '$placadoveiculo', '$tipodoveiculo', '$departamento', '$cliente', NOW(), '$status', '$usuario_entrada', '$nomepaciente')");

        if (!$sql){
          die ("Erro ao inserir no banco");

      }
    }

?>

<script language="javascript">
window.location="portariaentrada.php";
</script>