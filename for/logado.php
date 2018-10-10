<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

date_default_timezone_set("America/Sao_Paulo");
include("privado.php");
include("listas.php");

$sql = "SELECT * FROM acesso WHERE user = \"".$_SESSION['id']."\"";
$res = mysql_query($sql);
$lista_pos = mysql_fetch_array($res);

$sql2 = "SELECT * FROM npacesso WHERE user = \"".$_SESSION['id']."\"";
$res2 = mysql_query($sql2);
$lista_np = mysql_fetch_array($res2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../assets/images/SPSP-favicon.png">
<title>Grupo SPSP - FOR Online</title>
<meta name="description" content="SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade."/>
<meta name="keywords" content="trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa"/>
<meta name="copyright" content="SPSP"/>
<meta name="author" content="SPSP"/>
<meta name="email" content="spsp@spsp.com.br"/>
<meta name="Charset" content="UTF-8"/>
<meta name="Distribution" content="Global"/>
<meta name="Rating" content="General"/>
<meta name="Robots" content="INDEX,FOLLOW"/>
<meta name="Revisit-after" content="31 Days"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="normal-header" onload="time()">
<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="../index.php" class="navbar-brand"> <img src="../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"></a> </div>
    <nav >
      <ul id="menu-one-page" class="nav navbar-nav navbar-left">
        <li><a>Olá <b>
          <?=$_SESSION['nome'];?>
          </b> <br>
			<span id="txt"></span></a></li>
      </ul>
    </nav>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li class="active"><a>Início</a></li>
        <li><a target="_self" href="altsenha.php">Alterar Senha</a></li>
        <?php if ($_SESSION['tipo']=='adm') { ?><li><a target="_self" href="reg.php">Configuração</a></li><?php } ?>
        <li class="nav-highlight"><a href="<?=$url?>/logout.php">Sair do Sistema</a> </li>
      </ul>
    </nav>
  </div>
</div>
<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container" style="padding-bottom: 180px;">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-short-top element-medium-bottom not-condensed "  >
              <h1 class="super hairline bordered bordered-normal"> Selecione o FOR </h1>
            </header>
            <div class="row">
              <div class="col-md-12">
               
                  <?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='com' || $_SESSION['tipo']=='scom') { ?>
<div class="row">

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_1" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-calendar" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_54"; ?></a>
</div>
<div id="group_1" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="054/FOR0542.php">Relatório de Implantação de Serviços</a><br><hr color="#FFFFFF" style="margin:0">
<a href="054/FOR054.php">Lista de FOR pendentes/incompletos</a><br><hr color="#FFFFFF" style="margin:0">
<a href="054/FOR0545.php">Ampliação e Redução de Serviços</a><br><hr color="#FFFFFF" style="margin:0">
<a href="168/FOR1682.php">Lista de Clientes Cadastrados</a>
<?php if ($_SESSION['tipo']=='adm') { ?><br><hr color="#FFFFFF" style="margin:0"><a href="054/FOR0549.php">Inserir Implantações Antigas</a>
<br><hr color="#FFFFFF" style="margin:0"><a href="054/FOR0543.php">Reenviar Implantações</a><?php } ?>
<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom') { ?><br><hr color="#FFFFFF" style="margin:0"><a href="054/FOR054rel.php">Relatório de Reduções e Encerramentos</a><?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_2" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-edit" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_245"; ?></a>
</div>
<div id="group_2" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="245/FOR2453.php">Encerramento de Contrato (antigos)</a><br><hr color="#FFFFFF" style="margin:0">
<a href="245/FOR2452.php">Encerrar Contratos Ativos (gerados no sistema)</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_3" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-users" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_168"; ?></a>
</div>
<div id="group_3" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="168/FOR168.php">Cadastro de Clientes</a><br><hr color="#FFFFFF" style="margin:0">
<a href="168/FOR1682.php">Alteração Clientes Cadastrados</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_4" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-times" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_249"; ?></a>
</div>
<div id="group_4" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="249/FOR2491.php">Cancelamento e Encerramento de Serviços</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_17" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-edit" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_348"; ?></a>
</div>
<div id="group_17" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="348/FOR348.php">Alteração Contratual</a><br><hr color="#FFFFFF" style="margin:0">
<a href="348/FOR3482.php">Lista de Contratos Ativos</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_18" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-calendar" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_335"; ?></a>
</div>
<div id="group_18" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="335/FOR335.php">Implantação de Serviços Extras (temporário)</a><br><hr color="#FFFFFF" style="margin:0">
<a href="335/FOR3352.php">Lista de Clientes</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>


<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_5" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-comments-o" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_22"; ?></a>
</div>
<div id="group_5" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="022/FOR022.php">Modelos de Apresentação da Empresa</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_6" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-money" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_60"; ?></a>
</div>
<div id="group_6" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="060/FOR060.php">Criar Nova Proposta Comercial</a><br><hr color="#FFFFFF" style="margin:0">
<a href="060/FOR060feita.php">Propostas Enviadas</a><br><hr color="#FFFFFF" style="margin:0">
<a href="060/FOR060rel.php">Contagem de Propostas Enviadas</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

</div>
<?php } ?>

