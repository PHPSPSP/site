<?
session_start();
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
include("privado.php");

if ($_SESSION['tipo'] != "adm" && $_SESSION['tipo'] != "rh"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{	};

include("config.php");

include("../for/listas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../assets/images/SPSP-favicon.png">
<title>Grupo SPSP - Cadastro de Currículos</title>
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
          </b> &nbsp;| &nbsp;<span id="txt"></span></a></li>
      </ul>
    </nav>
    <nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
        <li><a target="_self" href="logado.php">Início</a></li>
        <li><a target="_self" href="altsenha.php">Alterar Senha</a></li>
        <li class="active"><a>Painel Administrador</a></li>
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
        <header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Vagas </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form method="POST" action="cad_vaga.php">
              <div class="row">
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Função:
                    <div class="form-group form-icon-group">                   
                      <select class="form-control" name="funcao" id="funcao" >
                        <option selected="selected" value="">Selecione...</option>
                        <?php echo $lista_atividades; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Região:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="regiao" id="regiao">
                        <option selected="selected" value=""> Selecione...</option>
                        <?php echo $lista_regiao; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">Observacao:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="observacao" size="30" id="observacao" type="text" />
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
                  <div class="col-md-12">
                    <div class="form-group form-icon-group">
                      <input type="text" id="id2" name="id2" style="display: none;" value="<?=$_SESSION['id'];?>" />
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
          <header class="text-center element-small-top element-small-bottom condensed"><div class="row">
        <div class="col-md-12 ">
            <div class="col-md-6 col-sm-6 col-xs-12"> <img src="../assets/images/SPSP-logo-bott.png" alt="SPSP - Grupo Empresarial de Serviços" style="height: 70px !important"> </div>
            <div class="col-md-6 col-sm-6 col-xs-12" style="text-align:center; line-height:1 !important"> <br>
              SPSP - Sistema de Prestação de Serviços Padronizados<br>
              Todos os direitos reservados - Marília/SP - 2016
              </div></div></div>
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