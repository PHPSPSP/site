<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );

date_default_timezone_set("America/Sao_Paulo");
include("privado.php");
include("../for/listas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../assets/images/SPSP-favicon.png">
<title>Grupo SPSP - HOSP Online</title>
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
        <?php if ($_SESSION['tipo']=='1') { ?><li><a target="_self" href="reg.php">Configuração</a></li><?php } ?>
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
              <h1 class="super hairline bordered bordered-normal"> Selecione o Sistema </h1>
            </header>
            <div class="row">
              <div class="col-md-12">
 <div class="row">              

<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='10' || $_SESSION['tipo']=='5') { ?>
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
<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='5' || $_SESSION['tipo']=='10' || $_SESSION['tipo']=='2') { ?>
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
<?php } ?>

<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='10' || $_SESSION['tipo']=='2') { ?>
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
<?php } ?>

<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='10' || $_SESSION['tipo']=='9') { ?>
<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_19" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-archive" style="font-size:50px; color:#FFF"></i><br>Lavanderia</a>
</div>
<div id="group_19" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<!-- <a href="lavanderia/cad_user_laundry.php">Cadastro de Usuários</a><br> -->
<a href="lavanderia/cad_enferm_laundry.php">Cadastro de Enfermeiros</a><br>
<a href="lavanderia/cad_local_laundry.php">Cadastro de Locais</a><br>
<a href="lavanderia/cad_enxoval_laundry.php">Cadastro de Enxoval</a><br>
<a href="lavanderia/entrega_enxoval_laundry.php">Entrega de Enxoval</a><br>
<a href="lavanderia/entrega_extra_laundry.php">Entrega Extra</a><br>
<a href="lavanderia/relatorio_laundry.php">Relatório de Lavanderia</a>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
<?php } ?>

<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='11' || $_SESSION['tipo']=='12' || $_SESSION['tipo']=='13') { ?>
<div class="col-md-4  col-sm-6 col-xs-6 text-center small-screen-center "  >
<div class="btn-group" role="group">                
<div class="panel panel-default">
<div class="panel-heading">
<a href="#group_1" class="accordion-toggle collapsed" data-toggle="collapse"><i class="fa fa-edit" style="font-size:50px; color:#FFF"></i><br><? echo "Serviço PRAC"; ?></a>
</div>
<div id="group_1" class="panel-collapse collapse ">
<div class="panel-body">
<div class=" element-no-top element-no-bottom text-left" data-="none" >
<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='11') { ?>
<hr color="#FFFFFF" style="margin:0"><a href="portaria/portariaentrada.php">Acesso à Portaria Principal</a><?php } ?>
<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='13' || $_SESSION['tipo']=='12') { ?>
<br><hr color="#FFFFFF" style="margin:0"><a href="portaria/concierge.php">Serviço de Acompanhamento ao Quarto</a><?php } ?>
<?php if ($_SESSION['tipo']=='1' || $_SESSION['tipo']=='2' || $_SESSION['tipo']=='3' || $_SESSION['tipo']=='12' || $_SESSION['tipo']=='13') { ?>
<br><hr color="#FFFFFF" style="margin:0"><a href="portaria/crachasaida.php">Controle de Saida de Cracha</a><?php } ?>
</div>
</div>
</div>
</div>
</div>
<br>
</div>
<?php } ?>

</div>
                
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
                Todos os direitos reservados - Marília/SP - <?php echo date('Y'); ?> </div>
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