<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom' || $_SESSION['tipo']=='sup' || $_SESSION['tipo']=='sgi') { ?>
<div class="row">

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_7" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-square" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_218"; ?></a>
</div>
<div id="group_7" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="218/FOR218.php">Check List - AVSST</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_8" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-check-circle" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_144"; ?></a>
</div>
<div id="group_8" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="144/FOR1441.php">Condomínios / Residenciais - PORTARIA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1442.php">Condomínios / Residenciais - LIMPEZA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1443.php">Edifícios - PORTARIA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1444.php">Edifícios - LIMPEZA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1445.php">Indústria - PORTARIA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1446.php">Indústria - LIMPEZA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1447.php">Edifícios e Condomínios - ZELADORIA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1448.php">JARDINAGEM</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR1449.php">Shopping - ABERTURA</a><br><hr color="#FFFFFF" style="margin:0">
<a href="144/FOR14410.php">Hospital/Clínica - LIMPEZA</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_9" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-map-marker" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_10"; ?></a>
</div>
<div id="group_9" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="010/FOR010.php">Relatório de Visita</a>
<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='sgi' || $_SESSION['tipo']=='scom' || $_SESSION['nome']=='Jacqueline Araujo') { ?>
<br><hr color="#FFFFFF" style="margin:0"><a href="010/FOR010rel.php">Relatórios Gerais</a>
<br><hr color="#FFFFFF" style="margin:0"><a href="010/FOR010rel2.php">Contagem de Visitas</a><?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
</div>

<?php } ?>

<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom' || $_SESSION['tipo']=='lid') { ?>
<div class="row">

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_13" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-edit" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_312"; ?></a>
</div>
<div id="group_13" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="312/FOR312.php">Checklist Entrega de Quartos</a>
<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom') { ?>
<br><hr color="#FFFFFF" style="margin:0"><a href="312/FOR312rel.php">Relatório de Checklist enviado</a>
<br><hr color="#FFFFFF" style="margin:0"><a href="312/FOR312rel2.php">Relatório de Abertura de Chamados</a>
<br><hr color="#FFFFFF" style="margin:0"><a href="312/FOR312rel3.php">Relatório de Contagem Gerencial</a>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_14" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-qrcode" style="font-size:50px; color:#FFF"></i><br>FOR QR Code</a>
</div>
<div id="group_14" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="qrcode/qrcoderel.php">Relatório de Checagem de Higienização</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

</div>
<?php } ?>

