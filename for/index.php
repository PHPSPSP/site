<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("./config.php");
if(!empty($_GET['#']));
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="#">
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
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="radios-v1.0.js"></script>
</head>
<body class="normal-header">
<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="../index.php" class="navbar-brand"> <img src="../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"> </a> </div>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li class="nav-highlight"><a href="../index.php">Retornar ao site</a> </li>
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
        <header class="text-center element-normal-top element-medium-bottom not-condensed "  >

          <h1 class="super hairline bordered bordered-normal"> Sistema - FOR Online </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4  col-sm-2 col-xs-1"></div>
              <div class="col-md-4  col-sm-8 col-xs-10 text-center small-screen-left "  >
                <form method="POST" action="<?=$url;?>/login.php">
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="text" size="30" name="l" placeholder="Login">
                      <br />
                      <i class="fa fa-user"></i></div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input  class="form-control" placeholder="Senha" type="password" size="30" name="s">
                      <br />
                      <i class="fa fa-asterisk"></i></div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-primary col-md-12 col-sm-12 col-xs-12"  value="Entrar">
                  </div>
                </form>
              </div>
              <div class="col-md-4 col-sm-2 col-xs-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</article>
</div>
<section id="services" class="navbar navbar-default navbar-fixed-bottom hidden-xs swatch-black" style="min-height:50px">
  <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <header class="text-center element-small-top element-small-bottom condensed">
          <div class="row">
            <div class="col-md-12 ">
              <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important"> <br>
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

</body>
</html>