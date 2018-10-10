<?
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("config.php");
if(!empty($_GET['erro'])){
echo "<font color=red><b>$erro</b></font><BR>";}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<link rel='icon' type='image/png' href='../../assets/images/SPSP-favicon.png'>
<title>Grupo SPSP - Curso de Portaria</title>
<meta name='description' content='SPSP - Terceirização de Portaria, Limpeza, Vigilância Patrimonial, Divisão Tecnológica e Hospitalar com qualidade, segurança e seriedade.'/>
<meta name='keywords' content='trabalhe, terceirização, portaria, vigilância, patrimonial, limpeza, hospitalar, tecnológica, condominial, qualidade, segurança, serviço, administração, comercial, segmentos, divisão, SPSP, temporário, trabalho, empresa'/>
<meta name='copyright' content='SPSP'/>
<meta name='author' content='SPSP'/>
<meta name='email' content='spsp@spsp.com.br'/>
<meta name='Charset' content='UTF-8'/>
<meta name='Distribution' content='Global'/>
<meta name='Rating' content='General'/>
<meta name='Robots' content='INDEX,FOLLOW'/>
<meta name='Revisit-after' content='31 Days'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta content='yes' name='apple-mobile-web-app-capable'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href='../../assets/css/bootstrap.min.css'>
</head>
<body class='normal-header'>
<div id="masthead" class="navbar navbar-static-top swatch-white navbar-sticky" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="../../index.php" class="navbar-brand"> <img src="../../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"> </a> </div>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li class="nav-highlight"><a href="../../index.php">Retornar ao site</a> </li>
      </ul>
    </nav>
  </div>
</div>
<div id="content">
  <article>
    <section id="two" class="section swatch-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
              <h1 class="super hairline bordered bordered-normal"></h1>
              <h1 class="super hairline bordered bordered-normal">Inscrição - Curso de Formação de Agente de Portaria</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="text-center col-md-12 small-screen-center os-animation element-short-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
          <font size="+1">
          Selecione abaixo o formato da sua iscrição:
          </font>
          </div>
          <div class="nav-highlight text-center col-md-6 small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
          <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info" data-dismiss="modal">SOU COLABORADOR DA SPSP</button><br>
&nbsp;
          </div>
          <div class="nav-highlight text-center col-md-6 small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s"> 
            <!----> <a href="spsp-curso-portaria-externo.php">
            <button type="button" class="btn btn-danger">NÃO SOU COLABORADOR DA SPSP</button></a>
            
            <!--<br />
            <font color="#FF0000">Vagas indisponíveis no momento </font>--> 
          </div>
        </div>
      </div>
    </section>
  </article>
</div>
<section id="services" class="section swatch-black" style="min-height:50px">
  <div class="background-overlay grid-overlay-0 " style="background-color: rgba(60,60,60,1);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <header class="text-center element-small-top element-small-bottom condensed">
          <div class="row">
            <div class="col-md-12 ">
              <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
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
<style type="text/css">
.modal-restrito{z-index:30000;top:100px;}
</style>
<div class="modal fade modal-restrito" id="myModal" tabindex="30000" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscrição - Colaboradores</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?=$url;?>/login.php">
          <p> Informe seu CPF (somente números): <br />
            <br />
            <input style="background-color:#EBEBEB" type="text" size="20" name="cpf" onkeypress="formatar(this, '###.###.###.##')" maxlength="14">
            <br />
            <br />
            <input type="submit" value="Entrar">
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<script src="../../assets/js/packages.min.js"></script> 
<script src="../../assets/js/theme.min.js"></script>
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
<script>
function formatar(src, mask)
{ var i = src.value.length;
var saida = mask.substring(0,1);
var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
{	src.value += texto.substring(0,1); }}
</script>
</body>
</html>