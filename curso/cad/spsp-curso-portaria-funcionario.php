<?
/*ini_set( 'display_errors', TRUE );
error_reporting( E_ALL | E_STRICT );*/
include("privado.php");
header('Content-type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
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
              <h1 class="super hairline bordered bordered-normal">Ficha de Inscrição<br />
				Curso de Formação de Agente de Portaria</h1>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="text-center col-md-12 small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
          
         Preencha no formulário para se cadastrar ao Curso de Formação de Agente de Portaria os dados que faltam e aguarde que em breve você será procurado pela SPSP para confirmar a data do curso.
         </div>
         
         
<form enctype="multipart/form-data" action="envia.php" method="post" name="form1" id="form1" onsubmit="return validar(this);">

<div class="text-center col-md-12 small-screen-center os-animation element-short-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<strong>Dados pessoais:</strong>
</div>
<div class="text-left col-md-6 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="text-center col-md-12 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
       
<div class="form-group form-icon-group">
<select name="candidato" id="candidato" readonly="readonly" class='form-control' required>

<?php
include('config.php');
$consulta=mysql_query("SELECT V.CODVIGIL, V.NOMEVIGIL, V.CGC, V.TELEFONE, C.NOMECLI, T.DESCRICAO SUPERVISOR FROM sarvigil V, sarclien C, sartab T WHERE C.CODCLI = V.CODCLI AND (T.CODTAB LIKE CONCAT('130%', V.AREA) OR T.CODTAB LIKE CONCAT('1300%', V.AREA) OR T.CODTAB LIKE CONCAT('13000%', V.AREA)) AND NOMEVIGIL = '".str_replace('\'', '', $_SESSION['nomecand'])."' AND V.DTDEMISSAO IS NULL GROUP BY V.CODVIGIL ORDER BY V.NOMEVIGIL ASC"); 
$works = false;
while ($dados = mysql_fetch_array($consulta)) {
$works = true;
$candidato = $dados['NOMEVIGIL'];
$idvigil = $dados['CODVIGIL'];
$cgc = $dados['CGC'];
$telefone = $dados['TELEFONE'];
$nomecli = $dados['NOMECLI'];
$supervisor = $dados['SUPERVISOR'];
echo("<option readonly='readonly' value='".$candidato."' data-re='" . $idvigil . "' data-cgc='" . $cgc . "' data-telefone='" . $telefone . "' data-cliente='" . $nomecli . "' data-supervisor='" . $supervisor . "'>".$candidato."</option>");}
?></select>
</div>
<?php
/*if ($works) {
	echo "<script type='text/javascript'>$(function() { setTimeout(function() { $('#candidato').val($('#candidato').find('option').first().val()).trigger('change'); }, 1500); });</script>";
}*/
?>
</div>
<div class="text-center col-md-6 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" readonly id="re" name="re" placeholder="RE" type="text" required/>
		</div>
        </div>
<div class="text-center col-md-6 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" id="email" name="email" placeholder="E-mail" type="text" required/>
		</div>
        </div>
<div class="text-center col-md-6 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" id="fone" name="fone" placeholder="Telefone" type="text" required/>
		</div>
        </div>
<div class="text-center col-md-6 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" id="cel" name="cel" placeholder="Celular" type="text" required/>
		</div>
        </div>
<div class="text-center col-md-12 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" readonly id="supervisor" name="supervisor" placeholder="Supervisor" type="text" required/>
		</div>
        </div>
<div class="text-center col-md-12 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<div class="form-group form-icon-group">
          <input class="form-control" readonly id="cliente" name="cliente" placeholder="Posto de Trabalho" type="text" required/>
		</div>
        </div>
</div>

<div class="text-left col-md-6 small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">

<div class="text-left col-md-12 small-screen-center os-animation element-short-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
Selecione abaixo como  você se informou sobre o "Curso de Formação de Agente de Portaria" (selecione mais de uma opção se quiser).</div>
<div class="text-left col-md-12 small-screen-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">

        <div class="form-group form-icon-group"><i class="fa fa-bullhorn"></i>
          <input class="form-control" placeholder="Como chegou até aqui?" readonly>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="btn-group btn-knowledge col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Facebook" value="Facebook" id="Facebook">
                  Facebook</label>
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Google" value="Google" id="Google" />
                  Pesquisa Online</label>
</div>
                  <div class="btn-group btn-knowledge col-md-12 col-sm-12 col-xs-12" data-toggle="buttons">
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Cartazes" value="Cartazes" id="Cartazes">
                  Cartazes</label>
                <label class="btn btn-primary col-md-6 col-sm-6 col-xs-6">
                  <input type="checkbox" name="Indicacao" value="Indicação" id="Indicacao" >
                  Indicação de amigo/supervisor</label>
              </div>

            </div>
          </div>
        </div>

</div>

<div class="text-center col-md-12 small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInUp" data-os-animation-delay="0.0s">
<input type="submit" name="botao" class="btn btn-info" id="submit" value="Enviar" />
</div></form>

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

<script src="../../assets/js/packages.min.js"></script> 
<script src="../../assets/js/theme.min.js"></script>
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
<script>
$(function() {
		
    $( document ).ready(function() {

//$('#candidato').on("change", function() {
			
			var v = $('#candidato').find(':selected');
			$('#re').val(v.data('re'));
			$('#cliente').val(v.data('cliente'));
			$('#supervisor').val(v.data('supervisor'));	
			$('#fone').val(v.data('telefone'));
		});	
	});

function validar(form1){

	if (document.getElementById('Facebook').checked == false &&
	document.getElementById('Google').checked == false &&
	document.getElementById('Cartazes').checked == false &&
	document.getElementById('Indicação').checked == false )
	{alert ('Por favor informe COMO CONHECEU O SITE DA SPSP.');return false;}
		
    return true;}
	
</script>
</body>
</html>