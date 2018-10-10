<?
session_start();
header("Content-Type: text/html; charset=UTF-8",true) ;
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");

include("privado.php");
include("listas.php");

if ($_SESSION['tipo'] != "adm"){
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Este usuario nao e autorizado a cadastrar!');
		window.close();
        </SCRIPT>");}else{

$conexao = mysql_connect("mysql01.spsp1.hospedagemdesites.ws", "spsp1", "S7s7master*10*")
or die ("Erro na conexão ao banco de dados.");
$db = mysql_select_db("spsp1")
or die ("Erro ao selecionar a base de dados.");

$sql = "SELECT * FROM usuarios WHERE id = ".(int)$_GET['id'];
$resultado = mysql_query($sql)
or die ("Não foi possível realizar a consulta.");

$linha = mysql_fetch_array($resultado, MYSQL_ASSOC);

$sql2 = "SELECT * FROM acesso WHERE user = ".(int)$_GET['id'];
$resultado2 = mysql_query($sql2)
or die ("Não foi possível realizar a consulta.");

$linha2 = mysql_fetch_array($resultado2, MYSQL_ASSOC);

$sql3 = "SELECT * FROM npacesso WHERE user = ".(int)$_GET['id'];
$resultado3 = mysql_query($sql3)
or die ("Não foi possível realizar a consulta.");

$linha3 = mysql_fetch_array($resultado3, MYSQL_ASSOC);
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
      <a href="../index.php" class="navbar-brand"> <img src="../assets/images/SPSP-logo-top.png" alt="SPSP - Grupo Empresarial de Serviços"></a>
</div>

	<nav >
      <ul id="menu-one-page" class="nav navbar-nav navbar-left">
        <li><a>Olá <b><?=$_SESSION['nome'];?></b> <br>
			<span id="txt"></span></a></li>
      </ul>
    </nav>
    
	<nav class="collapse navbar-collapse main-navbar" role="navigation">
      <ul id="menu-one-page" class="nav navbar-nav navbar-right">
       <li><a target="_self" href="logado.php">Início</a></li>
        <li><a target="_self" href="altsenha.php">Alteração de Cadastro</a></li>
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
              <h1 class="super hairline bordered bordered-normal"> Alterar Cadastro </h1>
            </header>
            <div class="row">
              <div class="col-md-12">
<form action="alterar_db.php?id=<?php echo $_GET['id'] ?>" method="post" name="cad_user">
<div class="row">
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >

                  
                   
				<div class="col-md-12">Nome:
					<div class="form-group form-icon-group">
	<input class="form-control" name="nome" size="50" id="nome" type="text" value="<?php echo $linha['nome'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">E-mail:
					<div class="form-group form-icon-group">
	<input class="form-control" name="mail" size="50" id="mail" type="text" value="<?php echo $linha['mail'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Login:
					<div class="form-group form-icon-group">
	<input class="form-control" name="login" size="30" id="login" type="text" value="<?php echo $linha['login'] ?>"  required=""/>
					<br /></div>
				</div>
</div>
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Senha:
					<div class="form-group form-icon-group">
	<input class="form-control" name="s" id="s" size="20" type="password" value="<?php echo $linha['senha2'] ?>" required/>
					<br /></div>
				</div>
</div>
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">Tipo:
                
					<div class="form-group form-icon-group">
    <select class="form-control" name="t" id="t" required="" onChange="marcaCheckBoxt();">
      <option selected='selected' value='<?php echo $linha['tipo'] ?>'><?php include("listas.php"); echo $tipo_user; ?></option>
      <?php echo $lista_tipouser; ?></select>
  <br /></div>
				</div>
</div>

<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Gestor:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="gestor" id="gestor" required="">
<?php
$consultages=mysql_query("SELECT id, nome FROM usuarios where id='".$linha['gestor']."'"); 
while ($dadosges = mysql_fetch_array($consultages)) {
echo("<option selected='selected' value='".$dadosges['id']."'>".$dadosges['nome']."</option>");};
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
                      <input class="form-control" name="hk" id="hk" size="20" type="number" value="<?php echo $linha['id_hk'] ?>" required/>
                      <br />
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
                  <div class="col-md-12">Região:
                    <div class="form-group form-icon-group">
                      <select class="form-control" name="regiao" id="regiao" required="">
                        <option selected="selected" value="<?= $linha['regiao'] ?>"><?= $linha['regiao'] ?></option>
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
<input type="checkbox" value="1" class="acesson_" id="acesson_comercial" name="acesson_comercial" <?php echo $linha3['acesso_comercial']=="1"?"checked" : ""?> /> Comercial<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_compras_almoxarifado" name="acesson_compras_almoxarifado" <?php echo $linha3['acesso_compras_almoxarifado']=="1"?"checked" : ""?> /> Compras Almoxarifado<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_controladoria" name="acesson_controladoria" <?php echo $linha3['acesso_controladoria']=="1"?"checked" : ""?> /> Controladoria<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_dp" name="acesson_dp" <?php echo $linha3['acesso_dp']=="1"?"checked" : ""?> /> DP<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_dp_bauru" name="acesson_dp_bauru" <?php echo $linha3['acesso_dp_bauru']=="1"?"checked" : ""?> /> DP Bauru<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_politicas_spsp" name="acesson_politicas_spsp" <?php echo $linha3['acesso_politicas_spsp']=="1"?"checked" : ""?> /> Políticas SPSP<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_juridico" name="acesson_juridico" <?php echo $linha3['acesso_juridico']=="1"?"checked" : ""?> /> Jurídico
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesson_" id="acesson_manutencao" name="acesson_manutencao" <?php echo $linha3['acesso_manutencao']=="1"?"checked" : ""?> /> Manutenção<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_res" name="acesson_res" <?php echo $linha3['acesso_res']=="1"?"checked" : ""?> /> Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_sgi" name="acesson_sgi" <?php echo $linha3['acesso_sgi']=="1"?"checked" : ""?> /> SGI<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_sst" name="acesson_sst" <?php echo $linha3['acesso_sst']=="1"?"checked" : ""?> /> SST<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_operacional" name="acesson_operacional" <?php echo $linha3['acesso_operacional']=="1"?"checked" : ""?> /> Operacional<br>
<input type="checkbox" value="1" class="acesson_" id="acesson_spbrasil" name="acesson_spbrasil" <?php echo $linha3['acesso_spbrasil']=="1"?"checked" : ""?> /> SPBrasil<br />
<input type="checkbox" value="1" class="acesson_" id="acesson_ti" name="acesson_ti" <?php echo $linha3['acesso_ti']=="1"?"checked" : ""?> /> TI
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesson_" id="acesson_treinamento" name="acesson_treinamento" <?php echo $linha3['acesso_treinamento']=="1"?"checked" : ""?> /> Treinamento<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_compras" name="acesson_geral_compras" <?php echo $linha3['acesso_geral_compras']=="1"?"checked" : ""?> /> Geral Compras<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_rh" name="acesson_geral_rh" <?php echo $linha3['acesso_geral_rh']=="1"?"checked" : ""?> /> Geral RH<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_financeiro" name="acesson_geral_financeiro" <?php echo $linha3['acesso_geral_financeiro']=="1"?"checked" : ""?> /> Geral Financeiro<br>
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_frota" name="acesson_geral_frota" <?php echo $linha3['acesso_geral_frota']=="1"?"checked" : ""?> /> Geral Frota<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_gestao" name="acesson_geral_gestao" <?php echo $linha3['acesso_geral_gestao']=="1"?"checked" : ""?> /> Geral Gestão<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_mkt" name="acesson_geral_mkt" <?php echo $linha3['acesso_geral_mkt']=="1"?"checked" : ""?> /> Geral Marketing<br />
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_spsp_seg" name="acesson_geral_spsp_seg" <?php echo $linha3['acesso_geral_spsp_seg']=="1"?"checked" : ""?> /> Geral SPSP Segurança Patrimonial<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_sgi" name="acesson_geral_sgi" <?php echo $linha3['acesso_geral_sgi']=="1"?"checked" : ""?> /> Geral SGI<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_sst" name="acesson_geral_sst" <?php echo $linha3['acesso_geral_sst']=="1"?"checked" : ""?> /> Geral SST<br />
<input type="checkbox" value="1" class="acesson_geral_" id="acesson_geral_ti" name="acesson_geral_ti" <?php echo $linha3['acesso_geral_ti']=="1"?"checked" : ""?> /> Geral TI
</div>

</div>
<div style="clear:both"></div>
</div>


<div class="tab-pane fade in " id="diva2" style="background-color: white; color: black;">
<div class="element-no-top element-no-bottom" data-os-animation="none" data-os-animation-delay="0s">

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_almoxarifado" name="acesso_almoxarifado" <?php echo $linha2['acesso_almoxarifado']=="1"?"checked" : ""?> /> Almoxarifado<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_atendimento" name="acesso_atendimento" <?php echo $linha2['acesso_atendimento']=="1"?"checked" : ""?> /> Atendimento<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_comercial" name="acesso_comercial" <?php echo $linha2['acesso_comercial']=="1"?"checked" : ""?> /> Comercial<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_compras" name="acesso_compras" <?php echo $linha2['acesso_compras']=="1"?"checked" : ""?> /> Compras<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_controladoria" name="acesso_controladoria" <?php echo $linha2['acesso_controladoria']=="1"?"checked" : ""?> /> Controladoria<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_dp" name="acesso_dp" <?php echo $linha2['acesso_dp']=="1"?"checked" : ""?> /> DP<br>
<input type="checkbox" value="1" class="acesso_" id="acesso_financeiro" name="acesso_financeiro" <?php echo $linha2['acesso_financeiro']=="1"?"checked" : ""?> /> Financeiro
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_gestao" name="acesso_gestao" <?php echo $linha2['acesso_gestao']=="1"?"checked" : ""?> /> Gestão<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_juridico" name="acesso_juridico" <?php echo $linha2['acesso_juridico']=="1"?"checked" : ""?> /> Jurídico<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_manutencao" name="acesso_manutencao" <?php echo $linha2['acesso_manutencao']=="1"?"checked" : ""?> /> Manutenção<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_mkt" name="acesso_mkt" <?php echo $linha2['acesso_mkt']=="1"?"checked" : ""?> /> Marketing<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_res" name="acesso_res" <?php echo $linha2['acesso_res']=="1"?"checked" : ""?> /> Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_sgi" name="acesso_sgi" <?php echo $linha2['acesso_sgi']=="1"?"checked" : ""?> /> SGI<br>
<input type="checkbox" value="1" class="acesso_" id="acesso_sst" name="acesso_sst" <?php echo $linha2['acesso_sst']=="1"?"checked" : ""?> /> SST
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<input type="checkbox" value="1" class="acesso_" id="acesso_tecnico" name="acesso_tecnico" <?php echo $linha2['acesso_tecnico']=="1"?"checked" : ""?> /> Técnico<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_supervisao" name="acesso_supervisao" <?php echo $linha2['acesso_supervisao']=="1"?"checked" : ""?> /> Supervisão<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_ti" name="acesso_ti" <?php echo $linha2['acesso_ti']=="1"?"checked" : ""?> /> TI<br />
<input type="checkbox" value="1" class="acesso_" id="acesso_treinamento" name="acesso_treinamento" <?php echo $linha2['acesso_treinamento']=="1"?"checked" : ""?> /> Treinamento<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_almoxarifado" name="acesso_geral_almoxarifado" <?php echo $linha2['acesso_geral_almoxarifado']=="1"?"checked" : ""?> /> Geral Almoxarifado<br>
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_dp" name="acesso_geral_dp" <?php echo $linha2['acesso_geral_dp']=="1"?"checked" : ""?> /> Geral DP<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_financeiro" name="acesso_geral_financeiro" <?php echo $linha2['acesso_geral_financeiro']=="1"?"checked" : ""?> /> Geral Financeiro
</div>

<div class="col-md-3 col-sm-6 col-xs-12 text-left">

<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_frota" name="acesso_geral_frota" <?php echo $linha2['acesso_geral_frota']=="1"?"checked" : ""?> /> Geral Frota<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_res" name="acesso_geral_res" <?php echo $linha2['acesso_geral_res']=="1"?"checked" : ""?> /> Geral Recrutamento e Seleção<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_sgi" name="acesso_geral_sgi" <?php echo $linha2['acesso_geral_sgi']=="1"?"checked" : ""?> /> Geral SGI<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_sst" name="acesso_geral_sst" <?php echo $linha2['acesso_geral_sst']=="1"?"checked" : ""?> /> Geral SST<br />
<input type="checkbox" value="1" class="acesso_geral_" id="acesso_geral_treinamento" name="acesso_geral_treinamento" <?php echo $linha2['acesso_geral_treinamento']=="1"?"checked" : ""?> /> Geral Treinamento
</div>

</div>
<div style="clear:both"></div>
</div>

</div>

</div>


                
<div class="col-md-12  col-sm-12 col-xs-12 text-left small-screen-center "  ><br /><br />
</div>           
                
<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">
					<div class="form-group form-icon-group">
	<input class="form-control btn btn-danger" type="submit" value="Alterar" />

					<br /></div>
				</div>
</div>

<div class="col-md-6  col-sm-6 col-xs-12 text-left small-screen-center "  >
				<div class="col-md-12">
					<div class="form-group form-icon-group">
    <input class="form-control btn btn-info" type="button" value="Voltar" onclick="location.href='listareg.php'"/> 

					<br /></div>
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
</script>
</body>
</html>

<?  };  ?>