<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom' || $_SESSION['tipo']=='sup') { ?>
<div class="row">

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_10" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-sign-out" style="font-size:50px; color:#FFF"></i><br><? echo "$ver_for_208"; ?></a>
</div>
<div id="group_10" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="208/FOR208.php">Movimentação de Colaboradores</a>
<?php if ($_SESSION['nome']=='Tissiana Funai' || $_SESSION['nome']=='Camila Sotelo' || $_SESSION['nome']=='Gustavo Guedes' || $_SESSION['nome']=='Jacqueline Araujo' || $_SESSION['tipo']=='scom' || $_SESSION['tipo']=='sup') { ?>
<br><hr color="#FFFFFF" style="margin:0"><a href="208/FOR208rel.php">Relatório de FOR enviado</a>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
</div>

<?php } ?>

<?php if ($_SESSION['tipo']!='') { ?>
<div class="row">




<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_11" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-tasks" style="font-size:50px; color:#FFF"></i><br>Modelos FOR</a>
</div>
<div id="group_11" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<?php if ($lista_pos['acesso_almoxarifado']=='1') { ?><a href="modelos/Almoxarifado/index.php">FOR - Almoxarifado</a><br><?php } ?>
<?php if ($lista_pos['acesso_atendimento']=='1') { ?><a href="modelos/Atendimento/index.php">FOR - Atendimento</a><br><?php } ?>
<?php if ($lista_pos['acesso_comercial']=='1') { ?><a href="modelos/Comercial/index.php">FOR - Comercial</a><br><?php } ?>
<?php if ($lista_pos['acesso_compras']=='1') { ?><a href="modelos/Compras/index.php">FOR - Compras</a><br><?php } ?>
<?php if ($lista_pos['acesso_controladoria']=='1') { ?><a href="modelos/Controladoria/index.php">FOR - Controladoria</a><br><?php } ?>
<?php if ($lista_pos['acesso_dp']=='1') { ?><a href="modelos/Departamento Pessoal/index.php">FOR - Departamento Pessoal</a><br><?php } ?>
<?php if ($lista_pos['acesso_financeiro']=='1') { ?><a href="modelos/Financeiro/index.php">FOR - Financeiro</a><br><?php } ?>
<?php if ($lista_pos['acesso_gestao']=='1') { ?><a href="modelos/Gestão de Contratos/index.php">FOR - Gestão de Contratos</a><br><?php } ?>
<?php if ($lista_pos['acesso_tecnico']=='1') { ?><a href="modelos/Gestão Técnica/index.php">FOR - Gestão Técnica</a><br><?php } ?>
<?php if ($lista_pos['acesso_juridico']=='1') { ?><a href="modelos/Jurídico/index.php">FOR - Jurídico</a><br><?php } ?>
<?php if ($lista_pos['acesso_manutencao']=='1') { ?><a href="modelos/Manutenção/index.php">FOR - Manutenção</a><br><?php } ?>
<?php if ($lista_pos['acesso_mkt']=='1') { ?><a href="modelos/Marketing/index.php">FOR - Marketing</a><br><?php } ?>
<?php if ($lista_pos['acesso_ses']=='1') { ?><a href="modelos/Recrutamento e Seleção/index.php">FOR - Recrutamento e Seleção</a><br><?php } ?>
<?php if ($lista_pos['acesso_sgi']=='1') { ?><a href="modelos/SGI/index.php">FOR - SGI</a><br><?php } ?>
<?php if ($lista_pos['acesso_sst']=='1') { ?><a href="modelos/SST/index.php">FOR - SST</a><br><?php } ?>
<?php if ($lista_pos['acesso_supervisao']=='1') { ?><a href="modelos/Supervisão Operacional/index.php">FOR - Supervisão Operacional</a><br><?php } ?>
<?php if ($lista_pos['acesso_ti']=='1') { ?><a href="modelos/TI/index.php">FOR - TI</a><br><?php } ?>
<?php if ($lista_pos['acesso_treinamento']=='1') { ?><a href="modelos/Treinamento/index.php">FOR - Treinamento</a><?php } ?>
<hr>
<?php if ($lista_pos['acesso_geral_almoxarifado']=='1') { ?><a href="modelos/Geral Almoxarifado/index.php">FOR Geral - Almoxarifado</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_dp']=='1') { ?><a href="modelos/Geral DP/index.php">FOR Geral - DP</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_financeiro']=='1') { ?><a href="modelos/Geral Financeiro/index.php">FOR Geral - Financeiro</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_frota']=='1') { ?><a href="modelos/Geral Frota/index.php">FOR Geral - Frota</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_res']=='1') { ?><a href="modelos/Geral Recrutamento e Seleção/index.php">FOR Geral - Recrutamento e Seleção</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_sgi']=='1') { ?><a href="modelos/Geral SGI/index.php">FOR Geral - SGI</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_sst']=='1') { ?><a href="modelos/Geral SST/index.php">FOR Geral - SST</a><br><?php } ?>
<?php if ($lista_pos['acesso_geral_treinamento']=='1') { ?><a href="modelos/Geral Treinamento/index.php">FOR Geral - Treinamento</a><?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_15" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-tasks" style="font-size:50px; color:#FFF"></i><br>Modelos NP</a>
</div>
<div id="group_15" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<?php if ($lista_np['acesso_comercial']=='1') { ?><a href="np/COMERCIAL/index.php">NP - Comercial</a><br><?php } ?>
<?php if ($lista_np['acesso_compras_almoxarifado']=='1') { ?><a href="np/COMPRAS ALMOXARIFADO/index.php">NP - Compras e Almoxarifado</a><br><?php } ?>
<?php if ($lista_np['acesso_controladoria']=='1') { ?><a href="np/CONTROLADORIA/index.php">NP - Controladoria</a><br><?php } ?>
<?php if ($lista_np['acesso_dp']=='1') { ?><a href="np/DEPTO PESSOAL/index.php">NP - Departamento Pessoal</a><br><?php } ?>
<?php if ($lista_np['acesso_dp_bauru']=='1') { ?><a href="np/DP FILIAL BAURU/index.php">NP - Departamento Pessoal Bauru</a><br><?php } ?>
<?php if ($lista_np['acesso_juridico']=='1') { ?><a href="np/JURÍDICO/index.php">NP - Jurídico</a><br><?php } ?>
<?php if ($lista_np['acesso_manutencao']=='1') { ?><a href="np/MANUTENÇÃO/index.php">NP - Manutenção</a><br><?php } ?>
<?php if ($lista_np['acesso_politicas_spsp']=='1') { ?><a href="np/POLÍTICAS SPSP/index.php">NP - Políticas SPSP</a><br><?php } ?>
<?php if ($lista_np['acesso_res']=='1') { ?><a href="np/RECRUTAMENTO E SELEÇÃO/index.php">NP - Recrutamento e Seleção</a><br><?php } ?>
<?php if ($lista_np['acesso_operacional']=='1') { ?><a href="np/OPERACIONAL/index.php">NP - Operacional</a><br><?php } ?>
<?php if ($lista_np['acesso_sst']=='1') { ?><a href="np/SEGURANÇA TRABALHO/index.php">NP - SST</a><br><?php } ?>
<?php if ($lista_np['acesso_sgi']=='1') { ?><a href="np/SGI/index.php">NP - SGI</a><br><?php } ?>
<?php if ($lista_np['acesso_spbrasil']=='1') { ?><a href="np/SPBRASIL/index.php">NP - SPBrasil</a><br><?php } ?>
<?php if ($lista_np['acesso_ti']=='1') { ?><a href="np/TI/index.php">NP - TI</a><br><?php } ?>
<?php if ($lista_np['acesso_treinamento']=='1') { ?><a href="np/TREINAMENTO/index.php">NP - Treinamento</a><?php } ?>
<hr>
<?php if ($lista_np['acesso_geral_compras']=='1') { ?><a href="np/GERAL COMPRAS MANUTENÇÃO/index.php">NP Geral - Compras Manutenção</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_financeiro']=='1') { ?><a href="np/GERAL FINANCEIRO/index.php">NP Geral - Financeiro</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_frota']=='1') { ?><a href="np/GERAL FROTA/index.php">NP Geral - Frota</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_gestao']=='1') { ?><a href="np/GERAL GESTÃO CONTRATOS/index.php">NP Geral - Gestão de Contratos</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_mkt']=='1') { ?><a href="np/GERAL MARKETING/index.php">NP Geral - Marketing</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_rh']=='1') { ?><a href="np/GERAL RH/index.php">NP Geral - Recrutamento e Seleção</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_sgi']=='1') { ?><a href="np/GERAL SGI/index.php">NP Geral - SGI</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_spsp_seg']=='1') { ?><a href="np/GERAL SPSP SEGURANÇA/index.php">NP Geral - SPSP Segurança Patrimonial</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_sst']=='1') { ?><a href="np/GERAL SST/index.php">NP Geral - SST</a><br><?php } ?>
<?php if ($lista_np['acesso_geral_ti']=='1') { ?><a href="np/GERAL TI/index.php">NP Geral - TI</a><?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>

<?php if ($_SESSION['hosp']=='1') { ?>
<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_16" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-tasks" style="font-size:50px; color:#FFF"></i><br>Documentos Hospitalares</a>
</div>
<div id="group_16" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<b>FOR - Metodologia</b><br>
<?php
if ($handle = opendir('hosp/FOR/.')) {
while (false !== ($file = readdir($handle))) {
if ($file != "." && $file != "..") {
$thelist .= '<a href="hosp/FOR/'.$file.'">'.$file.'</a><br>';
}}closedir($handle);};
echo $thelist; ?>
<hr>
<b>NP e IO - Hospitalares</b><br>
<?php
if ($handle2 = opendir('hosp/NP-IO/.')) {
while (false !== ($file2 = readdir($handle2))) {
if ($file2 != "." && $file2 != "..") {
$thelist2 .= '<a href="hosp/NP-IO/'.$file2.'">'.$file2.'</a><br>';
}}closedir($handle2);};
echo $thelist2; ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
<?php } ?>

</div>

<?php } ?>

