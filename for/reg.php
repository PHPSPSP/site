<?
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");
include("listas.php");
include("config.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{

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
        <li><a target="_self" href="logado.php">Início</a></li>
        <li><a target="_self" href="altsenha.php">Alterar Senha</a></li>
        <li class="active"><a>Configuração</a></li>
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
        <header class="text-center element-normal-top element-medium-bottom not-condensed "  >
          <h1 class="super hairline bordered bordered-normal">&nbsp; </h1>
          <h1 class="super hairline bordered bordered-normal"> Cadastro de Usuários </h1>
        </header>
        <div class="row">
          <div class="col-md-12">
            <form id="cad_user" name="cad_user" method="POST" action="reguser.php">
              <div class="row">
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Nome:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="n" size="50" id="n" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">E-mail:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="m" size="50" id="m" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Login:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="l" size="30" id="l" type="text" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Senha:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="s" id="s" size="20" type="password" onKeyPress="checar_caps_lock(event)" required/>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Tipo:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="t" id="t" required="" onChange="marcaCheckBoxt();" onblur="marcaCheckBoxt();">
                        <option selected="selected" value="">Selecione...</option>
                        <?php echo $lista_tipouser; ?>
                      </select>
                      <br />
                    </div>
                  </div>
                </div>
                
				<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Gestor:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="g" id="g" required="">
                        <option selected="selected" value="">Selecione...</option>
<?php
$consulta=mysql_query("SELECT * FROM usuarios where tipo='scom' or tipo='adm' order by nome ASC "); 
while ($dados = mysql_fetch_array($consulta)) {
echo("<option value='".$dados['id']."'>".$dados['nome']."</option>");}
?>
                      </select>
                      <br />
                    </div>
                  </div>
                </div>
				
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Código HK:
                    <div class="form-group form-icon-group">
                      <input class="form-control" name="hk" id="hk" size="20" type="number" required/>
                      <br />
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Região:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="r" id="r" required="">
						<option selected="selected" value="">Selecione...</option>
						<?php echo $lista_regiao; ?>
                      </select>
                      <br />
                    </div>
                  </div>
                </div>

<div class="col-md-12 tabbable">

<ul class="nav nav-tabs" data-tabs="tabs" style="alignment-adjust:central">
<li id="btn_np" class="active col-md-4 col-sm-6 col-xs-12"><a href="#diva1" data-toggle="tab"> Acesso NP </a> </li>
<li id="btn_for" class="col-md-4 col-sm-6 col-xs-12"><a href="#diva2" data-toggle="tab"> Acesso FOR </a> </li>
</ul>

<div class="tab-content">


<div class="tab-pane fade in active" id="diva1" style="background-color: white; color: black;">
<div class="element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesson_" id="acesson_comercial" name="acesson_comercial" /> Comercial<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_compras_almoxarifado" name="acesson_compras_almoxarifado" /> Compras Almoxarifado<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_controladoria" name="acesson_controladoria" /> Controladoria<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_dp" name="acesson_dp" /> DP<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_dp_bauru" name="acesson_dp_bauru" /> DP Bauru<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_politicas_spsp" name="acesson_politicas_spsp" /> Políticas SPSP<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_juridico" name="acesson_juridico" /> Jurídico
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesson_" id="acesson_manutencao" name="acesson_manutencao" /> Manutenção<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_res" name="acesson_res" /> Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_sgi" name="acesson_sgi" /> SGI<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_sst" name="acesson_sst" /> SST<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_operacional" name="acesson_operacional" /> Operacional<br>
<input type="checkbox" value="1" class="acesson_" id="acesson_spbrasil" name="acesson_spbrasil" /> SPBrasil<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_ti" name="acesson_ti" /> TI
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesson_" id="acesson_treinamento" name="acesson_treinamento" /> Treinamento<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_compras" name="acesson_geral_compras" /> Geral Compras<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_rh" name="acesson_geral_rh" /> Geral RH<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_financeiro" name="acesson_geral_financeiro" /> Geral Financeiro<br>
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_frota" name="acesson_geral_frota" /> Geral Frota<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_gestao" name="acesson_geral_gestao" /> Geral Gestão<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_mkt" name="acesson_geral_mkt" /> Geral Marketing<br />
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_spsp_seg" name="acesson_geral_spsp_seg" /> Geral SPSP Segurança Patrimonial<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_sgi" name="acesson_geral_sgi" /> Geral SGI<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_sst" name="acesson_geral_sst" /> Geral SST<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_ti" name="acesson_geral_ti" /> Geral TI
</div>

</div>
<div style="clear:both"></div>
</div>


<div class="tab-pane fade in " id="diva2" style="background-color: white; color: black;">
<div class="element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_almoxarifado" name="acesso_almoxarifado" /> Almoxarifado<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_atendimento" name="acesso_atendimento" /> Atendimento<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_comercial" name="acesso_comercial" /> Comercial<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_compras" name="acesso_compras" /> Compras<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_controladoria" name="acesso_controladoria" /> Controladoria<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_dp" name="acesso_dp" /> DP<br>
<input type="checkbox" value="1" class="acesso_" id="acesso_financeiro" name="acesso_financeiro" /> Financeiro
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_gestao" name="acesso_gestao" /> Gestão<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_juridico" name="acesso_juridico" /> Jurídico<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_manutencao" name="acesso_manutencao" /> Manutenção<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_mkt" name="acesso_mkt" /> Marketing<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_res" name="acesso_res" /> Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_sgi" name="acesso_sgi" /> SGI<br>
<input type="checkbox" value="1" class="acesso_" id="acesso_sst" name="acesso_sst" /> SST
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_tecnico" name="acesso_tecnico" /> Técnico<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_supervisao" name="acesso_supervisao" /> Supervisão<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_ti" name="acesso_ti" /> TI<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_treinamento" name="acesso_treinamento" /> Treinamento<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_almoxarifado" name="acesso_geral_almoxarifado" /> Geral Almoxarifado<br>
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_dp" name="acesso_geral_dp" /> Geral DP<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_financeiro" name="acesso_geral_financeiro" /> Geral Financeiro
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_frota" name="acesso_geral_frota" /> Geral Frota<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_res" name="acesso_geral_res" /> Geral Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_sgi" name="acesso_geral_sgi" /> Geral SGI<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_sst" name="acesso_geral_sst" /> Geral SST<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_treinamento" name="acesso_geral_treinamento" /> Geral Treinamento
</div>

</div>
<div style="clear:both"></div>
</div>

</div>

</div>



                
                <div class="col-md-12  col-sm-12 col-xs-12 text-left small-screen-center "  >
                  <br /><br />
                  
                  <div class="col-md-6">
                    <div class="form-group form-icon-group">
                      <input class="form-control" type="submit" value="Cadastrar" />
                      <br />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group form-icon-group">
                      <input class="form-control btn btn-info" type="button" value="Usuários Cadastrados" onclick="location.href='listareg.php'"/> 
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
<script src="../assets/js/theme.min.js"></script> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">

function marcaCheckBoxt(){
if(document.cad_user.t.value == 'sup'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_controladoria').checked = true;
document.getElementById('acesson_politicas_spsp').checked = true;
document.getElementById('acesson_juridico').checked = true;
document.getElementById('acesson_operacional').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
document.getElementById('acesso_supervisao').checked = true;
document.getElementById('acesso_treinamento').checked = true;
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else if (document.cad_user.t.value == 'scom'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_comercial').checked = true;  
document.getElementById('acesson_controladoria').checked = true;  
document.getElementById('acesson_politicas_spsp').checked = true;   
document.getElementById('acesson_operacional').checked = true;
document.getElementById('acesson_juridico').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
document.getElementById('acesso_comercial').checked = true;
document.getElementById('acesso_almoxarifado').checked = true;
document.getElementById('acesso_financeiro').checked = true;
document.getElementById('acesso_dp').checked = true;
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else if (document.cad_user.t.value == 'sgi'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_sgi').checked = true;  
document.getElementById('acesson_politicas_spsp').checked = true;   
document.getElementById('acesson_operacional').checked = true;
document.getElementById('acesson_sst').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
document.getElementById('acesso_sgi').checked = true;
document.getElementById('acesso_treinamento').checked = true;
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else if (document.cad_user.t.value == 'com'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_comercial').checked = true;  
document.getElementById('acesson_controladoria').checked = true;  
document.getElementById('acesson_politicas_spsp').checked = true; 
document.getElementById('acesson_operacional').checked = true;
document.getElementById('acesson_juridico').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
document.getElementById('acesso_comercial').checked = true;
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else if (document.cad_user.t.value == 'lid'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_controladoria').checked = true;  
document.getElementById('acesson_politicas_spsp').checked = true;   
document.getElementById('acesson_operacional').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
document.getElementById('acesso_treinamento').checked = true;
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
document.getElementById('acesso_geral_dp').checked = false;
}

else if(document.cad_user.t.value == 'adm'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = true;    }};
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else if(document.cad_user.t.value == 'comum'){
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
document.getElementById('acesson_politicas_spsp').checked = true;
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = true;    }};
}

else {
var x = document.getElementsByClassName("acesson_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
var x = document.getElementsByClassName("acesso_"); var i; for (i = 0; i < x.length; i++) {     if (x[i].type == "checkbox") {         x[i].checked = false;    }};
var x = document.getElementsByClassName("acesson_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
var x = document.getElementsByClassName("acesso_geral_"); var i; for (i = 0; i < x.length; i++) {    if (x[i].type == "checkbox") {        x[i].checked = false;    }};
}
};

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

function checar_caps_lock(ev) {
	var e = ev || window.event;
	codigo_tecla = e.keyCode?e.keyCode:e.which;
	tecla_shift = e.shiftKey?e.shiftKey:((codigo_tecla == 16)?true:false);
	if(((codigo_tecla >= 65 && codigo_tecla <= 90) && !tecla_shift) || ((codigo_tecla >= 97 && codigo_tecla <= 122) && tecla_shift)) {
        window.alert('ATENÇÃO! o Caps Lock está ativado!');	}
		}

function confirmExcluir(delUrl) {
  if (confirm("Deseja realmente excluir esse usuário?")) {
    document.location = delUrl;
  }
}
</script>
</body>
</html>

<? }; ?>