<?php if ($_SESSION['tipo']=='adm' || $_SESSION['tipo']=='scom' || $_SESSION['tipo']=='cli' || $_SESSION['tipo']=='sup') { ?>
<div class="row">

<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_12" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-square" style="font-size:50px; color:#FFF"></i><br>PartnerBook</a>
</div>
<div id="group_12" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<a href="book/book.php">Book de Colaboradores</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
</div>

<?php } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<section class="navbar navbar-default navbar-fixed-bottom swatch-black" style="min-height: 50px">
  <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <header class="text-center element-small-top element-small-bottom condensed">
          <div class="row">
            <div class="col-md-12 ">
              <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center; line-height: 1 !important; color: #FFF;"> <br>
                SPSP - Sistema de Prestação de Serviços Padronizados<br>
                Todos os direitos reservados - Marília/SP - 2016 </div>
            </div>
          </div>
        </header>
      </div>
    </div>
  </div>
</section>
<script src="../assets/js/packages.min.js"></script> 
<script src="../assets/js/theme.min.js"></script> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();

   	str_segundo = new String (s);
	if (str_segundo.length == 1)
      	s = "0" + s;

   	str_minuto = new String (m);
   	if (str_minuto.length == 1)
      	m = "0" + m;

   	str_hora = new String (h);
   	if (str_hora.length == 1)
      	h = "0" + h;

document.getElementById('txt').innerHTML=h+":"+m+":"+s;

setTimeout('time()',1000);
} 
</script>
</body>
</html>